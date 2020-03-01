<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Helpers\AccountHelper;
use App\Models\Contact\Contact;
use App\Models\Account\Activity;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Services\Account\Activity\Activity\CreateActivity;
use App\Services\Account\Activity\Activity\UpdateActivity;
use App\Services\Account\Activity\Activity\DestroyActivity;
use App\Http\Resources\Activity\Activity as ActivityResource;

/**
 * @OA\Tag(
 *     name="Activities",
 *     description="The Activity object represents activities made with one or more contacts.<br/>Use it to keep track of what you've done. An activity can't be orphan - it needs to be linked to at least one contact.<br/>When retrieving an activity, we always also return some basic information about the related contact(s).",
 * )
 */
class ApiActivitiesController extends ApiController
{
    /**
     * Get the list of activities.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\JsonResponse
     *
     * @OA\Get(
     *      path="/activities",
     *      operationId="activities.index",
     *      tags={"Activities"},
     *      summary="Get the activities",
     *      description="List all the activities in your account",
     *      @OA\Parameter(
     *          name="limit",
     *          description="Indicates the page size.",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="page",
     *          description="Indicates the page to return.",
     *          required=false,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation",
     *          @OA\Schema(
     *              type="array",
     *          )
     *      ),
     *      @OA\Response(response=400, description="Bad request"),
     *      security={
     *           {"api_key_security_example": {}}
     *      }
     *  )
     */
    public function index(Request $request)
    {
        try {
            $activities = auth()->user()->account->activities()
                ->orderBy($this->sort, $this->sortDirection)
                ->paginate($this->getLimitPerPage());
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return ActivityResource::collection($activities)->additional(['meta' => [
            'statistics' => AccountHelper::getYearlyActivitiesStatistics(auth()->user()->account),
        ]]);
    }

    /**
     * Get the detail of a given activity.
     *
     * @param Request $request
     *
     * @return ActivityResource|\Illuminate\Http\JsonResponse
     */
    public function show(Request $request, $activityId)
    {
        try {
            $activity = Activity::where('account_id', auth()->user()->account_id)
                ->findOrFail($activityId);
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        return new ActivityResource($activity);
    }

    /**
     * Store the activity.
     *
     * @param Request $request
     *
     * @return ActivityResource|\Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $activity = app(CreateActivity::class)->execute(
                $request->except(['account_id'])
                    +
                    [
                        'account_id' => auth()->user()->account->id,
                    ]
            );
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        } catch (ValidationException $e) {
            return $this->respondValidatorFailed($e->validator);
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return new ActivityResource($activity);
    }

    /**
     * Update the activity.
     *
     * @param Request $request
     * @param int $activityId
     *
     * @return ActivityResource|\Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $activityId)
    {
        try {
            $activity = app(UpdateActivity::class)->execute(
                $request->except(['account_id', 'activity_id'])
                    +
                    [
                        'account_id' => auth()->user()->account->id,
                        'activity_id' => $activityId,
                    ]
            );
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        } catch (ValidationException $e) {
            return $this->respondValidatorFailed($e->validator);
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return new ActivityResource($activity);
    }

    /**
     * Delete an activity.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $activityId)
    {
        try {
            app(DestroyActivity::class)->execute([
                'account_id' => auth()->user()->account_id,
                'activity_id' => $activityId,
            ]);
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        } catch (ValidationException $e) {
            return $this->respondValidatorFailed($e->validator);
        }

        return $this->respondObjectDeleted($activityId);
    }

    /**
     * Get the list of activities for the given contact.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\JsonResponse
     */
    public function activities(Request $request, $contactId)
    {
        try {
            $contact = Contact::where('account_id', auth()->user()->account_id)
                ->findOrFail($contactId);
        } catch (ModelNotFoundException $e) {
            return $this->respondNotFound();
        }

        try {
            $activities = $contact->activities()
                ->orderBy($this->sort, $this->sortDirection)
                ->paginate($this->getLimitPerPage());
        } catch (QueryException $e) {
            return $this->respondInvalidQuery();
        }

        return ActivityResource::collection($activities)->additional(['meta' => [
            'statistics' => AccountHelper::getYearlyActivitiesStatistics(auth()->user()->account),
        ]]);
    }
}

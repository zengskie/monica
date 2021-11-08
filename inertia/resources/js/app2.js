require('./bootstrap');

// Import modules...
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const langs = require('./langs').default;

langs.loadLanguage(document.querySelector('html').getAttribute('lang'), true)
  .then((locale) => {

    createInertiaApp({
      resolve: name => require(`./Pages/${name}`).default,
      setup({ el, App, props, plugin }) {
        const app = createApp({
          locale,
          render: () =>
            h(App, _.assign(props, {
              initialPage: JSON.parse(el.dataset.page),
              locale: locale.locale,
            })),
        });

        app.mixin({ methods: _.assign({
          route,
          loadLanguage: function(locale, set) {
            return langs.loadLanguage(locale, set);
          }
        }, require('./methods').default) })
          .use(plugin)
          .use(langs.i18n)
          .mount(el);

        InertiaProgress.init({ color: '#4B5563' });
      },
    });

  });

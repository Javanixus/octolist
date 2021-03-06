// import deb
import Vue from 'vue';
import VueLazyload from 'vue-lazyload';
import VModal from 'vue-js-modal';
import VueProgressiveImage from 'vue-progressive-image';
import VeeValidate from 'vee-validate';

// import page
import App from './App.vue';
import router from './router';
import store from './store/index';
import '../sass/app.scss';
// exec

Vue.config.devtools = true;
Vue.use(VeeValidate, { fieldsBagName: 'formFields' });
Vue.use(VueProgressiveImage, {
  delay: 3000
});
Vue.use(VModal);
/* space needed between this line */
Vue.config.productionTip = false;
Vue.use(VueLazyload, {
  lazyComponent: true,
  preLoad: 20,
  attempt: 1,
  observer: true,
});
//

//
/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  template: '<App/>',
  components: { App },
});


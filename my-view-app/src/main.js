import { createApp } from 'vue';
import App from './App.vue';

const app = createApp(App);

app.component('my-view', App);

app.mount('#app');

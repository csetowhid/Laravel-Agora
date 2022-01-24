require('./bootstrap');

import { createApp } from 'vue';
const app = createApp({});
import IndexComponent from './components/AgoraChat.vue';

createApp({
    components: {
        IndexComponent,
    }
}).mount('#app');
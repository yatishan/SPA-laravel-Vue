import { createApp } from 'vue';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import ProductComponent from './components/ProductComponent.vue';
import { Bootstrap5Pagination } from 'laravel-vue-pagination';

app.component('example-component', ExampleComponent);
app.component('product-component',ProductComponent);
app.component('Pagination', Bootstrap5Pagination);




app.mount('#app');

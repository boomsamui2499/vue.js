require('./bootstrap');

import { createApp } from 'vue';
import App from "../component/App.vue";
import Mainpage from "../component/Mainpage.vue";
import Product_manage from "../component/Product_manage.vue";
import Product_manage_create from "../component/Product_manage_create.vue";
import Product_manage_edit from "../component/Product_manage_edit.vue";
import Category_manage from "../component/Category_manage.vue";
import axios from 'axios';

createApp(App).mount("#app");
createApp(Category_manage).mount("#category_manage");
createApp(Mainpage).mount("#mainpage");
createApp(Product_manage).mount("#product_manage");
createApp(Product_manage_create).mount("#product_manage_create");
createApp(Product_manage_edit).mount("#product_manage_edit");

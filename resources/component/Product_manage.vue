<template>
    <div class="sidenav">
        <a href="#">สินค้า</a>
        <a href="/category_manage">หมวดหมู่</a>
    </div>

    <div class="table-top">
        <a href="/product_manage_create" class="btn btn-primary" style="margin: 5px 0px 15px 0px; float: right;">+ เพิ่มใหม่</a>
        <table class="table-products">
            <tr>
                <th>#</th>
                <th>รูป</th>
                <th>ชื้อสินค้า</th>
                <th>ราคา</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
           <tr v-for="(product, index) in products" :key="product.product_id">
               <td>{{product.product_id}}</td>
               <td></td>
               <td>{{product.product_name}}</td>
               <td>{{product.product_price}}</td>
               <td><a :href="'/product_manage_edit/' + product.product_id" class="btn btn-primary">แก้ไข</a></td>
               <td><a href="javascript:;" class="btn btn-danger" v-on:click="deleteProduct(product.product_id, index)">ลบ</a></td>
           </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "Product_manage",
    mounted() {
        this.getProductData();
    },
    methods: {
        getProductData() {
            axios.get('/product').then(responce=>{
                this.products = responce.data.data;
            })
        },
        deleteProduct(id, index) {
            axios.delete('/product/' + id).then(responce=> {
                this.products.splice(index, 1);
            })
        }
    },
    data() {
        return {
            products:[],
            product:{
                catagory_id:0,
                product_id:0,
                product_key:'',
                product_name:'',
                product_price:0
            }
        }
    }
}
</script>

<style>
.table-top {
    float:left;
    padding: 0px 12px;
    text-align:center;
    width: 80%;
}
.table-products {
    width: 100%;
}
</style>
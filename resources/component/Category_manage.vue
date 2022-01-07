<template>
    <div class="sidenav">
        <a href="/product_manage">สินค้า</a>
        <a href="/category_manage">หมวดหมู่</a>
    </div>

    <div class="table-top">
        <a href="/product_manage_create" class="btn btn-primary" style="margin: 5px 0px 15px 0px; float: right;">+ เพิ่มใหม่</a>
        <table class="table-products">
            <tr>
                <th>#</th>
                <th>ชื้อ</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>
           <tr v-for="(category, index) in categorys" :key="category.catagory_id">
               <td>{{category.catagory_id}}</td>
               <td>{{category.catagory_name}}</td>
               <td><a :href="'/product_manage_edit/' + category.catagory_id" class="btn btn-primary">แก้ไข</a></td>
               <td><a href="javascript:;" class="btn btn-danger" v-on:click="deleteCategory(category.catagory_id, index)">ลบ</a></td>
           </tr>
        </table>
    </div>
</template>

<script>
export default {
    name: "Category_manage",
    mounted() {
        this.getCategoryData();
    },
    methods: {
        getCategoryData() {
            axios.get('/category').then(responce=>{
                console.log(responce.data.data);
                this.categorys = responce.data.data;
            })
        },
        deleteCategory(id, index) {
            axios.delete('/category/' + id).then(responce=> {
                this.categorys.splice(index, 1);
            })
        }
    },
    data() {
        return {
            categorys:[],
            category:{
                catagory_id:0,
                catagory_name:''
            },
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
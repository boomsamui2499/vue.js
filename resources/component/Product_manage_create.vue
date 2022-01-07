<template>
    <div class="sidenav">
        <a href="/product_manage">สินค้า</a>
        <a href="/category_manage">หมวดหมู่</a>
    </div>

    <div class="container">
        <form action="/product_manage">
            <div class="create-form">
                <label>รูปภาพ :</label><br>
                <input type="file" class="form-control-file"><br>
                <label>ชื่อสินค้า :</label>
                <input type="text" class="form-control" v-model="product_name">
                <label>ประเภท :</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">สินค้านับสต็อก</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">บริการ</label>
                </div>
                <br><label>ราคา :</label>
                <input type="text" class="form-control" v-model="product_price">
                <label>ต้นทุน :</label>
                <input type="text" class="form-control">
                <label>บาร์โค้ด :</label>
                <input type="text" class="form-control" v-model="product_key">
                <label>หมวดหมู่ :</label><br>
                <input type="text" class="form-control" v-model="catagory_id">
                <select v-model="cataget">
                    <option v-for="catagory in catagorys" :key="catagory.catagory_id" v-bind:value="catagory.catagory_id">{{catagory.catagory_name}}</option>
                </select>
                <br>
                <button class="btn btn-success" style="text-align:center;" v-on:click="addProduct()">บันทึก</button>
            </div>
        </form>

    </div>

</template>

<script>
export default {
    name: "Product_manage_create",
    mounted() {
        this.getCatagoryData();
    },
    methods: {
        getCatagoryData() {
            axios.get('/category').then(responce=>{
                console.log(responce);
                this.catagorys = responce.data.data;
            })
        },
        addProduct() {
            axios.post('/product/add', {
                product_name: this.product_name,
                product_price: this.product_price,
                product_key: this.product_key,
                catagory_id: this.cataget
            });
            // console.log(this.product_name);
            // console.log(this.product_price);
            // console.log(this.product_key);
            // console.log(this.cataget);
            // console.log(this.catagorys);
            // console.log(this.cataget);
        }
    },
    data() {
        return{
            catagorys:[],
            catagory:{
                catagory_id:0,
                catagory_name:''
            },
            product_name:'',
            product_price:0,
            product_key:'',
            catagory_id:'',
            cataget:''
        }
    },
}
</script>

<style>
.create-form {
    float: left;
    padding: 0px 12px;
}
</style>
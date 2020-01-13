<template>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Website Category Manage Here</div>
                <div class="panel-body">
                    <div v-if="success !=''" class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" @click="setNull()" data-dismiss="alert">&times;</button>
                        {{success}}
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="categoryname">Category Name:</label>
                                    <input type="text" v-on:keyup="UniqueCheck()" v-model="CategoryDetails.CategoryName" class="form-control" id="categoryname">
                                </div>
                                <div class="form-group">
                                    <label for="categoryurl">Category Url:</label>
                                    <input type="text" v-model="CategoryDetails.CategoryUrl" class="form-control" id="categoryurl">
                                </div>
                                <div class="form-group">
                                    <label for="browsertitle">Browser Title:</label>
                                    <input type="text" v-model="CategoryDetails.CategoryBrowserTitle" class="form-control" id="browsertitle">
                                </div>
                                <div class="form-group">
                                    <label for="seokeyword">Seo Keyword:</label>
                                    <input type="text" v-model="CategoryDetails.CategorySeoKeyword" class="form-control" id="seokeyword">
                                </div>
                                <div class="form-group">
                                    <label for="seodescription">Seo Description:</label>
                                    <textarea type="text" v-model="CategoryDetails.CategorySeoDescription" class="form-control" id="seodescription"></textarea>
                                </div>
                                <button v-if="categoryInsert" @click="CategorySave"  class="btn btn-success">Save</button>
                                <button v-if="categoryUpdate" @click="CategoryUpdate(CategoryDetails)"  class="btn btn-success">Update</button>
                                <button v-if="closeButton" @click="Close(CategoryDetails)"  class="btn btn-success">Close</button>
                        </div>

                        <div class="col-sm-6">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="category in CategoyList">
                                    <td>{{category.CategoryName}}</td>
                                    <td>
                                        <a class="btn btn-info" @click="CategoryView(category)">View</a>
                                        <a class="btn btn-primary" @click="CategoryEdit(category)">Edit</a>
                                        <a class="btn btn-danger"  @click="CategoryDelete(category)">Delete</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                Category:{},
                categoryInsert:true,
                categoryUpdate:false,
                closeButton:false,
                success: '',
                CategoyList:[],
                CategoryDetails:{CategoryName:'',CategoryUrl:'',CategorySeoKeyword:'',CategorySeoDescription:'',CategoryBrowserTitle:''}
            }
        },
        created: function () {
            this.init();
        },
        methods:{
            init(){
                axios.get('/getall-category').then(response=>{this.CategoyList=response.data});
            },
            CategoryView(row){
                this.closeButton = true;
                this.categoryInsert =false;
                this.categoryUpdate = false;
                this.CategoryDetails = row;
            },
            Close(){
                this.closeButton = false;
                this.categoryInsert =true;
                this.CategoryDetails = {CategoryName:'',CategoryUrl:'',CategorySeoKeyword:'',CategorySeoDescription:'',CategoryBrowserTitle:''} ;
            },
            setNull(){
                this.success = '';
            },
            UniqueCheck(){
                alert('hello world');
            },
            CategorySave(){
                if((this.CategoryDetails.CategoryName == '') || (this.CategoryDetails.CategoryUrl == '') || (this.CategoryDetails.CategorySeoKeyword == '') || (this.CategoryDetails.CategorySeoDescription == '') || (this.CategoryDetails.CategoryBrowserTitle == '') ){
                    alertify.alert('Blog Category', 'Please Fill Out All Field');
                }else{
                    axios.post('/categorysave',this.CategoryDetails).then(response=>{
                        this.success = response.data.success;
                        this.init();
                        this.CategoryDetails = {CategoryName:'',CategoryUrl:'',CategorySeoKeyword:'',CategorySeoDescription:'',CategoryBrowserTitle:''} ;
                    });
                }
            },
            CategoryEdit(row){
                this.closeButton = false;
                this.categoryInsert = false;
                this.categoryUpdate = true;
                this.CategoryDetails = row;
            },
            CategoryUpdate(data){
                if(!confirm('Are you sure')) return;
                axios.post('update-category',data).then(response=>{
                    this.success = response.data.success;
                    this.CategoryDetails = {CategoryName:'',CategoryUrl:'',CategorySeoKeyword:'',CategorySeoDescription:'',CategoryBrowserTitle:''};
                    this.categoryInsert = true;
                    this.categoryUpdate = false;
                });
            },
            CategoryDelete(data){
                if(!confirm('Are you sure delete this category')) return;
                axios.post('delete-category',data).then(response=>{this.success = response.data.success;this.init();});
                alertify.success('Category Delete Successfully')
            }
        }
    }
</script>

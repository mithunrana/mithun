<template>
    <div class="container">
        <div class="modal fade" id="imagemodal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><a href="#"  @click="imageGallery" >Gallery</a> | <a href="#"  @click="uploadNew"  >New Upload</a></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mywindow">
                                <div class="panel panel-default">
                                    <div v-if="UploadNew" class="panel-body">
                                        <div class="card-body">
                                            <div v-if="success != ''" class="alert alert-success" role="alert">
                                                {{success}}
                                            </div>
                                            <form @submit="formSubmit" enctype="multipart/form-data">
                                                <strong>Name:</strong>
                                                <input type="text" class="form-control" v-model="name">
                                                <strong>Image:</strong>
                                                <input type="file" class="form-control" v-on:change="onImageChange">
                                                <button  class="btn btn-success">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                        <div v-if="ImageGallery" class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div style="max-height: 600px;overflow: scroll;overflow-x: hidden;">
                                                        <div v-for="perimage in imageslist" style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img :imgid="perimage.id" class="img-thumbnail" @click="clickView(perimage)" style="max-width: 100%;height: 140px;" :src="'/'+perimage.imageurl">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'/Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'/Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'/Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'/Admin/img/b1.jpg'">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                        <p style="font-size: 19px;">Attachment Details: </p>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-10 col-xs-12">
                                                            <img class="img-thumbnail" id="previousimage" style="max-width: 100%;" :src="'/'+imageData.imageurl">
                                                        </div>
                                                        <form action="">
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="imagelocation">Image Location:</label>
                                                                <input type="text" v-model="imageData.imageurl" class="form-control" id="imagelocation">
                                                            </div>
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="getImageAltText">Image Alt:</label>
                                                                <input type="text"  class="form-control" id="getImageAltText">
                                                            </div>
                                                            <input type="hidden" :value="imageData.id" id="getimageId">
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="getImageTitleText">Image Title:</label>
                                                                <input type="text"  class="form-control" id="getImageTitleText">
                                                            </div>
                                                            <button type="button" class="btn btn-info" id="selectimagedata">Image Data</button>
                                                            <button type="button" class="btn btn-info" id="iconselect">Image Icon</button>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                UploadNew: false,
                ImageGallery: true,
                name: '',
                image: '',
                success: '',
                imageslist: [],
                imageData:{imageurl:null,id:null}
            }
        },
        created: function () {
            this.init();
        },
        methods:{
            init(){
                axios.get('/getallimage').then(response=>{this.imageslist=response.data});
            },
            uploadNew(){
                this.ImageGallery = false;
                this.UploadNew = true;
            },
            imageGallery(){
                this.ImageGallery = true;
                this.UploadNew = false;
            },
            onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            clickView(row){
              this.imageData = row;
              //alert(this.imageData.imageurl);
            },
            formSubmit(e) {
               e.preventDefault();
                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                }

                let formData = new FormData();
                formData.append('image', this.image);

                axios.post('/formSubmit', formData, config).then(function (response) {currentObj.success = response.data.success;})
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                this.init();
                this.UploadNew = false;
                this.ImageGallery = true;
            }
        }

    }
</script>

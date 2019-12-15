<template>
    <div class="container">
        <div class="modal fade" id="imagemodal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><a href="#"  @click="imageGallery" >Gallery</a> | <a href="#"  @click="uploadnNew"  >New Upload</a></h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="mywindow">
                                <div class="panel panel-default">
                                    <div v-if="UploadNew" class="panel-body">
                                            <strong>Name:</strong>
                                            <input type="text" class="form-control" >
                                            <strong>File:</strong>
                                            <input id="upload-file" type="file" multiple class="form-control" @change="fieldChange">
                                            <div class="form-group">
                                                <button class="btn btn-primary" @click="uploadFile">Submit</button>
                                            </div>
                                    </div>
                                        <div v-if="ImageGallery" class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div style="max-height: 600px;overflow: scroll;overflow-x: hidden;">
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-3 col-xs-6">
                                                            <img class="img-thumbnail" style="max-width: 100%;height: 140px;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <p style="font-size: 19px;">Attachment Details: </p>
                                                        <div style="padding-right: 5px;padding-left: 5px;" class="col-sm-10 col-xs-12">
                                                            <img class="img-thumbnail" style="max-width: 100%;" :src="'Admin/img/b1.jpg'">
                                                        </div>
                                                        <form action="">
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="imagelocation">Email address:</label>
                                                                <input type="text" class="form-control" id="imagelocation">
                                                            </div>
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="ImageAltText">Password:</label>
                                                                <input type="text" class="form-control" id="ImageAltText">
                                                            </div>
                                                            <div style="margin-bottom:2px;" class="form-group">
                                                                <label for="ImageTitleText">Password:</label>
                                                                <input type="text" class="form-control" id="ImageTitleText">
                                                            </div>
                                                            <button type="button" class="btn btn-default">Select</button>
                                                        </form>
                                                    </div>
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
                attachments:[],
                form: new FormData
            }
        },
        methods:{
            uploadnNew(){
                this.ImageGallery = false;
                this.UploadNew = true;
            },
            imageGallery(){
                this.ImageGallery = true;
                this.UploadNew = false;
            },
            fieldChange(e){
                let selectedFiles=e.target.files;
                if(!selectedFiles.length){
                    return false;
                }
                for(let i=0;i<selectedFiles.length;i++){
                    this.attachments.push(selectedFiles[i]);
                }
                console.log(this.attachments);
            },
            uploadFile(){

                for(let i=0; i<this.attachments.length;i++){
                    this.form.append('pics[]',this.attachments[i]);
                }
                const config = { headers: { 'Content-Type': 'multipart/form-data' } };
                document.getElementById('upload-file').value=[];
                axios.post('/upload',this.form,config).then(response=>{
                    //success
                    console.log(response);
                })
                    .catch(response=>{
                        //error
                    });
            }
        }

    }
</script>

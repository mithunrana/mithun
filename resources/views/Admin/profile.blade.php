@include('Admin.inc.header source')
<div class="wrapper">
@include('Admin.inc.adminHeader')
<!-- Left side column. contains the logo and sidebar -->
@include('Admin.inc.adminSideBar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section id="app" class="content">

            <!-- Modal -->
            <image-component></image-component>
            <!-- Modal -->


            <!-- Main row -->
            <div class="row">
                <form method="POST" action="{{url('profile-update')}}">
                @csrf
                <input type="hidden" class="form-control" value="" id="image1" name="image1">
                <input type="hidden" class="form-control" value="" id="image2" name="image2">
                <input type="hidden" class="form-control" value="" id="setImageAltText" name="imageAltText">
                <input type="hidden" class="form-control" value="" id="setImageTitleText" name="imageTitleText">

                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <img style="width: 100%;" id="firstimage" src="images/img_lights.jpg" >
                        <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                    </div>
                    <div class="col-sm-8">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" value="" name="Name" id="Name">
                            </div>
                            <div class="form-group">
                                <label for="email1">Email One:</label>
                                <input type="text" class="form-control" value="" name="Email1" id="email1">
                            </div>
                            <div class="form-group">
                                <label for="email2">Email Two:</label>
                                <input type="text" class="form-control" value="" name="Email2" id="email2">
                            </div>
                    </div>
                </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="shortbrief">Short Brief:</label>
                                <textarea type="text" rows="6" class="form-control" name="ShortBrief" id="shortbrief"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="phone1">Phone 1:</label>
                                    <input type="text" class="form-control" name="Phone1" id="phone1">
                                </div>
                                <div class="form-group">
                                    <label for="phone2">Phone 2:</label>
                                    <input type="text" class="form-control" name="Phone2" id="phone2">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea type="text" rows="2" class="form-control" name="Address" id="address"></textarea>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <img style="width: 100%;" id="Previewimage2" src="images/img_lights.jpg"/>
                            <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                            <label for="name">Discover Link:</label>
                            <input type="text" class="form-control" name="Discover_link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Resume Download Link:</label>
                            <input type="text" class="form-control" name="Download_link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Facebook Link:</label>
                            <input type="text" class="form-control" name="Facebook_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Youtube Link:</label>
                            <input type="text" class="form-control" name="Youtube_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Twitter Link:</label>
                            <input type="text" class="form-control" name="Twitter_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Linked in Link:</label>
                            <input type="text" class="form-control" name="Linkedin_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Fiverr Link:</label>
                            <input type="text" class="form-control" name="Fiveer_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Upwork Link:</label>
                            <input type="text" class="form-control" name="Upwork_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Instagram Link:</label>
                            <input type="text" class="form-control" name="Instagram_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Pinterest Link:</label>
                            <input type="text" class="form-control" name="Pinterest_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Behance Link:</label>
                            <input type="text" class="form-control" name="Behance_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Dribble Link:</label>
                            <input type="text" class="form-control" name="Dribble_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Vimeo Link:</label>
                            <input type="text" class="form-control" name="Vimeo_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Github Link:</label>
                            <input type="text" class="form-control" name="Github_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Google Map:</label>
                            <input type="text" class="form-control" name="Google_Map" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Stack Overflow:</label>
                            <input type="text" class="form-control" name="stackoverflow_link" id="name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Details">Details:</label>
                                <textarea type="text" rows="6" class="form-control" name="Details" id="Details"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <input type="submit" value="UPDATE" class="btn btn-success" >
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>
    <script src=" {{ mix('js/app.js') }} "></script>
    <div class="control-sidebar-bg"></div>
</div>

<script>
    $(document).ready(function() {
        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            var imageurl = $('#imagelocation').val();
            $('#firstimage').attr('src',imageurl);
            $('#image1').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

        $('#iconselect').click(function(){
            var imageid = $('#getimageId').val();
            var imageurl = $('#imagelocation').val();
            $('#image2').attr('value',imageid);
            $('#Previewimage2').attr('src',imageurl);
        });
    });
</script>

@include('Admin.inc.footersource')

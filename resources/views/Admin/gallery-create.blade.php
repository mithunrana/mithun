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
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Add Gallery Image</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('admin/gallery-store')}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">

                                            @if($errors->has('imageAltText'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('imageAltText')}}
                                                </div>
                                            @endif

                                            @if($errors->has('imageTitleText'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('imageTitleText')}}
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="EventNameOFImage">Event Name Of Image:</label>
                                                <div>
                                                    <input type="text" class="form-control" id="EventNameOFImage" placeholder="Enter Event Name OF Image" name="EventNameOFImage">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <button type="submit" class="form-control btn btn-success">Add New Image</button>
                                            </div>
                                        </div>

                                        <input type="hidden" value="" name="image" id="setimageid"/>
                                        <input type="hidden" value="" name="imageAltText" id="setImageAltText"/>
                                        <input type="hidden"  value="" name="imageTitleText" id="setImageTitleText"/>

                                        <div class="col-sm-4">
                                            @if($errors->has('image'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('image')}}
                                                </div>
                                            @endif
                                            <div>
                                                <img style="width: 100%;margin-top: 27px;" id="previewImage" src="images/default-image.png">
                                                <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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

            $('#previewImage').attr('src','/'+imageurl);
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })
    });
</script>

@include('Admin.inc.footersource')

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
                        <div class="panel-heading">Panel with panel-primary class</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('admin/comment-update',[$Comment->id])}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" for="Name" class="control-label col-sm-12">Name:</label>
                                                <div style="padding-left: 0px;" class="col-sm-12">
                                                    <input type="text"  class="form-control" id="Name" value="{{$Comment->Name}}" placeholder="Enter browser Title" name="Name" required>
                                                </div>
                                            </div>

                                            <input type="hidden" value="{{$Comment->Image}}" name="Image" id="setimageid"/>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" id="Designation" class="control-label col-sm-12">Designation:</label>
                                                <div style="padding-left: 0px;" class="col-sm-12">
                                                    <input type="text" id="Designation" class="form-control"  value="{{$Comment->Designation}}" placeholder="Enter Blog Permalink" name="Designation" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="comment">Comment:</label>
                                                <div style="padding-left: 0px;" class="col-sm-12">
                                                    <textarea type="text" class="form-control" id="comment" placeholder="Enter blog title" name="Comment" required>{{$Comment->Comment}}</textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" type="submit">Update</button>
                                        </div>
                                        <div class="col-sm-4">
                                            @if($errors->has('Image'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('Image')}}
                                                </div>
                                            @endif
                                            <img id="previewImage" style="width: 100%;margin-top: 27px;" src="/{{$Comment->images->imageurl}}">
                                            <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
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
            var imageurl = $('#imagelocation').val();
            $('#previewImage').attr('src','/'+imageurl);
            var imageid = $('#getimageId').val();
            $('#setimageid').attr('value',imageid);
        });

    });
</script>

@include('Admin.inc.footersource');

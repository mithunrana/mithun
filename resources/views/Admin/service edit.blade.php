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
                        <div class="panel-heading">Service Add Side</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('service-update',[$Service->id])}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Browser Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text"  class="form-control" value="{{$Service->BrowserTitle}}" placeholder="Enter browser Title" name="BrowserTitle">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Permalink:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control"value="{{$Service->permalink}}" placeholder="Enter Blog Permalink" name="permalink">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="servicetitle">Service Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control" value="{{$Service->service_title}}" id="servicetitle" placeholder="Enter blog title" name="service_title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <img style="width: 100%;margin-top: 27px;" src="/{{$Service->featuredimage->imageurl}}">
                                                <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" value="{{$Service->featured_image}}" name="featured_image" id="setimageid"/>
                                <input type="hidden" value="{{$Service->ServiceIcon}}" name="ServiceIcon" id="setimageid2"/>
                                <input type="hidden" value="{{$Service->FeaturedImageTitleText}}" name="FeaturedImageTitleText" id="setImageAltText"/>
                                <input type="hidden" value="{{$Service->FeaturedImageAltText}}" name="FeaturedImageAltText" id="setImageTitleText"/>

                                <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="pwd">SEO Keyword:</label>
                                                <div>
                                                    <input type="text" class="form-control" value="{{$Service->SeoKeyword}}" id="pwd" placeholder="Enter SEO Keyword" name="SeoKeyword">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="seodescription">SEO Description:</label>
                                                <div>
                                                    <textarea type="text" class="form-control" id="seodescription" placeholder="Enter SEO Description" name="SeoDescription">{{$Service->SeoDescription}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <img style="width: 100%;margin-top: 27px;" src="/{{$Service->icon->imageurl}}">
                                                <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="servicedetails">Service Details:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="servicedetails" placeholder="Enter Blog Details" name="MainContent">{{$Service->MainContent}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="opencontent">Service Open Content:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="opencontent" placeholder="Enter Blog Details" name="OpenContent">{{$Service->OpenContent}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="">
                                            <button type="submit" class="btn btn-success">Submit</button>
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

        $('#previousimage').attr('src','/'+'{{$Service->featuredimage->imageurl}}');
        $('#imagelocation').attr('value','/'+'{{$Service->featuredimage->imageurl}}');
        $('#getimageId').attr('value','{{$Service->featured_image}}');
        $('#getImageAltText').attr('value','{{$Service->FeaturedImageAltText}}');
        $('#getImageTitleText').attr('value','{{$Service->FeaturedImageTitleText}}');

        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

        $('#iconselect').click(function(){
            var imageid = $('#getimageId').val();
            $('#setimageid2').attr('value',imageid);
        });

    });
</script>

@include('Admin.inc.footersource')

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
                            <form class="form-horizontal" action="{{url('admin/portfolio-store')}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Browser Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text"  class="form-control" placeholder="Enter browser Title" name="BrowserTitle" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Permalink:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control" placeholder="Enter Blog Permalink" name="permalink" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="servicetitle">Portfolio Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control" id="servicetitle" placeholder="Enter blog title" name="Portfolio_title" required>
                                                </div>
                                            </div>
                                            <label for="sel1">Portfolio Category:</label>
                                            <div class="form-group">
                                                <select name="category" class="form-control" required>
                                                    <option value="">=============Select Category===========</option>
                                                    @foreach(App\PortfolioCategory::all() as $cat)
                                                        <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            @if($errors->has('featured_image'))
                                                <div class="error" style="color: red">
                                                    {{$errors->first('featured_image')}}
                                                </div>
                                            @endif
                                            <div>
                                                <img style="width: 100%;margin-top: 27px;" id="previewImage" src="images/default-image.png">
                                                <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" value="" name="featured_image" id="setimageid"/>
                                <input type="hidden" value="" name="FeaturedImageTitleText" id="setImageAltText"/>
                                <input type="hidden"  value="" name="FeaturedImageAltText" id="setImageTitleText"/>

                                <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="pwd">SEO Keyword:</label>
                                                <div>
                                                    <input type="text" class="form-control" id="pwd" placeholder="Enter SEO Keyword" name="SeoKeyword" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="seodescription">SEO Description:</label>
                                                <div>
                                                    <textarea type="text" class="form-control" id="seodescription" placeholder="Enter SEO Description" name="SeoDescription" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="servicedetails">Portfolio Details:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="servicedetails" placeholder="Enter Blog Details" name="MainContent"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="opencontent">Portfolio Open Content:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="opencontent" placeholder="Enter Blog Details" name="OpenContent"></textarea>
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

    tinymce.init({
        selector: '#servicedetails',
        theme: "modern",
        height: 200,
        width: '100%',
        relative_urls:false,
        remove_script_host: false,
        valid_children : "+body[style],-body[div],p[strong|a|#text]",
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor code"
        ],

        toolba1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolba2: "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

        image_caption: true,
        image_advtab: true
    });

    tinymce.init({
        selector: '#opencontent',
        verify_html: false,
        theme: "modern",
        height: 200,
        width: '100%',
        relative_urls:false,
        remove_script_host: false,
        valid_children : "+body[style],-body[div],p[strong|a|#text]",
        extended_valid_elements : "#div[class], #span[class]",
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
            "table contextmenu directionality emoticons paste textcolor code"
        ],

        toolba1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolba2: "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

        image_caption: true,
        image_advtab: true
    });

</script>

@include('Admin.inc.footersource')

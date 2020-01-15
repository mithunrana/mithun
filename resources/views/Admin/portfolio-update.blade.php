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
                            <form class="form-horizontal" action="{{url('portfolio-update',[$Portfolio->id])}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Browser Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text"  class="form-control" value="{{$Portfolio->BrowserTitle}}" placeholder="Enter browser Title" name="BrowserTitle">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Permalink:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control" value="{{$Portfolio->permalink}}" placeholder="Enter Blog Permalink" name="permalink">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="servicetitle">Portfolio Title:</label>
                                                <div style="padding-left: 0px;">
                                                    <input type="text" class="form-control" value="{{$Portfolio->Portfolio_title}}" id="servicetitle" placeholder="Enter blog title" name="Portfolio_title">
                                                </div>
                                            </div>
                                            <label for="sel1">Portfolio Category:</label>
                                            <div class="form-group">
                                                <select name="category" class="form-control">
                                                    <option value="">=============Select Category===========</option>
                                                    @foreach(App\PortfolioCategory::all() as $cat)
                                                        <option value="{{$cat->id}}" {{$cat->id == $Portfolio->category ? 'selected="selected"' : ''}}>{{$cat->CategoryName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>
                                                <img style="width: 100%;margin-top: 27px;" src="/{{$Portfolio->featuredimage->imageurl}}">
                                                <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;" id="imageslect" data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" value="{{$Portfolio->featured_image}}" name="featured_image" id="setimageid"/>
                                <input type="hidden" value="{{$Portfolio->FeaturedImageTitleText}}" name="FeaturedImageTitleText" id="setImageAltText"/>
                                <input type="hidden"  value="{{$Portfolio->FeaturedImageAltText}}" name="FeaturedImageAltText" id="setImageTitleText"/>

                                <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="pwd">SEO Keyword:</label>
                                                <div>
                                                    <input type="text" class="form-control" value="{{$Portfolio->SeoKeyword}}" id="pwd" placeholder="Enter SEO Keyword" name="SeoKeyword">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label style="text-align:left;" class="control-label" for="seodescription">SEO Description:</label>
                                                <div>
                                                    <textarea type="text" class="form-control" id="seodescription" placeholder="Enter SEO Description" name="SeoDescription">{{$Portfolio->SeoDescription}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="servicedetails">Portfolio Details:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="servicedetails" placeholder="Enter Blog Details" name="MainContent">{{$Portfolio->MainContent}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="opencontent">Portfolio Open Content:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="opencontent" placeholder="Enter Blog Details" name="OpenContent">{{$Portfolio->OpenContent}}</textarea>
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
        $('#previousimage').attr('src','/'+'{{$Portfolio->featuredimage->imageurl}}');
        $('#imagelocation').attr('value','/'+'{{$Portfolio->featuredimage->imageurl}}');
        $('#getimageId').attr('value','{{$Portfolio->featured_image}}');
        $('#getImageAltText').attr('value','{{$Portfolio->FeaturedImageAltText}}');
        $('#getImageTitleText').attr('value','{{$Portfolio->FeaturedImageTitleText}}');


        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })


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
            theme: "modern",
            height: 200,
            width: '100%',
            relative_urls:false,
            remove_script_host: false,
            valid_children : "+body[style],-body[div],p[strong|a|#text]",
            extended_valid_elements:"div[id|class|title]",
            plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor code"
            ],

            toolba1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
            toolba2: "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

            image_caption: true,
            image_advtab: true
        });

    });
</script>

@include('Admin.inc.footersource')

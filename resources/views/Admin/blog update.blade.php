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
                <li class="active"><a href="admin-panel"><i class="fa fa-dashboard"></i> Dashboard</a></li>
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
                            <form class="form-horizontal" action="{{url('admin/blog-update',[$Blog->id])}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="col-sm-8">
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Browser Title:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text"  class="form-control" placeholder="Enter browser Title" value="{{$Blog->browser_title}}" name="browser_title">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Permalink:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Enter Blog Permalink" value="{{$Blog->permalink}}" name="permalink">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="pwd">Blog Title:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text" class="form-control" id="pwd" placeholder="Enter blog title" value="{{$Blog->blog_title}}" name="blog_title">
                                            </div>
                                        </div>

                                        @if($errors->has('video_url'))
                                            <div class="error" style="color: red">
                                                {{$errors->first('video_url')}}
                                            </div>
                                        @endif
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="pwd">Video URL:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text" class="form-control" id="pwd" placeholder="Enter Video URL" value="{{$Blog->video_url}}" name="video_url">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-sm-12">
                                            <img style="width: 100%;margin-top: 27px;" src="/{{$Blog->featuredimage->imageurl}}">
                                            <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                        </div>
                                    </div>
                                </div>

                                <!--<input type="hidden" value="{{$Blog->id}}" name="updateid"/>-->
                                <input type="hidden" value="{{$Blog->featured_image}}" name="featured_image" id="setimageid"/>
                                <input type="hidden" value="{{$Blog->imageAltText}}" name="imageTitleText" id="setImageAltText"/>
                                <input type="hidden"  value="{{$Blog->imageTitleText}}" name="imageAltText" id="setImageTitleText"/>

                                <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="form-group col-sm-6">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">SEO Keyword:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" value="{{$Blog->seo_keyword}}" id="pwd" placeholder="Enter SEO Keyword" name="seo_keyword">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-12" for="sel1">Blog Category:</label>
                                        <div class="col-sm-12">
                                            <select name="category" class="form-control col-sm-12">
                                                <option value="">=============Select Category===========</option>
                                                @foreach(App\Category::all() as $cat)
                                                    <option value="{{$cat->id}}" {{$cat->id == $Blog->category ? 'selected="selected"' : ''}}>{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">Embedded Video:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" value="{{$Blog->embedded_video}}" placeholder="Enter video code" name="embedded_video">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">SEO Description:</label>
                                        <div class="col-sm-12">
                                            <textarea type="text" class="form-control" id="pwd" placeholder="Enter SEO Description" name="seo_description">{{$Blog->seo_description}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">Blog Details:</label>
                                        <div class="col-sm-12">
                                            <textarea type="text" rows="5" class="form-control" id="blogdetails" placeholder="Enter Blog Details" name="blog_details">{{$Blog->blog_details}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-info">Submit</button>
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

        $('#previousimage').attr('src','/'+'{{$Blog->featuredimage->imageurl}}');
        $('#imagelocation').attr('value','/'+'{{$Blog->featuredimage->imageurl}}');
        $('#getimageId').attr('value','{{$Blog->featured_image}}');
        $('#getImageAltText').attr('value','{{$Blog->imageAltText}}');
        $('#getImageTitleText').attr('value','{{$Blog->imageTitleText}}');


        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            $('#setimageid').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

        tinymce.init({
            selector: '#blogdetails',
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
    });
</script>

@include('Admin.inc.footersource');

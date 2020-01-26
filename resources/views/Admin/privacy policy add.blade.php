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

            <!-- Main row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Service Add Side</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('admin/store-privacy-policy')}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    @if($errors->has('PrivacyPolicyTitle'))
                                        <div class="error" style="color: red">
                                            {{$errors->first('Name')}}
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Privacy Title:</label>
                                        <div style="padding-left: 0px;">
                                            <input type="text"  class="form-control" placeholder="Enter browser Title" name="PrivacyPolicyTitle">
                                        </div>
                                    </div>
                                    @if($errors->has('PrivacyPolicyTitle'))
                                         <div class="error" style="color: red">
                                            {{$errors->first('Name')}}
                                         </div>
                                    @endif
                                    <div class="form-group">
                                        <label style="text-align:left;" class="control-label" for="servicedetails">Privacy Details:</label>
                                        <div>
                                            <textarea type="text" rows="5" class="form-control" id="servicedetails" placeholder="Enter Blog Details" name="PrivacyPolicyContent"></textarea>
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
</script>

@include('Admin.inc.footersource')

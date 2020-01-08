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


        <section id="app" class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #a4e2c0;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Blog Tutorial</h4>
                            <h4 style="color:white"> @php $Total =  \App\Blog::get();$active = \App\Blog::Where('Active_Status','1')->get();$Deactive = \App\Blog::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-book"></i>
                        </div>
                        <a href="{{url('blog-manage')}}" class="small-box-footer">Manage Blog Tutorial<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #55d18d;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Portfolio</h4>
                            <h4 style="color:white"> @php $Total =  \App\Portfolio::get();$active = \App\Portfolio::Where('Active_Status','1')->get();$Deactive = \App\Portfolio::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-book-o"></i>
                        </div>
                        <a href="{{url('portfolio-manage')}}" class="small-box-footer">Manage Portfolio<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #67d1d5;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Service</h4>
                            <h4 style="color:white"> @php $Total =  \App\Service::get();$active = \App\Service::Where('Active_Status','1')->get();$Deactive = \App\Service::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-card-o"></i>
                        </div>
                        <a href="{{url('service-manage')}}" class="small-box-footer">Service Manage<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #36c4c9;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Qualification</h4>
                            <h4 style="color:white"> @php $Total =  \App\Qualification::get();$active = \App\Qualification::Where('Active_Status','1')->get();$Deactive = \App\Qualification::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-card"></i>
                        </div>
                        <a href="{{url('manage-qualification')}}" class="small-box-footer">Manage Qualification<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #36c4c9;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Expertness</h4>
                            <h4 style="color:white"> @php $Total =  \App\Expertness::get();$active = \App\Expertness::Where('Active_Status','1')->get();$Deactive = \App\Expertness::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-card"></i>
                        </div>
                        <a href="{{url('manage-expertness')}}" class="small-box-footer">Manage Expertness<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div style="background-color: #36c4c9;color:black;" class="small-box text-white">
                        <div class="inner">
                            <h4 style="font-size:22px;">Comment</h4>
                            <h4 style="color:white"> @php $Total =  \App\Comment::get();$active = \App\Comment::Where('Active_Status','1')->get();$Deactive = \App\Comment::Where('Active_Status','0')->get(); echo 'Total: '.count($Total); echo ' Active: '.count($active); @endphp </h4>
                            <h4 class="text-danger">{{ 'Inactive: '.count($Deactive)}}</h4>
                        </div>
                        <div class="icon">
                            <i style="font-size: 40px;" class="fa fa-address-card"></i>
                        </div>
                        <a href="{{url('manage-comment')}}" class="small-box-footer">Manage Comment<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
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
<!-- ./wrapper -->
@include('Admin.inc.footersource');

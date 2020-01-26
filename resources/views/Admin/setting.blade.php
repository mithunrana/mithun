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
            <a style="margin-top:15px;margin-bottom: 15px;" href="{{url('admin/gallery-create')}}" class="btn btn-success pull-left">Add New +</a> <a style="margin-top:15px;margin-bottom: 15px;" href="{{url('admin/admin-panel')}}" class="btn btn-info pull-right"><i class="fa fa-dashboard"></i> Dashbord</a>
            <div class="row">
                <div class="col-sm-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{Session::get('message')}}
                        </div>
                    @endif
                    <div class="panel panel-primary">
                        <div class="panel-heading">Panel with panel-primary class</div>
                        <div class="panel-body">
                            <form method="POST" action="{{url('admin/update-password')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="text" class="form-control" name="password" value="" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="name">Name :</label>
                                    <input type="text" class="form-control" name="name" value="{{$User->name}}" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="text" class="form-control" name="email" value="{{$User->email}}" id="email">
                                </div>
                                <button type="submit" class="btn btn-info">Update Info</button>
                            </form>
                        </div>
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

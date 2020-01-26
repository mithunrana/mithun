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
                            <form method="post" action="{{url('admin/store-expertness')}}">
                                @csrf
                                @if($errors->has('Name'))
                                    <div class="error" style="color: red">
                                        {{$errors->first('Name')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="name">Name of expertness:</label>
                                    <input type="text" class="form-control" name="Name" id="name">
                                </div>
                                @if($errors->has('Percentage'))
                                    <div class="error" style="color: red">
                                        {{$errors->first('Percentage')}}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="percentage">Percentage:</label>
                                    <input type="text" class="form-control" name="Percentage" id="percentage">
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
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

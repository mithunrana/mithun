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
            <a style="margin-top:15px;margin-bottom: 15px;" href="{{url('add-privacy-policy')}}" class="btn btn-success pull-left">Add New +</a> <a style="margin-top:15px;margin-bottom: 15px;" href="{{url('admin-panel')}}" class="btn btn-info pull-right"><i class="fa fa-dashboard"></i>Dashbord</a>
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
                            <table class="table privacyPolicyTable table-striped">
                                <thead>
                                <tr>
                                    <th>Blog Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($PrivacyPolices as $PrivacyPolicy)
                                    <tr>
                                        <td>{{$PrivacyPolicy->PrivacyPolicyTitle}}</td>
                                        <td>
                                            @if($PrivacyPolicy->Active_Status==0)
                                                <a class="btn btn-danger" href="{{url('active-deactive-privacy-policy',[$PrivacyPolicy->id,$PrivacyPolicy->Active_Status])}}">Deactive <i class="fa fa-ban" aria-hidden="true"></i></a>
                                            @endif
                                            @if($PrivacyPolicy->Active_Status==1)
                                                <a class="btn btn-success" href="{{url('active-deactive-privacy-policy',[$PrivacyPolicy->id,$PrivacyPolicy->Active_Status])}}">Active <i class="fa fa-check"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/privacy-policy" class="btn btn-success"><i style="font-size:17px;" class="fa fa-eye"></i></a>
                                            <a href="{{url('edit-privacy-policy',[$PrivacyPolicy->id])}}" class="btn btn-info"> <i style="font-size:17px;" class="fa fa-edit"></i></a>
                                            <a href="{{url('delete-privacy-policy',[$PrivacyPolicy->id])}}" onclick="return ConfirmDelete();" class="btn btn-danger"><i  style="font-size:17px;" class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
<script>
    function ConfirmDelete()
    {
        var x = confirm("Are you sure you want to delete?");
        if (x){
            return true;
        }
        else{
            return false;
        }
    }

    $(document).ready(function() {
        $('.privacyPolicyTable').DataTable();
    });

</script>
@include('Admin.inc.footersource');

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


            <form enctype="multipart/form-data" action="{{url('admin/profile-cvupdate')}}" method="POST">
                @csrf
                <div class="col-sm-12">
                    @if($errors->has('cv'))
                        <div class="error" style="color: red">
                            {{$errors->first('cv')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="file" class="form-control"  name="cv">
                    </div>
                    <button style="margin-bottom: 15px;" class="btn btn-success pull-right" type="submit">CV UPDATE</button>
                </div>
            </form>

            <!-- Main row -->
            <div class="row">
                <form method="POST" action="{{url('admin/profile-update')}}">
                @csrf
                <input type="hidden" class="form-control" @isset($Profile->image1) value="{{$Profile->image1}}" @endisset id="image1" name="image1">
                <input type="hidden" class="form-control" @isset($Profile->image2) value="{{$Profile->image2}}" @endisset id="image2" name="image2">
                <input type="hidden" class="form-control" @isset($Profile->imageAltText) value="{{$Profile->imageAltText}}" @endisset id="setImageAltText" name="imageAltText">
                <input type="hidden" class="form-control" @isset($Profile->imageTitleText) value="{{$Profile->imageTitleText}}" @endisset id="setImageTitleText" name="imageTitleText">

                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <img style="width: 100%;" id="firstimage" @isset($Profile->image1) src="/{{$Profile->profileImage1->imageurl}}" @endisset src="images/default-image.png" >
                        <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                    </div>
                    <div class="col-sm-8">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" @isset($Profile->Name)value="{{$Profile->Name}}" @endisset name="Name" id="Name">
                            </div>
                            <div class="form-group">
                                <label for="Designation">Designation:</label>
                                <input type="text" class="form-control" @isset($Profile->Designation)value="{{$Profile->Designation}}"@endisset name="Designation" id="Designation">
                            </div>
                            <div class="form-group">
                                <label for="email1">Email One:</label>
                                <input type="text" class="form-control" @isset($Profile->Email1)value="{{$Profile->Email1}}"@endisset name="Email1" id="email1">
                            </div>
                            <div class="form-group">
                                <label for="email2">Email Two:</label>
                                <input type="text" class="form-control" @isset($Profile->Email2)value="{{$Profile->Email2}}"@endisset name="Email2" id="email2">
                            </div>
                            @if(Session::has('message'))
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    {{Session::get('message')}}
                                </div>
                            @endif
                    </div>
                </div>

                    <div class="col-sm-12">

                        <div class="col-sm-12">
                            <div style="margin-top: 20px;" class="row">
                            <div class="form-group col-sm-3">
                                <label for="shortbrief">Compleated Project:</label>
                                <input type="number" class="form-control" @isset($Profile->CompleateProject)value="{{$Profile->CompleateProject}}"@endisset name="CompleateProject" id="phone1">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="shortbrief">Happy Clients:</label>
                                <input type="number" class="form-control" @isset($Profile->HappyClient)value="{{$Profile->HappyClient}}"@endisset name="HappyClient" id="phone1">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="shortbrief">Experience:</label>
                                <input type="number" class="form-control" @isset($Profile->Experience)value="{{$Profile->Experience}}"@endisset name="Experience" id="phone1">
                            </div>

                            <div class="form-group col-sm-3">
                                <label for="shortbrief">Total Skill Of Work :</label>
                                <input type="number" class="form-control" @isset($Profile->TotalSkillOfWork)value="{{$Profile->TotalSkillOfWork}}"@endisset name="TotalSkillOfWork" id="phone1">
                            </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="shortbrief">Short Brief:</label>
                                <textarea type="text" rows="6" class="form-control" name="ShortBrief" id="shortbrief">@isset($Profile->ShortBrief){{$Profile->ShortBrief}}@endisset</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="phone1">Phone 1:</label>
                                    <input type="text" class="form-control" @isset($Profile->Phone1)value="{{$Profile->Phone1}}"@endisset name="Phone1" id="phone1">
                                </div>
                                <div class="form-group">
                                    <label for="phone2">Phone 2:</label>
                                    <input type="text" class="form-control" @isset($Profile->Phone2)value="{{$Profile->Phone2}}"@endisset name="Phone2" id="phone2">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <textarea type="text" rows="2" class="form-control"   name="Address" id="address">@isset($Profile->Address){{$Profile->Address}}@endisset</textarea>
                                </div>
                        </div>
                        <div class="col-sm-4">
                            <img style="width: 100%;" id="Previewimage2" @isset($Profile->image2) src="/{{$Profile->profileImage2->imageurl}}" @endisset src="images/default-image.png"/>
                            <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group col-sm-6">
                            <label for="name">Discover Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Discover_link)value="{{$Profile->Discover_link}}"@endisset name="Discover_link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Facebook Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Facebook_Link)value="{{$Profile->Facebook_Link}}"@endisset name="Facebook_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Youtube Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Youtube_Link)value="{{$Profile->Youtube_Link}}"@endisset name="Youtube_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Twitter Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Twitter_Link)value="{{$Profile->Twitter_Link}}"@endisset name="Twitter_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Linked in Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Linkedin_Link)value="{{$Profile->Linkedin_Link}}"@endisset name="Linkedin_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Fiverr Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Fiveer_Link)value="{{$Profile->Fiveer_Link}}"@endisset name="Fiveer_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Upwork Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Upwork_Link)value="{{$Profile->Upwork_Link}}"@endisset name="Upwork_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Instagram Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Instagram_Link)value="{{$Profile->Instagram_Link}}"@endisset name="Instagram_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Pinterest Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Pinterest_Link)value="{{$Profile->Pinterest_Link}}"@endisset name="Pinterest_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Behance Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Behance_Link)value="{{$Profile->Behance_Link}}"@endisset name="Behance_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Dribble Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Dribble_Link)value="{{$Profile->Dribble_Link}}"@endisset name="Dribble_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Vimeo Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Vimeo_Link)value="{{$Profile->Vimeo_Link}}"@endisset name="Vimeo_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Github Link:</label>
                            <input type="text" class="form-control" @isset($Profile->Github_Link)value="{{$Profile->Github_Link}}"@endisset name="Github_Link" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Google Map:</label>
                            <input type="text" class="form-control" @isset($Profile->Google_Map)value="{{$Profile->Google_Map}}"@endisset name="Google_Map" id="name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="name">Stack Overflow:</label>
                            <input type="text" class="form-control" @isset($Profile->stackoverflow_link)value="{{$Profile->stackoverflow_link}}"@endisset name="stackoverflow_link" id="name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="Details">Details:</label>
                                <textarea type="text" rows="6" class="form-control" name="Details" id="Details">@isset($Profile->Details){{$Profile->Details}}@endisset</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                            <input type="submit" value="UPDATE" class="btn btn-success" >
                        </div>
                    </div>

                </form>
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

        $('#previousimage').attr('src','/'+'{{$Profile->profileImage1->imageurl}}');
        $('#imagelocation').attr('value','/'+'{{$Profile->profileImage1->imageurl}}');
        $('#getimageId').attr('value','{{$Profile->image1}}');
        $('#getImageAltText').attr('value','{{$Profile->imageAltText}}');
        $('#getImageTitleText').attr('value','{{$Profile->imageTitleText}}');

        $('#selectimagedata').click(function(){
            var imageid = $('#getimageId').val();
            var imagealttext = $('#getImageAltText').val();
            var imagetitletext = $('#getImageTitleText').val();
            var imageurl = $('#imagelocation').val();
            $('#firstimage').attr('src',imageurl);
            $('#image1').attr('value',imageid);
            $('#setImageAltText').attr('value',imagealttext);
            $('#setImageTitleText').attr('value',imagetitletext);
        })

        $('#iconselect').click(function(){
            var imageid = $('#getimageId').val();
            var imageurl = $('#imagelocation').val();
            $('#image2').attr('value',imageid);
            $('#Previewimage2').attr('src',imageurl);
        });
    });
</script>

@include('Admin.inc.footersource')

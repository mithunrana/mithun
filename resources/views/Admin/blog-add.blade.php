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
                        <div class="panel-heading">Panel with panel-primary class</div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{url('blog-add')}}" method="post">
                                @csrf
                                <div class="col-sm-12">
                                    <div class="col-sm-8">
                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Browser Title:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text"  class="form-control" placeholder="Enter browser Title" name="BlogPermalink">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Permalink:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text" class="form-control" placeholder="Enter Blog Permalink" name="BlogPermalink">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12" for="pwd">Blog Title:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <input type="text" class="form-control" id="pwd" placeholder="Enter blog title" name="BlogPermalink">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label style="text-align:left;padding-left: 0px;" class="control-label col-sm-12">Preview Category:</label>
                                            <div style="padding-left: 0px;" class="col-sm-12">
                                                <!--<p v-for="Category in CategoryList" style="display: inline-block;margin-left:3px;background-color:#00a65a;border-radius: 3px;padding:5px;color:white;">@{{Category.name}}<span>x</span></p>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="col-sm-12">
                                            <img style="width: 100%;margin-top: 27px;" src="{{asset('Admin')}}//img/b3.jpg">
                                            <p style="width:100%; border-top-left-radius:0px;border-top-right-radius:0px;"  data-toggle="modal" data-target="#imagemodal" class="btn btn-primary">Select Image</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>

                                <div class="col-sm-12">
                                    <div class="form-group col-sm-6">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">SEO Keyword:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" id="pwd" placeholder="Enter SEO Keyword" name="BlogTitle">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label class="col-sm-12" for="sel1">Blog Category:</label>
                                        <div class="col-sm-12">
                                            <select  @change="changeCountry($event)" class="form-control col-sm-12">
                                                <option value="">=============Select Category===========</option>
                                                @foreach(App\BlogCategory::all() as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->CategoryName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">Embedded Video:</label>
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Enter video code" name="BlogPermalink">
                                        </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">SEO Description:</label>
                                        <div class="col-sm-12">
                                            <textarea type="text" class="form-control" id="pwd" placeholder="Enter SEO Description" name="BlogBrowserTitle"></textarea>
                                        </div>
                                    </div>



                                    <div class="form-group col-sm-12">
                                        <label style="text-align:left;" class="control-label col-sm-12" for="pwd">Blog Details:</label>
                                        <div class="col-sm-12">
                                            <textarea type="text" rows="5" class="form-control" id="pwd" placeholder="Enter Blog Details" name="BlogAuthor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <div class="col-sm-12">
                                            <button type="button" @click="BlogPostedCategoryStore()">Submit</button>
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
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.18
        </div>
        <strong>Copyright &copy; 2014-2019 <a href="#">AdminLTE</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <script src=" {{ mix('js/app.js') }} "></script>
   <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>-->
    <!--<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>-->
    <script>
        /* var csrfToken = '{{csrf_token()}}';
        var adminUrl = '{{url('')}}';
        new Vue({
            el: '#app',
            data: {
                ImageGallery: true,
                ImageUpload: false,
                selectedCountry: 'hello',
                countryCode: null,
                Category: {CategoryId: null, BlogId: null},
                CategoryList: [],
                returnMessage: null
            },
            created: function () {

            },
            methods: {
                changeCountry: function (event) {
                    this.Category.CategoryId = event.target.value;
                    this.Category.BlogId = 1;
                    //this.Category.name = event.target.options[event.target.options.selectedIndex].text;
                    alert(this.Category.CategoryId);
                    this.CategoryList.push(this.Category);
                    this.Category = {};
                },
                BlogPostedCategoryStore: function () {
                    this.$http.get('blogposted-category-store', {params: {data: this.CategoryList}})
                            .then(function (res) {
                                this.returnMessage = res.data.message;
                            });
                },
                ImageGalleryShow: function () {
                    this.ImageGallery = true;
                    this.ImageUpload = false;
                },
                ImageUploadShow: function () {
                    this.ImageGallery = false;
                    this.ImageUpload = true;
                }
            }
        });*/
    </script>
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
@include('Admin.inc.footersource');

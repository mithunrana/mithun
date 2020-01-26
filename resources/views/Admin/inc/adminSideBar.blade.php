  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      @php
        $About = \App\AboutProfile::first();
      @endphp
      <div class="user-panel">
        <div class="pull-left image">
          <img @isset($About->profileImage1) src="{{asset('')}}{{$About->profileImage1->imageurl}}" @endisset src="{{asset('')}}Images/default-image.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> @isset($About->Name) {{$About->Name}} @endisset</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{url('admin/blog-manage')}}">
            <i class="fa fa-youtube-play"></i><span>Blog Tutorial</span>
          </a>
        </li>

        <li>
          <a href="{{url('admin/portfolio-manage')}}">
            <i class="fa fa-youtube-play"></i><span>PORTFOLIO</span>
          </a>
        </li>

        <li>
          <a href="{{url('admin/service-manage')}}">
            <i class="fa fa-list"></i>
            <span>Service</span>
          </a>
        </li>

        <li>
          <a href="{{url('category')}}">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Blog Category</span>
          </a>
        </li>
        <li>
          <a href="{{url('portfolio-category')}}">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Portfolio Category</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/manage-expertness')}}">
            <i class="fa fa-chain-broken"></i>
            <span>Expertness</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/manage-qualification')}}">
            <i class="fa fa-graduation-cap"></i>
            <span>Qualification</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/manage-comment')}}">
            <i class="fa fa-commenting"></i>
            <span>Comment</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/manage-privacy-policy')}}">
            <i class="fa fa-info"></i>
            <span>Privacy Policy</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/manage-gallery')}}">
            <i class="fa fa-file-image-o"></i>
            <span>Gallery</span>
          </a>
        </li>
        <li>
          <a href="{{url('admin/setting')}}">
            <i class="fa fa-gear fa-spin" style="font-size:20px"></i>
            <span>Setting</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
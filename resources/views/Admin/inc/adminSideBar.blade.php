  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('Admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
          <a href="{{url('blog-manage')}}">
            <i class="fa fa-youtube-play"></i><span>Blog Tutorial</span>
          </a>
        </li>

        <li>
          <a href="{{url('service-add')}}">
            <span class="glyphicon glyphicon-th-list"></span><span>Service</span>
          </a>
        </li>

        <li>
          <a href="{{url('category')}}">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>Category</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
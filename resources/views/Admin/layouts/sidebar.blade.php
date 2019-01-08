<aside class="main-sidebar" style="background : #5d5d5d;font-family: roboto;font-size: 18px;color: white">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar2.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">

        <li><a href="/admin/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a></li>
        
        
            <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-list-alt"></i>Posts</a></li>
              <li class=""><a href="{{ route('event.index') }}"><i class="fa fa-list-alt"></i>Events</a></li>
            
            <li class=""><a href="{{ route('category.index') }}"><i class="fa fa-list-alt"></i> Categories</a></li>
           
            <li class=""><a href="{{ route('tag.index') }}"><i class="fa fa-tags"></i> Tags</a></li>
            
            <li class=""><a href=""><i class="fa fa-users"></i> Users</a></li>
           
        </li>
        
        
        
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
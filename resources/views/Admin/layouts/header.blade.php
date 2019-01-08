
<style>
  .bg-yellow{
    background-color: #ee2956 !important;
  }
  .bg-green{
    background-color: #5d5d5d !important;
  }
  .bg-red{
    background-color: #ee2956 !important;
  }
  .bg-aqua{
    background-color: #5d5d5d !important;
  }
  .box.box-info{
           border-top-color : #d2d6de;
         }
  /*
    body{
      background : #ee2956;
    }
    
    .skin-red .main-header .logo{
      
    }

    .bg-choice{
         background-color : #5d5d5d;
    }*/
</style>


<header class="main-header">
    <!-- Logo -->
   
      <!-- Logo -->

    
    <!-- Logo -->

    <a href="#" class="logo" style="background-color : #ee2956;">

      <!-- mini logo for sidebar mini 50x50 pixels -->

      <span class="logo-mini"><b>RW</b>K</span>

      <!-- logo for regular state and mobile devices -->

      <span class="logo-lg"><b>Admin</b>RWK</span>

    </a>

      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RWK</b> Blog</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #ee2956";>
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar2.PNG" class="user-image" alt="User Image">
              <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar2.PNG" class="img-circle" alt="User Image">

                <p>
                 
                  <small>ADMIN </small>
                </p>
              </li>
            <li class="user-footer">
                <div class="pull-right">
                
                <a href="{{ route('admin.logout')}}" class="btn btn-default btn-flat">Logout</a>

                  </div>

              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
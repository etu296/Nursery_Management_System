 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">NURSARY MANAGEMENT</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->
     <!-- href="{{url('/admin/plants')}}">-->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{route('admin')}}" class="nav-link">
            <i class="fas fa-home"></i>
              <p>
                Dashbord
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('productlist')}}" class="nav-link">
            <i class="fab fa-product-hunt"></i>
              <p>
                Products
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('productcategories')}}" class="nav-link">
            <i class="fas fa-align-left"></i>
              <p>
                Product Category
                
              </p>
            </a>
          </li>
               <li class="nav-item">
            <a href="{{route('admin.plants')}}" class="nav-link">
            <i class="fas fa-seedling"></i>
              <p>
                Plants
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.plantcategories')}}" class="nav-link">
            <i class="fas fa-list-alt"></i>
              <p>
               Plants Category
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('admin.orders')}}" class="nav-link">
            <i class="fas fa-cart-plus"></i>
              <p>
              Order
                
              </p>
            </a>
          </li>
          

          <li class="nav-item">
            <a href="{{route('admin.payments')}}" class="nav-link">
            <i class="fas fa-money-bill-alt"></i>
              <p>
             Payment
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.customer')}}" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
              Customer
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.message')}}" class="nav-link">
            <i class="fas fa-comments"></i>
              <p>
              Message
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.delivery')}}" class="nav-link">
            <i class="fas fa-truck"></i>
              <p>
                Delivery
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.shipping.details')}}" class="nav-link">
            <i class="fas fa-truck"></i>
              <p>
                Shipping Details
                
              </p>
            </a>
          </li>

        </ul>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
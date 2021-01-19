 
@extends('dashboard.index')

@section('title') Add Customer @stop


@section('main_body')
 
 <!-- Main Content -->
 <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
       
        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                  
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">



         {{-- Display Error Message  --}}
         <div class="row">
            <div class="col-md-12">
        
               {{-- Display Error Message  --}}
              @include('seller.error.error')
            
            </div>
          </div>
          

        <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-8">

          <h2 class="text-center">Add New Customer</h2>
                  <!-- Content Row -->
            <div class="card">
                <div class="card-body">
                   
            <form method="POST" action="{{ route('seller.customer_create_storeseller_seller_create_store')}}">
                @csrf
                <div class="form-group">
                    <label for="card_number">Card Number *</label>
                    <input type="text" class="form-control" id="card_number" name="card_number" placeholder="Card Number" required>
                  </div>

                  <div class="form-group">
                    <label for="name">Customer Name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Customer Name" required>
                  </div>

                  <div class="form-group" id="card-number-field">
                    <label for="phone">Phone * </label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>

               <div class="form-group">
                <label for="gender">Gender *</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="Male" selected>Male</option>
                  <option value="Female">Female</option>
         
                </select>
              </div>

              <div class="form-group">
                <label for="address">Address *</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Customer Address" required>
              </div>


                <button type="submit" class="btn btn-primary">ADD Customer</button>
              </form>

       
            </div>
        </div>
    </div>
        </div>
  
        <div class="col-md-2">

        </div>

    

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



 @stop
 
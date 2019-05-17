<nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">

  <div class="collapse navbar-collapse">
    
    <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
      
      <!-- <li class="sidebar-search">
          <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                      <i class="fa fa-search"></i>
                  </button>
              </span>
          </div>
         
      </li> -->
      
      <li class="nav-item">
        <a href="{!! url('backend/homeadmin') !!}" class="active">
          <i class="fa fa-dashboard fa-fw"></i>&nbsp;&nbsp;&nbsp;Home admin
        </a>
      </li>

      <li class="nav-item">
          <a href="#">
            <i class="fa fa-bar-chart-o fa-fw"></i>&nbsp;&nbsp;&nbsp;Product
            <span class="fa arrow"></span>
          </a>
          
          <ul class="nav nav-second-level">
            <li class="nav-item">
              <a href="{!! url('backend/addProduct') !!}">Add Product</a>
            </li>
            
            <li class="nav-item">
              <a href="{!! url('backend/listProduct') !!}">List product</a>
            </li>
          </ul>
      </li>

      <li class="nav-item">
        <a href="tables.html"><i class="fa fa-table fa-fw">
          </i>&nbsp;&nbsp;&nbsp;Customer
          <span class="fa arrow"></span>
        </a>
        
        <ul class="nav nav-second-level">
          <li class="nav-item">
            <a href="flot.html">Add Customer</a>
          </li>

          <li class="nav-item">
            <a href="{!! url('backend/listCus') !!}">List customer</a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#">
          <i class="fa fa-wrench fa-fw"></i>&nbsp;&nbsp;&nbsp;Bill
          <span class="fa arrow"></span>
        </a>

        <ul class="nav nav-second-level">
          <li class="nav-item">
              <a href="panels-wells.html">List bills</a>
          </li>

          <!-- <li class="nav-item">
              <a href="buttons.html">Buttons</a>
          </li> -->
        </ul>
      </li>

      <li class="nav-item">
        <a href="#"><i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Type product<span class="fa arrow"></span></a>
        
        <ul class="nav nav-second-level">
          <li class="nav-item">
              <a href="#">Add type</a>
          </li>

          <li class="nav-item">
              <a href="#">List type</a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#">
          <i class="fa fa-files-o fa-fw"></i>&nbsp;&nbsp;&nbsp;Sample Pages
          <span class="fa arrow"></span>
        </a>
        
        <ul class="nav nav-second-level">
          <li class="nav-item">
            <a href="blank.html">Blank Page</a>
          </li>

          <li class="nav-item">
            <a href="login.html">Login Page</a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#">
          <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage
          <span class="fa arrow"></span>
        </a>

        <ul class="nav nav-second-level">
          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Room Size
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('roomSizes/create') !!}">Add Room Size</a>
              </li>
              
              <li class="nav-item">
                <a href="{!! url('roomSizes') !!}">List Room Size</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Equipments
              <span class="fa arrow"></span>
            </a>

            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('equipments/create') !!}">Add new equipment</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('equipments') !!}">List equipments</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage User Type
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('userTypes/create') !!}">Add user type</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('userTypes') !!}">List user type</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Tiltles
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('titles.create') !!}">Add new title</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('titles') !!}">List titles</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Country
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('countries/create') !!}">Add new country</a>
              </li>
              
              <li class="nav-item">
                <a href="{!! url('countries') !!}">List countries</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage indentification type
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('userTypes/create') !!}">Add new</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('userTypes') !!}">List indentification</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage online flatform
              <span class="fa arrow"></span>
            </a>

            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('userTypes/create') !!}">Add new</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('userTypes') !!}">List online flatform</a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Booking purpose
              <span class="fa arrow"></span>
            </a>
            
            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('bookingPurposes/create') !!}">Add new</a>
              </li>
              <li class="nav-item">
                <a href="{!! url('bookingPurposes ') !!}">List </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#">
              <i class="fa fa-sitemap fa-fw"></i>&nbsp;&nbsp;&nbsp;Manage Dish Type
              <span class="fa arrow"></span>
            </a>

            <ul class="nav nav-second-level">
              <li class="nav-item">
                <a href="{!! url('dishTypes/create') !!}">Add dish type</a>
              </li>

              <li class="nav-item">
                <a href="{!! url('dishTypes') !!}">List dish types</a>
              </li>
            </ul>
          </li>
                            
        </ul>

      </li>

    </ul>

  </div>

</nav>
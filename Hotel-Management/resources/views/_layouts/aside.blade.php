<nav class="navbar navbar-expand-md navbar-dark bg-dark py-2">

  <div class="d-md-none">
    <a href="{!! url('/') !!}">
      <i class="fas fa-home my-margin-right-12"></i>
      
      <strong>
        <em>HOME</em>
      </strong>
    </a>
  </div>
  
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#my-navbar-content"
    aria-controls="my-navbar-content"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon">
      <i class="fas fa-sitemap"></i>
    </span>
  </button>


  <div class="collapse navbar-collapse" id="my-navbar-content">
    
    <ul class="nav navbar-nav d-flex flex-column">
      
      <li class="d-none d-md-block">
        <a href="{!! url('/') !!}">
          <i class="fas fa-home my-margin-right-12"></i>
          
          <strong>
            <em>HOME</em>
          </strong>
        </a>
      </li>

      <li class="my-margin-top-19">
        <a href="{!! url('bookingPurposes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Booking purposes</span>
        </a>
      </li>

      <li>
        <a href="{!! url('bookingTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Booking types</span>
        </a>
      </li>

      <li>
        <a href="{!! url('countries') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Countries</span>
        </a>
      </li>

      <li>
        <a href="{!! url('dishes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Dishes</span>
        </a>
      </li>

      <li>
        <a href="{!! url('dishTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Dish categories</span>
        </a>
      </li>

      <li>
        <a href="{!! url('equipment') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Equipment</span>
        </a>
      </li>

      <li>
        <a href="{!! url('identificationTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Identification types</span>
        </a>
      </li>

      <li>
        <a href="{!! url('onlinePlateforms') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Online booking plateforms</span>
        </a>
        
      </li>

      <li>
        <a href="{!! url('roomSizes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Room sizes</span>
        </a>
      </li>

       <li>
        <a href="{!! url('rooms') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
              <span>Rooms</span>
        </a>
      </li>

      <li>
        <a href="{!! url('titles') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Titles</span>
        </a>
      </li>

      <li>
        <a href="{!! url('userTypes') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>User types</span>
        </a>
      </li>
      <li>
        <a href="{!! url('users') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Users</span>
        </a>
      </li>
      <li>
        <a href="{!! url('companies') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>Companies</span>
        </a>
      </li>
      <li>
        <a href="{!! url('userCompanies ') !!}">
          <i class="fas fa-sitemap my-margin-right-12"></i>
          <span>User companies</span>
        </a>
      </li>
    </ul>

  </div>

</nav>
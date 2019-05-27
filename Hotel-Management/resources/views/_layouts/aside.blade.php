<nav class="navbar navbar-expand-md navbar-dark py-2">

  <div class="d-md-none d-flex flex-wrap align-items-center">

    <a href="{!! url('/') !!}" class="my-padding-right-40">
      <div class="d-flex align-items-center">
        <div class="my-padding-right-19 my-sidebar-action-icon">
          <i class="fas fa-home"></i>
        </div>
        
        <div>
          <strong>
            <em>HOME</em>
          </strong>
        </div>
      </div>
    </a>

    <a href="{!! url('/login') !!}" class="my-padding-right-40">
      <div class="d-flex align-items-center">
        <div class="my-padding-right-19 my-sidebar-action-icon">
          <i class="far fa-user-circle"></i>
        </div>
        
        <div>
          Login
        </div>
      </div>
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
          <div class="d-flex align-items-center">
            <div class="my-padding-right-19 my-sidebar-action-icon">
              <i class="fas fa-home"></i>
            </div>
            
            <div class="my-sidebar-action-label">
              <strong>
                <em>HOME</em>
              </strong>
            </div>
          </div>
        </a>
      </li>

      <li class="d-none d-md-block my-margin-top-8">
        <a href="{!! url('/login') !!}">
          <div class="d-flex align-items-center">
            <div class="my-padding-right-19 my-sidebar-action-icon">
              <i class="far fa-user-circle"></i>
            </div>
            
            <div class="my-sidebar-action-label">
              Login
            </div>
          </div>
        </a>
      </li>

      <div class="d-flex flex-wrap">

        @foreach(myLayoutHelperSidebarActions() as $action)
          <li class="my-margin-top-8">
            <a href="{!! url($action['url']) !!}">
              <div class="d-flex align-items-center">
                <div class="my-padding-right-19 my-sidebar-action-icon">
                  <i class="fas fa-sitemap"></i>
                </div>
                
                <div class="my-padding-right-19 my-sidebar-action-label">
                  {!! $action['label'] !!}
                </div>
              </div>
            </a>
          </li>
        @endforeach

      </div>

    </ul>

  </div>

</nav>
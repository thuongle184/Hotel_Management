<!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="palatin-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="palatinNav">

                        <!-- Nav brand -->
                        <a href="{{route('trangchu')}}" class="nav-brand"><img src="public/thepalatin/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{route('trangchu')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{route('trangchu')}}">Home</a></li>
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li><a href="{{route('service')}}">Services</a></li>
                                            <li><a href="{{route('room')}}">Rooms</a></li>
                                            <li><a href="{{route('new')}}">News</a></li>
                                            <li><a href="{{route('contact')}}">Contact</a></li>
                                            <li><a href="{{route('element')}}">Elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('trangchu')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('service')}}">Services</a></li>
                                                <li><a href="{{route('room')}}">Rooms</a></li>
                                                <li><a href="{{route('new')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('element')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('trangchu')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('service')}}">Services</a></li>
                                                <li><a href="{{route('room')}}">Rooms</a></li>
                                                <li><a href="{{route('new')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('element')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('trangchu')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('service')}}">Services</a></li>
                                                <li><a href="{{route('room')}}">Rooms</a></li>
                                                <li><a href="{{route('new')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('element')}}">Elements</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{route('trangchu')}}">Home</a></li>
                                                <li><a href="{{route('about')}}">About Us</a></li>
                                                <li><a href="{{route('service')}}">Services</a></li>
                                                <li><a href="{{route('room')}}">Rooms</a></li>
                                                <li><a href="{{route('new')}}">News</a></li>
                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                                <li><a href="{{route('element')}}">Elements</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="{{route('service')}}">Services</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                </ul>

                                <!-- Button -->
                                <div class="menu-btn">
                                    <a href="#" class="btn palatin-btn">Make a Reservation</a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    @yield('slide')


    <!-- ##### Book Now Area Start ##### -->
    <div class="book-now-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="book-now-form">
                        <form action="#">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select1">Check In</label>
                                <select class="form-control" id="select1">
                                  <option>19 June</option>
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select2">Check Out</label>
                                <select class="form-control" id="select2">
                                  <option>20 June</option>
                                  <option>21 June</option>
                                  <option>22 June</option>
                                  <option>23 June</option>
                                  <option>24 June</option>
                                  <option>25 June</option>
                                  <option>26 June</option>
                                  <option>27 June</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select3">Adults</label>
                                <select class="form-control" id="select3">
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                  <option>06</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="select4">Childrens</label>
                                <select class="form-control" id="select4">
                                  <option>01</option>
                                  <option>02</option>
                                  <option>03</option>
                                  <option>04</option>
                                  <option>05</option>
                                </select>
                            </div>

                            <!-- Button -->
                            <button type="submit">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Book Now Area End ##### -->
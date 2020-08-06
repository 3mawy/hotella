<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">

                <nav class="h-100 navbar navbar-expand-lg" style="margin-left: .6rem;">
                    <a class="navbar-brand" href="/"><img src="{{asset('frontend')}}/img/core-img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse dorneNav" id="dorneNav" style="margin-top: 4px;">
                        <ul class="navbar-nav mr-auto" id="dorneMenu">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/hotels">Hotels <span class="sr-only">(current)</span></a>
                            </li>
{{--
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="index.html">Home</a>
                                    <a class="dropdown-item" href="explore.html">Explore</a>
                                    <a class="dropdown-item" href="listing.html">Listing</a>
                                    <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </div>
                            </li>
--}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contacts.create') }}">Contact Us!</a>
                            </li>
                        </ul>
                        <!-- Search btn
                        <div class="dorne-search-btn">
                            <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                        </div>-->
                        <!-- Signin btn -->
                        @guest
                            <div class="dorne-signin-btn ">
                                <a href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="dorne-signin-btn">
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #f18d4c ">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                                        profile
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @endguest
                    <!-- Add listings btn
                        <div class="dorne-add-listings-btn">
                            <a data-toggle="modal" data-target="#add-listing" class="btn dorne-btn add-listing-button" style="position: relative; left: inherit;padding-left: 1rem;padding-right: 1rem;">+ Add Listings</a>
                        </div>-->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

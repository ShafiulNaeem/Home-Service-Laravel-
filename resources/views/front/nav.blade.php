<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('dist/front/css/img/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{URL('/front')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Service</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Bricklayer</a>
                        <a class="dropdown-item" href="#">Cleaner</a>
                        <a class="dropdown-item" href="#">Interior Designer</a>
                        <a class="dropdown-item" href="#">Plumber</a>
                        <a class="dropdown-item" href="#">Electrician</a>
                        <a class="dropdown-item" href="#">Laundry</a>
                        <a class="dropdown-item" href="#">Painter</a>
                        <a class="dropdown-item" href="#">Appliance repairs</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="er_registration.html">Registration</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div> <!-- container -->
</nav>
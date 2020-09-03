<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{URL('/admin')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('service.create')}}">
                    <span data-feather="file"></span>
                    Add Service
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('service.index')}}">
                    <span data-feather="users"></span>
                    Service Details
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('service_provider.create')}}">
                    <span data-feather="file"></span>
                   Add Service Provider
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('service_provider.index')}}">
                    <span data-feather="users"></span>
                    Service Provider Details
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('confirem.create')}}">
                    <span data-feather="users"></span>
                    Send Mail
                </a>
            </li>

        </ul>
    </div>
</nav>
<header class="shadow bg-body-tertiary rounded">
    <div class=" d-flex justify-content-between">
        <div class=" header-left d-flex align-items-center">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-text" id="basic-addon2"><i class="fas fa-search fa-sm"></i></span>
            </div>
        </div>
        <div class=" header-right d-flex align-items-center">
            <a href="#" class="position-relative"><i class="fas fa-bell fa-fw"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    10
                </span></a>
            <a href="#" class="position-relative"><i class="fas fa-envelope fa-fw position-relative"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    199+
                </span></a>
            <div class="topbar-divider"></div>
            <div class="px-2 d-flex">
                <div>Hello, {{Auth::user()->name}}</div>
                <div class="dropdown">
                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>
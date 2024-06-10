<div id="sidebar">
    <div class="logo d-flex align-items-center">
        <img src="https://www.svgrepo.com/show/314838/dashboard.svg" alt="logo">
        <span class="fs-4">Control panel</span>
    </div>
    <div class="d-flex">
        <ul>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'admin.dashboard.index' ? 'text-white' : ''}}" href="{{route('admin.dashboard')}}">Dashboard</a>
            </li>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'admin.projects.index' ? 'text-white' : ''}}" href="{{route('admin.projects.index')}}">Projects</a>
            </li>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'admin.types.index' ? 'text-white' : ''}}" href="{{route('admin.types.index')}}">Types</a>
            </li>
            <li>
                <a class="nav-link {{Route::currentRouteName() == 'admin.technologies.index' ? 'text-white' : ''}}" href="{{route('admin.technologies.index')}}">Technologies</a>
            </li>
        </ul>
    </div>

</div>
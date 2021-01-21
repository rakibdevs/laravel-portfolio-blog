<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="{{route('admin')}}">
            <div class="logo-img">
               <img height="40" src="{{ asset('images/logo.png') }}" class="header-brand-img" alt="lavalite"> 
            </div>
            <span class="text"></span>
        </a>
    </div>

    @php
        $segment1 = request()->segment(2);
    @endphp
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">
                <div class="nav-item {{ ($segment1 == '') ? 'active' : '' }}">
                    <a href="{{route('dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                </div>
                <div class="nav-item {{ ($segment1 == '' || $segment1 == ''||$segment1 == '') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="fa fa-newspaper-o"></i><span>Post</span></a>
                    <div class="submenu-content">
                        <a href="{{url('')}}" class="menu-item {{ ($segment1 == '') ? 'active' : '' }}">All Posts</a>
                        <a href="{{url('')}}" class="menu-item {{ ($segment1 == '') ? 'active' : '' }}">Add New</a>
                        <a href="{{url('')}}" class="menu-item {{ ($segment1 == '') ? 'active' : '' }}">Categories</a>
                        <a href="{{url('')}}" class="menu-item {{ ($segment1 == '') ? 'active' : '' }}">Tags</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == '' || $segment1 == ''||$segment1 == '') ? 'active open' : '' }} has-sub">
                    <a href="#"><i class="fa fa-folder-o"></i><span>Portfolio</span></a>
                    <div class="submenu-content">
                        <a href="{{url('admin/portfolio')}}" class="menu-item {{ ($segment1 == 'portfolio') ? 'active' : '' }}">All Portfolio</a>
                        <a href="{{url('')}}" class="menu-item {{ ($segment1 == '') ? 'active' : '' }}">Add Item</a>
                        <a href="{{url('technologies')}}" class="menu-item {{ ($segment1 == 'technologies') ? 'active' : '' }}">Technologies</a>
                    </div>
                </div>
                <div class="nav-item {{ ($segment1 == 'settings') ? 'active' : '' }}">
                    <a href="{{}}"><i class="fa fa-cog"></i><span>Settings</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>
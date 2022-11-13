<div>
    <header class="header" id="header">
        <div class="header_toggle">
            <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo navbar-brand" >
                    <!-- <i class='bx bx-layer '></i> -->
                    <i class='bx bx-store nav_logo-icon'></i>
                    <span class="nav_logo-name ">Hi, {{ auth()->user()->role }}</span>
                </a>
                <div class="nav_list">
                    <a href="/dashboard" class="nav_link navbar-brand {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span> 
                    </a> 
                    <a href="{{ route('customer.index') }}" class="nav_link navbar-brand {{ request()->is('customer') ? 'active' : '' }}"> 
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Customer</span> 
                    </a>
                    @if(auth()->user()->role == "admin")
                    <a href="{{ route('menu.index') }}" class="nav_link navbar-brand {{ request()->is('menu') ? 'active' : '' }}"> 
                        <i class='bx bx-bowl-hot nav_icon'></i>
                        <span class="nav_name">Menu</span> 
                    </a> 
                    @endif
                    <a href="{{ route('order.index') }}" class="nav_link navbar-brand {{ request()->is('order') ? 'active' : '' }}"> 
                        <i class='bx bxs-cart nav_icon'></i>
                        <span class="nav_name">Order</span> 
                    </a> 
                </div>
            </div>
            <a href="{{ route('signout') }}" class="nav_link navbar-brand">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>
</div>

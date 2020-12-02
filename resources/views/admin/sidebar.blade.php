<div class="list-group mb-2 d-none d-md-block d-lg-block d-xl-block">
    <a class="list-group-item list-group-item-action{{ Request::segment(2) == 'dashboard' ? ' active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="fa fa-cogs"></i> داشبرد</a>
    <a class="list-group-item list-group-item-action{{ Request::segment(2) == 'user' ? ' active' : '' }}" href="{{ route('admin.users.list') }}"><i class="fa fa-users"></i> کاربرها</a>
    <a class="list-group-item list-group-item-action{{ Request::segment(2) == 'category' ? ' active' : '' }}" href="{{ route('admin.categories.list') }}"><i class="fa fa-window-restore"></i>گروه بندی</a>
    <a class="list-group-item list-group-item-action{{ Request::segment(2) == 'product' ? ' active' : '' }}" href="{{ route('admin.products.list') }}"><i class="fa fa-newspaper-o"></i> محصولات</a>
    <a class="list-group-item list-group-item-action{{ Request::segment(2) == 'orders' ? ' active' : '' }}" href="{{ route('admin.orders.list') }}"><i class="fa fa-newspaper-o"></i>  تاریخچه خرید ها</a>

</div>

<div class="nav-scroller d-block d-md-none d-lg-none d-xl-none mb-2 border">
    <nav class="nav nav-underline">
        <a class="nav-link{{ Request::segment(2) == 'dashboard' ? ' active' : '' }}" href="{{ route('admin.dashboard') }}"><i class="fa fa-cogs"></i> داشبرد</a>
        <a class="nav-link{{ Request::segment(2) == 'user' ? ' active' : '' }}" href="#"><i class="fa fa-users"></i> کاربرها</a>
        <a class="nav-link{{ Request::segment(2) == 'category' ? ' active' : '' }}" href="#"><i class="fa fa-window-restore"></i> گروه بندی</a>
        <a class="nav-link{{ Request::segment(2) == 'product' ? ' active' : '' }}" href="#"><i class="fa fa-newspaper-o"></i> محصولات</a>
        <a class="nav-link{{ Request::segment(2) == 'buys' ? ' active' : '' }}" href="#"><i class="fa fa-newspaper-o"></i> تاریخچه خرید ها</a>


    </nav>
</div>
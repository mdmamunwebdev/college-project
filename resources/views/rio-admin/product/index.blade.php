@extends('rio-admin.master')

@section('title')
    Product-List
@endsection

@section('sidebar-links')

    <ul class="nav-links h-100 py-3 px-2">
        <li class="mb-2 with-out-submenu">
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt neumo-color' ></i>
                <span class="link_name ">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name " href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </li>
        <li class="with-submenu showMenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxl-product-hunt'></i>
                    <span class="link_name">Product</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" data-aos="fade-down">
                <li class="ln"><span class="link_name">Product</span></li>
                <li class="active-item d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('product.list') }}">Product List</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
                <li class="d-flex justify-content-start">
                    <i class='bx bx-add-to-queue'></i>
                    <a href="{{ route('product.create') }}">Add Product</a>
                </li>
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-collection' ></i>
                    <span class="link_name">Category</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" data-aos="fade-down">
                <li class="ln"><span class="link_name">Category</span></li>
                <li><a href="#">HTML & CSS</a></li> <!-- When active This link, then here is added a class (active) -->
                <li><a href="#">JavaScript</a></li>
                <li><a href="#">PHP & MySQL</a></li>
            </ul>
        </li>
    </ul>

@endsection

@section('main-content')

    <div class="pagetitle neumo-primary p-3 d-flex justify-content-between" data-aos="fade-down">
        <h1 class="lh-base">Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('product.list') }}">Product</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        this is a product list
    </section>

@endsection

@section('app-scripts')
    <script type="text/javascript">



    </script>
@endsection

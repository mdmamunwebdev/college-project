@extends('rio-admin.master')

@section('title')
    Home
@endsection

@section('sidebar-links')

    <ul class="nav-links h-100 py-3 px-2">
        <li class="mb-2 with-out-submenu">
            <a href="{{ route('dashboard') }}" class="">
                <i class='bx bx-grid-alt neumo-color' ></i>
                <span class="link_name ">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name " href="{{ route('dashboard') }}">Dashboard</a></li>
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxl-product-hunt'></i>
                    <span class="link_name">Product</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Product</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('product.list') }}">Product List</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-add-to-queue'></i>
                    <a href="{{ route('product.create') }}" class="flex-grow-1">Add Product</a>
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
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class="bi bi-tag"></i>
                    <span class="link_name">Tag</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu showMenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class="bi bi-receipt"></i>
                    <span class="link_name">Order</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Order</span></li>
                <li class="active-item d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('order.create') }}">Order</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class="bi bi-person-badge"></i>
                    <span class="link_name">Customer</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bxs-coupon'></i>
                    <span class="link_name">Cuupon</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class="bi bi-table"></i>
                    <span class="link_name">Table</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
        <li class="with-submenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class="bi bi-graph-up"></i>
                    <span class="link_name">Analysis</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
    </ul>

@endsection

@section('main-content')

    <div class="pagetitle neumo-primary p-3 d-flex justify-content-between">
        <h1 class="lh-base">New Order</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">New Order</a></li>
                <li class="breadcrumb-item active">Order</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="container-fluid p-0">
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-body accordion neumo-primary text-primary-size" id="accordionOrderDetail">
                                <div class="accordion-item">
                                    <h2 class="accordion-header border-bottom border-1 border-light">
                                        <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Order #30 Detail
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show px-0" data-bs-parent="#accordionOrderDetail">
                                        <div class="accordion-body bg-neumo">
                                            <h6>General</h6>
                                            <div class="row mb-2">
                                                <lable for="" class="col-12 mb-2">Date created:</lable>
                                                <div class="col-12">
                                                    <input type="date" name="published_date" id="DateCreated" class="p-1 w-100 h-100 neumo-primary border-neumo"/>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <lable for="" class="col-12 mb-2">Status:</lable>
                                                <div class="col-12">
                                                    <select name="" id="" class="form-select neumo-primary border-neumo text-primary-size">
                                                        <option selected>-- select any one --</option>
                                                        <option value="">Pending</option>
                                                        <option value="">Pending</option>
                                                        <option value="">Pending</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-2 g-3">
                                                <div class="col-md-6">
                                                    <h6 class="my-2">Billing</h6>
                                                    <div class="card card-body p-2 neumo-primary">

                                                        <div class="row mb-2 g-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control" style="font-size: 11px; padding: 8px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control" style="font-size: 11px; padding: 8px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <lable for="" class="col-12 mb-2">Date created:</lable>
                                                            <div class="col-12">
                                                                <input type="date" name="published_date" id="DateCreated" class="form-control w-100 h-100 neumo-primary border-neumo"/>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <lable for="" class="col-12 mb-2">Date created:</lable>
                                                            <div class="col-12">
                                                                <input type="date" name="published_date" id="DateCreated" class="form-control w-100 h-100 neumo-primary border-neumo"/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 ">
                                                    <h6 class="my-2">Shipping</h6>
                                                    <div class="card card-body p-2 neumo-primary">

                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control text-primary-size">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <label for="" class="col-12">Name</label>
                                                                    <div class="col-12">
                                                                        <input type="text" name="" id="" class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <lable for="" class="col-12 mb-2">Date created:</lable>
                                                            <div class="col-12">
                                                                <input type="date" name="published_date" id="DateCreated" class="form-control w-100 h-100 neumo-primary border-neumo"/>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <lable for="" class="col-12 mb-2">Date created:</lable>
                                                            <div class="col-12">
                                                                <input type="date" name="published_date" id="DateCreated" class="form-control w-100 h-100 neumo-primary border-neumo"/>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-body accordion neumo-primary text-primary-size" id="accordionOrderCal">
                                <div class="accordion-item">
                                    <h2 class="accordion-header border-bottom border-1 border-light">
                                        <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Order Calculator
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show  px-0" data-bs-parent="#accordionOrderCal">
                                        <div class="accordion-body bg-neumo">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequuntur dolore ducimus earum facere, facilis fuga impedit inventore ipsa, iste labore maiores modi nam natus nostrum pariatur praesentium quae quidem rerum sed similique totam veniam. Numquam, quo, quod. Blanditiis delectus eaque iure minus molestiae nobis provident quae quidem sequi?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-body accordion neumo-primary text-primary-size" id="accordionOrderAction">
                                <div class="accordion-item">
                                    <h2 class="accordion-header border-bottom border-1 border-light">
                                        <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Order Action
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show  px-0" data-bs-parent="#accordionOrderAction">
                                        <div class="accordion-body bg-neumo">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur cum eius esse excepturi fuga maiores nobis numquam, officiis quae quibusdam sunt. Accusantium adipisci aliquam amet animi consequatur cumque eius et eum harum illum magnam molestiae nemo nisi nobis, pariatur placeat praesentium quae, quidem quisquam quo quos repellat veritatis. Doloribus!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card card-body accordion neumo-primary text-primary-size" id="accordionOrderNote">
                                <div class="accordion-item">
                                    <h2 class="accordion-header border-bottom border-1 border-light">
                                        <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Order Note
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show  px-0" data-bs-parent="#accordionOrderNote">
                                        <div class="accordion-body bg-neumo">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consectetur cum eius esse excepturi fuga maiores nobis numquam, officiis quae quibusdam sunt. Accusantium adipisci aliquam amet animi consequatur cumque eius et eum harum illum magnam molestiae nemo nisi nobis, pariatur placeat praesentium quae, quidem quisquam quo quos repellat veritatis. Doloribus!
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quidem!
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis dignissimos dolorum fuga hic nam necessitatibus neque perferendis sapiente veritatis voluptatibus.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('app-scripts')
    <script type="text/javascript">

        $("#DateCreated").flatpickr({
            minDate: "today",
            defaultDate: ['today'],
            dateFormat: "Y-m-d",
        });

    </script>
@endsection

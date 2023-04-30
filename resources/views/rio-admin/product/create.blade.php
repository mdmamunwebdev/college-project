@extends('rio-admin.master')

@section('title')
    Product
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
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('product.list') }}">Product List</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
                <li class="active-item d-flex justify-content-start p-0">
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
                <li class="d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
    </ul>

@endsection

@section('main-content')

    <div class="pagetitle neumo-primary p-3 d-flex justify-content-between" data-aos="fade-down">
        <h1 class="lh-base">Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('product.create') }}">Product</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <form action="{{ route('product.create') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-md-8">
                    <div class="card neumo-primary">
                        <div class="card-body p-2">
                            <input type="text" class="form-control" name="product-title" placeholder="Title : New Product"/>
                        </div>
                    </div>

                    <div class="card neumo-primary">
                        <div class="card-body p-2">
                            <textarea name="product-description" class="form-control " id="summernote" cols="30" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="card neumo-primary" style="font-size: 12px;">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active rounded-0" id="v-pills-general-tab" data-bs-toggle="pill" data-bs-target="#v-pills-general" type="button" role="tab" aria-controls="v-pills-general" aria-selected="true">General</button>
                                    <button class="nav-link rounded-0" id="v-pills-inventory-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inventory" type="button" role="tab" aria-controls="v-pills-inventory" aria-selected="true">Inventory</button>
                                    <button class="nav-link rounded-0" id="v-pills-shipping-tab" data-bs-toggle="pill" data-bs-target="#v-pills-shipping" type="button" role="tab" aria-controls="v-pills-shipping" aria-selected="false">Shipping</button>
                                    <button class="nav-link rounded-0" id="v-pills-advance-tab" data-bs-toggle="pill" data-bs-target="#v-pills-advance" type="button" role="tab" aria-controls="v-pills-advance" aria-selected="false">Advance</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel" aria-labelledby="v-pills-general-tab" tabindex="0">
                                        <div class="card bg-neumo-pills">
                                            <div class="card-body  p-3">
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Regular Price</label>
                                                    <div class="col-6">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Sale Price</label>
                                                    <div class="col-4">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Sale Price Date</label>
                                                    <div class="col-8">
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <input type="date" name="startSalePriceDate" id="startSalePriceDate" class="form-control"  placeholder="From… YYYY-MM-DD"/>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-12">
                                                                <input type="date" name="endSalePriceDate" id="endSalePriceDate" class="form-control" placeholder="To… YYYY-MM-DD"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-inventory" role="tabpanel" aria-labelledby="v-pills-inventory-tab" tabindex="0">
                                        <div class="card bg-neumo-pills">
                                            <div class="card-body  p-3">
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Stock Status</label>
                                                    <div class="col-6">
                                                        <div class="radio-input">
                                                            <label class="label">
                                                                <input type="radio" name="radio" checked="">
                                                                <span class="check"></span>
                                                            </label>
                                                            <label class="label">
                                                                <input type="radio" name="radio">
                                                                <span class="check"></span>
                                                            </label>
                                                            <label class="label">
                                                                <input type="radio" name="radio">
                                                                <span class="check"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab" tabindex="0">
                                        <div class="card bg-neumo-pills">
                                            <div class="card-body  p-3">
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Weight</label>
                                                    <div class="col-6">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Dimensions</label>
                                                    <div class="col-4">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="number" name="" id="" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-advance" role="tabpanel" aria-labelledby="v-pills-advance-tab" tabindex="0">
                                        <div class="card bg-neumo-pills">
                                            <div class="card-body  p-3">
                                                <div class="row mb-3">
                                                    <label for="" class="col-4">Condition</label>
                                                    <div class="col-6">
                                                        <select name="" id="" class="form-select">
                                                            <option value="0" selected>Default</option>
                                                            <option value="1">New</option>
                                                            <option value="2">Refurbished</option>
                                                            <option value="3">Used</option>
                                                        </select>
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
                <div class="col-md-4">
                    <div class="card card-body accordion neumo-primary" id="accordionPublish" style="font-size: 12px">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom border-1 border-danger">
                                <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Publish
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show px-0" data-bs-parent="#accordionPublish">
                                <div class="accordion-body bg-neumo">
                                    <div class="d-flex justify-content-between mb-2">
                                        <i class="bi bi-lamp-fill"></i>
                                        <span>Status:</span>
                                        <span>Published</span>
                                        <input type="text" hidden name="product-status"/>
                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-sm" type="button">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu neumo-primary">
                                                <li><a class="dropdown-item" href="#">Published</a></li>
                                                <li><a class="dropdown-item" href="#">Pending Review</a></li>
                                                <li><a class="dropdown-item" href="#">Draft</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <i class="bi bi-eye"></i>
                                        <span>Visibility:</span>
                                        <span>Public</span>
                                        <input type="text" hidden name="product-visibility"/>
                                        <div class="btn-group">
                                            <button class="btn btn-danger btn-sm" type="button">
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu neumo-primary">
                                                <li><a class="dropdown-item" href="#">Public</a></li>
                                                <li><a class="dropdown-item" href="#">Private</a></li>
                                                <li><a class="dropdown-item" href="#">Password protected</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <i class="bi bi-calendar3"></i>
                                        <span>Published On: </span>
                                        <div class="neumo-primary" style="width: 40%">
                                            <input type="text" name="published-date" id="publishedDate" class=" border-0 text-center w-100 h-100 bg-neumo"/>
                                        </div>
{{--                                        <div class="btn btn-sm btn-danger" onclick="document.getElementById('publishedDate').removeAttribute('readonly'); document.getElementById('publishedDate').showPicker()">Edit</div>--}}
{{--                                        <div>--}}
{{--                                            <input type="date" name="published-date" id="publishedDate" class="pointer-events-none border-0 neumo-primary" style="width: 0px; height: 0px;"/>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-neumo">
                            <div class="d-flex justify-content-between">
                                <div class="d-column justify-content-center me-2">
                                    <div class=""><a href=""><i class="bi bi-clipboard"></i> Copy to a new draft</a></div>
                                    <div class="text-danger"><i class="bi bi-trash"></i> Move To Trash</div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">SAVE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body accordion neumo-primary" id="accordionCategory" style="font-size: 12px">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom border-1 border-danger">
                                <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Product Categories
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show px-0" data-bs-parent="#accordionCategory">
                                <div class="accordion-body bg-neumo">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="one-tab-category" data-bs-toggle="tab" data-bs-target="#one-category-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Categories</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="two-tab-category" data-bs-toggle="tab" data-bs-target="#two-category-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Most Used</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="p-3 tab-pane fade show active bg-light" id="one-category-tab-pane" role="tabpanel" aria-labelledby="one-tab-category" tabindex="0">
                                            <label for="" class="me-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                        </div>
                                        <div class="p-3 tab-pane fade bg-light" id="two-category-tab-pane" role="tabpanel" aria-labelledby="two-tab-category" tabindex="0">
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                        </div>
                                    </div>

                                    <p class="mt-3">
                                        <button class="btn  btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategory" aria-expanded="false" aria-controls="collapseCategory">
                                            <i class="bi bi-plus"></i>Add a new category
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseCategory">
                                        <div class="card card-body p-1 bg-neumo">
                                            <form action="" method="post">
                                                <div class="row mb-1 g-0">
                                                    <div class="col-9">
                                                        <input type="text" class="form-control w-100 rounded-0" style="font-size: 12px;"/>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="submit" class="btn btn-dark btn-sm w-100 h-100 rounded-0" value="ADD" id="" style="font-size: 12px;"/>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body accordion neumo-primary" id="accordionTag" style="font-size: 12px">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom border-1 border-danger">
                                <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    Product tags
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show px-0" data-bs-parent="#accordionTag">
                                <div class="accordion-body bg-neumo">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="tab-tag-one" data-bs-toggle="tab" data-bs-target="#one-tag-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All Tags</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="tab-tag-two" data-bs-toggle="tab" data-bs-target="#two-tag-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Most Used</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="p-3 tab-pane fade show active bg-light" id="one-tag-tab-pane" role="tabpanel" aria-labelledby="tab-tag-one" tabindex="0">
                                            <label for="" class="me-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                        </div>
                                        <div class="p-3 tab-pane fade bg-light" id="two-tag-tab-pane" role="tabpanel" aria-labelledby="tab-tag-two" tabindex="0">
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                            <label for="" class="m-1">Lunch <input type="checkbox" name="" id="" class=""/></label>
                                        </div>
                                    </div>

                                    <p class="mt-3">
                                        <button class="btn  btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTag" aria-expanded="false" aria-controls="collapseTag">
                                            <i class="bi bi-plus"></i>Add a new Tag
                                        </button>
                                    </p>
                                    <div class="collapse" id="collapseTag">
                                        <div class="card card-body p-1 bg-neumo">
                                            <form action="" method="post">
                                                <div class="row mb-1 g-0">
                                                    <div class="col-9">
                                                        <input type="text" class="form-control w-100 rounded-0" style="font-size: 12px;"/>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="submit" class="btn btn-dark btn-sm w-100 h-100 rounded-0" value="ADD" id="" style="font-size: 12px;"/>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-body accordion neumo-primary" id="accordionGallery" style="font-size: 12px">
                        <div class="accordion-item">
                            <h2 class="accordion-header border-bottom border-1 border-danger">
                                <button class="accordion-button px-0 bg-neumo text-neumo" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Product Gallery
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse  px-0" data-bs-parent="#accordionGallery">
                                <div class="accordion-body bg-neumo">
                                    ....///
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card neumo-primary">
                        <div class="d-flex  justify-content-between border-bottom border-1 border-danger ">
                            <div class="title p-2">
                                Product Image
                            </div>
                            <div class="btn"  data-bs-toggle="collapse" data-bs-target="#collapseImage" aria-expanded="false" aria-controls="collapseImage">
                                <i class="bi bi-arrows-collapse"></i>
                            </div>
                        </div>
                        <div class="card-body collapse show p-0 pt-2" id="collapseImage">
                            <div class="card-text p-1">
                                <div class="AppBody bg-neumo">
                                    <div class="icon" onclick="document.getElementById('prdoductImage').click();" style="cursor: pointer;">
                                        <i class="bi bi-cloud-arrow-up"></i>
                                    </div>

                                    <h3>Drag & Drop</h3>
                                    <span>OR</span>

                                    <button class="btn btn-dark " id="imgUploadBtn" onclick="event.preventDefault(); document.getElementById('prdoductImage').click();">Browse File</button>
                                    <input id="prdoductImage" type="file" hidden name="product-image"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection

@section('app-scripts')
    <script type="text/javascript">

        $('#summernote').summernote({
            placeholder: 'Write Here Your Product Descriptions ',
            tabsize: 2,
            height: 422,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $("#startSalePriceDate").flatpickr({
            minDate: "today",
            dateFormat: "Y-m-d"
        });

        $("#endSalePriceDate").flatpickr({
            minDate: "today",
            dateFormat: "Y-m-d"
        });

        $("#publishedDate").flatpickr({
            enableTime: true,
            minDate: "today",
            defaultDate: ['today', 'H:i'],
            dateFormat: "Y-m-d H:i",
        });


    </script>
@endsection

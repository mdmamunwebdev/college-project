@extends('rio-admin.master')

@section('title')
    Product- Category
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
        <li class="with-submenu "> <!-- When active This link, then here is added a class (showMenu) -->
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
                <li class="d-flex justify-content-start">
                    <i class='bx bx-add-to-queue'></i>
                    <a href="{{ route('product.create') }}">Add Product</a>
                </li>
            </ul>
        </li>
        <li class="with-submenu showMenu"> <!-- When active This link, then here is added a class (showMenu) -->
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-collection' ></i>
                    <span class="link_name">Category</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" data-aos="fade-down">
                <li class="ln"><span class="link_name">Category</span></li>
                <li class="active-item d-flex justify-content-start p-0">
                    <i class='bx bx-list-plus' ></i>
                    <a href="{{ route('category') }}">Category</a>
                </li> <!-- When active This link, then here is added a class (active-item) -->
            </ul>
        </li>
    </ul>

@endsection

@section('main-content')
    <div class="pagetitle neumo-primary p-3 d-flex justify-content-between" data-aos="fade-down">
        <h1 class="lh-base">Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="card-body">
                        <div class="card neumo-primary">
                            <div class="card-body p-2">
                                <input type="text" class="form-control" name="category-title" placeholder="Title : New Category"/>
                            </div>
                        </div>
                        <div class="card neumo-primary">
                            <div class="card-body p-2">
                                <textarea name="category-description" class="form-control " id="summernote" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="card neumo-primary">
                            <div class="card-body p-2">
                                <input type="file" name="image" id="" class=""/>
                            </div>
                        </div>
                        <div class="card neumo-primary">
                            <div class="card-body p-2">
                                <input type="submit" class="btn btn-success btn-sm rounded-0 w-100" value="SAVE"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <div class="card bg-neumo" style="box-shadow: none;">
                    <div class="card-body p-2">
                        <table class="table table-bordered table-hover table-striped  m-0 neumo-primary dataTable-table" id="categoryTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created at</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td>Lunch</td>
                                    <td class="text-center">
                                        <div class="btn btn-success btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <div class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('app-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#categoryTable').DataTable();
        });

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
    </script>
@endsection

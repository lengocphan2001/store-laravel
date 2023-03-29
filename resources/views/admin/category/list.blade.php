@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách danh mục</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box mr-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm . . .">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-right">
                                            <button type="button"
                                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i
                                                    class="mdi mdi-plus mr-1"></i>Thêm mới</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID Danh mục</th>
                                                <th>Tên danh mục</th>
                                                <th>Số lượng sản phẩm</th>
                                                <th>Chi tiết danh mục</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Áo</td>
                                                <td>122</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered width-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết các danh mục con</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box mr-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Tìm kiếm . . .">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-right">
                                            <button type="button"
                                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i
                                                    class="mdi mdi-plus mr-1"></i>Thêm mới</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID Danh mục</th>
                                                <th>Tên danh mục</th>
                                                <th>Số lượng sản phẩm</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Áo thun lạnh</td>
                                                <td>122</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Áo ăn mày</td>
                                                <td>122</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Áo rách nách</td>
                                                <td>122</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="mr-3 text-primary"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

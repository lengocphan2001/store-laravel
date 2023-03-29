@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách sản phẩm</h4>
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
                                                <th>Ảnh sản phẩm </th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá nhập</th>
                                                <th>Giá bán</th>
                                                <th>Số lượng</th>
                                                <th>Trạng thái</th>
                                                <th>Chi tiết</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch1">
                                                        <label class="custom-control-label" for="customSwitch1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch2">
                                                        <label class="custom-control-label" for="customSwitch2"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch3">
                                                        <label class="custom-control-label" for="customSwitch3"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch4">
                                                        <label class="custom-control-label" for="customSwitch4"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch5">
                                                        <label class="custom-control-label" for="customSwitch5"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch6">
                                                        <label class="custom-control-label" for="customSwitch6"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><img class="image-list-product"
                                                        src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                        alt=""></td>
                                                <td>Áo thun lạnh</td>

                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    100
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customSwitch7">
                                                        <label class="custom-control-label" for="customSwitch7"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
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
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
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
        <!-- End Page-content -->

        <!-- Modal -->
        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered width-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết sản phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="product-detai-imgs">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 col-4">
                                                        <div class="nav flex nav-pills " id="v-pills-tab" role="tablist"
                                                            aria-orientation="vertical">
                                                            <a class="nav-link active" id="product-1-tab"
                                                                data-toggle="pill" href="#product-1" role="tab"
                                                                aria-controls="product-1" aria-selected="true">
                                                                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                                    alt=""
                                                                    class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-2-tab" data-toggle="pill"
                                                                href="#product-2" role="tab"
                                                                aria-controls="product-2" aria-selected="false">
                                                                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-kem-front-c842d326-29df-41cf-97a8-732ee5f501c3.jpg?v=1677234806157"
                                                                    alt=""
                                                                    class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-3-tab" data-toggle="pill"
                                                                href="#product-3" role="tab"
                                                                aria-controls="product-3" aria-selected="false">
                                                                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-back-3214ad59-388f-4c1e-b535-10126f988a8a.jpg?v=1677234806157"
                                                                    alt=""
                                                                    class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                            <a class="nav-link" id="product-4-tab" data-toggle="pill"
                                                                href="#product-4" role="tab"
                                                                aria-controls="product-4" aria-selected="false">
                                                                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-kem-back-25e86d6c-59a8-411b-a41f-797bcc97f0d9.jpg?v=1677234806157"
                                                                    alt=""
                                                                    class="img-fluid mx-auto d-block rounded">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="product-1"
                                                                role="tabpanel" aria-labelledby="product-1-tab">
                                                                <div>
                                                                    <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                                        alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-2" role="tabpanel"
                                                                aria-labelledby="product-2-tab">
                                                                <div>
                                                                    <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-kem-front-c842d326-29df-41cf-97a8-732ee5f501c3.jpg?v=1677234806157"
                                                                        alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-3" role="tabpanel"
                                                                aria-labelledby="product-3-tab">
                                                                <div>
                                                                    <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-back-3214ad59-388f-4c1e-b535-10126f988a8a.jpg?v=1677234806157"
                                                                        alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="product-4" role="tabpanel"
                                                                aria-labelledby="product-4-tab">
                                                                <div>
                                                                    <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-kem-back-25e86d6c-59a8-411b-a41f-797bcc97f0d9.jpg?v=1677234806157"
                                                                        alt="" class="img-fluid mx-auto d-block">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6">
                                            <div class="mt-4 mt-xl-3">
                                                <a href="#" class="text-primary">Áo</a>
                                                <h4 class="mt-1 mb-3">Áo Thun Teelab Local Brand Unisex Sumer Cat Vibe</h4>

                                                <h5 class="mb-4">Giá nhập :</span> <b>$225 USD</b></h5>
                                                <h5 class="mb-4">Giá bán :</span> <b>$225 USD</b></h5>
                                                <h5 class="mb-4">Số lượng: </span> <b>100</b></h5>
                                                <p class="text-muted mb-4">To achieve this, it would be necessary to have
                                                    uniform grammar pronunciation and more common words If several languages
                                                    coalesce</p>
                                                <div class="product-detail-size">
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">XS</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">S</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">M</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">L</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">XL</button>
                                                    <button type="button"
                                                        class="btn btn-outline-primary waves-effect waves-light mb-4">XXL</button>
                                                </div>
                                                <div class="product-color">
                                                    <h5 class="font-size-15">Màu sắc</h5>
                                                    <a href="#" class="active">
                                                        <div class="product-color-item border rounded">
                                                            <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-den-front-2-3b8dd60e-04e8-4651-8417-37ed2d25925a.jpg?v=1677234806157"
                                                                alt="" class="avatar-md">
                                                        </div>
                                                        <p>Đen</p>
                                                    </a>
                                                    <a href="#">
                                                        <div class="product-color-item border rounded">
                                                            <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/415/697/products/special-collection-kem-front-c842d326-29df-41cf-97a8-732ee5f501c3.jpg?v=1677234806157"
                                                                alt="" class="avatar-md">
                                                        </div>
                                                        <p>Kem sữa</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer pt-4">
                                        <button type="button" class="btn btn-info waves-effect  waves-light mr-1">
                                            <i class="bx bx-add-to-queue mr-2"></i> Thêm
                                        </button>
                                        <button type="button" class="btn btn-success waves-effect  waves-light mr-1">
                                            <i class="bx bx-edit-alt mr-2"></i> Sửa
                                        </button>
                                        <button type="button" class="btn btn-danger waves-effect  waves-light">
                                            <i class="bx bx-error-circle mr-2"></i>Xóa
                                        </button>
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Đóng</button>
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

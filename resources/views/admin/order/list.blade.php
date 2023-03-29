@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách đơn hàng</h4>

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
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck1">
                                                        <label class="custom-control-label"
                                                            for="customCheck1">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>ID Đơn hàng</th>
                                                <th>Người mua</th>
                                                <th>Ngày mua</th>
                                                <th>Tổng tiền</th>
                                                <th>Tình trạng thanh toán</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>Xem chi tiết</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck2">
                                                        <label class="custom-control-label"
                                                            for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2540</a> </td>
                                                <td>Neal Matthews</td>
                                                <td>
                                                    07 Oct, 2019
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck3">
                                                        <label class="custom-control-label"
                                                            for="customCheck3">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2541</a> </td>
                                                <td>Jamal Burnett</td>
                                                <td>
                                                    07 Oct, 2019
                                                </td>
                                                <td>
                                                    $380
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa mr-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck4">
                                                        <label class="custom-control-label"
                                                            for="customCheck4">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2542</a> </td>
                                                <td>Juan Mitchell</td>
                                                <td>
                                                    06 Oct, 2019
                                                </td>
                                                <td>
                                                    $384
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck5">
                                                        <label class="custom-control-label"
                                                            for="customCheck5">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2543</a> </td>
                                                <td>Barry Dick</td>
                                                <td>
                                                    05 Oct, 2019
                                                </td>
                                                <td>
                                                    $412
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck6">
                                                        <label class="custom-control-label"
                                                            for="customCheck6">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2544</a> </td>
                                                <td>Ronald Taylor</td>
                                                <td>
                                                    04 Oct, 2019
                                                </td>
                                                <td>
                                                    $404
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa mr-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck7">
                                                        <label class="custom-control-label"
                                                            for="customCheck7">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2545</a> </td>
                                                <td>Jacob Hunter</td>
                                                <td>
                                                    04 Oct, 2019
                                                </td>
                                                <td>
                                                    $392
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck8">
                                                        <label class="custom-control-label"
                                                            for="customCheck8">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2546</a> </td>
                                                <td>William Cruz</td>
                                                <td>
                                                    03 Oct, 2019
                                                </td>
                                                <td>
                                                    $374
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fas fa-money-bill-alt mr-1"></i> COD
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck9">
                                                        <label class="custom-control-label"
                                                            for="customCheck9">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2547</a> </td>
                                                <td>Dustin Moser</td>
                                                <td>
                                                    02 Oct, 2019
                                                </td>
                                                <td>
                                                    $350
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
                                                    <a href="javascript:void(0);" class="text-danger"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Delete"><i
                                                            class="mdi mdi-close font-size-18"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck10">
                                                        <label class="custom-control-label"
                                                            for="customCheck10">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);"
                                                        class="text-body font-weight-bold">#SK2548</a> </td>
                                                <td>Clark Benson</td>
                                                <td>
                                                    01 Oct, 2019
                                                </td>
                                                <td>
                                                    $345
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa mr-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>
                                                <td>
                                                    
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
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">ID Đơn hàng: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Người mua: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="{{ asset('assets\images\product\img-7.png') }}" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="{{ asset('assets\images\product\img-4.png') }}" alt=""
                                                    class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Hoodie (Blue)</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Tổng tiền:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

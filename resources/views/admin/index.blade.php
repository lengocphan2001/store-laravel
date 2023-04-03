@extends('admin.layouts.master')
@section('admin_head')
    <title>{{ $data['title'] ?? '' }}</title>
    <meta content="{{ $data['title'] ?? '' }}" name="description" />
@endsection

@section('admin_content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active" aria-current="page">{{ __('admin.sidebar.dashboard') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <h4 class="card-title">{{ __('admin.sidebar.dashboard') }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">{{ trans('admin.label.totalOrder') }}</p>
                                                        <h4 class="mb-0">1,235</h4>
                                                    </div>
                    
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">{{ trans('admin.label.revenue') }}</p>
                                                        <h4 class="mb-0">$35, 723</h4>
                                                    </div>
                    
                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p class="text-muted font-weight-medium">{{ trans('admin.label.totalUser') }}</p>
                                                        <h4 class="mb-0">$16.2</h4>
                                                    </div>
                    
                                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-primary">
                                                            <i class="bx bx-user font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->
                    
                    
                        <div class="row">
                            <div class="col-lg-12">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Đơn hàng mới nhất</h4>
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID Đơn hàng</th>
                                                        <th>Người mua</th>
                                                        <th>Ngày</th>
                                                        <th>Thành tiền</th>
                                                        <th>Tình trạng thanh toán</th>
                                                        <th>Phương thức thanh toán</th>
                                                        <th>Thao tác</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2540</a> </td>
                                                        <td>Neal Matthews</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $400
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                    
                                                    <tr>
                    
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2541</a> </td>
                                                        <td>Jamal Burnett</td>
                                                        <td>
                                                            07 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $380
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa mr-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                    
                                                    <tr>
                    
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2542</a> </td>
                                                        <td>Juan Mitchell</td>
                                                        <td>
                                                            06 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $384
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                    
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2543</a>
                                                        </td>
                                                        <td>Barry Dick</td>
                                                        <td>
                                                            05 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $412
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-mastercard mr-1"></i> Mastercard
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                    
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2544</a>
                                                        </td>
                                                        <td>Ronald Taylor</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $404
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-visa mr-1"></i> Visa
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                    
                                                        <td><a href="javascript: void(0);" class="text-body font-weight-bold">#SK2545</a>
                                                        </td>
                                                        <td>Jacob Hunter</td>
                                                        <td>
                                                            04 Oct, 2019
                                                        </td>
                                                        <td>
                                                            $392
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                                        </td>
                                                        <td>
                                                            <i class="fab fa-cc-paypal mr-1"></i> Paypal
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                                data-toggle="modal" data-target=".exampleModal">
                                                                Xem chi tiết
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                    
                                    <!-- end row -->
                            </div>
                            <!-- container-fluid -->
                        </div>
                        <!-- End Page-content -->
                    
                        <!-- Modal -->
                        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết sản phẩm</h5>
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
                                                        <th scope="col">Sản phẩm</th>
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
                                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)
                                                                </h5>
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
                                                                <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
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
                </div>
            </div>
            <!-- end col -->
        </div>
            <!-- end page title -->

    </div>


    <!-- end modal -->
@endsection

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
                                                <th>ID Đơn hàng</th>
                                                <th>Người mua</th>
                                                <th>Ngày mua</th>
                                                <th>Tổng tiền</th>
                                                <th>Địa chỉ</th>
                                                <th>Phương thức thanh toán</th>
                                                <th>Xem chi tiết</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td><a href="javascript: void(0);"
                                                            class="text-body font-weight-bold">#SK{{ $order->id }}</a>
                                                    </td>
                                                    <td>{{ $order->user->name }}</td>
                                                    <td>
                                                        {{ date('d-m-Y', strtotime($order->created_at)) }}
                                                    </td>
                                                    <td>
                                                        {{ number_format($order->total) }}
                                                    </td>
                                                    <td>
                                                        {{ $order->address }}
                                                    </td>
                                                    <td>
                                                        {{ $order->payment == 1 ? 'Online' : 'COD' }}
                                                    </td>
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                            data-toggle="modal" data-target="#modal_{{ $order->id }}">
                                                            Xem chi tiết
                                                        </button>
                                                    </td>

                                                    <td>

                                                        <a href="javascript:void(0);" class="text-danger"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Delete"><i
                                                                class="mdi mdi-close font-size-18"></i></a>
                                                        <div class="modal fade " id="modal_{{ $order->id }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Chi
                                                                            tiết đơn hàng</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="mb-2">ID Đơn hàng: <span
                                                                                class="text-primary">#SK{{ $order->id }}</span>
                                                                        </p>
                                                                        <p class="mb-4">Người mua: <span
                                                                                class="text-primary">{{ $order->user->name }}</span>
                                                                        </p>
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table table-centered table-nowrap">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th scope="col">Ảnh</th>
                                                                                        <th scope="col">Tên sản phẩm</th>
                                                                                        <th scope="col">Số lượng</th>
                                                                                        <th scope="col">Giá</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                        $order_products = App\Models\Order::find($order->id)->orderDetails
                                                                                    @endphp
                                                                                    @foreach ($order_products as $order_product)
                                                                                        
                                                                                        <tr>
                                                                                            <th scope="row">
                                                                                                <div>
                                                                                                    <img src="{{ asset($order_product->productVariation->product->image) }}"
                                                                                                        alt=""
                                                                                                        class="avatar-sm">
                                                                                                </div>
                                                                                            </th>
                                                                                            <td>
                                                                                                <div>
                                                                                                    <h5
                                                                                                        class="text-truncate font-size-14">
                                                                                                        {{$order_product->productVariation->product->name}}
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="text-muted mb-0">
                                                                                                        Màu: {{ $order_product->productVariation->color->color}}
                                                                                                    </p>
                                                                                                    <p
                                                                                                    class="text-muted mb-0">
                                                                                                    Size: {{ $order_product->productVariation->size->size}}
                                                                                                </p>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>{{ $order_product->quantity }}</td>
                                                                                            <td>{{ number_format($order_product->amount) }}</td>
                                                                                        </tr>
                                                                                    @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Đóng</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex d-flex justify-content-center">
                                    {!! $orders->links() !!}
                                </div>
                                @foreach ($orders as $order)
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Modal -->

    </div>
@endsection

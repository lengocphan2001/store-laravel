@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách khách hàng</h4>
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
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Tên khách hàng</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Số đơn hàng mua</th>
                                                <th>Tổng tiền</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <img class="rounded-circle avatar-xs" src="{{asset("assets\images\users\avatar-2.jpg")}}" alt="">
                                                    </div>
                                                </td>
                                                <td>Stephen Rash</td>
                                                <td>
                                                    <p class="mb-1">0868.359.103</p>
                                                </td>

                                                <td>Triều Khúc, Thanh Xuân, Hà Nội</td>
                                                <td>152</td>

                                                <td>$5,412</td>
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
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
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
    </div>
@endsection

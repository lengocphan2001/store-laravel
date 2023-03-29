@extends('admin.layout')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Danh sách phản hồi của khách hàng</h4>
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
                                                <th>Tên khách hàng</th>
                                                <th>Email</th>
                                                <th>Nội dung</th>
                                                <th>Xem chi tiết</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Stephen Rash</td>
                                                <td>
                                                    <p class="mb-1">customer@gmail.com</p>
                                                </td>

                                                <td> 
                                                    <p class="text-muted mb-2 text-truncate width-column" >
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio iure quam est inventore, delectus labore totam, odio recusandae tempore similique cupiditate dolores? Perspiciatis asperiores ipsa quaerat illum nihil ratione nam!
                                                    </p>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        Xem chi tiết
                                                    </button>
                                                </td>

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
            <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết phản hồi khách hàng</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- end page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-2 ">Tên</p>
                                                <h5>Stephen Rash	
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-2 font-weight-bold">Email</p>
                                                <h5>customer@gmail.com</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate adipisci commodi quae at ea hic pariatur. Voluptatibus quod, ut est exercitationem expedita pariatur qui obcaecati sapiente a commodi et.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

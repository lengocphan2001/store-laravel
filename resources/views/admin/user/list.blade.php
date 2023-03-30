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
                                                <th>Tên khách hàng</th>
                                                <th>Số điện thoại</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->name }}</td>
                                                    <td>
                                                        {{ $user->userAddress->phone }}
                                                    </td>
                                                    <td>{{ $user->email }}</td>

                                                    <td>{{ $user->userAddress->ward->name . ', ' . $user->userAddress->district->name . ', ' . $user->userAddress->province->name }}
                                                    </td>
                                                    <td>
                                                        <a href="#myModal_{{ $user->id }}" class="text-danger"
                                                            data-toggle="modal" data-bs-target="#deleteModal"><i
                                                                class="fas fa-trash-alt"></i> Xóa </a>
                                                        <div id="myModal_{{ $user->id }}" class="modal fade">
                                                            <div class="modal-dialog modal-confirm">
                                                                <div class="modal-content">
                                                                    <div class="modal-header flex-column">
                                                                        <h4 class="modal-title w-150">Bạn có muốn khách hàng
                                                                            có thông tin:
                                                                        </h4>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-hidden="true"><i
                                                                                class="fas fa-times"></i></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p>Name: {{ $user->name }}</p>
                                                                        <p>Email: {{ $user->email }}</p>
                                                                    </div>
                                                                    <div class="modal-footer justify-content-center">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Hủy</button>
                                                                        <form
                                                                            action="{{ route('admin.users.destroy', $user->id) }}"
                                                                            method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Xóa</button>
                                                                        </form>
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
                                    {!! $users->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
    </div>
    <script src="{{ asset('assets\js\pages/toastr.init.js') }}"></script>
    <script src="{{ asset('assets\libs\toastr\build\toastr.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets\libs\toastr\build\toastr.min.css') }}">
    <script src="{{ asset('assets\libs\jquery\jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 3000;
            @if (Session::has('error'))
                console.log('123');
                toastr.error('{{ Session::get('error') }}');
            @endif
        });
    </script>
@endsection

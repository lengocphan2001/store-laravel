@php use App\Models\Banner; @endphp
@extends('admin.layouts.master')
@section('admin_head')
    {{-- <title>{{ $data['title'] }}</title>
    <meta content="{{ $data['title'] }}" name="description" /> --}}
@endsection

@section('admin_style')
    @include('admin.includes.datatable.style')
@endsection

@section('admin_content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><span><i
                                            class="bx bxs-home-circle"></i> {{ __('admin.sidebar.dashboard') }}</span></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('admin.sidebar.banner') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="bank-inner-details">
                    <div class="row">
                        <form action="{{ route('admin.banners.update', $banner['id']) }}" enctype="multipart/form-data"
                            method="post">
                            @csrf
                            @method('PUT')
                            <div class="option-blog">
                                <div class="blog-image">
                                    <input type="file" name="image" id="file" hidden
                                        src="{{ asset($banner['image']) }}">
                                    <div class="img-area">
                                        <i class='bx bxs-cloud-upload icon'></i>
                                        <h3>Tải ảnh lên</h3>
                                        <p>Dung lượng của ảnh không vượt quá <span>2MB</span></p>
                                    </div>
                                    <button class="select-image btn btn-primary" type="button">Chọn
                                        banner</button>
                                    <!-- Error -->
                                    @if ($errors->has('image'))
                                        <div class='text-danger mt-2'>
                                            * {{ $errors->first('image') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="type-blog">
                                    <div class="form-group mb-4">
                                        <label class="control-label col-sm-2" for="subject">
                                            <h6>Tiêu đề <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Tiêu đề banner" name="title" value="{{ $banner['title'] }}">
                                        </div>
                                        @if ($errors->has('title'))
                                            <div class='text-danger mt-2'>
                                                * {{ $errors->first('title') }}
                                            </div>
                                        @endif
                                        <label class="control-label col-sm-2" for="subject">
                                            <h6>Link <span class="required">*</span></h6>
                                        </label>
                                        <div class="title">
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Link banner" name="link" value="{{ $banner['link'] }}">
                                        </div>
                                        <!-- Error -->
                                    </div>
                                </div>

                            </div>
                            <div class="form-group ">
                                <div class="col-sm-offset-2 btn-submit">
                                    <button type="submit" class="btn btn-primary">Sửa banner</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
@endsection

@section('admin_script')
    @include('admin.includes.datatable.script')
@endsection

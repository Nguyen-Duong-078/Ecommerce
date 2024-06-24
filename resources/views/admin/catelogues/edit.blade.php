@extends('admin.layouts.master')

@section('title')
    Cập Nhật | {{ $model->name }}
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Cập Nhật Danh Mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Danh Mục</a></li>
                        <li class="breadcrumb-item active">{{ $model->name }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <form action="{{ route('admin.catelogues.update', $model->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Danh Mục</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="name" class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter tên danh mục"
                                name="name" value="{{ $model->name }}">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Cover</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            {{-- <label for="cover" class="form-label">File:</label> --}}
                            <input type="file" class="form-control" id="cover" name="cover">
                            <img class="rounded-2 ms-3 mt-3" src="{{ Storage::url($model->cover) }}" alt=""
                                width="50px" height="50px">
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3">
                    <a class="btn btn-primary w-sm" href="{{ route('admin.catelogues.index') }}">Danh Sách</a>
                    <button type="submit" class="btn btn-success w-sm">Cập Nhật</button>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Công bố</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="choices-publish-status-input" class="form-label">Trạng Thái</label>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        @if ($model->is_active) checked @endif name="is_active">Kích Hoạt
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('style-libs')
    <!-- Plugins css -->
    <link href="{{ asset('themes') }}/admin/assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
@endsection
@section('script-libs')
    <!-- ckeditor -->
    <script src="{{ asset('themes') }}/admin/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- dropzone js -->
    <script src="{{ asset('themes') }}/admin/assets/libs/dropzone/dropzone-min.js"></script>

    <script src="{{ asset('themes') }}/admin/assets/js/pages/ecommerce-product-create.init.js"></script>
@endsection

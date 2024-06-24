@extends('admin.layouts.master')

@section('title')
    Thêm mới danh mục
@endsection

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Thêm Danh Mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Danh Mục</a></li>
                        <li class="breadcrumb-item active">Thêm Danh Mục</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="POST">
        @csrf
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
                                name="name">
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
                        </div>
                    </div>
                </div>
                <div class="text-end mb-3">
                    <a class="btn btn-primary w-sm" href="{{ route('admin.catelogues.index') }}">Danh Sách</a>
                    <button type="submit" class="btn btn-success w-sm">Thêm Mới</button>
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
                                    <input class="form-check-input" type="checkbox" value="1" checked
                                        name="is_active">Kích Hoạt
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
@endsection
@section('script-libs')
@endsection

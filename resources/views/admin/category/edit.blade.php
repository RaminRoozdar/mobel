@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> مدیریت سیستم </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.categories.list')}}">  گروه ها </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">ویرایش گروه :   {{ $category->title }}  </a></li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        ویرایش گروه :   {{ $category->title }}
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.categories.update',[$category->id])}}" method="post">
                            @Csrf
                            <div class="form-group">
                                <label for="category_name">عنوان گروه  :</label>
                                <input class="form-control" name="title" id="title" value="{{ old('title', $category->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="order">عنوان لاتین :</label>
                                <input class="form-control" name="slug" id="slug" value="{{ old('slug', $category->slug) }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit">ذخیره تغییرات </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
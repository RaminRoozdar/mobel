@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> مدیریت سیستم </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.products.list')}}">  محصولات </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> ثبت محصول جدید </a></li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        ثبت محصول جدید
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                            @Csrf
                            <div class="form-group">
                                <label for="title">عنوان محصول  :</label>
                                <input class="form-control" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="category_id">گروه محصول :</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="amount">قیمت محصول  :</label>
                                <input dir="ltr" class="form-control" name="amount" id="amount" value="{{ old('amount') }}">
                            </div>
                            <div class="form-group">
                                <label for="desc_short">توضیح کوتاه  :</label>
                                <input class="form-control" name="desc_short" id="desc_short" value="{{ old('desc_short') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">توضیح کامل  :</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">تصویر محصول  :</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit">ثبت محصول </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
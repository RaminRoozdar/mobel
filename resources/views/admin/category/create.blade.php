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
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> ایجاد گروه </a></li>
                    </ol>
                </nav>
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        ایجاد گروه جدید
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.categories.store')}}" method="post">
                            @Csrf
                            <input type="hidden" value="0" name="category_id">
                            <div class="form-group">
                                <label for="title">عنوان گروه  :</label>
                                <input class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="slug">عنوان لاتین :</label>
                                <input class="form-control" name="slug" id="slug">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit">ایجاد گروه </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
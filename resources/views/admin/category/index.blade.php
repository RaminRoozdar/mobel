@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> مدیریت سیستم </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> گروه بندی </a></li>
                    </ol>
                </nav>
                <div class="card card-default">
                    <div class="card-header">گروه بندی
                        <a href="{{route('admin.categories.create')}}" class="btn btn-dark btn-sm pull-left"><i
                                    class="fa fa-plus-circle"></i> ایجاد گروه جدید </a>
                    </div>
                    <div class="card-body">
                        <table id="users" class="table table-hover table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            @include('admin.category.columns')
                            </thead>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{  $category->id  }}</td>
                                    <td>{{  $category->title  }}</td>
                                    <td>{{  $category->slug  }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.categories.edit',['id'=>$category->id]) }}"><i class="fa fa-edit"></i> ویرایش </a>
                                    </td>

                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> مدیریت سیستم </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> محصولات </a></li>
                    </ol>
                </nav>
                <div class="card card-default">
                    <div class="card-header">محصولات
                        <a href="{{route('admin.products.create')}}" class="btn btn-dark btn-sm pull-left"><i
                                    class="fa fa-plus-circle"></i> ثبت محصول جدید </a>
                    </div>
                    <div class="card-body">
                        <table id="users" class="table table-hover table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            @include('admin.product.columns')
                            </thead>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{  $product->id  }}</td>
                                    <td>{{  $product->title  }}</td>
                                    <td>{{  $product->category->title  }}</td>

                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ route('admin.products.edit',['id'=>$product->id]) }}"><i class="fa fa-edit"></i> ویرایش </a>
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
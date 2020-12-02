@extends('layouts.app')
@section('title', 'مدیریت سیستم - ')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-3">
            @include('admin.sidebar')
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.dashboard') }}">مدیریت سیستم</a></li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-xs-12">
                            <div class="alert alert-info">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                امروز  {{ \Morilog\Jalali\Jalalian::forge('now')->format('l j %B Y') }}
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-3 col-md-3 col-6">
                            <a class="mb-1 btn btn-primary btn-block" href="#" ><i class="fa fa-plus-circle"></i> فاکتور فروش</a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-6">
                            <a class="mb-1 btn btn-warning btn-block" href="#" ><i class="fa fa-minus-circle"></i> فاکتور خرید</a>
                        </div>

                        <div class="col-sm-3 col-md-3 col-6">
                            <a class="mb-1 btn btn-success btn-block" href="#"><i class="fa fa-arrow-circle-left"></i> ثبت درآمد</a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-6">
                            <a class="mb-1 btn btn-danger btn-block" href="#"><i class="fa fa-arrow-circle-left"></i> ثبت هزینه</a>
                        </div>


                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>


        </div>
    </div>
@endsection
@section('js')

@endsection
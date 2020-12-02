@extends('layouts.app')
@section('title', 'داشبرد - ')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">صفحه اصلی</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard') }}">داشبرد</a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <h1>داشبورد</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            {{--@include('sidebar')--}}
        </div>
        <div class="col-md-9">

            <div class="row justify-content-center">
                <div class="col-md-12 col-xs-12">
                    <div class="alert alert-info">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        امروز  {{ \Morilog\Jalali\Jalalian::forge('now')->format('l j %B Y') }}
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <a class="mb-1 btn btn-warning btn-block" href="{{ route('user.orders') }}" ><i class="fa fa-bars"></i> تاریخچه خرید</a>
                </div>

                <div class="col-md-4">
                    <a class="mb-1 btn btn-primary btn-block" href="#" ><i class="fa fa-money"></i> افزایش موجودی</a>
                </div>

                <div class="col-md-4">
                    <a class="mb-1 btn btn-danger btn-block" href="#"><i class="fa fa-plus"></i> ارسال تیکت</a>
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


        </div>
    </div>
@endsection
@section('js')


@endsection
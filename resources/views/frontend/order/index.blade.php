@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"> داشبورد </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> سفارشات </a></li>
                    </ol>
                </nav>
                <div class="card card-default">
                    <div class="card-header">
                        لیست سفارشات
                    </div>
                    <div class="card-body">
                        <table id="users" class="table table-hover table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            @include('frontend.order.columns')
                            </thead>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{  $order->id  }}</td>
                                {{--    <td>{{  $order->user->name  }}</td>
                                    <td>{{  $order->user->email  }}</td>--}}
                                    <td>{{  $order->product->title  }}</td>
                                    <td>{{  $order->product->amount  }}</td>
                                    <td>  {{ \Morilog\Jalali\Jalalian::forge($order->created_at)->format('Y/m/d h:m:s') }}</td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                    <br>
                    <br>
                    <br>

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
            </div>
        </div>
    </div>
@endsection
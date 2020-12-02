@extends('layouts.app')

@section('title', $product->title . "-")

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('product.show',['id' => $product->id]) }}">{{ $product->title }}</a></li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $product->title }}
                        <small class="text-muted">{{ $product->desc_short }}</small>

                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">



                            <a href="{{ route('product.buy',['id'=>$product->id]) }}" class="btn btn-mobile btn-warning btn-lg btn-block"><i class="fa fa-cart-plus"></i> خرید محصول</a>

                    <ul class="list-group mt-2">
                        <li class="list-group-item">قیمت:
                                <strong>{{number_format($product->amount)}}</strong> تومان

                        </li>

                        <li class="list-group-item">تاریخ ایجاد محصول:{{ \Morilog\Jalali\Jalalian::forge($product->created_at)->format('Y/m/d') }}</li>
                        <li class="list-group-item">تاریخ بروز رسانی محصول:{{ \Morilog\Jalali\Jalalian::forge($product->updated_at)->ago() }}</li>
                    </ul>
                </div>

                <div class="col-md-9">
                    <img class="card-img-top mb-2" src="{{ Storage::url($product->image) }}" alt="image" style="width:70%; height: 200px">
                    <br>
                    <small>
                        {{ $product->desc_short }}
                    </small>
                    <br>
                    <br>
                    <br>
                    <p>
                        {{ $product->description }}
                    </p>
                    <br>
                    <br>
                    <br>  <br>
                    <br>
                    <br>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('js')

@endsection

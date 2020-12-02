@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
            <h1>مبلمان آرزو
                {{--<small class="text-muted">تست</small>--}}

            </h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="width: 100%;height: 400px">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('slider/images.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('slider/images1.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('slider/download.jpg') }}" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('slider/download1.jpg') }}" alt="Third slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row justify-content-center mb-2">
        @foreach($products as $product)
            <div class="col-md-3 col-sm-3">
                <div class="card mb-2">
                    <img class="card-img-top" src="{{ Storage::url($product->image) }}" alt="image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title"><a href="#">{{$product->title}}</a></h4>
                        <p class="card-text">
                                قیمت:
                                <strong>{{number_format($product->amount)}}</strong> تومان

                            <br />
                            {{ $product->desc_short }}
                        </p>
                        <div class="row">
                            <div class="col"><a href="{{ route('product.show',['id'=>$product->id]) }}" class="btn btn-danger btn-block btn-sm"><i class="fa fa-eye"></i>  مشاهده</a></div>

                            <div class="col"><a href="{{ route('product.buy',['id'=>$product->id]) }}" class="btn btn-warning btn-block btn-sm"><i class="fa fa-cart-plus"></i> خرید محصول</a></div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            {{ $products->links() }}
    </div>


    .
@endsection

@section('js')

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        خرید محصول {{ $product->title }}
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            <p>
                                اطلاعات خرید
                            </p>
                        </div>
                        <table class="table table-bordered table-condensed table-hover">
                            <tr>
                                <td>عنوان محصول</td>
                                <td>{{ $product->title  }}</td>
                            </tr>
                            <tr>
                                <td>گروه محصول</td>
                                <td>{{ $product->category->title  }}</td>
                            </tr>
                            <tr>
                                <td>قیمت</td>
                                <td>{{ number_format($product->amount ) }}</td>
                            </tr>

                        </table>
                    </div>
                    <div class="card-footer">
                        <form method="POST" action="{{ route('product.payment',['id'=>$product->id]) }}">
                            @csrf

                            <div class="form-group col-md-7 offset-md-0">


                                <div class="form-group row">
                                    <label for="type" class="col-md-4 col-form-label text-md-right">انتخاب درگاه پرداخت</label>
                                    <div class="col-md-6">
                                        <select id="bank" name="bank" class="select2 form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}">
                                            <option value="saman"{{old('bank') == 'saman' ? ' selected' : ''}}>سامان</option>
                                            <option value="pasargad"{{old('bank') == 'pasargad' ? ' selected' : ''}}>پاسارگاد</option>
                                            <option value="zarinpal"{{old('bank') == 'zarinpal' ? ' selected' : ''}}>زرین پال</option>
                                        </select>
                                        @if ($errors->has('bank'))
                                            <span class="invalid-feedback">
                                            <strong>{{ $errors->first('bank') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0 col-md-7 offset-md-0">
                                <label for="type" class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-block btn-sm btn-success">
                                        پرداخت
                                    </button>
                                </div>
                            </div>
                        </form>
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
    </div>
@endsection


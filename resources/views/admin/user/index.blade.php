@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">مبلمان آرزو</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> مدیریت سیستم </a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#"> کاربران </a></li>
                    </ol>
                </nav>
                <div class="card card-default">
                    <div class="card-header">کاربران

                    </div>
                    <div class="card-body">
                        <table id="users" class="table table-hover table-striped table-bordered" cellspacing="0"
                               width="100%">
                            <thead>
                            @include('admin.user.columns')
                            </thead>
                       @foreach($users as $user)
                                <tr>
                                    <td>{{  $user->name  }}</td>
                                    <td>{{  $user->email  }}</td>
                                    <td>
                                        @if ($user->role == 'admin')
                                            مدیر سایت
                                            @else
                                            کاربر عادی
                                        @endif
                                    </td>

                                    <td>
                                        <a class="btn btn-sm btn-success" href="#"><i class="fa fa-list"></i> لیست خرید ها </a>
                                    </td>

                                </tr>
                           @endforeach
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
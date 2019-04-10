@extends('layouts.app')

@section('content')
@guest
        <a href="{{ route('login') }}">{{ __('Login') }}</a>

    @if (Route::has('register'))

            <a  href="{{ route('register') }}">{{ __('Register') }}</a>

    @endif
@else
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/People">
                            @csrf

                            <div class="form-group row">
                                <label for="cars" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทรถขนส่ง') }}</label>

                                <div class="col-md-6">
                                    <input  id="cars" type="text" class="form-control{{ $errors->has('cars') ? ' is-invalid' : '' }}" name="cars" value="{{ old('cars') }}" required autofocus>

                                    @if ($errors->has('car'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="/People">
        @csrf
        <center><p>รายละเอียดบริการ</p></center>
        ประเภทรถขนส่ง<br>
        <input type="text" name="cars" >
        <br>
        แรงงานยกสินค้า <br>
        <input type="text" name="labor" >
        <br>
        ประเภทสินค้า <br>
        <input type="text" name="product" >
        <br>
        ต้นทาง <br>
        (กรุณาระบุจังหวัด และ อำเภอ)<br>
        <input type="text" name="start" >
        <br>
        ชื่อผู้ติดต่อ<br>
        <input type="text" name="namestart" >
        <br>
        ปลายทาง<br>
        (กรุณาระบุจังหวัด และ อำเภอ)<br>
        <input type="text" name="destination" >
        <br>
        ชื่อผู้ติดต่อ<br>
        <input type="text" name="namedestination" >
        <br>
        <br>
        <input type="submit" value="Submit">

    </form>
@endguest
@endsection

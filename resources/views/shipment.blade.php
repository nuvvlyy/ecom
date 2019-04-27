@extends('layouts.app')
@section('content')
    @guest
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                @csrf
                            </form>
                        </div>

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-3">
                            @if (Route::has('register'))

                                <p style="margin-top: 20px">Don't have a account ? |  <a  href="{{ route('register') }}">{{ __('Register Here!') }}</a></p>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endif
    @else
    <div class="container">
        <br>
        {{--<p>The .table-bordered class adds borders to a table:</p>--}}
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>order id</th>
                <th>สถานะ</th>
                <th>ต้นทาง</th>
                <th>ปลายทาง</th>
                <th>หมายเหตุ</th>
            </tr>
            </thead>
            <tbody>
            @if(count($status)== 0)
                <tr>
                    <td colspan="6" class="align-content-center">ไม่มีข้อมูล</td>
                </tr>
             @else
            @foreach($status as $s)
                <tr>
                    <td>{{$s['order_id']}}</td>
                    <td>{{$s['status']}}</td>
                    <td>{{$s['start']}}</td>
                    <td>{{$s['destination']}}</td><td>
                    @if ($s->status === "รอดำเนินการ")
                        <a class="btn btn-dark" href="/payment">จ่ายเงิน</a>

                    @else
                         <button class="btn btn-dark" disabled>จ่ายเงิน</button>
                    </td>
                    @endif
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
    @endguest
@endsection

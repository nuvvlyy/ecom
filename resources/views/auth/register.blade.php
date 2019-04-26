@extends('layouts.app')

@section('content')
    <div class="container"></div>,<div class="container">

        <div class="stepwizard col-md-offset-3">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Step 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Step 3</p>
                </div>
            </div>
        </div>

        <form role="form" action="" method="post">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 1</h3>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">{{ __('Register') }}</div>

                                        <div class="card-body">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                    <div class="col-md-6">
                                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                                        @if ($errors->has('name'))
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
                                                div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label for="nameoforcompany" class="col-md-4 col-form-label text-md-left">{{ __('ชื่อบริษัท') }}</label>
                                                    <input id="nameoforcompany"  type=text" class="labor form-control{{ $errors->has('nameoforcompany') ? ' is-invalid' : '' }}" name="nameoforcompany" value="0"  required >

                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="idoftax" class="col-md-10 col-form-label text-md-left">{{ __('เลขประจำตัวผู้เสียภาษีอากร') }}</label>
                                                    <input id="idoftax"  type="text" class="labor form-control{{ $errors->has('idoftax') ? ' is-invalid' : '' }}" name="idoftax" value="0"  required >
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label for="field" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                                    <input id="field"  type="text" class="labor form-control{{ $errors->has('field') ? ' is-invalid' : '' }}" name="field"   required >
                                                </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-10">
                                                <label for="addressofcom" class="col-md-10 col-form-label text-md-left">{{ __('ที่อยู่บริษัท') }}</label>
                                                <input id="addressofcom"  type="text" class="labor form-control{{ $errors->has('addressofcom') ? ' is-invalid' : '' }}" name="addressofcom"  value="ไทย" required >
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="zipcode" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                                <input id="zipcode"  type="text" class="labor form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode"   required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="country" class="col-md-10 col-form-label text-md-left">{{ __('ประเทศ') }}</label>
                                                <input id="country"  type="text" class="labor form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country"   required >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="city" class="col-md-10 col-form-label text-md-left">{{ __('จังหวัด') }}</label>
                                                <input id="city"  type="text" class="labor form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city"   required >
                                            </div>
                                            {{--<div class="form-group col-md-4">--}}
                                            {{--<label for="inputState">State</label>--}}
                                            {{--<select id="inputState" class="form-control">--}}
                                            {{--<option selected>Choose...</option>--}}
                                            {{--<option>...</option>--}}
                                            {{--</select>--}}
                                            {{--</div>--}}

                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="zone" class="col-md-10 col-form-label text-md-left">{{ __('เขต/อำเภอ') }}</label>
                                                <input id="zone"  type="text" class="labor form-control{{ $errors->has('zone') ? ' is-invalid' : '' }}" name="zone"   required >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tel" class="col-md-10 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                                                <input id="tel"  type="text" class="labor form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"   required >
                                            </div>
                                        </div>
                                        {{--<div class="form-group">--}}
                                        {{--<div class="form-check">--}}
                                        {{--<input class="form-check-input" type="checkbox" id="gridCheck">--}}
                                        {{--<label class="form-check-label" for="gridCheck">--}}
                                        {{--Check me out--}}
                                        {{--</label>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        <button type="submit" class="btn btn-primary">Sign in</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 2</h3>
                        <div class="container">
                            <div class="row m-5">
                                <div class="col-10 border">

                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="nameoforcompany" class="col-md-4 col-form-label text-md-left">{{ __('ชื่อบริษัท') }}</label>
                                            <input id="nameoforcompany"  type=text" class="labor form-control{{ $errors->has('nameoforcompany') ? ' is-invalid' : '' }}" name="nameoforcompany" value="0"  required >

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="idoftax" class="col-md-10 col-form-label text-md-left">{{ __('เลขประจำตัวผู้เสียภาษีอากร') }}</label>
                                            <input id="idoftax"  type="text" class="labor form-control{{ $errors->has('idoftax') ? ' is-invalid' : '' }}" name="idoftax" value="0"  required >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="field" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                            <input id="field"  type="text" class="labor form-control{{ $errors->has('field') ? ' is-invalid' : '' }}" name="field"   required >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-10">
                                            <label for="addressofcom" class="col-md-10 col-form-label text-md-left">{{ __('ที่อยู่บริษัท') }}</label>
                                            <input id="addressofcom"  type="text" class="labor form-control{{ $errors->has('addressofcom') ? ' is-invalid' : '' }}" name="addressofcom"  value="ไทย" required >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="zipcode" class="col-md-10 col-form-label text-md-left">{{ __('สาขา') }}</label>
                                            <input id="zipcode"  type="text" class="labor form-control{{ $errors->has('zipcode') ? ' is-invalid' : '' }}" name="zipcode"   required >
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="country" class="col-md-10 col-form-label text-md-left">{{ __('ประเทศ') }}</label>
                                            <input id="country"  type="text" class="labor form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country"   required >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city" class="col-md-10 col-form-label text-md-left">{{ __('จังหวัด') }}</label>
                                            <input id="city"  type="text" class="labor form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city"   required >
                                        </div>
                                        {{--<div class="form-group col-md-4">--}}
                                        {{--<label for="inputState">State</label>--}}
                                        {{--<select id="inputState" class="form-control">--}}
                                        {{--<option selected>Choose...</option>--}}
                                        {{--<option>...</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="zone" class="col-md-10 col-form-label text-md-left">{{ __('เขต/อำเภอ') }}</label>
                                            <input id="zone"  type="text" class="labor form-control{{ $errors->has('zone') ? ' is-invalid' : '' }}" name="zone"   required >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tel" class="col-md-10 col-form-label text-md-left">{{ __('เบอร์โทรศัพท์') }}</label>
                                            <input id="tel"  type="text" class="labor form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel"   required >
                                        </div>
                                    </div>
                                    {{--<div class="form-group">--}}
                                    {{--<div class="form-check">--}}
                                    {{--<input class="form-check-input" type="checkbox" id="gridCheck">--}}
                                    {{--<label class="form-check-label" for="gridCheck">--}}
                                    {{--Check me out--}}
                                    {{--</label>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    <button type="submit" class="btn btn-primary">Sign in</button>

                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                        <h3> Step 3</h3>
                        <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Previous</button>
                        <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('bg')
    <div class="site-section bg-image overlay" style="background-image: url(https://sapling-inc.com/wp-content/uploads/logistics.png);width: 100%;height: 100%" data-aos="fade" data-stellar-background-ratio="0.5">

@endsection
@section('end')
    </div>
@endsection

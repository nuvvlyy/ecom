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
                                    <div class="cc-selector">
                                        <input id="sfourwhell" type="radio" name="typewhell"  />
                                        <label  class="drinkcard-cc sfourwhell" for="sfourwhell"></label>
                                        <input id="ssixwhell" type="radio" name="typewhell"  />
                                        <label class="drinkcard-cc ssixwhell"for="ssixwhell"></label>
                                    </div>
                                    <div  class="cc-selector typefourwhell">
                                        <input id="fourwhell" type="radio" name="cars" value="TFO" />
                                        <label class="drinkcard-cc fourwhell" for="fourwhell" ></label>
                                        <input id="fourwhell-STALL" type="radio" name="cars" value="TFS" />
                                        <label class="drinkcard-cc fourwhell-STALL"for="fourwhell-STALL"></label>
                                    </div>
                                    <div id="typesixwhell"class="cc-selector">
                                        <input id="sixwhell" type="radio" name="cars"  value="TSO"  />
                                        <label class="drinkcard-cc sixwhell" for="sixwhell"></label>
                                        <input id="sixwhell-STALL" type="radio" name="cars"  value="TSS"  />
                                        <label class="drinkcard-cc sixwhell-STALL"for="sixwhell-STALL"></label>
                                    </div>

                                    @if ($errors->has('cars'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cars') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="labor" class="col-md-4 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
                                <input type="button" id="decrease" value="-" /> <input id="labor" style="width: 45px" type=text" class="form-control{{ $errors->has('labor') ? ' is-invalid' : '' }}" name="labor" value="0"  required>
                                <input type="button" id="increase" value="+" />
                                <div class="col-md-6">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทสินค้า ') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="product" id="product" required>
                                        <option selected disabled >โปรดเลือก</option>
                                        <option value="1" >สินค้ายานยนต์ เช่น น้ำมันใส น้ำมันเครื่อง ยางรถยนต์ แบตเตอรี่ และ อื่น ๆ</option>
                                        <option value="2" >สินค้าอาหาร และ เครื่องดื่ม (ไม่ต้องควบคุมอุณหภูมิ)</option>
                                        <option value="3" >สินค้าอาหาร และ เครื่องดื่ม (ควบคุมอุณหภูมิ)</option>
                                        <option value="4">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>
                                        <option value="5">สินค้าเคมีภัณฑ์ เช่น เม็ดพลาสติก</option>
                                        <option value="6">สสินค้าแร่ และ พลังงาน เช่น ถ่านหิน แร่ต่าง ๆ</option>
                                        <option value="7">สสินค้าวัสดุก่อสร้าง เช่น ปูน เหล็ก กระเบื้อง สุขภัณฑ์</option>
                                        <option value="8">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>
                                        <option value="9">สสินค้ากระดาษ บรรจุภัณฑ์ เช่น กระดาษม้วน กระดาษลัง</option>
                                        <option value="10">สินค้าอุปโภค บริโภค หรือ FMCG</option>
                                    </select>

                                    @if ($errors->has('product'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="start" class="col-md-4 col-form-label text-md-right">{{ __('ต้นทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
                                <div class="col-md-6">
                                    <input id="start" type="text" class="form-control" name="start" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
                                <div class="col-md-6">
                                    <input id="namestart" type="text" class="form-control" name="namestart" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="destination" class="col-md-4 col-form-label text-md-right">{{ __('ปลายทาง') }}<p>(กรุณาระบุจังหวัด และ อำเภอ)</p></label>
                                <div class="col-md-6">
                                    <input id="destination" type="text" class="form-control" name="destination" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
                                <div class="col-md-6">
                                    <input id="namestart" type="text" class="form-control" name="namestart" required>
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



@endguest


@endsection

@section('scripttype')
        <script >
            $(document).ready( function() {
                var elm = $('#labor');
                function spin( vl ) {
                    if(parseInt( elm.val(), 10 ) + vl <0){
                        elm.val(0);
                    }else
                    elm.val( parseInt( elm.val(), 10 ) + vl );
                }

                $('#increase').click( function() { spin( 1 );  } );
                $('#decrease').click( function() { spin( -1 ); } );
            });

            $(document).ready(function () {
                $('.typefourwhell').hide();
                $('#typesixwhell').hide();
                $('#sfourwhell').click(function () {
                    $('.typefourwhell').show();
                    $('#typesixwhell').hide();
                });
                $('#ssixwhell').click(function () {
                    $('#typesixwhell').show();
                    $('.typefourwhell').hide();
                });

            });

    </script>
@endsection
@section('styletypewhell')
    <style>
        .cc-selector input{
            margin:0;padding:0;
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
        }
        .fourwhell{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-CABINET.png);}
        .sixwhell{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_CABINET.png);}
        .sfourwhell{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-CABINET.png);}
        .ssixwhell{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_CABINET.png);}
        .fourwhell-STALL{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-STALL.png);}
        .sixwhell-STALL{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_STALL.png);}
        .sixwhell{background-image:url(https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_CABINET.png);}

        .cc-selector input:active +.drinkcard-cc{opacity: .9;}
        .cc-selector input:checked +.drinkcard-cc{
            -webkit-filter: none;
            -moz-filter: none;
            filter: none;
        }
        .drinkcard-cc{
            cursor:pointer;
            background-size:contain;
            background-repeat:no-repeat;
            display:inline-block;
            width:100px;height:70px;
            -webkit-transition: all 100ms ease-in;
            -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
            -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
            -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
        }
        .drinkcard-cc:hover{
            -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
            -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
        }

    </style>
    @endsection

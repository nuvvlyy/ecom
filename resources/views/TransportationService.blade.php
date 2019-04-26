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
        <div class="row m-2">
            <div class="col-5 border">
                <form id="distance_form" action="/">
                    <div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter a location" /> <input id="origin" name="origin" required="" type="hidden" /></div>
                    <div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" placeholder="Enter a location" /> <input id="destination" name="destination" required="" type="hidden" /></div>
                    <div class="form-group">
                        <label for="type_car">ชนิดรถบรรทุก:</label>
                        <select class="form-control" id="type" name="type">
                            <option>กระบะ 4 ล้อหลังคาตู้ทึบควบคุมอุณหภูมิสินค้า</option>
                            <option>กระบะ 4 ล้อตะแกรงเหล็ก</option>
                            <option>กระบะ 4 ล้อหลังคาคู้ทึบ</option>
                            <option>บรรทุก 6 ล้อคอนเทนเนอร์</option>
                            <option>บรรทุก 6 ล้อตะแกรงไม้</option>
                        </select>
                    </div>
                    <div class="form-group"><label>จำนวนรถ: </label> <input class="form-control" id="car_amount" name="car_amount" required="" type="number" min="1" value="1"/></div>

                    <div class="container">
                        <img class="img-responsive" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-REEFER.png?fbclid=IwAR0Mz5lJ24KmscqkhpX3dcFew6FZh24EtulV2AHrbRzbCixLC5hISIVir7g" alt="car" width="150" height="100">
                        <img class="img-responsive" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-STALL.png" alt="car" width="150" height="100">
                        <img class="img-responsive" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-CABINET.png" alt="car" width="150" height="100">
                        <img class="img-responsive" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_CABINET.png" alt="car" width="150" height="100">
                        <img class="img-responsive" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_STALL.png" alt="car" width="150" height="100">
                    </div>
                    <div class="form-group"><label>แรงงานที่ใช้(คน): </label> <input class="form-control " id="man" name="man" required="" type="number" min="0" value="0"/></div>
                    <div class="form-group"><label>ราคา: </label> <input class="form-control price" id="price" name="price" required="" type="number" disabled/></div>
                    <div class="float">
                        <input class="btn btn-primary " type="submit" value="Calculate"/></div>
                </form>

            </div>



            </div>
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
    <!--Grid row-->
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form  id="order_form" action="/People" method="POST">
                            @csrf

                            <div class="form-group row">
                                <label for="labor" class="col-md-4 col-form-label text-md-right">{{ __('แรงงานยกสินค้า') }}</label>
                                <div class="col-md-6">
                                    <input id="labor" style="width: 45px" type=text" class="labor form-control{{ $errors->has('labor') ? ' is-invalid' : '' }}" name="labor" value="0"  required disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="car" class="col-md-4 col-form-label text-md-right">{{ __('ชนิดรถบรรทุก') }}</label>
                                <div class="col-md-6">
                                    <input id="car"  type=text" class="car form-control{{ $errors->has('car') ? ' is-invalid' : '' }}" name="car" disabled required >
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
                                        <option value="4">สินค้าเกษตร เช่น ข้าวสาร น้ำตาล แป้ง ยางพารา และ อื่น ๆ</option>PRIMARY
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
                                    <input id="start" type="text" class="form-control from_places" name="start" required disabled>
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
                                    <input id="destination" type="text" class="form-control to_places" name="destination" required disabled>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ชื่อผู้ติดต่อ" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อผู้ติดต่อ') }}</label>
                                <div class="col-md-6">
                                    <input id="namedestination" type="text" class="form-control" name="namedestination" required>
                                </div>
                            </div>
                            {{--ราคา--}}
                            <div class="form-group row">
                                <label for="ราคา" class="col-md-4 col-form-label text-md-right">{{ __('ราคา') }}</label>
                                <div class="col-md-6">
                                    <input class="form-control price" id="price" name="price" required type="price" disabled/></div>

                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" type="submit" value="Submit">{{ __('submit') }}</button>

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
            // $(document).ready(function () {
            //     $('.typefourwhell').hide();
            //     $('#typesixwhell').hide();
            //     $('#sfourwhell').click(function () {
            //         $('.typefourwhell').show();
            //         $('#typesixwhell').hide();
            //     });
            //     $('#ssixwhell').click(function () {
            //         $('#typesixwhell').show();
            //         $('.typefourwhell').hide();
            //     });
            //
            // });
            $(function () {
                $('#order_form').submit(function () {
                    $("input.price").attr("value", sessionStorage.getItem("get_price"));
                    $("input.from_places").attr("value", sessionStorage.getItem("get_origin"));
                    $(".to_places").attr("value", sessionStorage.getItem("get_destination"));
                    alert("Submitted");
                });
            });
            $(function() {
                // add input listeners
                google.maps.event.addDomListener(window, 'load', function () {
                    var from_places = new google.maps.places.Autocomplete(document.getElementById('from_places'));
                    var to_places = new google.maps.places.Autocomplete(document.getElementById('to_places'));

                    google.maps.event.addListener(from_places, 'place_changed', function () {
                        var from_place = from_places.getPlace();
                        var from_address = from_place.formatted_address;
                        $('#origin').val(from_address);
                    });

                    google.maps.event.addListener(to_places, 'place_changed', function () {
                        var to_place = to_places.getPlace();
                        var to_address = to_place.formatted_address;
                        $('#destination').val(to_address);
                    });

                });
                // calculate distance
                function calculateDistance() {
                    var origin = $('#origin').val();
                    var destination = $('#destination').val();
                    var service = new google.maps.DistanceMatrixService();
                    service.getDistanceMatrix(
                        {
                            origins: [origin],
                            destinations: [destination],
                            travelMode: google.maps.TravelMode.DRIVING,
                            unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                            // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                            avoidHighways: false,
                            avoidTolls: false
                        }, callback);
                }
                // get distance results
                function callback(response, status) {
                    if (status != google.maps.DistanceMatrixStatus.OK) {
                        $('#result').html(err);
                    } else {
                        var origin = response.originAddresses[0];
                        var destination = response.destinationAddresses[0];
                        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                            $('#result').html("Better get on a plane. There are no roads between "  + origin + " and " + destination);
                        } else {
                            var distance = response.rows[0].elements[0].distance;
                            var duration = response.rows[0].elements[0].duration;
                            console.log(response.rows[0].elements[0].distance);
                            var distance_in_kilo = distance.value / 1000; // the kilom
                            var distance_in_mile = distance.value / 1609.34; // the mile
                            var type = $('#type').val();
                            var man = $('#man').val();
                            var duration_text = duration.text;
                            var duration_value = duration.value;
                            var price = (distance.value / 1000);
                            var car_amount = $('#car_amount').val();
                            $('#in_mile').text(distance_in_mile.toFixed(2)+" Miles");



                            $('#duration_text').text(duration_text);
                            $('#from').text(origin);
                            $('#to').text(destination);


                            $('#in_kilo').text(distance_in_kilo.toFixed(2)+" กิโลเมตร");
                            $('#type_cars').text(type);
                            $('#man_amount').text(man + " คน");
                            var price_multiplier = 0;
                            var price_cars_type = 0;
                            var price_man = man*400;
                            if(distance_in_kilo>=701){
                                price_multiplier=9;
                            }else if(distance_in_kilo>=501){
                                price_multiplier=10;
                            }else if(distance_in_kilo>=101){
                                price_multiplier=11;
                            }else if(distance_in_kilo>=51){
                                price_multiplier=13;
                            }else if(distance_in_kilo>=31){
                                price_multiplier=17;
                            }else{
                                price_multiplier=19;
                            }
                            if($('#type').val() == "กระบะ 4 ล้อหลังคาตู้ทึบควบคุมอุณหภูมิสินค้า"){
                                price_cars_type = 850;
                            }else if($('#type').val() == "กระบะ 4 ล้อตะแกรงเหล็ก"){
                                price_cars_type = 240;
                            }else if($('#type').val() == "กระบะ 4 ล้อหลังคาคู้ทึบ"){
                                price_cars_type = 240;
                            }else if($('#type').val() == "บรรทุก 6 ล้อคอนเทนเนอร์"){
                                price_cars_type = 1000;
                            }else{
                                price_cars_type = 1000;
                            }
                            var car_multi = price_cars_type*car_amount;
                            price = (price*price_multiplier)+car_multi+price_man;
                            $('#price').text(price.toFixed(2)+" Bath");

                            sessionStorage.setItem("get_price", price);
                            sessionStorage.setItem("get_cars_type", type);
                            sessionStorage.setItem("get_man_amount", man);
                            sessionStorage.setItem("get_destination", destination);
                            sessionStorage.setItem("get_origin", origin);
                            sessionStorage.setItem("get_origin", origin);
                            sessionStorage.setItem("get_distance_in_kilo", distance_in_kilo);
                            sessionStorage.setItem("get_distance_in_mile", distance_in_mile);
                            sessionStorage.setItem("get_duration_text", duration_text);
                            sessionStorage.setItem("get_car_amount", car_amount);

                            var temp=ss_form_type;
                            $("#type").val(temp)
                            $('.labor').attr("value", man);
                            document.getElementsByName("car").value = type;
                        }
                    }
                }
                // print results on submit the form
                $('#distance_form').submit(function(e){
                    e.preventDefault();
                    calculateDistance();
                });


            });
            function initialize() {
                var mapOptions = {
                    center: new google.maps.LatLng(13.818858, 100.043335),
                    zoom: 12
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"),
                    mapOptions);
            }

            google.maps.event.addDomListener(window, 'load', initialize);


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

@extends('layouts.app')
@section('content')
<!-- Full Page Intro -->
<div class="view" style="background-image: url('https://i.imgur.com/mJCb1a0.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 800px">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->

            <div class="row">
                <!--Grid column-->
                <div class="col-md-3 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">

                </div>
                <!--Grid column-->
                <div  class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5" style="text-align: center;">บริการรถขนส่ง</h1>
                    <hr class="hr-light">
                    <div class="test" id ="test" name="test">hello</div>
                    <h6 class="mb-4">บริการจองรถขนส่งที่ทั้งง่ายและปลอดภัย ทำให้ธุรกิจคุณหมดกังวล
                        ด้วยระบบติดตามสถานะงานขนส่งที่ละเอียดและเป็นเอกลักษณ์ </h6>
                    <p class="lead text-center ">
                        <a class="btn btn-light btn-lg  " href="#cal" role="button">เช็คราคา</a>
                    </p>

                </div>
                <!--Grid column-->
                <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
</div>
<!-- Full Page Intro -->

<!-- Main navigation -->
<!--Main Layout-->
<main>

    <div class="container">
        <!--Grid row-->
        <div class="row py-5">
            <!--Grid column-->
            {{--<div class="col-md-12 text-center">--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}
            {{--</div>--}}
            <div class="site-section">
                <div class="container">
                    <div class="row ">
                        <div class="col align-self-center text-center">
                        <h4 class="mb-0">ตรวจสอบค่าจัดส่ง</h4>
                        <p>*ค่าจัดส่งดังกล่าวเป็นการคำนวนโดยประมาณ อาจจะมีค่าใช้จ่ายเพิ่มเติมตามความเหมาะสม</p>
                        </div>
                    </div>

                    <div class="row m-2">
                        <div class="col-5 borde-dark mb-3">
                            <form id="distance_form">
                                <div class="form-group"><label>Origin: </label> <input class="form-control" id="from_places" placeholder="Enter a location" /> <input id="origin" name="origin" required="" type="hidden" /></div>
                                <div class="form-group"><label>Destination: </label> <input class="form-control" id="to_places" placeholder="Enter a location" /> <input id="destination" name="destination" required="" type="hidden" /></div>
                                <div class="form-group">
                                    <label for="type_car">ชนิดรถบรรทุก:</label>
                                    <select class="form-control" id="type" name="type">
                                        <option>กระบะ 4 ล้อตะแกรงเหล็ก</option>
                                        <option>กระบะ 4 ล้อหลังคาคู้ทึบ</option>
                                        <option>บรรทุก 6 ล้อคอนเทนเนอร์</option>
                                        <option>บรรทุก 6 ล้อตะแกรงไม้</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>จำนวนรถ: </label> <input class="form-control" id="car_amount" name="car_amount" required="" type="number" min="1" value="1"/></div>
                                <div class="form-group"><label>แรงงานที่ใช้(คน): </label> <input class="form-control" id="man" name="man" required="" type="number" min="0" value="0"/></div>
                                <div class="float"><input class="btn btn-primary" type="submit" value="Calculate"/></div></form>
                        </div>
                        <div class="col-4 ">

                            <div id="result" class="w-100" >
                                <div action="post">
                                <ul style="width: 600px" class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(ไมล์) :
                                        <span class="badge  " id="in_mile"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(กิโลเมตร):
                                        <span class="badge  badge-primary badge-pill" id="in_kilo"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">ชนิดรถบรรทุก:
                                        <span class="badge badge-primary badge-pill" id="type_cars"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">จำนวนรถ:
                                        <span class="badge badge-primary badge-pill" id="car_amounts"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">จำนวนแรงงาน(คน):
                                        <span class="badge badge-primary badge-pill" id="man_amount"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะเวลาขนส่งต่อรอบ:
                                        <span class="badge badge-primary badge-pill" id="duration_text"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Price:
                                        <span class="badge badge-primary badge-pill" name="price" id="price"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center" >FROM:
                                        <span class="badge badge-primary badge-pill" id="from"></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">TO:
                                        <span class="badge badge-primary badge-pill" id="to"></span>
                                    </li>
                                </ul>
                            </div>
                            <div class=" text-right">
                            <a type="button" class="btn btn-secondary" href="/home">สนใจใช้บริการ</a>
                            </div>
                        </div>



                    </div>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        <!--Grid row-->
    </div>
        <div class="container" id="cal">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-4 align-items-center" style="margin-bottom:100px; ">
                    <div class="btn-group" role="group" style="margin-left:100px; ">
                        <button type="button" id="btnfourwheel" class=" btn btn-primary ">4 ล้อ</button>
                        <button type="button" id="btnsixwheel" class=" btn btn-primary ">6 ล้อ</button>
                    </div>
                </div>
                <div class="col-5"></div>
            </div>
        </div>
    <div class="container"  id="cal">
        <!--4 wheel-->
        <div class="row" style="margin-top: 60px">
            <div class="col-4 white-text text-center wheel-4" style="width: 10px;">
                <img class="card-img-top" style="margin-top: -100px ;margin-left:45px;width: 240px;height: 160px;" src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-CABINET.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">รถ 4 ล้อตู้ทึบ</h5>
                    <p class="card-text">ขนาด 150x175x(น้อยกว่า 250) ซม.
                        น้ำหนักบรรทุกสูงสุด 1.5 ตัน</p>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งต่อเที่ยว</div>
                        <div class ="col-4 text-right">240 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งขั้นต่ำ</div>
                        <div class ="col-4 text-right">600 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">288 กม.ขึ้นไป ส่วนลด</div>
                        <div class ="col-4 text-right">10%</div>
                    </div>
                    <div class ="row" style="margin-top: 14px;">
                        <div class ="col-8 text-left"><b>ระยะทาง(กม.)</b></div>
                        <div class ="col-4 text-right"><b>ราคา ต่อ กม.</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">0 - 30</div>
                        <div class ="col-4 text-right"><b>20 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">31 - 51</div>
                        <div class ="col-4 text-right"><b>17 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row" style="margin-top: 0px;">
                        <div class ="col-8 text-left">51 - 100</div>
                        <div class ="col-4 text-right"><b>14 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">101 - 500</div>
                        <div class ="col-4 text-right"><b>12 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">501 - 700</div>
                        <div class ="col-4 text-right"><b>11 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">701 ขึ้นไป</div>
                        <div class ="col-4 text-right"><b>10 บาท</b> </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-4 white-text text-center wheel-4" style="width: 18rem;">
                <img class="card-img-top" style="margin-top: -100px ;margin-left:45px;width: 240px;height: 160px;"src="https://www.giztix.com/static/media/03-PICKUP_STALL.7ae77d16.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">รถ 4 ล้อตู้ทึบ</h5>
                    <p class="card-text">ขนาด 150x175x(น้อยกว่า 250) ซม.
                        น้ำหนักบรรทุกสูงสุด 1.5 ตัน</p>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งต่อเที่ยว</div>
                        <div class ="col-4 text-right">240 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งขั้นต่ำ</div>
                        <div class ="col-4 text-right">600 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">288 กม.ขึ้นไป ส่วนลด</div>
                        <div class ="col-4 text-right">10%</div>
                    </div>
                    <div class ="row" style="margin-top: 14px;">
                        <div class ="col-8 text-left"><b>ระยะทาง(กม.)</b></div>
                        <div class ="col-4 text-right"><b>ราคา ต่อ กม.</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">0 - 30</div>
                        <div class ="col-4 text-right"><b>19 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">31 - 51</div>
                        <div class ="col-4 text-right"><b>17 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">51 - 100</div>
                        <div class ="col-4 text-right"><b>17 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">101 - 500</div>
                        <div class ="col-4 text-right"><b>11 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">501 - 700</div>
                        <div class ="col-4 text-right"><b>10 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">701 ขึ้นไป</div>
                        <div class ="col-4 text-right"><b>9 บาท</b> </div>
                    </div>
                    <hr>
                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="col-4 white-text text-left wheel-4" style="width: 18rem;">
                <h3>เงื่อนไขการใช้บริการ</h3>
                <b>เงื่อนไขราคา</b><br>
                1. ราคาดังกล่าวไม่รวมค่าจอดรถ<br>
                2. ไม่รวมค่าเข้าสนามบิน/ท่าเรือ<br>
                3. ไม่รวมข้ามเกาะ และ 3 จังหวัด ดังต่อไปนี้ ยะลา ปัตตานี นราธิวาส

            </div>
        </div>
        <!--4 wheel-->
        <!--6 wheel-->

        <div class="row"  style="margin-top: 60px">

            <div class="col-4 white-text text-center wheel-6" style="width: 10px;">
                <img class="card-img-top" style="margin-top: -100px ;margin-left:45px;width: 240px;height: 160px;" src="https://www.giztix.com/static/media/03-6WHEELS_STALL.3da52ca2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">รถ 6 ล้อตู้คอก 6.5 เมตร</h5>
                    <p class="card-text">ขนาด 240x650x(น้อยกว่า 300) ซม.
                        น้ำหนักบรรทุกสูงสุด 6 ตัน</p>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่ง 4,500 ขึ้นไปรับส่วนลด</div>
                        <div class ="col-4 text-right">1,000 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งขั้นต่ำ</div>
                        <div class ="col-4 text-right">2,700 บาท</div>
                    </div>

                    <div class ="row" style="margin-top: 14px;">
                        <div class ="col-8 text-left"><b>ระยะทาง(กม.)</b></div>
                        <div class ="col-4 text-right"><b>ราคา ต่อ กม.</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">0 - 40</div>
                        <div class ="col-4 text-right"><b>52 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">41 - 100</div>
                        <div class ="col-4 text-right"><b>40 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">101 - 200</div>
                        <div class ="col-4 text-right"><b>29 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row" style="margin-top: 0px;">
                        <div class ="col-8 text-left">201 - 300</div>
                        <div class ="col-4 text-right"><b>20 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">301 - 400</div>
                        <div class ="col-4 text-right"><b>20 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">401 - 700</div>
                        <div class ="col-4 text-right"><b>18 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">701 ขึ้นไป</div>
                        <div class ="col-4 text-right"><b>16 บาท</b> </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="col-4 white-text text-center wheel-6" style="width: 18rem;">
                <img class="card-img-top" style="margin-top: -100px ;margin-left:45px;width: 240px;height: 160px;"src="https://www.giztix.com/static/media/01-6WHEELS_CABINET.2fdc95ff.png" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">รถ 6 ล้อตู้ทึบ 6.5 เมตร</h5>
                    <p class="card-text">ขนาด 240x650x(น้อยกว่า 300) ซม.
                        น้ำหนักบรรทุกสูงสุด 6 ตัน</p>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่ง 4,500 ขึ้นไปรับส่วนลด</div>
                        <div class ="col-4 text-right">1,000 บาท</div>
                    </div>
                    <div class ="row">
                        <div class ="col-8 text-left">ค่าบริการขนส่งขั้นต่ำ</div>
                        <div class ="col-4 text-right">2,850 บาท</div>
                    </div>

                    <div class ="row" style="margin-top: 14px;">
                        <div class ="col-8 text-left"><b>ระยะทาง(กม.)</b></div>
                        <div class ="col-4 text-right"><b>ราคา ต่อ กม.</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">0 - 40</div>
                        <div class ="col-4 text-right"><b>52 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">41 - 100</div>
                        <div class ="col-4 text-right"><b>40 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">101 - 200</div>
                        <div class ="col-4 text-right"><b>29 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row" style="margin-top: 0px;">
                        <div class ="col-8 text-left">201 - 300</div>
                        <div class ="col-4 text-right"><b>20 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">
                    <div class ="row">
                        <div class ="col-8 text-left">301 - 400</div>
                        <div class ="col-4 text-right"><b>20 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">401 - 700</div>
                        <div class ="col-4 text-right"><b>18 บาท</b> </div>
                    </div>
                    <hr style="margin-top: 10px;padding-bottom: 0px">

                    <div class ="row">
                        <div class ="col-8 text-left">701 ขึ้นไป</div>
                        <div class ="col-4 text-right"><b>16 บาท</b> </div>
                    </div>
                    <hr>

                </div>
            </div>
            <div class="col-4 white-text text-left wheel-6" style="width: 18rem;">
                <h3>เงื่อนไขการใช้บริการ</h3>
                <b>เงื่อนไขราคา</b><br>
                เวลาเข้ารับสินค้าไม่จำกัดช่วงเวลา แต่ต้องทำการจองล่วงหน้า เช่น <br>
                - ต้องการให้รถเข้ารับสินค้าวันที่ 10 เวลา 07.00 ต้องทำการจอง<br>ภายในวันที่ 9 ก่อนเวลา 15.00<br>
                - หากทำการจองวันที่ 9 หลังเวลา 15.01 จะเข้ารับสินค้าได้เร็วสุด<br>
                วันที่ 11 เวลา 00.01<br>
                เงื่อนไขราคา <br>
                1. ราคาดังกล่าวไม่รวมค่าจอดรถ<br>
                2. ไม่รวมค่าเข้าสนามบิน/ท่าเรือ<br>
                3. ไม่รวมข้ามเกาะ และ 3 จังหวัด ดังต่อไปนี้ ยะลา ปัตตานี นราธิวาส<br>

            </div>

        </div>
        <!--6 wheel-->

    </div>

    </div>
    </div>
</main>
<!--Main Layout-->
@endsection
@section('styletypewhell')
    <style>

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 600px;
            }
        }

        .btn .fa {
            margin-left: 3px;
        }



        .btn-white {
            color: black !important;
        }

        h6 {
            line-height: 1.7;
        }

    </style>
    @endsection
@section('scripttype')
    <script>
        $(document).ready(function () {
            sessionStorage.clear();
            $('#test').text(sessionStorage.getItem("get_price"));
            $('.wheel-4').show();
            $('.wheel-6').hide();
            $('#btnfourwheel').click(function () {
                $('.wheel-4').show();
                $('.wheel-6').hide();
            });
            $('#btnsixwheel').click(function () {
                $('.wheel-6').show();
                $('.wheel-4').hide();
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
                        var car_amount = $('#car_amount').val();
                        var duration_text = duration.text;
                        var duration_value = duration.value;
                        var price = (distance.value / 1000);
                        $('#in_mile').text(distance_in_mile.toFixed(2)+" Miles");



                        $('#duration_text').text(duration_text);
                        $('#from').text(origin);
                        $('#to').text(destination);


                        $('#in_kilo').text(distance_in_kilo.toFixed(2)+" กิโลเมตร");
                        $('#type_cars').text(type);
                        $('#man_amount').text(man + " คน");
                        $('#car_amounts').text(car_amount);
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
                        var price_car_sum = price_cars_type*car_amount;
                        price = (price*price_multiplier)+price_car_sum+price_man;
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
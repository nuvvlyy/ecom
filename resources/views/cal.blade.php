@extends('layouts.app')
@section('content')
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script  defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyBoD51rv8pp0IlMu0LW_0IFqRs1Zipq-3I"  type="text/javascript"></script>
    <style type="text/css">
        html { height: 100% }
        body { height: 100%; margin: 0; padding: 0 }
        #map-canvas { height: 300px; width: 250px}
    </style>
    <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoD51rv8pp0IlMu0LW_0IFqRs1Zipq-3I&sensor=SET_TO_TRUE_OR_FALSE"></script>
    <script type="text/javascript">
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
    <div class="Containers md-5 border"><br>
        <div class="row">

            <div class="col-12">
                <div class="active-cyan-4 mb-4 align-content-center" >

                    <a class="btn btn-primary" href="/show" role="button">แสดงคำสั่งซื้อทั้งหมด</a>
                    <a class="btn btn-primary" href="/showstatusAll" role="button">รายงาน</a>
                    <a class="btn btn-primary" href="/Calculater" role="button">คำนวนราคาจัดส่ง</a>

            </div>
            </div>



        </div>


    </div>
</head>
<body>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6" id="map-canvas"></div>
            <div class="col-md-6 border">
                <form id="distance_form">
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
                    <div class="container">
                        <div class ="row">
                            <div class="col "><img class="img-responsive " src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-REEFER.png?fbclid=IwAR0Mz5lJ24KmscqkhpX3dcFew6FZh24EtulV2AHrbRzbCixLC5hISIVir7g" alt="car" width="150" height="100"></div>
                            <div class="col"><img class="img-responsive " src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-STALL.png" alt="car" width="150" height="100"></div>
                            <div class="col"><img class="img-responsive " src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/4-WHEELS-CABINET.png" alt="car" width="150" height="100"></div>
                            <div class="col"><img class="img-responsive " src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_CABINET.png" alt="car" width="150" height="100"></div>
                            <div class="col"><img class="img-responsive " src="https://s3-ap-southeast-1.amazonaws.com/appmedia.giztix.com/upload/setting_truck/6WHELL_STALL.png" alt="car" width="150" height="100"></div>
                        </div>
                    </div>
                    <div class="form-group"><label>แรงงานที่ใช้(คน): </label> <input class="form-control" id="man" name="man" required="" type="number" min="0" /></div>
                    <div class="float-right"><input class="btn btn-primary" type="submit" value="Calculate" /></div></form>
            </div>
            <div id="result" class="w-100 p-3">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(ไมล์) :
                        <span class="badge badge-primary badge-pill" id="in_mile">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะทาง(กิโลเมตร):
                        <span class="badge badge-primary badge-pill" id="in_kilo">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">ชนิดรถบรรทุก:
                        <span class="badge badge-primary badge-pill" id="type_cars">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">จำนวนแรงงาน(คน):
                        <span class="badge badge-primary badge-pill" id="man_amount">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">ระยะเวลาขนส่งต่อรอบ:
                        <span class="badge badge-primary badge-pill" id="duration_text">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">Price:
                        <span class="badge badge-primary badge-pill" id="price">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">FROM:
                        <span class="badge badge-primary badge-pill" id="from">-</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">TO:
                        <span class="badge badge-primary badge-pill" id="to">-</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endsection

@section('')
    <script>
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
                        price = (price*price_multiplier)+price_cars_type+price_man;
                        $('#price').text(price.toFixed(2)+" Bath");
                    }
                }
            }
            // print results on submit the form
            $('#distance_form').submit(function(e){
                e.preventDefault();
                calculateDistance();
            });

        });

    </script>

@endsection
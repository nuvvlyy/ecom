@extends('layouts.app')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!DOCTYPE html>
    <html>
    <style>
        .form-control {

            width:250px;
        }
    </style>
    <div class="Containers md-5 border"><br>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="active-cyan-4 mb-4 " >

                    <a class="btn btn-primary" href="/show" role="button">แสดงคำสั่งซื้อทั้งหมด</a>
                    <a class="btn btn-primary" href="/show/status" role="button">รายงาน</a>
                    <a class="btn btn-primary" href="/Calculater" role="button">คำนวนราคาจัดส่ง</a>

                </div>
            </div>



        </div>


    </div>

    <!-- Search form -->

    </html>
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/data.js"></script>

    <head>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6"><h2><B></B></h2></div>
        </div>
        <table class=  "table table-bordered " >
            <thead>
            <tr>
                <th>รายงานสถานะ</th>
                <th>ประเภทรถ</th>
                <th>สถานะการจ่ายเงิน</th>
                <th>ต้นทาง</th>
                <th>ปลายทาง</th>

            </tr>
            </thead>
            <tbody>
            @foreach($status as $s)
                <tr>
                    <td>{{$s['track_id']}}</td>
                    <td>{{$s['car']}}</td>
                    <td>{{$s['status']}}</td>
                    <td>{{$s['start']}}</td>
                    <td>{{$s['destination']}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>

        <center>
            <ul class="list-group align-self-center " >
                <li class="list-group-item d-flex justify-content-between align-items-center">จำนวนสถานะการจ่ายเงิน:
                    <span class="badge badge-primary badge-pill" id="in_mile"><a class="btn btn-primary center" href="/showtatusG" role="button">แผนภูมิวงกลม</a></span>
                </li>
            </ul>
        </center>
        <br>

    </div>
@endsection
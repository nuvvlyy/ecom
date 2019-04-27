@extends('layouts.app')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
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
            <div>
                <form method="get" action="/searchorderadmin" >
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="Search"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
                    </div>
                </form>
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
        <table class= "table table-striped">
            <thead>
            <tr>
                <th>order_id</th>
                <th>user_id</th>
                <th>car</th>
                <th>labor</th>
                <th>product</th>
                <th>start</th>
                <th>namestart</th>
                <th>destination</th>
                <th>namedestination</th>
                <th>Price</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            @foreach($order as $o)
                <tr>
                    <td>{{$o->order_id}}</td>
                    <td>{{$o['user_id']}}</td>
                    <td>{{$o['car']}}</td>
                    <td>{{$o['labor']}}</td>
                    <td>{{$o['product']}}</td>
                    <td>{{$o['start_county']}}</td>
                    <td>{{$o['namestart']}}</td>
                    <td>{{$o['destination_county']}}</td>
                    <td>{{$o['namedestination']}}</td>
                    <td>{{$o['price']}}</td>
                    <td><a  href="/edit" >Edit</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>

        <center>
            <ul class="list-group align-self-center " >
                {{--<li class="list-group-item d-flex justify-content-between align-items-center">รายได้ทั้งหมดจ้าา :--}}
                    {{--<span class="badge badge-primary badge-pill" id="in_mile"></span>--}}
                {{--</li>--}}
                <li class="list-group-item d-flex justify-content-between align-items-center">สถานที่ขนส่งไปมากที่สุด :
                    <span class="badge badge-primary badge-pill" id="in_mile"><a class="btn btn-primary center" href="/dashboard/bargraph" role="button">แผนภูมิวงกลม</a></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">ประเภทรถที่มีผู้ใช้งานมากที่สุด :
                    <span class="badge badge-primary badge-pill" id="in_mile"><a class="btn btn-primary center" href="/dashboard/piegraph" role="button">แผนภูมิวงกลม</a></span>
                </li>
            </ul>
        </center>
        <br>

    </div>
    </div>
@endsection
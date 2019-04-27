@extends('layouts.app')
@section('content')

        <!DOCTYPE html>
<html>
<head>
    <title></title>

    <script type="text/javascript">
        var analytics = <?php echo $product; ?>

        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart()
        {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title : 'แผนภาพวงกลม'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<br />
<div class="container">
    <h3 align="center"> PieChart จำนวนที่ผู้ใช้เลือกประเภทของรถ</h3><br />

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">PieChart จำนวนที่ผู้ใช้เลือกประเภทของรถ</h3>
        </div>
        <div class="panel-body" align="center">
            <div id="pie_chart" style="width:750px; height:450px;">

            </div>
        </div>
    </div>

</div>
</body>
</html>
@endsection
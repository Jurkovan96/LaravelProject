<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <style type="text/css">

        .box {
            width: 800px;
            margin: 0 auto;
        }
    </style>
    <script type="text/javascript">
        var stats = <?php echo $dataSurvey;?>

        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(stats);
            var options = {
                title: 'Percentage of the answers are: '
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<br/>
<div class="container">


    <div class="panel-body" align="center">


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div id="chart" style="width:750px; height:450px;">

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


</div>
</body>
</html>
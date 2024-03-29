
<html>
    <head>
        <title>Generate Line Chart in PHP</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <style>
            body{
                background: #ccc;
                
            }
            
            #my-chart{
                background: #fff;
                padding: 20px;
            }
            
        </style>
    </head>
    <body>

        <div id="my-chart" style="width: 100%; height: 400px;"></div>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart'],
                'mapsApiKey': ''   // her eyou can put you google map key
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                     <?php
                     $chartQuery = "SELECT YEAR(OrderedTime) AS Year, SUM(od.price) AS TOTAL_SALES FROM order_details od JOIN Product P ON od.ProductID = P.ProductID GROUP BY YEAR";
                     $chartQueryRecords = mysqli_query($con, $chartQuery);
                        while($row = mysqli_fetch_assoc($chartQueryRecords)){
                            echo "['".$row['Year']."',".$row['TOTAL_SALES'].",".$row['expenses']."],";
                        }
                     ?>
                ]);

                var options = {
                   
                };

                var chart = new google.visualization.LineChart(document.getElementById('my-chart'));
                chart.draw(data, options);
            }
        </script>
    </head>
</body>
</html>

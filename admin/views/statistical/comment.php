<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title mx-5 my-3">Biểu đồ thống kê</h2>
                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                <script type="text/javascript">
                    // Load google charts
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    // Draw the chart and set the chart values
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Danh mục', 'Số lượng sản phẩm'],
                            <?php
                            $tongdm = count($info);
                            $i = 1;
                            foreach ($info as $item) {
                                extract($item);
                                if ($i == $tongdm) {
                                    $dau = "";
                                } else {
                                    $dau = ",";
                                };
                                echo "['" . $item['ten_sp'] . "', " . $item['soluong'] . "]" . $dau;
                                $i += 1;
                            }
                            ?>
                        ]);

                        // Optional; add a title and set the width and height of the chart
                        var options = {
                            // 'title': 'Biểu đồ thống kê',
                            'width': 1150,
                            'height': 700
                        };

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            <h1></h1>
            </div>
        </div>
    </div>

</div>

<?php
        foreach($data as $data){
            $bulan[] = $data->bulan;
            $total_pendapatan[] = (int) $data->total_pendapatan;
        }
    ?>
<h2>Grafik Pendapatan</h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
    </div>
    <div class="card-body">
        <div class="chart-bar">

	<canvas id="canvas" width="1000" height="280"></canvas>
	<!--Load chart js-->
	<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
	<script>
            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [
                    {
                        fillColor: "#4b5057",
                        strokeColor: "#0099ff",
                        pointColor: "#0099ff",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "#0099ff",
                        data : <?php echo json_encode ($total_pendapatan);?>
                    }
                ]
            }
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
   	</script>
    <!-- Bar Chart -->

    <canvas id="myBarChart"></canvas>
</div>

</div>

</div>

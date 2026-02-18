<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สรุปยอดขายรายเดือน - นันธิดา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', Tahoma, sans-serif; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .table-header { background-color: #4e73df; color: white; }
    </style>
</head>
<body>

<div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">นันธิดา ไชยนรา (แพม)</h2>
        <p class="text-muted">Dashboard สรุปยอดขายรายเดือน</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold mb-3">ตารางยอดขาย</h5>
                    <table class="table table-hover table-bordered border-light">
                        <thead class="table-header text-center">
                            <tr>
                                <th>เดือน</th>
                                <th>ยอดขายรวม</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once("connectdb.php");
                        $sql = "SELECT MONTH(p_date) AS m, SUM(p_amount) AS total 
                                FROM popsupermarket 
                                GROUP BY MONTH(p_date) 
                                ORDER BY m ASC";
                        $rs = mysqli_query($conn, $sql);
                        $grandTotal = 0;
                        $labels = [];
                        $dataPoints = [];
                        while ($data = mysqli_fetch_array($rs)) {
                            $grandTotal += $data['total'];
                            $labels[] = "เดือน " . $data['m'];
                            $dataPoints[] = $data['total'];
                        ?>
                        <tr>
                            <td class="text-center fw-bold"># <?php echo $data['m']; ?></td>
                            <td class="text-end px-3"><?php echo number_format($data['total'], 0); ?></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        <tfoot class="table-secondary fw-bold">
                            <tr>
                                <td class="text-center">รวมทั้งหมด</td>
                                <td class="text-end px-3 text-primary"><?php echo number_format($grandTotal, 0); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="card p-3">
                        <canvas id="barChart" style="max-height: 250px;"></canvas>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="card p-3">
                        <div style="max-width: 300px; margin: auto;">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const labels = <?php echo json_encode($labels); ?>;
    const dataValues = <?php echo json_encode($dataPoints); ?>;
    const colors = [
        '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', 
        '#858796', '#5a5c69', '#2e59d9', '#17a673', '#2c9faf', '#f4b619', '#e02d1b'
    ];

    // 1. Bar Chart
    new Chart(document.getElementById('barChart'), {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'ยอดขายรวม',
                data: dataValues,
                backgroundColor: '#4e73df',
                borderRadius: 7
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true, grid: { display: false } }, x: { grid: { display: false } } }
        }
    });

    // 2. Pie Chart
    new Chart(document.getElementById('pieChart'), {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: dataValues,
                backgroundColor: colors,
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
        },
        options: {
            responsive: true,
            plugins: { 
                legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 11 } } }
            }
        }
    });
</script>

<?php mysqli_close($conn); ?>
</body>
</html>
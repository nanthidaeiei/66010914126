<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ผลการสมัครงาน - บริษัท สมองมี จำกัด</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 50%, #f48fb1 100%);
        min-height: 100vh;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
    }

    .card-header {
        background: linear-gradient(90deg, #ec407a, #f48fb1);
        border-bottom: none;
    }

    .card-body {
        background: #ffffffee;
        backdrop-filter: blur(5px);
    }

    .card-footer {
        background: #fff0f6;
    }

    .btn-primary {
        background: linear-gradient(90deg, #ec407a, #f06292);
        border: none;
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, #d81b60, #ec407a);
    }

    .text-title {
        color: #d81b60;
    }

</style>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-white text-center py-3">
            <h3 class="mb-0">ผลการส่งใบสมัครงาน</h3>
        </div>

        <div class="card-body p-4">

<?php
if ($_POST) {
    echo "<h4 class='text-title'>ข้อมูลผู้สมัคร</h4><hr>";

    echo "<strong>ตำแหน่งที่สมัคร:</strong> ".$_POST['position']."<br>";
    echo "<strong>คำนำหน้า:</strong> ".$_POST['title']."<br>";
    echo "<strong>ชื่อ-สกุล:</strong> ".$_POST['fullname']."<br>";
    echo "<strong>วันเกิด:</strong> ".$_POST['birthday']."<br>";
    echo "<strong>ระดับการศึกษา:</strong> ".$_POST['education']."<br>";
    echo "<strong>ความสามารถพิเศษ:</strong> ".$_POST['skill']."<br>";
    echo "<strong>ประสบการณ์ทำงาน:</strong> ".$_POST['experience']."<br>";
    echo "<strong>โทรศัพท์:</strong> ".$_POST['phone']."<br>";
    echo "<strong>อีเมล:</strong> ".$_POST['email']."<br>";
    echo "<strong>ที่อยู่:</strong> ".$_POST['address']."<br>";
}
?>

        </div>

        <div class="card-footer text-center py-3">
            <a href="e.php" class="btn btn-primary px-4">กลับไปหน้าแบบฟอร์ม</a>
        </div>

    </div>
</div>

</body>
</html>

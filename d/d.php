<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914126 นันธิดา ไชยนรา</title>

<style>
    body {
        font-family: "Sarabun", sans-serif;
        background: #f2f7f3;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        padding: 20px;
        background: #0b5c38;
        color: white;
        margin: 0 0 25px 0;
        font-size: 28px;
        border-bottom: 4px solid #094c2f;
    }

    form {
        width: 55%;
        margin: auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        border: 1px solid #d9e6df;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        font-size: 18px;
    }

    label {
        font-weight: 600;
    }

    input, textarea, select {
        width: 100%;
        padding: 10px;
        margin-top: 8px;
        margin-bottom: 18px;
        border-radius: 6px;
        border: 1px solid #c9d9d0;
        font-size: 16px;
        background: #fafcfb;
    }

    input:focus, textarea:focus, select:focus {
        border-color: #0b5c38;
        outline: none;
    }

    button {
        padding: 10px 18px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        margin-right: 8px;
    }

    button[type="submit"] {
        background: #0b5c38;
        color: white;
    }

    button[type="reset"] {
        background: #7ba894;
        color: white;
    }

    button[type="button"] {
        background: #d8e9e2;
        color: #0b5c38;
        border: 1px solid #a8c9bc;
    }

    hr {
        margin-top: 40px;
        width: 65%;
        border: 0;
        border-top: 1px solid #c8d9d1;
    }

    .result-box {
        width: 55%;
        margin: 25px auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #c9d9d0;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        font-size: 18px;
        line-height: 1.7em;
    }
</style>

</head>

<body>

<h1>ฟอร์มรับข้อมูล - นันธิดา ไชยนรา (แพม)</h1>

<form method="post" action="">
    <label>ชื่อ - นามสกุล</label>
    <input type="text" name="fullname" autofocus required>

    <label>เบอร์โทร</label>
    <input type="text" name="phone" required>

    <label>ส่วนสูง (ซม.)</label>
    <input type="number" name="height" min="100" max="200" required>

    <label>ที่อยู่</label>
    <textarea name="address" cols="40" rows="4"></textarea>

    <label>วัน/เดือน/ปีเกิด</label>
    <input type="date" name="birthday">

    <label>สีที่ชอบ</label>
    <input type="color" name="color">

    <label>สาขาวิชา</label>
    <select name="major">
        <option value="การบัญชี">การบัญชี</option>
        <option value="การตลาด">การตลาด</option>
        <option value="การจัดการ">การจัดการ</option>
        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
    </select>

    <button type="submit" name="Submit">สมัครสมาชิก</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.location='https://www.msu.ac.th';">Go to MSU</button>
    <button type="button" onClick="window.print()">พิมพ์</button>
</form>

<hr>

<?php
if (isset($_POST['Submit'])) {
    echo "<div class='result-box'>";
    echo "<strong>ชื่อ - นามสกุล:</strong> ".$_POST['fullname']."<br>";
    echo "<strong>เบอร์โทร:</strong> ".$_POST['phone']."<br>";
    echo "<strong>ส่วนสูง:</strong> ".$_POST['height']." ซม.<br>";
    echo "<strong>ที่อยู่:</strong> ".$_POST['address']."<br>";
    echo "<strong>วัน/เดือน/ปีเกิด:</strong> ".$_POST['birthday']."<br>";
    echo "<strong>สีที่ชอบ:</strong> ";
    echo "<div style='background-color:{$_POST['color']}; 
            width:120px; height:25px; border-radius:4px; margin-top:5px;'></div>";
    echo "<br><strong>สาขาวิชา:</strong> ".$_POST['major']."<br>";
    echo "</div>";
}
?>

</body>
</html>

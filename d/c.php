<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914126 นันธิดา ไชยนรา</title>
<style>
    /* ตั้งค่าฟอนต์พื้นฐานและสีพื้นหลัง */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0fff0; /* เขียวอ่อนมาก ๆ */
        color: #333;
        margin: 20px;
        padding: 20px;
        border: 2px solid #a3d9a5; /* กรอบสีเขียวอ่อน */
        border-radius: 10px;
    }

    /* หัวข้อหลัก */
    h1 {
        color: #008000; /* เขียวเข้ม */
        text-align: center;
        border-bottom: 3px solid #008000;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    /* ฟอร์มคอนเทนเนอร์ */
    form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto; /* จัดกึ่งกลาง */
    }

    /* สไตล์ของ input, textarea, select */
    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea,
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box; /* ให้ padding ไม่เพิ่มขนาดโดยรวม */
        transition: border-color 0.3s;
    }

    input:focus, textarea:focus, select:focus {
        border-color: #38a169; /* เขียวเมื่อโฟกัส */
        outline: none;
    }
    
    /* สไตล์สำหรับ input type color */
    input[type="color"] {
        width: 100px;
        height: 40px;
        padding: 2px;
        vertical-align: middle;
    }

    /* กลุ่มปุ่ม */
    button {
        background-color: #4CAF50; /* เขียวมาตรฐาน */
        color: white;
        padding: 10px 15px;
        margin: 5px 5px 5px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.1s;
    }

    button:hover {
        background-color: #45a049; /* เขียวเข้มขึ้นเมื่อเมาส์อยู่เหนือ */
        transform: translateY(-1px);
    }
    
    /* สไตล์เฉพาะสำหรับปุ่ม ยกเลิก */
    button[type="reset"] {
        background-color: #f44336; /* สีแดงสำหรับยกเลิก */
    }

    button[type="reset"]:hover {
        background-color: #da190b;
    }

    /* สไตล์สำหรับส่วนแสดงผล PHP */
    .php-output {
        margin-top: 30px;
        padding: 20px;
        border: 1px dashed #008000;
        background-color: #e6ffe6; /* พื้นหลังสีเขียวอ่อนสำหรับผลลัพธ์ */
        border-radius: 5px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    /* สไตล์เฉพาะสำหรับสีที่ชอบ */
    .color-display {
        border: 1px solid #008000;
        display: inline-block;
        padding: 5px;
        border-radius: 3px;
        min-width: 150px;
        text-align: center;
        margin-left: 10px;
        vertical-align: middle;
    }
    
    .required-star {
        color: #ff0000; /* สีแดงสำหรับเครื่องหมาย * */
        font-weight: bold;
    }
    
    /* การจัดกลุ่มข้อมูลในฟอร์ม */
    label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
        color: #2e8b57; /* เขียวปานกลาง */
    }
    
    br {
        content: "";
        display: block;
        margin: 5px 0;
    }

</style>
</head>

<body>
<h1>ฟอร์มรับข้อมูล - นันธิดา ไชยนรา (แพม) </h1>

<form method="post" action="">
    <label for="fullname">ชื่อ - นามสกุล <span class="required-star">*</span></label>
    <input type="text" id="fullname" name="fullname" autofocus required >
    
    <label for="phone">เบอร์โทร <span class="required-star">*</span></label>
    <input type="text" id="phone" name="phone" required >
    
    <label for="height">ส่วนสูง (ซม.) <span class="required-star">*</span></label>
    <input type="number" id="height" name="height" min="100" max="200" required>
    
    <label for="address">ที่อยู่</label>
    <textarea id="address" name="address" cols="40" rows="4" ></textarea>
    
    <label for="birthday">วัน/เดือน/ปีเกิด</label>
    <input type="date" id="birthday" name="birthday">
    
    <label for="color">สีที่ชอบ</label>
    <input type="color" id="color" name="color">
    
    <label for="major">สาขาวิชา</label>
    <select id="major" name="major">
        <option value="การบัญชี">การบัญชี</option>
        <option value="การตลาด">การตลาด</option>
        <option value="การจัดการ">การจัดการ</option>
        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
    </select>
    
    <br>
    <button type="submit" name="Submit">สมัครสมาชิก</button>
    <button type="reset">ยกเลิก</button>
    <button type="button" onClick="window.location='https://www.msu.ac.th';">Go to MSU</button> 
    <button type="button" onMouseOver="alert('ว๊ายไม่มีแฟน!')">Hello</button>
    <button type="button" onClick="window.print() "> พิมพ์ </button>

</form>

<?php
if (isset($_POST['Submit'])) {
    $fullname = htmlspecialchars($_POST['fullname']);
    $phone = htmlspecialchars($_POST['phone']);
    $height = htmlspecialchars($_POST['height']);
    $address = nl2br(htmlspecialchars($_POST['address'])); // ใช้ nl2br เพื่อให้ขึ้นบรรทัดใหม่ใน address
    $birthday = htmlspecialchars($_POST['birthday']);
    $color = htmlspecialchars($_POST['color']);
    $major = htmlspecialchars($_POST['major']);
    
    echo "<div class='php-output'>";
    echo "<h2>✅ ข้อมูลที่คุณได้กรอก:</h2>";
    echo "<strong>ชื่อ - นามสกุล:</strong> ".$fullname."<br>";
    echo "<strong>เบอร์โทร:</strong> ".$phone."<br>";
    echo "<strong>ส่วนสูง:</strong> ".$height." ซม.<br>";
    echo "<strong>ที่อยู่:</strong> <p>".$address."</p>";
    echo "<strong>วัน/เดือน/ปีเกิด:</strong> ".$birthday."<br>";
    echo "<strong>สีที่ชอบ:</strong> <span class='color-display' style='background-color:{$color};'>".$color."</span><br>";
    echo "<strong>สาขาวิชา:</strong> ".$major."<br>";
    echo "</div>";
}
?>

</body>
</html>
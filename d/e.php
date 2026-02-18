<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>ฟอร์มสมัครงาน - บริษัท สมองมี จำกัด</title>

<!-- Bootstrap 5.3 -->
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
        color: white;
        border-bottom: none;
    }

    .card-body {
        background: #ffffffee;
        backdrop-filter: blur(5px);
    }

    .btn-success {
        background: linear-gradient(90deg, #ec407a, #f06292);
        border: none;
    }

    .btn-success:hover {
        background: linear-gradient(90deg, #d81b60, #ec407a);
    }

    .btn-secondary {
        background-color: #f8bbd0;
        border: none;
        color: #880e4f;
    }

    .btn-secondary:hover {
        background-color: #f48fb1;
        color: #6a1b9a;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header text-center py-3">
            <h3 class="mb-0">ใบสมัครงาน</h3>
            <h5 class="mb-0">บริษัท สมองมี จำกัด</h5>
        </div>

        <div class="card-body p-4">
            <form method="post" action="f.php">

                <div class="mb-3">
                    <label class="form-label">ตำแหน่งที่ต้องการสมัคร *</label>
                    <select name="position" class="form-select" required>
                        <option value="">-- เลือกตำแหน่งงาน --</option>
                        <option value="เจ้าหน้าที่ฝ่ายขาย">เจ้าหน้าที่ฝ่ายขาย</option>
                        <option value="แอดมินเพจ">แอดมินเพจ</option>
                        <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
                        <option value="เจ้าหน้าที่การตลาดออนไลน์">เจ้าหน้าที่การตลาดออนไลน์</option>
                        <option value="ช่างภาพ / ตัดต่อวิดีโอ">ช่างภาพ / ตัดต่อวิดีโอ</option>
                    </select>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">คำนำหน้าชื่อ *</label>
                        <select name="title" class="form-select" required>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>

                    <div class="col-md-8 mb-3">
                        <label class="form-label">ชื่อ-สกุล *</label>
                        <input type="text" name="fullname" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">วัน/เดือน/ปีเกิด *</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ระดับการศึกษา *</label>
                    <select name="education" class="form-select" required>
                        <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                        <option value="ปวช.">ปวช.</option>
                        <option value="ปวส.">ปวส.</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสามารถพิเศษ</label>
                    <textarea name="skill" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">ประสบการณ์ทำงาน</label>
                    <textarea name="experience" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทรศัพท์ *</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">อีเมล *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่ปัจจุบัน *</label>
                    <textarea name="address" class="form-control" rows="3" required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">ส่งใบสมัคร</button>
                    <button type="reset" class="btn btn-secondary px-4">ล้างข้อมูล</button>
                </div>

            </form>
        </div>
    </div>
</div>

</body>
</html>

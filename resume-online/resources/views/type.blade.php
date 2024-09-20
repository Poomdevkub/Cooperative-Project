<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Bootstrap Cards</title>
    <!-- เชื่อมต่อ Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- เชื่อมต่อไฟล์ CSS แยก -->
    <link href="{{ asset('type.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1>คุณคือใคร ?</h1>
        <h3 class="mb-5">คลิกเพื่อเลือกรูปแบบการใช้งานของคุณด้านล่าง</h3>
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-5">
                <div class="card card-custom">
                    <img src="./images/ผู้ที่กำลังมองหางาน.jpg" class="card-img-top" alt="ผู้ที่กำลังมองหางาน">
                    <div class="card-body text-center">
                        <p class="card-text font-weight-bold">ผู้ที่กำลังมองหางาน</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-5">
                <div class="card card-custom">
                    <img src="./images/บริษัท-ผู้จัดหางาน.jpg" class="card-img-top" alt="บริษัท, ผู้จัดหางาน">
                    <div class="card-body text-center">
                        <p class="card-text font-weight-bold">บริษัท, ผู้จัดหางาน</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="agreeCheck">
            <label class="form-check-label" for="agreeCheck">
                <p>ฉันยินยอมให้ข้อมูลส่วนตัว ตามนโยบายความเป็นส่วนตัวของเว็บไซต์</p>
            </label>
        </div>
        <div class="text-center">
            <button class="btn btn-secondary mt-2" style="width: 42%">ปุ่มสีเทา</button>
        </div>
        <p class="mt-3">ออกจากระบบ</p>
        
    </div>
    
<!-- เชื่อมต่อ Bootstrap JS และ jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type</title>
    <link href="{{ asset('type.css') }}" rel="stylesheet">
</head>
<body>
    <h1>ชนิด</h1>
    <div class="container">
        <div class="box">
            <img src="./images/ผู้ที่กำลังมองหางาน.jpg  " alt="ผู้ที่กำลังมองหางาน">
            <p>ผู้ที่กำลังมองหางาน</p>
        </div>
        <div class="box">
            <img src="./images/บริษัท-ผู้จัดหางาน.jpg" alt="บริษัท, ผู้จัดหางาน">
            <p>บริษัท, ผู้จัดหางาน</p>
        </div>
    </div>
</body>
</html> --}}
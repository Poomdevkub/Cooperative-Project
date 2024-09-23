@extends('layouts.company')
@section('title', 'โปรไฟล์')

@section('content')

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        /* Navbar */
        .navbar {
            background-color: #0d6efd;
            padding: 1rem;
            color: white;
        }

        /* Sidebar */
        .sidebar {
            height: calc(100vh - 70px);
            background-color: #f8f9fa;
            padding: 1rem;
            width: 200px;
            position: fixed;
            top: 70px;
            left: 0;
        }

        .sidebar .section-title {
            background-color: #0d6efd;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        .sidebar .menu-item {
            margin-top: 1rem;
            font-size: 1.2rem;
            padding: 10px;
            transition: background-color 0.3s ease;
            border-radius: 0.25rem;
        }

        .sidebar .menu-item:hover {
            background-color: #d9ecfb;
            color: black;
            cursor: pointer;
        }

        /* Main content */
        .content-container {
            margin-left: 240px;
            /* ระยะห่างจาก sidebar */
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Profile card */
        .profile-card {
            background: linear-gradient(to bottom, #ff6b6b, #f65e62);
            border-radius: 20px 20px 0 0;
            padding: 40px;
            text-align: center;
            color: white;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-card h4 {
            font-size: 1.5rem;
            margin: 0;
        }

        /* Information Section */
        .info-section {
            background-color: white;
            padding: 20px;
            border-radius: 0 0 20px 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .info-section h5 {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .info-section .form-group {
            margin-bottom: 15px;
        }

        .info-section .form-group label {
            font-size: 0.9rem;
            color: #555;
        }

        .info-section .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Button */
        .btn-submit {
            background: linear-gradient(to right, #f77062, #fe5196);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: block;
            margin: 20px auto;
        }

        .form-group {
            display: flex;
            /* justify-content: flex-start; */
            /* align-items: center; */
            align-items: center;   /* จัดแนวให้อยู่กลาง */
            gap: 20px;
            margin-bottom: 15px;  /* ระยะห่างระหว่างฟิลด์ */
        }

        .form-group div {
            display: flex;
            flex-direction: column;
            width: 100%;
            /* ปรับขนาดตามต้องการ */
        }


        .form-group input {
            /* margin-right: 5px; */
            width: 50%;
        }

        .form-group label {

        }

        .form-group input {
            width: 200px;
            /* คุณสามารถปรับขนาดได้ตามต้องการ */
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .radio-option {
            display: flex;
            align-items: center;

        }

        .radio-option input {}
    </style>

    <!-- Layout -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="menu-item">ภาพรวม</div>
            <div class="section-title">โปรไฟล์</div>
            <div class="menu-item">คำเชิญจากบริษัท</div>
        </div>

        <!-- Main content -->
        <div class="content-container">
            <!-- Profile card -->
            <div class="profile-card">
                <img src="../images/profile.jpg" alt="Profile Picture">
                <h4>ชื่อผู้ใช้</h4>
            </div>

            <!-- Information Section -->
            <div class="info-section">
                <h5>ข้อมูลส่วนตัว</h5>

                <!-- Personal Info Form -->
                <div class="form-group">
                    <div>
                        <label>ชื่อ:</label>
                        <input type="text" value="นายจักรพันธ์" disabled>
                    </div>
                    <div>
                        <label>นามสกุล:</label>
                        <input type="text" value="ปะทังแว้" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label>วันเกิด:</label>
                    <input type="date" value="01/01/1990" style="margin-left: 10px;" enable>
                </div>

                <div class="form-group">
                    <label>น้ำหนัก:</label>
                    <input type="float" id="weight" name="weight" value="100">
                    <label>ส่วนสูง:</label>
                    <input type="float" id="height" name="height" value="160">
                </div>

                <div class="form-group">
                    <label>เพศ:</label><br>
                    <div class="radio-option">
                        <input type="radio" id="male" name="gender" value="ชาย" checked>
                        <label for="male">ชาย</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="female" name="gender" value="หญิง">
                        <label for="female">หญิง</label>
                    </div>
                </div>

                <div>
                    <p>เรซูเม่</p>
                </div>


                <!-- Contact Information -->
                <h5 class="mt-5">ข้อมูลติดต่อ</h5>

                <div class="form-group">
                    <label>อีเมล:</label>
                    <input type="email" value="somchai@example.com" enable>
                </div>
                <div class="form-group">
                    <label>โทรศัพท์:</label>
                    <input type="text" value="081-234-5678" enable>
                </div>

                <!-- Submit Button -->
                <button class="btn-submit">บันทึก</button>
            </div>
        </div>
    </div>

@endsection

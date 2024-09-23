@extends('layouts.company')
@section('title', 'หน้าแดชบอร์ด')

@section('content')

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #0d6efd;
            padding: 1rem;
            color: white;
        }

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
        }

        .sidebar .menu-item {
            margin-top: 1rem;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        .sidebar .menu-item:hover {
            background-color: #d9ecfb;
            color: black;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        h1 {
            color: white;
        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
        }
        .card-body {
            border-top-left-radius: 20px; /* มุมซ้ายบน */
        border-top-right-radius: 20px; /* มุมขวาบน */
        }

        .card-img-top {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card-body {
            text-align: center;
            justify-content: center;
            align-content: center;
        }

        .role {
            background: rgb(246, 246, 246);
            margin-top: 5px;
            outline-color: black;
            width: 60%;
            border-radius: 10px;
            margin: 0 auto;
        }

        .list-item {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 10px 0;
        }

        .list-item i {
            margin-right: 10px;
            color: green;
        }

        /* Slide toggle button */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 4px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background-color: #0d6efd;
        }

        input:checked + .slider:before {
            transform: translateX(26px);
        }

        .btn-edit-resume {
            background: linear-gradient(to right, #f77062, #fe5196);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .white-box-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 20px;
        }

        .white-box {
            background-color: white;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .white-box h3 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .white-box span {
            font-size: 32px;
            color: #0d6efd;
        }


    </style>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="section-title">ภาพรวม</div>
        <div class="menu-item">โปรไฟล์</div>
        <div class="menu-item">คำเชิญจากบริษัท</div>
    </div>

    <!-- Main content -->
    <div class="flex-grow-1 p-4" style="margin-left: 220px;">
        <h1>ภาพรวม</h1>
        
        <!-- Card and White-box container in the same row -->
        <div class="d-flex align-items-start" style="margin-top: 20px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#ddeafd; width:100%">
                    <img src="../images/01.jpg" class="card-img-top mt-3" alt="...">
                    <h5 class="card-title">ชื่อ-นามสกุล...</h5>
                    <p>ตำแหน่ง....</p>
                    <div class="role">
                        <h6>นักศึกษาฝึกงาน</h6>
                    </div>
                </div>

                <div class="card-body">
                    <div class="list-item">
                        <i class="fas fa-check-circle"></i>
                        <p>ข้อมูลส่วนตัว</p>
                    </div>
                    <div class="list-item">
                        <i class="fas fa-check-circle"></i>
                        <p>เรซูเม่</p>
                    </div>
                    <div class="list-item">
                        <i class="fas fa-check-circle"></i>
                        <p>ความต้องการ</p>
                    </div>
                    <div class="list-item">
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider"></span>
                        </label>
                        <p style="margin-left: 10px;">เผยแพร่เรซูเม่</p>
                    </div>
                    <a href="#" class="btn-edit-resume">แก้ไขเรซูเม่</a>
                </div>
            </div>

            <!-- White box container -->
            <div class="white-box-container" style="margin-left: 20px;">
                <div class="white-box">
                    <h3>คำเชิญจากบริษัท</h3>
                    <span>2</span>
                </div>

                <div class="white-box">
                    <h3>ตอบรับคำเชิญ</h3>
                    <span>1</span>
                </div>

                <div class="white-box">
                    <h3>ปฏิเสธคำเชิญ</h3>
                    <span>1</span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

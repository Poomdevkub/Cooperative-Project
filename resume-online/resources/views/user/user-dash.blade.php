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
            /* ปรับความสูง Sidebar ให้อยู่ภายใต้ Navbar */
            background-color: #f8f9fa;
            padding: 1rem;
            width: 200px;
            position: fixed;
            /* ทำให้ sidebar อยู่ติดด้านซ้าย */
            top: 70px;
            /* ปรับให้เริ่มจากด้านล่างของ Navbar */
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
            /* เพิ่ม transition สำหรับ hover */
        }

        .sidebar .menu-item:hover {
            background-color: #d9ecfb;
            color: black;
            /* ตัวอักษรเป็นสีดำเมื่อ hover */
            border-radius: 0.25rem;
            /* เพิ่มมุมโค้งเมื่อ hover */
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
        }

        .card-img-top {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .card-body {
            text-align: center; /* จัดข้อความใน card ให้อยู่ตรงกลาง */
            justify-content: center;
            align-content: center;
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
        <div class="flex-grow-1 p-4" style="margin-left: 220px; margin-top: 5px;">
            <h1>ภาพรวม</h1>
            <div class="card" style="width: 18rem;">
                <img src="../images/01.jpg" class="card-img-top mt-5" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ตำแหน่ง.....</h5>
                    <div class="card" style="width: 50%">
                      <h6 class="mt-1">นักศึกษาฝึกงาน</h6>
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <div>
        </div>
    </div>

@endsection

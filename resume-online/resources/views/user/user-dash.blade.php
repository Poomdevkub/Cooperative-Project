@extends('layouts.company')
@section('title', 'หน้าแดชบอร์ด')

@section('content')

  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background-color: #f8f9fa;
      padding: 1rem;
      width: 200px;
      position: fixed; /* ทำให้ sidebar อยู่ติดด้านซ้าย */
      left: 0;
      top: 0;
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
      transition: background-color 0.3s ease; /* เพิ่ม transition สำหรับ hover */
    }
    .sidebar .menu-item:hover {
      background-color: #e4c7c6; /* เปลี่ยนเป็นสีแดงเมื่อ hover */
      color: white; /* ตัวอักษรเป็นสีขาวเมื่อ hover */
      border-radius: 0.25rem; /* เพิ่มมุมโค้งเมื่อ hover */
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
      <h1>เนื้อหาหลัก</h1>
      <p>บริเวณนี้จะแสดงเนื้อหาหลักของหน้าเว็บ</p>
    </div>
  </div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      body {
          background-image: url('images/homie.svg'); /* ลิงก์ไปยังรูปภาพ */
          background-size: cover; /* ทำให้รูปภาพครอบคลุมทั้งหน้าจอ */
          background-position: center; /* จัดกึ่งกลางรูปภาพ */
          background-repeat: no-repeat; /* ไม่ให้รูปภาพซ้ำ */
          background-attachment: fixed;
      }

  </style>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #efefef;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">JOBIE</a>
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">ค้นหาผู้หางาน</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">ค้นหานักศึกษาฝึกงาน</a>
              </li>
            </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">เข้าสู่ระบบ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">
                        <button type="button" class="btn btn-primary btn-sm">สมัครสมาชิก</button>
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container py-2">
            @yield('content')
      </div>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #efefef;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">JOBIE</a>
            <ul class="navbar-nav">
                
              <li class="nav-item">
                <a class="nav-link" href="{{route('none')}}">ค้นหาผู้หางาน</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('none')}}">ค้นหานักศึกษาฝึกงาน</a>
              </li>
            </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="images/01.jpg" class="pic">
                    <style>
                        .pic{
                            width: 30px;
                            height: 30px;
                            border-radius: 50%;
                            object-fit: cover;
                        }
                    </style>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">ภาพรวม</a></li>
                    <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                    <li><a class="dropdown-item" href="#">คำเชิญจากบริษัท</a></li>
                    <li><a class="dropdown-item" href="/">ออกจากระบบ</a></li>
                    <style>
                        .dropdown-menu{
                            margin-left: -150%;
                        }
                    </style>
                  </ul>
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

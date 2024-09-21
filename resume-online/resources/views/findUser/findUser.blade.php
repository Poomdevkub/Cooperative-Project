@extends('layouts.company')

@section('content')
    <h1 class="mb-4"></h1>

    <div class="container-fluid"> <!--ค้นหาตำแหน่ง-->
        <form class="d-flex" role="search" style="margin-top: 5%">
            <input class="form-control me-2" type="search" placeholder="ค้นหาตำแหน่งงาน" aria-label="Search">
            <button class="btn btn-primary" type="submit">ค้นหา</button>
            <style>
                form{
                    width: 30%;
                    margin-left: 70%;
                }
            </style>
        </form>
   </div>

   <!--ค้นหาจังหวัด-->
   <select class="form-select" aria-label="Default select example" style="margin-top: 2%; width: 30%; margin-left:69.15%;">
    <option selected>เลือกจังหวัด</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>

    <div class="row row-cols-1 row-cols-md-4 g-4" style="margin-top: 5%">
        @foreach($users as $user)
            <div class="col mb-4">
                <div class="card h-100" style="width: 286px;">
                    <img src="images/login_bg.jpg" class="card-img-top" alt="ภาพ" style="width: 286px; height: 286px; object-fit: cover;">
                    <div class="card-body">
                        <h4 class="card-title"><strong>{{ $user->userFirstname }} {{ $user->userSurname }}</strong></h4>
                        <p class="card-text"><strong>ตำแหน่ง</strong></p>
                        <p class="card-text"><strong>จังหวัดที่สนใจ :</strong></p>
                        <button type="button" class="btn btn-secondary" disabled>{{ ucfirst($user->userType) }}</button>
                        <a href="{{ route('user.show', $user->userID) }}" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

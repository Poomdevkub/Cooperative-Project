@extends('layouts.company')
@section('title','findUser')

@section('content')
<div class="container">

    <!--BJK seARch-->
    <h1 style="color: aliceblue; margin-top:5%"><strong>ค้นหา</strong></h1>

    <form action="{{ route('searchUser') }}" method="POST" class="mb-4" style=" width:500px; ">
        @csrf
        <input type="hidden" name="workType" id="workType" value="{{$workType}}">

        <select name="province" id="province" class="form-select" style="width: 110%; margin-top: 3%;display: grid; justify-items: end;">
            <option value="" {{($oldProvince=='')?'selected':''}}>ค้นหาด้วยจังหวัด</option>
            @foreach($province as $i)
                <option value="{{$i->name_in_thai}}" {{($oldProvince==$i->name_in_thai)?'selected':''}}>
                    {{$i->name_in_thai}}
                </option>
            @endforeach
        </select>
        <input class="form-control me-2" type="text" placeholder="ค้นหาตำแหน่งงาน" aria-label="Search" name="position" id="position" class="form-text" value="{{$oldPosition}}">
            <style>
                .form-control{
                    width: 110%;
                    margin-top: 3%;
                }
            </style>
        <a type="submit" style="margin-top:2%;">
            <button type="submit" class="btn btn-primary">ค้นหา</button>
        </a>
    </form>

    <!-- แสดงข้อมูลในรูปแบบการ์ด -->
    <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- ใช้ g-4 เพื่อเพิ่มการจัดระเบียบ -->
        @foreach ($users as $user)
            <div class="col">
                <div class="card h-100"> <!-- ใช้ h-100 เพื่อให้การ์ดมีความสูงเท่ากัน -->
                @php
                    $path2 = App\Models\Work::findUserByworkID($user->userID);
                @endphp
                    <img src="{{($path2->namePicture != '')?(url('storage/public/' . $path2->namePicture)) : 'images/dummyprofile.png' }}" class="card-img-top" alt="ภาพ" style="height: 268px; object-fit: cover;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $user->firstname }} {{ $user->surname }}</h5>
                        <p class="card-text">Position: {{ $user->position }}</p>
                        <p class="card-text">Province: {{ $user->province }}</p>
                        <div class="mb-2">
                            <span class="btn btn-success">{{ $user->workType }}</span>
                            <a href="{{ route('user.getByid', $user->workfinderID) }}" class="btn btn-primary">ดูรายละเอียด</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

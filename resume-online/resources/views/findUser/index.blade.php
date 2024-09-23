@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <h1>Find User</h1> -->

    <!-- ฟอร์มสำหรับเลือกประเภทงาน -->
    <form action="{{ route('findUser') }}" method="GET" class="mb-4">
        <label for="workType">Filter by Work Type:</label>
        <select name="workType" id="workType" onchange="this.form.submit()">
            <option value="intern" {{ $workType == 'intern' ? 'selected' : '' }}>Intern</option>
            <option value="work" {{ $workType == 'work' ? 'selected' : '' }}>Work</option>
        </select>
    </form>

    <!--BJK seARch-->
    <form action="{{ route('searchUser') }}" method="POST" class="mb-4">
        @csrf
        <input type="hidden" name="workType" id="workType" value="{{$workType}}">
        <label for="search">ค้นหาด้วยจังหวัด:</label>
        <select name="province" id="province" class="form-select">
            <option value="" selected>-----</option>
            @foreach($province as $i)
                <option value="{{$i->name_in_thai}}">
                    {{$i->name_in_thai}}
                </option>
            @endforeach
        </select>

        <a type="submit" style="margin-top: 2%">
            <button type="submit" class="btn btn-primary">บันทึก</button>
        </a>
    </form>

    <!-- แสดงข้อมูลในรูปแบบการ์ด -->
    <div class="row row-cols-1 row-cols-md-3 g-4"> <!-- ใช้ g-4 เพื่อเพิ่มการจัดระเบียบ -->
        @foreach ($users as $user)
            <div class="col">
                <div class="card h-100"> <!-- ใช้ h-100 เพื่อให้การ์ดมีความสูงเท่ากัน -->
                    <img src="images/login_bg.jpg" class="card-img-top" alt="ภาพ" style="height: 268px; object-fit: cover;">
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

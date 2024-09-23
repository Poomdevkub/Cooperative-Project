@extends('layouts.company')

@section('content')
<div class="container">

    <!--BJK seARch-->
    <form action="{{ route('searchUser') }}" method="POST" class="mb-4">
        @csrf
        <input type="hidden" name="workType" id="workType" value="{{$workType}}">
        <label for="search">ค้นหาด้วยจังหวัด:</label>
        <select name="province" id="province" class="form-select">
            <option value="" {{($oldProvince=='')?'selected':''}}>---ไม่เลือก---</option>
            @foreach($province as $i)
                <option value="{{$i->name_in_thai}}" {{($oldProvince==$i->name_in_thai)?'selected':''}}>
                    {{$i->name_in_thai}}
                </option>
            @endforeach
        </select>
        <label for="search">ค้นหาด้วยตำแหน่ง</label>
        <input type="text" name="position" id="position" class="form-text" value="{{$oldPosition}}">

        <a type="submit" style="margin-top: 2%">
            <button type="submit" class="btn btn-primary">บันทึก</button>
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
                    <img src="{{($path2->namePicture != '')?(url('storage/public/' . $path2->namePicture)) : 'images/login_bg.jpg' }}" class="card-img-top" alt="ภาพ" style="height: 268px; object-fit: cover;">

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

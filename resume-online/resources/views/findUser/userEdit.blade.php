@extends('layouts.user')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-info mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card" style="margin-top: 2%">
        <div class="card-header">

            <h2><strong>แก้ไขโปรไฟล์</strong></h2> 
        </div>
        <div class="card-body">
            <form form method="POST" action="{{route('user.update')}}">
                @csrf

                    <div class="row mt-4">
                        
                        <h3>ข้อมูลส่วนตัว</h3>
                        {{-- email --}}
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" disabled value="{{ Auth::user()->email}}">
                        </div>
                        
                        {{-- ชื่อ --}}
                        <div class="col-6">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required value="{{ $user->firstname}}">
                        </div>

                        {{-- นามสกุล --}}
                        <div class="col-6">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="surname" id="surname" required value="{{ $user->surname}}">
                        </div>

                        {{-- วันที่เกิด --}}
                        <div class="col-12">
                            <label class="form-label">วันเกิด</label>
                            <input type="date" class="form-control" name="birthdate" id="birthdate" required value="{{ $user->birthdate}}">
                        </div>
                        
                        {{-- สัญชาติ --}}
                        <div class="col-4">
                            <label class="form-label">สัญชาติ</label>
                            <input type="text" class="form-control" name="nation" id="nation" required value="{{ $user->nation}}">
                        </div>

                        {{-- ศาสนา --}}
                        <div class="col-4">
                            <label class="form-label">ศาสนา</label>
                            <input type="text" class="form-control" name="religion" id="religion" required value="{{ $user->religion}}">
                        </div>

                        {{-- เพศ --}}
                        <div class="col-6" style="margin-top: 5%;">
                            <div class="form-check form-check-inline">
                                <input id="sex" class="form-check-input" type="radio" name="sex" value="male">
                                <label class="form-check-label" for="inlineRadio1">ชาย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input id="sex" class="form-check-input" type="radio" name="sex" value="female">
                                <label class="form-check-label" for="inlineRadio2">หญิง</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input id="sex" class="form-check-input" type="radio" name="sex" value="none">
                                <label class="form-check-label" for="inlineRadio3">ไม่ระบุ</label>
                            </div>
                        </div>


                        <h3 style="margin-top: 5%">ข้อมูลติดต่อ</h3>

                        {{-- เบอร์โทรศัพท์ --}}
                        <div class="col-12">
                            <label class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="phone" id="phone" required value="{{ $user->phone}}">
                        </div>

                        {{-- Line --}}
                        <div class="col-12">
                            <label class="form-label">LineID</label>
                            <input type="text" class="form-control" name="line" id="line" required value="{{ $contact->line}}">
                        </div>
                        
                        <h3 style="margin-top: 5%">ข้อมูลที่อยู่</h3>

                        {{-- ที่อยู่ --}}
                        <div class="col-12">
                            <label class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="addressDetails" id="addressDetails" required value="{{ $address->addressDetails }}">
                        </div>

                        {{-- รหัสไปรษณีย์ --}}
                        <div class="col-6">
                            <label class="form-label">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" name="postcode" id="postcode" required value="{{ $address->postcode }}">
                        </div>
                        

                        <h3 style="margin-top: 5%">ความต้องการ</h3>
                        
                        {{-- ความต้องการในการหางานหรือที่ฝึกงาน --}}
                        <div class="col-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="workType" id="inlineRadio1" value="work" {{ ($user->workType=="work")? "checked" : "" }}>
                                <label class="form-check-label" for="inlineRadio1">หางาน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="workType" id="inlineRadio2" value="intern" {{ ($user->workType=="intern")? "checked" : "" }}>
                                <label class="form-check-label" for="inlineRadio2">หาที่ฝึกงาน</label>
                            </div>
                        </div>
                        
                        {{-- ตำแหน่ง --}}
                        <div class="col-12">
                            <label class="form-label">ตำแหน่ง</label>
                            <input type="text" class="form-control" name="position" id="position" required value="{{ $contact->position}}">
                        </div>

                        {{-- จังหวัดที่สนใจ --}}
                        <div class="col-6">
                            <label class="form-label">จังหวัดที่สนใจ</label>
                            <select name="province" id="province" class="form-select">
                                @foreach($province as $i)
                                    <option value="{{$i->name_in_thai}}" {{$address->province == $i->name_in_thai  ? 'selected' : ''}}>
                                        {{$i->name_in_thai}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
        
                        <div style="display: flex;justify-content:center;">
                            <a type="submit" style="margin-top: 2%">
                                <button type="submit" class="btn btn-primary">บันทึก</button>
                            </a>
                        </div>
                        <style>
                            label{
                                margin-top: 2%;
                            }
                        </style>

                    
                    </div>

                
            </form>
            
        </div>
    </div>

    
@endsection

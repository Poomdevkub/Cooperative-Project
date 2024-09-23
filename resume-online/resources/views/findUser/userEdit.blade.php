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
                            <input type="text" class="form-control" name="firstname" id="firstname" disabled value="{{ Auth::user()->email ?? 'N/A' }}">
                        </div>
                        
                        {{-- ชื่อ --}}
                        <div class="col-6">
                            <label class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required value="{{ $user->firstname ?? 'N/A' }}">
                        </div>

                        {{-- นามสกุล --}}
                        <div class="col-6">
                            <label class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" name="surname" id="surname" required value="{{ $user->surname ?? 'N/A' }}">
                        </div>

                        {{-- วันที่เกิด --}}
                        <div class="col-12">
                            <label class="form-label">วันเกิด</label>
                            <input type="date" class="form-control" name="birthdate" id="birthdate" required value="{{ $user->birthdate ?? 'N/A' }}">
                        </div>

                        {{-- เพศ --}}
                        <div class="col-4">
                            <label class="form-label">เพศ</label>
                            <input type="text" class="form-control" name="sex" id="sex" required value="{{ ucfirst($user->sex ?? 'N/A') }}">
                        </div>
                        
                        {{-- สัญชาติ --}}
                        <div class="col-4">
                            <label class="form-label">สัญชาติ</label>
                            <input type="text" class="form-control" name="nation" id="nation" required value="{{ $user->nation ?? 'N/A' }}">
                        </div>

                        {{-- ศาสนา --}}
                        <div class="col-4">
                            <label class="form-label">ศาสนา</label>
                            <input type="text" class="form-control" name="religion" id="religion" required value="{{ $user->religion ?? 'N/A' }}">
                        </div>


                        <h3 style="margin-top: 5%">ข้อมูลติดต่อ</h3>

                        {{-- เบอร์โทรศัพท์ --}}
                        <div class="col-12">
                            <label class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="phone" id="phone" required value="{{ $user->phone ?? 'N/A' }}">
                        </div>

                        {{-- Line --}}
                        <div class="col-12">
                            <label class="form-label">LineID</label>
                            <input type="text" class="form-control" name="line" id="line" required value="{{ $contact->line ?? 'N/A' }}">
                        </div>
                        
                        <h3 style="margin-top: 5%">ข้อมูลที่อยู่</h3>

                        {{-- ที่อยู่ --}}
                        <div class="col-12">
                            <label class="form-label">ที่อยู่</label>
                            <input type="text" class="form-control" name="addressDetails" id="addressDetails" required value="{{ $address->addressDetails  ?? 'N/A' }}">
                        </div>

                        {{-- จังหวัด --}}
                        <div class="col-6">
                            <label class="form-label">จังหวัด</label>
                            <select name="province" id="province" class="form-select">
                                @foreach($province as $i)
                                    <option value="{{$i->name_in_thai}}" {{$address->province == $i->name_in_thai  ? 'selected' : ''}}>
                                        {{$i->name_in_thai}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- รหัสไปรษณีย์ --}}
                        <div class="col-6">
                            <label class="form-label">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" name="postcode" id="postcode" required value="{{ $address->postcode  ?? 'N/A' }}">
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
                            <input type="text" class="form-control" name="position" id="position" required value="{{ $contact->position ?? 'N/A' }}">
                        </div>
                        
         {{-- ------------------------------------------ตัวเลือกหางาน---------------------------------------------------- --}}
                            {{-- จังหวัดที่สนใจ --}}
                            {{-- <div class="col-6">
                                <label class="form-label">จังหวัดที่สนใจ</label>
                                <select name="province" id="province" class="form-select">
                                    @foreach($province as $i)
                                        <option value="{{$i->name_in_thai}}" {{$address->province == $i->name_in_thai  ? 'selected' : ''}}>
                                            {{$i->name_in_thai}}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}

                            {{-- เงินเดือนที่คาดหวัง-ขั้นต่ำ --}}
                            {{-- <div class="col-3">
                                <label class="form-label">เงินเดือนที่คาดหวังต่ำสุด</label>
                                <input type="text" class="form-control" name="postcode" id="postcode" required value="{{ $address->addressDetails  ?? 'N/A' }}">
                            </div> --}}
                            {{-- เงินเดือนที่คาดหวัง-สูงสุด --}}
                            {{-- <div class="col-3">
                                <label class="form-label">เงินเดือนที่คาดหวังสูงสุด</label>
                                <input type="text" class="form-control" name="postcode" id="postcode" required value="{{ $address->addressDetails  ?? 'N/A' }}">
                            </div> --}}
            {{-- ------------------------------------------ตัวเลือกหาที่ฝึกงาน---------------------------------------------------- --}}
                            {{-- จังหวัดที่สนใจ --}}
                            {{-- <div class="col-7">
                                <label class="form-label">จังหวัดที่สนใจ</label>
                                <select name="province" id="province" class="form-select">
                                    @foreach($province as $i)
                                        <option value="{{$i->name_in_thai}}" {{$address->province == $i->name_in_thai  ? 'selected' : ''}}>
                                            {{$i->name_in_thai}}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}

                            {{-- วันที่เริ่มฝึกงาน --}}
                            {{-- <div class="col-6">
                                <label class="form-label">วันที่เริ่มฝึกงาน</label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" required value="{{ $user->birthdate ?? 'N/A' }}">
                            </div> --}}

                            {{-- วันที่สิ้นสุดฝึกงาน --}}
                            {{-- <div class="col-6">
                                <label class="form-label">วันที่สิ้นสุดฝึกงาน</label>
                                <input type="date" class="form-control" name="birthdate" id="birthdate" required value="{{ $user->birthdate ?? 'N/A' }}">
                            </div> --}}

                            {{-- สวัสดิการที่ต้องการ --}}
                            {{-- <div class="col-12">
                                <label class="form-label">สวัสดิการที่ต้องการ</label>
                                <input type="text" class="form-control" name="position" id="position" required value="{{ $contact->position ?? 'N/A' }}">
                            </div> --}}
            
        
                         <a type="submit" style="margin-top: 2%">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                        </a>
                        <style>
                            label{
                                margin-top: 2%;
                            }
                        </style>

                    
                    </div>

     {{-- -------------------------------------------ของเก่า---------------------------------------------------- --}}
                {{-- <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email ?? 'N/A' }}</p>
                <div class="input-box">
                    <p class="card-title"><strong>ชื่อ:</strong> </p>
                    <input name="firstname" id="firstname" type="text"  required value="{{ $user->firstname ?? 'N/A' }}">
                </div>

                <div class="input-box">
                    <p class="card-title"><strong>นามสกุล:</strong> </p>
                    <input name="surname" id="surname" type="text"  required value="{{ $user->surname ?? 'N/A' }}">
                </div>


                <div class="input-box">
                    <p class="card-text"><strong>เพศ:</strong> </p>
                    <input name="sex" id="sex" type="text" value="{{ ucfirst($user->sex ?? 'N/A') }}"  required>
                </div>
                <div class="input-box">
                    <p class="card-text"><strong>สัญชาติ:</strong> </p>
                    <input name="nation" id="nation" type="text" value="{{ $user->nation ?? 'N/A' }}" required>
                </div>

                <div class="input-box">
                    <p class="card-text"><strong>ศาสนา:</strong> </p>
                    <input name="religion" id="religion" type="text" value="{{ $user->religion ?? 'N/A' }}"  required>
                </div>

                <div class="input-box">
                    <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> </p>
                    <input name="phone" id="phone" type="text" value="{{ $user->phone ?? 'N/A' }}" required>
                </div>
                <div class="input-box">
                    <p class="card-text"><strong>จังหวัด:</strong> {{ $address->province  ?? 'N/A' }}</p>
                    <select name="province" id="province"> 
                        @foreach($province as $i)
                        <option value="{{$i->name_in_thai}}" {{$address->province == $i->name_in_thai  ? 'selected' : ''}}>{{$i->name_in_thai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-box">
                    <p class="card-text"><strong>ที่อยู่:</strong> </p>
                    <input name="addressDetails" id="addressDetails" type="text" value="{{ $address->addressDetails  ?? 'N/A' }}" required>
                </div>

                <div class="input-box">
                    <p class="card-text"><strong>รหัสไปรษณีย์:</strong> </p>
                    <input name="postcode" id="postcode" type="text" value="{{ $address->addressDetails  ?? 'N/A' }}" required>
                </div>

                <div class="input-box">
                    <p class="card-text"><strong>วันที่เกิด:</strong></p>
                    <input name="birthdate" id="birthdate" type="date" value="{{ $user->birthdate ?? 'N/A' }}" required>
                </div>
                <div class="input-box">
                    <p class="card-text"><strong>ตำแหน่ง:</strong> </p>
                    <input name="position" id="position" type="text" value="{{ $contact->position ?? 'N/A' }}" required>
                </div>

                <div class="input-box">
                    <p class="card-text"><strong>Line:</strong> {{ $contact->line ?? 'N/A' }}</p>
                    <input name="line" id="line" type="text" value="{{ $contact->line ?? 'N/A' }}" required>
                </div>

                 <a type="submit">
                    <button type="submit" class="btn">ยืนยัน</button>
                </a> --}}
                
            </form>
            
        </div>
    </div>

    
@endsection

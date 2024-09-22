@extends('layouts.user')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้ 
        </div>
        <div class="card-body">
            <form form method="POST" action="{{route('user.update')}}">
                @csrf
                

                <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email ?? 'N/A' }}</p>
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
                <div class="input-box">

                 <a type="submit">
                    <button type="submit" class="btn">ยืนยัน</button>
                </a>
                
            </form>
            
        </div>
    </div>

    
@endsection

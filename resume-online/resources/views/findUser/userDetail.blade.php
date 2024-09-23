@extends('layouts.user')  

{{-- ของบาส --}}

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <style>
        .container {
            display: flex;
            justify-content: center;
        }
    </style>
    <div class="card" style="margin-top: 5%; width: 65%;">
        <div class="card-header bg-primary text-white">
            <h2><strong>โปรไฟล์</strong></h2>
        </div>
        <div class="card-body">

            <!--profile-->
            <div style="display: flex; justify-content: center;">
                <img src="{{'storage/public/'.Auth::user()->namePicture}}" class="profile-pic">
                <style>
                    .profile-pic{
                        width: 300px;
                        height: 300px;
                        border-radius: 50%;
                        object-fit: cover;
                        margin-top: 5%;
                        margin-bottom: 2%;
                    }
                </style>
            </div>

            {{-- ทำให้ลิ้งค์ไปหน้าอัพรูปด้วยจ้า --}}
            <div style="margin-top: 2%; display:flex; justify-content:center;">
                <a href="{{route('user.uploadP')}}">
                    <button type="submit" class="btn btn-primary btn-lg">เปลี่ยนรูปโปรไฟล์</button>
                </a>
            </div>


            <div style="display: flex; justify-content: center;">
                <div class="card border-info mb-3 " style="width: 80%; margin-top: 7%;">
                    <div class="card-body">
                        <h1 class="card-title" style="text-align: center;">{{ $user->firstname ?? 'N/A' }} {{ $user->surname ?? 'N/A' }}</h1>
                        <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email ?? 'N/A' }}</p>
                        <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->sex ?? 'N/A') }}</p>
                        <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->nation ?? 'N/A' }}</p>
                        <p class="card-text"><strong>ศาสนา:</strong> {{ $user->religion ?? 'N/A' }}</p>
                        <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->phone ?? 'N/A' }}</p>
                        <p class="card-text"><strong>จังหวัด:</strong> {{ $address->province  ?? 'N/A' }}</p>
                        <p class="card-text"><strong>ที่อยู่:</strong> {{ $address->addressDetails  ?? 'N/A'}}</p>
                        <p class="card-text"><strong>รหัสไปรษณีย์:</strong> {{ $address->postcode  ?? 'N/A'}}</p>
                        <p class="card-text"><strong>วันที่เกิด:</strong> {{ thaidate('l j F Y', $user->birthdate ?? '2000-1-1') }}</p>
                        <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $contact->position ?? 'N/A' }}</p>
                        <p class="card-text"><strong>Line:</strong> {{ $contact->line ?? 'N/A' }}</p>
                        <style>
                            .card-body p{
                                margin-left: 5%;
                                margin-top: 5%;
                                display: flex;
                                font-size: large;
                            }
                            .card-body strong {
                                display: inline-block;
                                width: 200px; /* ปรับขนาดความกว้างเพื่อให้ตัวอักษรแรกตรงกัน */
                                font-size: large;
                            }
                        </style>
                        <!--<p class="card-text"><strong>สถานะการแสดง:</strong> </p>-->
                        <!-- เพิ่มข้อมูลเพิ่มเติมตามต้องการ -->

                        <div style="margin-top: 5%; display:flex; justify-content:center;">
                            <a href="{{route('user.edit')}}">
                                <button type="submit" class="btn btn-primary btn-lg">แก้ไข</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display: flex; justify-content: center;">
                <div class="card border-info mb-3 " style="width: 80%; margin-top: 7%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: center;">
                            @php
                                $path = App\Models\Work::findWorkById(Auth::user()->id);
                            @endphp
                            <img src="{{'storage/public/resume/'.$path->nameResume}}" class="resume-pic">
                            <style>
                                .resume-pic{
                                    width: 60%;
                                    height: 60%;
                                    object-fit: cover;
                                }
                            </style>
                    
                        </div>
            
                        {{-- ทำให้ลิ้งค์ไปหน้าอัพรูปเรซูเม่ด้วยจ้า --}}
                        <div style="margin-top: 2%; display:flex; justify-content:center;">
                            <a href="{{route('user.uploadR')}}">
                                <button type="submit" class="btn btn-primary btn-lg">เปลี่ยนรูปเรซูเม่</button>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>   

    </div>
@endsection

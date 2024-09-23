@extends('layouts.company')

@section('content')
    <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a>
    <div class="card" style="margin-top: 5%;">
        <div class="card-header bg-primary text-white">
            <h1><strong>ข้อมูลผู้ใช้งาน</strong></h1>
        </div>
        <div class="card-body">

            <div style="display: flex; justify-content: center;"><!--profile-->
                @php
                    $path2 = App\Models\Work::findUserByworkID($user->userID);
                @endphp
                <img src="{{ url(($path2->namePicture != '')?(url('storage/public/' . $path2->namePicture)) : 'images/dummyprofile.png') }}" class="profile-pic">
                <style>
                    .profile-pic {
                        width: 300px;
                        height: 300px;
                        border-radius: 50%;
                        object-fit: cover;
                        margin-top: 5%;
                        margin-bottom: 1%;
                    }
                </style>
            </div>

            <div style="display: flex; justify-content: center; margin-top:-5%;">
                <div class="card border-info mb-3" style="width: 80%; margin-top: 7%;">

                    <div class="card-body">
                        <h1 class="card-title">{{ $user->firstname ?? 'N/A' }} {{ $user->surname ?? 'N/A' }}</h1>
                        <p class="card-text"><strong>Email:</strong> {{ $email ?? 'N/A' }}</p>
                        <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->sex ?? 'N/A') }}</p>
                        <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->nation ?? 'N/A' }}</p>
                        <p class="card-text"><strong>ศาสนา:</strong> {{ $user->religion ?? 'N/A' }}</p>
                        <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->phone ?? 'N/A' }}</p>
                        <p class="card-text"><strong>จังหวัด:</strong> {{ $address->province ?? 'N/A' }}</p>
                        <p class="card-text"><strong>ที่อยู่:</strong> {{ $address->addressDetails ?? 'N/A' }}</p>
                        <p class="card-text"><strong>รหัสไปรษณีย์:</strong> {{ $address->postcode ?? 'N/A' }}</p>
                        <p class="card-text"><strong>วันที่เกิด:</strong>
                            {{ thaidate('l j F Y', $user->birthdate ?? '2000-1-1') }}
                        </p>
                        <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $contact->position ?? 'N/A' }}</p>
                        <p class="card-text"><strong>Line:</strong> {{ $contact->line ?? 'N/A' }}</p>

                        <style>
                            .card-body p {
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
                    </div>


                </div>


            </div>


        </div>


        <div style="display: flex; justify-content: center;"><!--resume-->
            @php
                $path = App\Models\Work::findWorkByWorkId($user->workfinderID);
            @endphp
            <img src="{{ url('storage/public/resume/' . $path->nameResume) }}" class="resume-pic" style="">
        </div>

        <style>
            .card {
                display: flex;
                flex-direction: column;

            }

            .resume-pic {
                width: 60%;
                height: 60%;
                margin-bottom: 5%;
            }

            .detail {
                margin-left: 100px;
            }
        </style>

        <div style="margin-bottom: 5%; display:flex;">
            <a href="#">
                <button type="submit" class="btn btn-primary btn-lg">ติดตาม</button>
                <style>
                    button{
                        width: 500%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin-left: 425%;
                    }
                </style>
            </a>
        </div>


    </div>
@endsection

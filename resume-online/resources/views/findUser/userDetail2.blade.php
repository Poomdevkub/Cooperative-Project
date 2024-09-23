@extends('layouts.user')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้ 
        </div>
        <div class="card-body">
            
            <h5 class="card-title">{{ $user->firstname ?? 'N/A' }} {{ $user->surname ?? 'N/A' }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $email ?? 'N/A' }}</p>
            <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->sex ?? 'N/A') }}</p>
            <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->nation ?? 'N/A' }}</p>
            <p class="card-text"><strong>ศาสนา:</strong> {{ $user->religion ?? 'N/A' }}</p>
            <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->phone ?? 'N/A' }}</p>
            <p class="card-text"><strong>จังหวัด:</strong> {{ $address->province  ?? 'N/A' }}</p>
            <p class="card-text"><strong>ที่อยู่:</strong> {{ $address->addressDetails  ?? 'N/A' }}</p>
            <p class="card-text"><strong>รหัสไปรษณีย์:</strong> {{ $address->postcode  ?? 'N/A'}}</p>
            <p class="card-text"><strong>วันที่เกิด:</strong> {{  thaidate('l j F Y', $user->birthdate ?? '2000-1-1')  }}</p>
            <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $contact->position ?? 'N/A' }}</p>
            <p class="card-text"><strong>Line:</strong> {{ $contact->line ?? 'N/A' }}</p>
        </div>
        <div><!--profile-->
            @php
                $path2 =App\Models\Work::findUserByworkID($user->userID);
            @endphp
            <img src="{{url('storage/public/'.$path2->namePicture)}}">
        </div>

        <div><!--resume-->
            @php
                $path = App\Models\Work::findWorkByWorkId($user->workfinderID);
            @endphp
            <img src="{{url('storage/public/resume/'.$path->nameResume)}}">
        </div>
    </div>
@endsection

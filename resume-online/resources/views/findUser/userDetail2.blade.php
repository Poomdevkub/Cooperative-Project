@extends('layouts.company')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้ 
        </div>
        <div class="card-body">
            
            <h5 class="card-title">{{ $user->firstname ?? 'N/A' }} {{ $user->surname ?? 'N/A' }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ Auth::user()->email ?? 'N/A' }}</p>
            <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->sex ?? 'N/A') }}</p>
            <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->nation ?? 'N/A' }}</p>
            <p class="card-text"><strong>ศาสนา:</strong> {{ $user->religion ?? 'N/A' }}</p>
            <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->phone ?? 'N/A' }}</p>
            <p class="card-text"><strong>ที่อยู่: {{$address->subdistrict }}, {{ $address->district }}, {{ $address->province }}</p>
            <p class="card-text"><strong>วันที่เกิด:</strong> {{ $user->birthdate }}</p>
            <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $contact->position ?? 'N/A' }}</p>
        </div>
    </div>
@endsection

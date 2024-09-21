@extends('layouts.app')

@section('content')
    <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a>
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->userFirstname ?? 'N/A' }} {{ $user->userSurname ?? 'N/A' }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->userEmail ?? 'N/A' }}</p>
            <p class="card-text"><strong>ประเภทผู้ใช้:</strong> {{ ucfirst($user->userType ?? 'N/A') }}</p>
            <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->userSex ?? 'N/A') }}</p>
            <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->userNationality ?? 'N/A' }}</p>
            <p class="card-text"><strong>ศาสนา:</strong> {{ $user->userReligion ?? 'N/A' }}</p>
            <p class="card-text"><strong>น้ำหนัก:</strong> {{ $user->userWeight ?? 'N/A' }} กก.</p>
            <p class="card-text"><strong>ส่วนสูง:</strong> {{ $user->userHeight ?? 'N/A' }} ซม.</p>
            <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->userPhoneNumber ?? 'N/A' }}</p>
            <p class="card-text"><strong>ที่อยู่: {{ $user->subdistrict->name_th }}, {{ $user->district->name_th }}, {{ $user->province->name_th }}</p>
            <p class="card-text"><strong>วันที่เกิด:</strong> {{ $user->userDatebirth ? \Carbon\Carbon::parse($user->userDatebirth)->format('d/m/Y') : 'N/A' }}</p>
            <p class="card-text"><strong>วันที่ลงทะเบียน:</strong> {{ $user->userRegisdate ? \Carbon\Carbon::parse($user->userRegisdate)->format('d/m/Y') : 'N/A' }}</p>
            <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $user->userPosition ?? 'N/A' }}</p>
            <p class="card-text"><strong>สถานะการแสดง:</strong> {{ ucfirst($user->userStatusShow ?? 'N/A') }}</p>
            <!-- เพิ่มข้อมูลเพิ่มเติมตามต้องการ -->
        </div>
    </div>
@endsection

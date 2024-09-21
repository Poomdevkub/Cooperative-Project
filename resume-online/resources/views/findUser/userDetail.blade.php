{{-- resources/views/userDetail.blade.php --}}
@extends('layouts.app')

@section('content')
    <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a>
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $user->userFirstname }} {{ $user->userSurname }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $user->userEmail }}</p>
            <p class="card-text"><strong>ประเภทผู้ใช้:</strong> {{ ucfirst($user->userType) }}</p>
            <p class="card-text"><strong>เพศ:</strong> {{ ucfirst($user->userSex) }}</p>
            <p class="card-text"><strong>สัญชาติ:</strong> {{ $user->userNationality }}</p>
            <p class="card-text"><strong>ศาสนา:</strong> {{ $user->userReligion }}</p>
            <p class="card-text"><strong>น้ำหนัก:</strong> {{ $user->userWeight }} กก.</p>
            <p class="card-text"><strong>ส่วนสูง:</strong> {{ $user->userHeight }} ซม.</p>
            <p class="card-text"><strong>เบอร์โทรศัพท์:</strong> {{ $user->userPhoneNumber }}</p>
            <p class="card-text"><strong>ที่อยู่:</strong> {{ $user->userPostcode }}, {{ $user->districtID }}, {{ $user->provinceID }}, {{ $user->subdistrictID }}</p>
            <p class="card-text"><strong>วันที่เกิด:</strong> {{ \Carbon\Carbon::parse($user->userDatebirth)->format('d/m/Y') }}</p>
            <p class="card-text"><strong>วันที่ลงทะเบียน:</strong> {{ \Carbon\Carbon::parse($user->userRegisdate)->format('d/m/Y') }}</p>
            <p class="card-text"><strong>ตำแหน่ง:</strong> {{ $user->userPosition }}</p>
            <p class="card-text"><strong>สถานะการแสดง:</strong> {{ ucfirst($user->userStatusShow) }}</p>
            <!-- เพิ่มข้อมูลเพิ่มเติมตามต้องการ -->
        </div>
    </div>
@endsection

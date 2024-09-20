<!-- resources/views/company/show.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@extends('layouts.app')

@section('title', 'รายละเอียดบริษัท')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 100%; max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">รายละเอียดบริษัท</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID:</strong> {{ $company->compID }}</li>
                    <li class="list-group-item"><strong>ชื่อบริษัท:</strong> {{ $company->compName }}</li>
                    <li class="list-group-item"><strong>Province ID:</strong> {{ $company->provinceID }}</li>
                    <li class="list-group-item"><strong>District ID:</strong> {{ $company->districtID }}</li>
                    <li class="list-group-item"><strong>Subdistrict ID:</strong> {{ $company->subdistrictID }}</li>
                    <li class="list-group-item"><strong>Company Type ID:</strong> {{ $company->companyTypeID }}</li>
                    <li class="list-group-item"><strong>รายละเอียด:</strong> {{ $company->compDescription }}</li>
                    <li class="list-group-item"><strong>Model:</strong> {{ $company->compModel }}</li>
                    <li class="list-group-item"><strong>ที่อยู่:</strong> {{ $company->compAddress }}</li>
                    <li class="list-group-item"><strong>โทรศัพท์:</strong> {{ $company->compPhone }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $company->compEmail }}</li>
                    <li class="list-group-item"><strong>เว็บไซต์:</strong> {{ $company->compWebsite ?? 'ไม่มี' }}</li>
                    <li class="list-group-item"><strong>ชื่อผู้ติดต่อ:</strong> {{ $company->compContactName }}</li>
                    <li class="list-group-item"><strong>ตำแหน่งผู้ติดต่อ:</strong> {{ $company->compContactPosition }}</li>
                   <!-- <li class="list-group-item"><strong>User Pass ID:</strong> {{ $company->userPassID }}</li> -->
                </ul>
            </div>
        </div>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection

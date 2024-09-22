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
                    <li class="list-group-item"><strong>รหัสบริษัท (compID):</strong> {{ $company->compID }}</li>
                    <li class="list-group-item"><strong>ชื่อบริษัท:</strong> {{ $company->compName ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>ประเภทบริษัท:</strong> {{ $company->companyType->companyTypeName ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>จังหวัด:</strong> {{ $company->province->name_th ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>อำเภอ:</strong> {{ $company->district->name_th ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>ตำบล:</strong> {{ $company->subdistrict->name_th ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>รายละเอียดบริษัท:</strong> {{ $company->compDescription ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>โมเดลบริษัท:</strong> {{ $company->compModel ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>ที่อยู่บริษัท:</strong> {{ $company->compAddress ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>โทรศัพท์บริษัท:</strong> {{ $company->compPhone ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>Email บริษัท:</strong> {{ $company->compEmail ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>เว็บไซต์บริษัท:</strong> <a href="{{ $company->compWebsite }}" target="_blank">{{ $company->compWebsite ?? 'ไม่ระบุ' }}</a></li>
                    <li class="list-group-item"><strong>ชื่อผู้ติดต่อ:</strong> {{ $company->compContactName ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>ตำแหน่งผู้ติดต่อ:</strong> {{ $company->compContactPosition ?? 'ไม่ระบุ' }}</li>
                </ul>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
@endsection

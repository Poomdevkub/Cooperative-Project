<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@extends('layouts.app')

@section('title', 'รายละเอียดบริษัท')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card shadow-sm" style="width: 100%;">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">รายละเอียดบริษัท</h3>
            </div>

            <div class="card-body">
                <div class="list-group list-group-flush">
                    {{-- <li class="list-group-item"><strong>รหัสบริษัท (compID):</strong> {{ $company->compID }}</li> --}}
                    <p class="list-group-item"><strong>ชื่อบริษัท:</strong> {{ $company->compName ?? 'ไม่ระบุ' }}</p>
                    {{-- <li class="list-group-item"><strong>ประเภทบริษัท:</strong> {{ $company->companyType->companyTypeName ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>จังหวัด:</strong> {{ $company->provinces->name_in_thai ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>อำเภอ:</strong> {{ $company->districts->name_in_thai ?? 'ไม่ระบุ' }}</li>
                    <li class="list-group-item"><strong>ตำบล:</strong> {{ $company->subdistricts->name_in_thai ?? 'ไม่ระบุ' }}</li> --}}
                    <p class="list-group-item"><strong>รายละเอียดบริษัท:</strong>
                        {{ $company->compDescription ?? 'ไม่ระบุ' }}</p>
                    {{-- <li class="list-group-item"><strong>โมเดลบริษัท:</strong> {{ $company->compModel ?? 'ไม่ระบุ' }}</li> --}}
                    <p class="list-group-item"><strong>ที่อยู่บริษัท:</strong> {{ $company->compAddress ?? 'ไม่ระบุ' }}</p>
                    <p class="list-group-item"><strong>เบอร์โทรบริษัท:</strong> {{ $company->compPhone ?? 'ไม่ระบุ' }}</p>
                    <p class="list-group-item"><strong>Email บริษัท:</strong> {{ $company->compEmail ?? 'ไม่ระบุ' }}</p>
                    <p class="list-group-item"><strong>เว็บไซต์บริษัท:</strong> <a href="{{ $company->compWebsite }}"
                            target="_blank" id="company">{{ $company->compWebsite ?? 'ไม่ระบุ' }}</a></p>
                    <p class="list-group-item"><strong>ชื่อผู้ติดต่อ:</strong> {{ $company->compContactName ?? 'ไม่ระบุ' }}
                    </p>
                    <p class="list-group-item"><strong>ตำแหน่งผู้ติดต่อ:</strong>
                        {{ $company->compContactPosition ?? 'ไม่ระบุ' }}</p>
                </div>
                <a href="{{ route('company.edit', $company->compID) }}" class="btn btn-primary mt-3" >แก้ไขข้อมูล</a>
            </div>

            <style>
                .card-body p {
                    margin-left: 5%;
                    margin-top: 5%;
                    display: flex;
                    font-size: large;
                }

                .card-body a {
                    margin-left: 6%;
                    margin-top: 5%;
                    font-size: large;
    
                }
                #company {
                    display: inline;
                    margin: 0;
                    /* ถ้ามีค่า margin ที่มากเกินไปให้ปรับค่าเป็น 0 */
                    padding: 0;
                    /* เช่นเดียวกันกับ padding */
                }

                .card-body strong {
                    display: inline-block;
                    width: 200px;
                    font-size: large;
                }
            </style>

        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
@endsection

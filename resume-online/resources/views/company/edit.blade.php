<!-- resources/views/company/edit.blade.php -->

@extends('layouts.app')

@section('title', 'แก้ไขข้อมูลบริษัท')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm" style="width: 100%; max-width: 600px;">
            <div class="card-header bg-warning text-dark">
                <h3 class="mb-0">แก้ไขข้อมูลบริษัท</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('company.update', $company->compID) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="compName" class="form-label">ชื่อบริษัท</label>
                        <input type="text" class="form-control" id="compName" name="compName" value="{{ old('compName', $company->compName) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="compDescription" class="form-label">รายละเอียด</label>
                        <textarea class="form-control" id="compDescription" name="compDescription">{{ old('compDescription', $company->compDescription) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="compPhone" class="form-label">โทรศัพท์</label>
                        <input type="text" class="form-control" id="compPhone" name="compPhone" value="{{ old('compPhone', $company->compPhone) }}">
                    </div>
                    <div class="mb-3">
                        <label for="compEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="compEmail" name="compEmail" value="{{ old('compEmail', $company->compEmail) }}">
                    </div>
                    <div class="mb-3">
                        <label for="compWebsite" class="form-label">เว็บไซต์</label>
                        <input type="url" class="form-control" id="compWebsite" name="compWebsite" value="{{ old('compWebsite', $company->compWebsite) }}">
                    </div>
                    <div class="mb-3">
                        <label for="compAddress" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="compAddress" name="compAddress">{{ old('compAddress', $company->compAddress) }}</textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <a href="{{ route('company.show', $company->compID) }}" class="btn btn-secondary ms-2">ยกเลิก</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@extends('layouts.company')

@section('content')
<div class="container" style="display: flex; justify-content: center;" >


{{-- <a href="{{ route('findUser') }}" class="btn btn-info mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}

<div class="card" style="margin-top: 2%; width: 55%;">
    <div class="card-header bg-primary text-white">

        <h2><strong>แก้ไขข้อมูลบริษัท</strong></h2> 

    </div>
    
    <div class="card-body">
        <form action="{{ route('company.update', $company->compID) }}" method="POST">
            @csrf

                <div class="row mt-4">
                    
                    <h3>ข้อมูลบริษัท</h3>
                    
                    {{-- ชื่อบริษัท --}}
                    <div class="col-6">
                        <label class="form-label">ชื่อบริษัท</label>
                        <input type="text" name="compName" class="form-control" value="{{ $company->compName }}" required>
                    </div>

                    {{-- รายละเอียดของบริษัท --}}
                    <div class="col-12">
                        <label class="form-label" for="compDescription">รายละเอียดของบริษัท</label>
                        <input type="text" class="form-control" name="compDescription" class="form-control" required value="{{ $company->compDescription }}">
                    </div>
                    
                    <h3 style="margin-top: 5%">ข้อมูลที่อยู่</h3>

                    {{-- ที่อยู่ --}}
                    <div class="col-12">
                        <label class="form-label" for="compAddress">ที่อยู่</label>
                        <input type="text" name="compAddress" class="form-control" value="{{ $company->compAddress }}">
                    </div>
                    

                    <h3 style="margin-top: 5%">ข้อมูลติดต่อ</h3>

                    {{-- เบอร์โทรศัพท์ --}}
                    <div class="col-4">
                        <label class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" name="compPhone" class="form-control" value="{{ $company->compPhone }}">
                    </div>

                    {{-- อีเมล --}}
                    <div class="col-4">
                        <label class="form-label" for="compEmail">อีเมล</label>
                        <input type="email" name="compEmail" class="form-control" value="{{ $company->compEmail }}">
                    </div>

                    {{-- เว็บไซต์ --}}
                    <div class="col-4">
                        <label class="form-label" for="compWebsite">เว็บไซต์บริษัท</label>
                        <input type="text" name="compWebsite" class="form-control" value="{{ $company->compWebsite }}">
                    </div>

                    {{-- ชื่อผู้ติดต่อ --}}
                    <div class="col-12">
                        <label class="form-label" for="compContactName">ชื่อผู้ติดต่อ</label>
                        <input type="text" name="compContactName" class="form-control" value="{{ $company->compContactName }}">
                    </div>
                

                    {{-- ตำแหน่งผู้ติดต่อ --}}
                    <div class="col-12">
                        <label class="form-label" for="compContactPosition">ตำแหน่งผู้ติดต่อ</label>
                        <input type="text" name="compContactPosition" class="form-control" value="{{ $company->compContactPosition }}">
                    </div>

    
                     <a type="submit" style="margin-top: 2%">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                    </a>
                    <style>
                        label{
                            margin-top: 2%;
                        }
                    </style>

                
                </div>

{{-- <div class="container">
>>>>>>> Stashed changes
    <h2>Edit Company</h2>
    <form action="{{ route('company.update', $company->compID) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="compName">Company Name</label>
            <input type="text" name="compName" class="form-control" value="{{ $company->compName }}" required>
        </div>
        <div class="form-group">
            <label for="compDescription">Description</label>
            <textarea name="compDescription" class="form-control">{{ $company->compDescription }}</textarea>
        </div>
        <div class="form-group">
            <label for="compAddress">Address</label>
            <input type="text" name="compAddress" class="form-control" value="{{ $company->compAddress }}">
        </div>
        <div class="form-group">
            <label for="compPhone">Phone</label>
            <input type="text" name="compPhone" class="form-control" value="{{ $company->compPhone }}">
        </div>
        <div class="form-group">
            <label for="compEmail">Email</label>
            <input type="email" name="compEmail" class="form-control" value="{{ $company->compEmail }}">
        </div>
        <div class="form-group">
            <label for="compWebsite">Website</label>
            <input type="text" name="compWebsite" class="form-control" value="{{ $company->compWebsite }}">
        </div>
        <div class="form-group">
            <label for="compContactName">Contact Name</label>
            <input type="text" name="compContactName" class="form-control" value="{{ $company->compContactName }}">
        </div>
        <div class="form-group">
            <label for="compContactPosition">Contact Position</label>
            <input type="text" name="compContactPosition" class="form-control" value="{{ $company->compContactPosition }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div> --}}
        </form>
            
    </div>
</div>
@endsection

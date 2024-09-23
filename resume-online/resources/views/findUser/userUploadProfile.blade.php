@extends('layouts.user')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card">
        <style>
            .card{
                width: 80%;
                margin-top: 10%;
                margin-left: 10%;
            }
        </style>
        <div class="card-header">
            <h2><strong>อัพโหลดโปร์ไฟล์</strong></h2>
        </div>
        <div class="card-body">
            <form form method="POST" action="{{route('user.uploadProfile')}}" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input name="file" id="file" type="file" class="form-control" required>
                    <a type="submit">
                        <button class="btn btn-primary" type="submit">ยืนยัน</button>
                    </a>
                </div>
            </form>
            
        </div>
    </div>

    
@endsection

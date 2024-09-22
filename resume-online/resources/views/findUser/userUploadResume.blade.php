@extends('layouts.user')

@section('content')
    {{-- <a href="{{ route('findUser') }}" class="btn btn-secondary mb-4" style="margin-top: 5%">ย้อนกลับ</a> --}}
    <div class="card">
        <div class="card-header">
            รายละเอียดผู้ใช้ 
        </div>
        <div class="card-body">
            <form form method="POST" action="{{route('user.uploadResume')}}" enctype="multipart/form-data">
                @csrf
                <div class="input-box">
                    <p class="card-text"><strong>อัพโหลดResume:</strong> </p>
                    <input name="file" id="file" type="file" required>
                </div>
                 <a type="submit">
                    <button type="submit" class="btn">ยืนยัน</button>
                </a>
                
            </form>
            
        </div>
    </div>

    
@endsection

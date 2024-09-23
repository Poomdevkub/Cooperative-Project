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
            <h2><strong>อัพโหลดเรซูเม่</strong></h2>
        </div>
        <div class="card-body">
            <form form method="POST" action="{{route('user.uploadResume')}}" enctype="multipart/form-data">
                @csrf
                <div class="input-group mb-3">
                    <input name="file" id="file" type="file" class="form-control" required>
                    <a type="submit">
                        <button class="btn btn-primary" type="submit">ยืนยัน</button>
                    </a>
                </div>

                {{-- <div class="input-box">
                    <p class="card-text"><strong>อัพโหลดResume:</strong> </p>
                    <input name="file" id="file" type="file" required>
                </div>
                 <a type="submit">
                    <button type="submit" class="btn">ยืนยัน</button>
                </a> --}}
                
            </form>
            
        </div>
    </div>

    
@endsection

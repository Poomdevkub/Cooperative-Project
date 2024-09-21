@extends('layouts.app')

@section('content')
    <h1 class="mb-4">ผู้ใช้ทั้งหมด</h1>
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->userFirstname }} {{ $user->userSurname }}</h5>
                        <p class="card-text"><strong>ประเภทผู้ใช้:</strong> {{ ucfirst($user->userType) }}</p>
                        <a href="{{ route('user.show', $user->userID) }}" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

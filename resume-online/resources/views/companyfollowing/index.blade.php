@extends('layouts.app')

@section('title', 'Company Following')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Company Following</h1>
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">รายละเอียดการติดตามบริษัท</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ชื่อบริษัท</th>
                            <th>ประเภทการติดตาม</th>
                            <th>ชื่อบุคคลที่ค้นหา</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companyFollowings as $following)
                            <tr>
                                <td>{{ $following->company->compName }}</td>
                                <td>{{ $following->companyFollowingType->typeNameFollowing }}</td>
                                <td>
                                    <a href="{{ route('user.getByid', $following->workfinder->workfinderID) }}">
                                        {{ $following->workfinder->firstname }} {{ $following->workfinder->surname }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection

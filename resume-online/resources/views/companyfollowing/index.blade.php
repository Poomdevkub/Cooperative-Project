@extends('layouts.app')

@section('title', 'Company Following')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        {{-- <h1 class="text-center mb-4">Company Following</h1> --}}
        <div class="card shadow-sm" style="width: 90%">

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
                            <th>ดำเนินการ</th> <!-- คอลัมน์สำหรับปุ่ม -->
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
                                <td>
                                    <a href="{{ route('user.getByid', $following->workfinder->workfinderID) }}" class="btn btn-info btn-sm">ดูรายละเอียด</a>
                                    <form action="{{ route('companyfollowing.destroy', $following->companyFollowingID) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?')">ลบ</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <style>
                    .card-body th {
                        margin-left: 5%;
                        margin-top: 5%;
                        font-size: large;
                    }

                    .card-body td {
                        margin-left: 6%;
                        margin-top: 5%;
                    }


                </style>


            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
@endsection

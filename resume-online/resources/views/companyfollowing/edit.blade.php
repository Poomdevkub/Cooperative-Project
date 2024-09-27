@extends('layouts.company')

@section('title', 'แก้ไขประเภทการติดตาม')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="card shadow-sm" style="width: 90%">

            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">แก้ไขประเภทการติดตามบริษัท</h3>
            </div>

            <div class="card-body">
                <form action="{{ route('companyfollowing.update', $companyFollowing->companyFollowingID) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="companyFollowingTypeID" class="form-label">ประเภทการติดตาม</label>
                        <select name="companyFollowingTypeID" id="companyFollowingTypeID" class="form-select">
                            @foreach($companyfollowingtypes as $type)
                                <option value="{{ $type->companyFollowingTypeID }}" {{ $companyFollowing->companyFollowingTypeID == $type->companyFollowingTypeID ? 'selected' : '' }}>
                                    {{ $type->typeNameFollowing }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">อัปเดต</button>
                </form>
            </div>
        </div>
    </div>
@endsection

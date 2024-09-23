@extends('layouts.company')

@section('content')
<div class="container" >
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
</div>
@endsection

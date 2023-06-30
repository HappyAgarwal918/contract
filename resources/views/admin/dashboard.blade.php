@extends('admin.layout')

@section('admincontent')

<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Hello {{ Auth::user()->name }}</div>
        </div>
    </div>
</div>

@endsection
@extends('layouts.master')

@section('page_title', 'About Us')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>{{ $title }}</h2>
                </div>
                <div class="card-body">
                    <p>Hello Mostafizur</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
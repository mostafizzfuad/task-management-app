@extends('layouts.master')
@section('page_title', 'Contact Us')

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
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="name" class="form-control" name="" id="" placeholder="Enter Your Name" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" name="" id="" placeholder="Enter Your Email" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
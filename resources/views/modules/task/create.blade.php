@extends('layouts.master')

@section('page_title', 'Create Task')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Create Task</h1>
    <ol class="breadcrumb mb-2">
        <li class="breadcrumb-item active">Create Task</li>
    </ol>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Create Task</h2>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="" placeholder="Enter Title" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea class="form-control" name="" id="" rows="2"
                                placeholder="Enter Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Select Status</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Select Deadine</label>
                            <input type="date" class="form-control" name="deadline" id="" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Select User</label>
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">User 1</option>
                                <option value="0">User 2</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <button type="submit" class="btn btn-success">Create New Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
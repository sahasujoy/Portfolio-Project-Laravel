@extends('layouts.admin_layout')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Portfolio Admin Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Portfolio Admin</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-3 mt-3">
                        <h3>Background Image</h3>
                        <img src="" alt="" class="img-thumbnail">
                        <input class="mt-3" type="file" id="bg_img" name="bg_img">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <div class="mb-3">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title"><h4>Sub Title</h4></label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                        </div>
                        <div>
                            <h4>Upload Resume</h4>
                            <input class="mt-2" type="file" id="resume" name="resume">
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary mt-3">
                </div>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>
@endsection

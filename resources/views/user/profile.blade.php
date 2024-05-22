@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>My Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
                <li class="breadcrumb-item active">My Profile</li>
            </ol>
        </nav>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                        <h2>{{ $user->name }}</h2>
                        <h3>{{ $user->role }}</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title">Profile Details</h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Full Name</div>
                            <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Role</div>
                            <div class="col-lg-9 col-md-8">{{ $user->role }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

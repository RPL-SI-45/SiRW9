@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>Account Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
                <li class="breadcrumb-item active">Account Settings</li>
            </ol>
        </nav>
    </div>

    <section class="section account-settings">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Change Password</h5>
                        @if(session('success'))
                            <div class="alert alert-success" id="flash-message">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger" id="flash-message">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('change.password') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

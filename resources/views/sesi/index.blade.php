@extends('layouts.admin')
@section('content')
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1 class="text-center">Login</h1>
    <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ Session::get('email') }}" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3 d-grid">
            <button name ="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection
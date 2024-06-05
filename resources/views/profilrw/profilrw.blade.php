@extends('layouts.admin')

@section('content')
<div class="pagetitle text-center">
    <h1>Profil RW</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/data-penduduk">Home</a></li>
            <li class="breadcrumb-item active">Profil RW</li>
        </ol>
    </nav>
</div>

<div class="container">
    @if ($profilRW)
        <div class="card shadow p-4 mb-4">
            <p>{!! $profilRW->description !!}</p>

            @if ($profilRW->image)
                <div class="text-center">
                    <img src="{{ asset($profilRW->image) }}" alt="Profil RW" class="img-fluid">
                </div>
            @endif

            <div class="text-center mt-4">
                <a href="/admin/profilrw/edit/{{ $profilRW->id }}" class="btn btn-primary">Edit</a>
                <!-- <a href="/admin/profilrw/create" class="btn btn-success">Create New</a> -->
            </div>
        </div>
    @else
        <!-- <div class="alert alert-warning" role="alert">
            Profil RW belum tersedia.
        </div>
        <div class="text-center">
            <a href="/admin/profilrw/create" class="btn btn-success">Create New</a>
        </div> -->
    @endif

    <!-- <div class="text-center">
        <a href="/admin/profilrw/create" class="btn btn-success">Create New</a>
    </div> -->
</div>
@endsection

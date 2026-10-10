@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="text-center py-5">
    <h1 class="fw-bold">Selamat Datang</h1>
    <p class="text-muted">Website portofolio project Rekayasa Web</p>
    <a href="{{ route('project.index') }}" class="btn btn-primary">Lihat Project</a>
</div>
@endsection
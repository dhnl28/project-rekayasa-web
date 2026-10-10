@extends('layouts.app')

@section('title', $project->title)

@section('content')
<div class="container">
    <a href="{{ route('project.index') }}" class="btn btn-outline-secondary mb-3">Kembali</a>
    <div class="card shadow-sm border-0">
        <img src="{{ asset('images/' . $project->image) }}" alt="" class="card-img-top"
             style="height: 300px; object-fit: cover;">
        <div class="card-body">
            <h3>{{ $project->title }}</h3>
            <span class="badge bg-success">{{ $project->status }}</span>
            <p class="mt-3">{{ $project->description }}</p>
            <p class="text-muted mb-0">Tech : {{ $project->teknologi }}</p>
        </div>
    </div>
</div>
@endsection

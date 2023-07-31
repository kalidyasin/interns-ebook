@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $user->name }}
        </div>
        <div class="card-body">
            <p>Email: {{ $user->email }}</p>
            <p>Joined: {{ $user->created_at->diffForHumans() }}</p>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Welcome to Dashboard</h4>
            </div>
            <div class="card-body">
                <p>Hello, {{ Auth::user()->username }}!</p>
                <p>This is your dashboard. Use the navigation menu to manage student data.</p>
                <div class="mt-4">
                    <a href="/mahasiswa" class="btn btn-primary">Manage Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
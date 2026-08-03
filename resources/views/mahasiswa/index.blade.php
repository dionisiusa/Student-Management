@extends('layouts.app')

@section('title', 'Mahasiswa List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Data Mahasiswa</h2>
    <a href="/mahasiswa/create" class="btn btn-primary">Add Mahasiswa</a>
</div>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>
                                <span class="badge {{ $mhs->active == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $mhs->active }}
                                </span>
                            </td>
                            <td>
                                <a href="/mahasiswa/{{ $mhs->nim }}/edit" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/mahasiswa/{{ $mhs->nim }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No data available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
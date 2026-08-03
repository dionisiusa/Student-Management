@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h4>Edit Mahasiswa</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/mahasiswa/{{ $mahasiswa->nim }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" 
                               id="nim" name="nim" value="{{ $mahasiswa->nim }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                               id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email', $mahasiswa->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="active" class="form-label">Status</label>
                        <select class="form-select @error('active') is-invalid @enderror" 
                                id="active" name="active" required>
                            <option value="active" {{ old('active', $mahasiswa->active) == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="nonactive" {{ old('active', $mahasiswa->active) == 'nonactive' ? 'selected' : '' }}>Non-Active</option>
                        </select>
                        @error('active')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/mahasiswa" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
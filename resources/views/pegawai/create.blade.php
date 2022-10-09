@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <h1 class="m-0">New data pegawai</h1>
        <div class="row justify-content-center">
            <div class="card col-md-12">
                <div class="card-body">
                    <form action="{{ route('pegawai.create') }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Masukan nama">
                            @error('name')
                                <div class="text-light bg-danger">Nama harus di isi!</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="golongan" class="form-label">GOLONGAN</label>
                            <select type="text" name="golongan" class="form-control " id="golongan"
                                placeholder="Masukan golongan">
                                <option disabled selected>Pilih salah satu!</option>
                                @foreach ($golongans as $golongan)
                                    <option value="{{ $golongan->id }}">{{ $golongan->nama_golongan }}</option>
                                @endforeach
                            </select>
                            @error('golongan')
                                <div class="text-light bg-danger">Golongan harus di isi!</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="alamat" name="alamat" class="form-control " id="alamat"
                                placeholder="Masukan alamat">
                            @error('alamat')
                                <div class="text-light bg-danger">Alamat harus di isi!</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="number" name="nip" class="form-control" id="nip"
                                placeholder="Masukan nip">
                            @error('nip')
                                <div class="text-light bg-danger">Nip harus di isi!</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-5 ">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="input-group mb-3">
            <form action="{{ route('pegawai.cari') }}" method="GET" class="d-flex col-12 m-0 p-0" width="100%">
                <input name="cari" type="text" class="form-control" placeholder="Cari..">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
        <h2 class="text_utama">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN KOMERING ILIR</h2>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary fw-bold my-1 mx-1">Data pegawai +</a>
        <div class="table-responsive">
            <table class="table small table-hover ">
                <thead class="bg-secondary text-white">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NIP</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">GOLONGAN</th>
                        <th scope="col">MASA KERJA</th>
                        <th scope="col">TOTAL GAJI</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($pegawais->count())
                        @foreach ($pegawais as $index => $pegawai)
                            <tr>
                                <td>#</td>
                                <td><a href="{{ route('pegawai.show', $pegawai->id) }}"
                                        class="text-dark text-decoration-none">{{ $pegawai->name }}</a></td>
                                <td>{{ $pegawai->nip }}</td>
                                <td>{{ $pegawai->alamat }}</td>
                                <td>{{ $pegawai->golongan->nama_golongan }}</td>
                                <td>{{ $pegawai->golongan->masa_kerja }} Tahun</td>
                                <td>{{ $pegawai->golongan->total_gaji }} </td>
                                @if (Auth::check())
                                    <td class="d-flex">
                                        <a href="{{ route('pegawai.edit', $pegawai->id) }}"
                                            class="btn btn-sm btn-primary text-light">ubah</a>
                                        <form action="{{ route('pegawai.delete', $pegawai->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger text-light mx-1 "
                                                onclick="alert('Yakin')">delete</button>
                                        </form>
                                    </td>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <div class="alert alert-info mt-2">Tidak ada data pegawai!</div>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="mb-5">{{ $pegawais->links() }}
    </div>

@endsection

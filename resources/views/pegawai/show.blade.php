@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="container">
            <h2 class="text_utama mt-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN KOMERING ILIR</h2>

            <div class="card mb-12" style="max-width: 840px;">
                <div class="row">
                    <div class="col-md-5 d-flex align-content-center justify-content-center flex-wrap ">
                        <img src="{{ asset('img/1.jpg') }}" alt="pegawai" width="100%">
                    </div>
                    <div class="col-md-7">
                        <div class="d-flex justify-content-start table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{ $pegawai->name }} ( <span class="text-muted"> {{ $pegawai->nip }} </span>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Golongan</td>
                                        <td>: </td>
                                        <td>{{ $pegawai->golongan->nama_golongan }} </td>
                                    </tr>
                                    <tr>
                                        <td>Gaji Pokok </td>
                                        <td>: </td>
                                        <td>Rp. {{ $pegawai->golongan->gaji }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tunjangan Bulanan</td>
                                        <td>: </td>
                                        <td>Rp. {{ $pegawai->golongan->tunjangan_bulanan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tunjangan Pulsa</td>
                                        <td>: </td>
                                        <td>Rp. {{ $pegawai->golongan->tunjangan_pulsa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tunjangan Transportasi</td>
                                        <td>: </td>
                                        <td>Rp. {{ $pegawai->golongan->tunjangan_transportasi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tunjangan Anak</td>
                                        <td>: </td>
                                        <td>Rp. {{ $pegawai->golongan->tunjangan_anak }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pajak</td>
                                        <td>: </td>
                                        <td>5%</td>
                                    </tr>
                                    <tr>
                                        <td>Total Pendapatan</td>
                                        <td>:</td>
                                        <td>Rp. {{ $pegawai->golongan->total_gaji }}</td>
                                    </tr>
                                    <tr>
                                        <td>Masa Kerja</td>
                                        <td>:</td>
                                        <td>{{ $pegawai->golongan->masa_kerja }} Tahun</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $pegawai->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @else
        <div class="container">
            <div class=" d-flex justify-content-center my-5">
                <img src="{{ asset('img/svg/404.svg') }}" class="card-img img-notfound" alt="404">
            </div>
        </div>
    @endif
@endsection

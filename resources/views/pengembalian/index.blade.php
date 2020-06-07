@extends('layouts.app')
@section('title', 'Halaman Pengembalian')
@section('content')

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-3">Cek Daftar Pengembalian Buku</h1>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Nama Penerbit</th>
                                <th scope="col">Tanggal Pengembalian</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $pengembalian as $pngmbln )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pngmbln->nama }}</td>
                                <td>{{ $pngmbln->nim }}</td>
                                <td>{{ $pngmbln->judul_buku }}</td>
                                <td>{{ $pngmbln->nama_penerbit }}</td>
                                <td>{{ $pngmbln->tgl_kembali}}</td>

                                <td>
                                    @if($pngmbln->tgl_kembali == null)
                                    <p>Belum Dikembalikan</p>
                                    @else
                                        <p>Telah Dikembalikan</p>
                                    @endif</td>
                                <td>
                                <a href="/pengembalian/{{ $pngmbln->id }}/edit" class="btn btn-sm btn-info">pengembalian</a>                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @endsection
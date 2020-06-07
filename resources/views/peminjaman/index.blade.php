@extends('layouts.app')
@section('title', 'Halaman Peminjaman')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-3">Daftar Peminjaman Buku</h1>

                    <a href="/peminjaman/create" class="btn btn-info my-3">Form Peminjaman Buku</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Nama Penerbit</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $peminjaman as $pmjmn )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pmjmn->nama }}</td>
                                <td>{{ $pmjmn->nim }}</td>
                                <td>{{ $pmjmn->judul_buku }}</td>
                                <td>{{ $pmjmn->nama_penerbit }}</td>
                                <td>{{ $pmjmn->tgl_pinjam }}</td>
                                <td>
                                    <a href="/peminjaman/{{ $pmjmn->id }}/edit" class="btn btn-success">edit</a>
                                    <form action="/peminjaman/{{ $pmjmn -> id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
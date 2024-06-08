@extends('layouts.app')

@section('title', 'Paket Wisata')

@section('header-title', 'Manajemen Paket Wisata')

@section('content')
<div class="tabel-wrapper">
    <h3 class="main-title">Daftar Paket Wisata</h3>
    <div class="button-container">
        <a href="{{ route('paket.create') }}" class="move-button">Input Data</a>
        <a href="{{ route('paket.print') }}" class="move-button">Print</a>
    </div>
    <div class="tabel-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Informasi Destinasi</th>
                    <th>Detail Paket Wisata</th>
                    <th>Deskripsi Paket</th>
                    <th>Jadwal</th>
                    <th>Persyaratan & Ketentuan</th>
                    <th>Waktu Transaksi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pakets as $paket)
                <tr>
                    <td>{{ $paket->id }}</td>
                    <td>{{ $paket->informasi_destinasi }}</td>
                    <td>{{ $paket->detail_paket_wisata }}</td>
                    <td>{{ $paket->deskripsi_paket }}</td>
                    <td>{{ $paket->jadwal }}</td>
                    <td>{{ $paket->persyaratan_ketentuan }}</td>
                    <td>{{ $paket->created_at }}</td>
                    <td>
                        <div class="button-container">
                            <a href="{{ route('paket.edit', $paket->id) }}" class="edit-button">Edit</a>
                            <form action="{{ route('paket.destroy', $paket->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="remove-button" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8">Total Paket: {{ $pakets->count() }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection

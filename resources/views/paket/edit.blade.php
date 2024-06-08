@extends('layouts.app')

@section('title', 'Edit Data Paket Wisata')

@section('header-title', 'Edit Data Paket Wisata')

@section('content')
<div class="form-wrapper">
    <form action="{{ route('paket.update', $paket->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="informasi_destinasi">Informasi Destinasi</label>
            <input type="text" id="informasi_destinasi" name="informasi_destinasi" value="{{ old('informasi_destinasi', $paket->informasi_destinasi) }}">
        </div>
        <div class="form-group">
            <label for="detail_paket_wisata">Detail Paket Wisata</label>
            <input type="text" id="detail_paket_wisata" name="detail_paket_wisata" value="{{ old('detail_paket_wisata', $paket->detail_paket_wisata) }}">
        </div>
        <div class="form-group">
            <label for="deskripsi_paket">Deskripsi Paket</label>
            <input type="text" id="deskripsi_paket" name="deskripsi_paket" value="{{ old('deskripsi_paket', $paket->deskripsi_paket) }}">
        </div>
        <div class="form-group">
            <label for="jadwal">Jadwal</label>
            <input type="date" id="jadwal" name="jadwal" value="{{ old('jadwal', $paket->jadwal) }}">
        </div>
        <div class="form-group">
            <label for="persyaratan_ketentuan">Persyaratan dan Ketentuan</label>
            <textarea id="persyaratan_ketentuan" name="persyaratan_ketentuan">{{ old('persyaratan_ketentuan', $paket->persyaratan_ketentuan) }}</textarea>
        </div>
        <button type="submit" class="move-button">Simpan Perubahan</button>
    </form>
</div>
@endsection

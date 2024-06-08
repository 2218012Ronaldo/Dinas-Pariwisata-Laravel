<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Paket Wisata</title>
    <link rel="stylesheet" href="{{ asset('style/print.css') }}">
</head>
<body>
    <h1>Daftar Paket Wisata</h1>
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
            </tr>
            @empty
            <tr>
                <td colspan="7">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">Total Paket: {{ $pakets->count() }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

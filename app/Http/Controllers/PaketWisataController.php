<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class PaketWisataController extends Controller
{
    public function index()
    {
        $pakets = PaketWisata::all();
        return view('paket.index', compact('pakets'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'informasi_destinasi' => 'required|string|max:255',
            'detail_paket_wisata' => 'required|string|max:255',
            'deskripsi_paket' => 'required|string|max:255',
            'jadwal' => 'required|date',
            'persyaratan_ketentuan' => 'required|string',
        ]);

        PaketWisata::create($validated);

        return redirect()->route('paket.index')->with('success', 'Paket Wisata berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $paket = PaketWisata::findOrFail($id);
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'informasi_destinasi' => 'required|string|max:255',
            'detail_paket_wisata' => 'required|string|max:255',
            'deskripsi_paket' => 'required|string|max:255',
            'jadwal' => 'required|date',
            'persyaratan_ketentuan' => 'required|string',
        ]);

        $paket = PaketWisata::findOrFail($id);
        $paket->update($validated);

        return redirect()->route('paket.index')->with('success', 'Paket Wisata berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $paket = PaketWisata::findOrFail($id);
        $paket->delete();

        return redirect()->route('paket.index')->with('success', 'Paket Wisata berhasil dihapus.');
    }

    public function print()
    {
        // Query data from the database
        $pakets = PaketWisata::all();
    
        // Create Dompdf instance
        $dompdf = new Dompdf();
    
        // Generate HTML for the PDF
        $html = view('paket.print', compact('pakets'))->render();
    
        // Load HTML content into Dompdf
        $dompdf->loadHtml($html);
    
        // Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
    
        // Render PDF
        $dompdf->render();
    
        // Output PDF to the browser
        return $dompdf->stream("daftar_paket_wisata.pdf");
    }
}

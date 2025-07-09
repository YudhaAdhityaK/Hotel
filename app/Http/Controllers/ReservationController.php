<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Barryvdh\DomPDF\Facade\Pdf;



class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $reservations = \App\Models\Reservation::all();
    return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 // ✅ Validasi input
    $request->validate([
        'nama_tamu' => 'required',
        'nomer_kamar' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
        'status' => 'required'
    ]);

    // ✅ Simpan data ke tabel 'reservations'
    \App\Models\Reservation::create($request->all());

    // ✅ Kembali ke halaman utama (index) + pesan sukses
    return redirect()->route('reservations.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
         return view('reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
           $request->validate([
        'nama_tamu' => 'required',
        'nomer_kamar' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
        'status' => 'required'
    ]);

    $reservation->update($request->all());

    return redirect()->route('reservations.index')->with('success', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
           $reservation->delete();

    return redirect()->route('reservations.index')->with('success', 'Data berhasil dihapus!');
    }
    
    public function exportPdf()
{
    $reservations = \App\Models\Reservation::all();

    $pdf = Pdf::loadView('reservations.pdf', compact('reservations'));
    return $pdf->download('data-reservasi.pdf');
}

}

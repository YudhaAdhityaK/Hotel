<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
    }

    public function create() {
        return view('reservations.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_tamu' => 'required',
            'nomer_kamar' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'status' => 'required'
        ]);

        Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    public function edit(Reservation $reservation) {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation) {
        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }

    public function destroy(Reservation $reservation) {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }

    public function exportPdf() {
        $reservations = Reservation::all();
        $pdf = Pdf::loadView('reservations.pdf', compact('reservations'));
        return $pdf->download('data-reservasi.pdf');
    }
}
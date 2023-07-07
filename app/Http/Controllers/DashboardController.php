<?php

namespace App\Http\Controllers;

use App\Models\Pemilihan;
use App\Models\Voting;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardController extends Controller
{
  public function index()
  {
    $pemilihan = Pemilihan::paginate(10);
    return view('admin.dashboard.index', compact('pemilihan'));
  }

  public function export_pdf(Pemilihan $pemilihan)
  {
    $kandidatWithCount = $pemilihan->kandidat()->withCount('votings')->get();
    $pdf = Pdf::loadView('admin.dashboard.pdf', compact('pemilihan', 'kandidatWithCount'));

    return $pdf->stream('data_kandidat.pdf');
  }
}

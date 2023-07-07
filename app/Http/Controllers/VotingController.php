<?php

namespace App\Http\Controllers;

use App\Models\Pemilihan;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
  public function index()
  {
    $pemilihan = Pemilihan::all();
    return view('voting.index', compact('pemilihan'));
  }

  public function show(Pemilihan $pemilihan)
  {

    if ($pemilihan->status == 'tidak_berlangsung' || $pemilihan->status == 'selesai') {
      return redirect()->route('voting.index')->with('error', 'Voting Belum Berlangsung');
    }

    $voting = Voting::all()->where('user_id', auth()->user()->id)->where('pemilihan_id', $pemilihan->id);

    return view('voting.show', compact('pemilihan', 'voting'));
  }

  public function vote(Request $request, Pemilihan $pemilihan)
  {
    $request->validate([
      'voting' => 'required'
    ]);

    $user = auth()->user();
    $hasVoted = Voting::where('user_id', $user->id)->where('pemilihan_id', $pemilihan->id)->exists();

    if ($hasVoted) {
      return redirect()->route('voting.index')->with('error', 'You have already voted in this pemilihan.');
    }

    $vote = new Voting();
    $vote->user_id = $user->id;
    $vote->kandidat_id = $request->input('voting');
    $vote->pemilihan_id = $pemilihan->id;
    $vote->save();

    return redirect()->route('voting.index')->with(['success' =>  'Berhasil Voting!']);
  }
}

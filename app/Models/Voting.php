<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function kandidat()
  {
    return $this->belongsTo(Kandidat::class);
  }

  public function pemilihan()
  {
    return $this->belongsTo(Pemilihan::class);
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kandidat extends Model
{
  use HasFactory;

  protected $guarded = [];


  public function pemilihan()
  {
    return $this->belongsTo(Pemilihan::class);
  }

  public function votings()
  {
    return $this->hasMany(Voting::class);
  }
}

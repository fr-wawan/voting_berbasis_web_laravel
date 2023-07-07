<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilihan extends Model
{
  use HasFactory;

  protected $guarded = [];

  protected $with = ['kandidat'];

  public function kandidat()
  {
    return $this->hasMany(Kandidat::class);
  }

  public function votings()
  {
    return $this->hasMany(Voting::class);
  }
}

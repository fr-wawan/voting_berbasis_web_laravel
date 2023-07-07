<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    User::factory()->create([
      'name' => 'admin',
      'email' => 'admin@gmail.com',
      'no_ktp' => '123123',
      'alamat' => 'Sambutan',
      'tanggal_lahir' => '2006-12-18',
      'jenis_kelamin' => 'pria',
      'password' => bcrypt('wawankok12'),
      'is_admin' => 1
    ]);
  }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('pemilihans', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->enum('status', ['tidak_berlangsung', 'berlangsung', 'selesai']);
      $table->date('tanggal_pemilihan');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pemilihans');
  }
};

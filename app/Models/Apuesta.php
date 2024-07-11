<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;

public function up()
{
    Schema::create('apuestas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_juego')->constrained('juegos');
        $table->dateTime('fecha');
        $table->integer('monto');
        $table->timestamps();
    });
}


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;
   
public function up()
{
    Schema::create('juegos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 45);
        $table->integer('cantidad_jugadores');
        $table->boolean('juego_de_cartas');
        $table->timestamps();
    });
}

}

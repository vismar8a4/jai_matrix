<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_comprovante');
            $table->string('serie_comprovante');            
            $table->string('numero_comprovante');        
            $table->decimal('impuesto');
            $table->decimal('total');            
            $table->string('estado');
            
            $table->foreignId('persona_id')
                ->nullable()
                ->constrained()
                ->onDelete('SET NULL');

            $table->foreignId('usuario_id')
                ->nullable()
                ->constrained()
                ->onDelete('SET NULL');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingresos');
    }
}

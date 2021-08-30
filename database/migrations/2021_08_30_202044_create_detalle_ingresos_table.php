<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->id();
           
            $table->integer('cantidad');
            $table->decimal('precio');


            $table->foreignId('articulo_id')
                ->nullable()
                ->constrained()
                ->onDelete('SET NULL');
            
            $table->foreignId('ingreso_id')
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
        Schema::dropIfExists('detalle_ingresos');
    }
}

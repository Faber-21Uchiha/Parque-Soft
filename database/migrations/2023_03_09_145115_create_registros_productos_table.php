<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros_productos', function (Blueprint $table) {
            /*Datos configuracion actual Hardware*/
            $table->id();
            $table->string('Marca_PC');
            $table->string('Marca_Monitor');
            $table->string('Modelo_PC');
            $table->string('Modelo_Monitor');
            $table->string('Serial_Monitor');
            $table->string('Placa');

            $table->string('Serial_Placa');
            $table->string('Teclado');
            $table->string('Serial_Teclado');
            $table->string('Procesador');
            $table->string('Velocidad_Ghz');
            $table->string('Serial_Procesador');
            $table->string('Mouse');

            $table->string('Serial_Mouse');
            $table->string('Memoria_RAM');
            $table->string('Velocidad_Mb');
            $table->string('Serial_RAM');
            $table->string('CDROM');
            $table->string('Serial_CDROM');
            $table->string('Disco_Duro_Marca');
            $table->string('Capacidad_GB');
            $table->string('Serial_HD');
            $table->string('IDE');
            $table->string('SATA');

            $table->string('Unidad_DVD');
            $table->string('Disco_drive');
            $table->string('Serial_DVD');
            $table->string('Serial_Floppy');
            $table->string('Tarjeta_video');
            $table->string('Capacidad_Mb');
            $table->string('Serial_video');
            $table->string('Otros_dispositivos_video');

            $table->string('Serial_Otros_Video');
            $table->string('Tarjeta_Sonido');
            $table->string('Serial_Sonido');
            $table->string('Otros_dispositivos_Sonido');
            $table->string('Serial_Otros_Sonido');

            /* Datos configuracion actual Software */
            $table->string('Sistema_Operativo');
            $table->string('Paquete_office');
            $table->string('Internet');
            $table->string('Antivirus');
            $table->string('Multimedia');

             /* Datos Orsrvaciones y Mantemiento*/
             $table->string('Tipo_Mantenimiento');
             $table->date('Fecha_Ingreso');
             $table->date('Fecha_Retiro');
             $table->string('Encargado');
            
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
        Schema::dropIfExists('registros_productos');
    }
};

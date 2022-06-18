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
        Schema::create('taches_publique', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type')->nullable();
            $table->bigInteger('date_debut')->nullable();
            $table->integer('duree')->nullable();
            $table->string('classe')->nullable();
            $table->text('description')->nullable();
            $table->string('titre')->nullable();
            $table->string('localisation')->nullable();
            $table->foreignId('id_eleve')->nullable()->constrained('eleves');
            $table->foreignId('id_enseignant')->nullable()->constrained('enseignants');
            
    });
}

    public function down()
    {
        Schema::dropIfExists('taches_publique');
    }
};

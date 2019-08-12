<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_eleves', function (Blueprint $table) {
            $table->bigIncrements('idParent')->nullable(false);
            $table->string('nom', 45)->nullable(false);
            $table->string('prenoms',100)->nullable(false);
            $table->char('sexe')->nullable(false);
            $table->string('email',45)->nullable(true);
            $table->string('tel1',15)->nullable(true);
            $table->string('tel2',15)->nullable(true);
            $table->string('password',100)->nullable(false);
            $table->string('langueLocale', 45)->nullable(true);
            $table->string('profession',100)->nullable(true);
            $table->bigInteger('idUtilisateur')->nullable(false);
            $table->foreign('idUtilisateur')->references('idUtilisateur')->on('utilisateur');
            $table->primary('idParent');
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
        Schema::dropIfExists('parent_eleves');
    }
}

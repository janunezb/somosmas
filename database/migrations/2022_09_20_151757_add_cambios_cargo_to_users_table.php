<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCambiosCargoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('documento')->after('id');
            $table->date('fecha_nacimiento')->nullable()->after('nombre');
            $table->string('empresa_id')->nullable()->after('fecha_nacimiento');
            $table->string('cargo')->nullable()->after('empresa_id');
            $table->string('rol')->nullable()->after('password');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('documento', 'fecha_nacimiento', 'empresa_id', 'cargo','rol');
        });
    }
}

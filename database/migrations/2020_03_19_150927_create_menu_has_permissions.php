<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuHasPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_has_permissions', function (Blueprint $table) {
            $table->foreignId ('menu_id')->constrained ()->cascadeOnDelete ();
            $table->foreignId ('permission_id')->constrained ()->cascadeOnDelete ();
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
        Schema::dropIfExists('menu_has_permissions');
    }
}

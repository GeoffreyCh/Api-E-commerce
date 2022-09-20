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
        Schema::create('surves', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'users_id')->constrained(table: 'users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId(column: 'items_id')->constrained(table: 'items')->onUpdate('cascade')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surves');
    }
};

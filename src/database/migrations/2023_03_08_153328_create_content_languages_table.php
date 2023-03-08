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
        Schema::create('content_languages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('content_id')->constrained('contents')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('language_id')->constrained('languages')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('hour');
            $table->date('date');
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
        Schema::dropIfExists('content_languages');
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('preview')->nullable();
            $table->string('file');
            $table->boolean('is_url')->default(0);
            $table->string('date');
            $table->unsignedBigInteger('sub_category_id');
            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('book_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};

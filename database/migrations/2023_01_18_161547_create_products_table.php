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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->integer('category_id')->unsigned();

            $table->string('slug')->unique();
            $table->string('name');
            $table->boolean('active')->default(true);

            $table->float('price');
            $table->boolean('show_main')->default(false);
            $table->unsignedInteger('sort_order')->default(0);

            $table->string('preview_image')->nullable();

            $table->text('description');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};

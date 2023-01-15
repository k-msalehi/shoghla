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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('title', 255);
            $table->string('slug', 128)->nullable()->unique();
            $table->string('tel', 12);
            $table->string('province',32)->nullable();
            $table->string('city',32)->nullable();
            $table->text('address')->nullable();
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('keywords', 255)->nullable();
            $table->text('note')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};

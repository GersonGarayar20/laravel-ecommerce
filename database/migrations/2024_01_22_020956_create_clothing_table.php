<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clothing', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->decimal("price", 8, 2);
            $table->string("image");
            $table->enum("size", ["xs", "s", "m", "l", "xl"]);
            $table->string("color");
            $table->timestamps();

            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("clothing_types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothing');
    }
};

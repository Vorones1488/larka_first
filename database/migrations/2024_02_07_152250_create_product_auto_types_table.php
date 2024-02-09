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
        Schema::create('product_auto_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId("type_id")->constrained(
                table: 'auto_types', indexName: 'type_id'
            );
            $table->string('"name_of_category');
            $table->boolean("left_side_of_the_car")->default(0);
            $table->boolean("right_side_of_the_car")->default(0);
            $table->boolean("in_front_of_the_car")->default(0);
            $table->boolean("back_of_the_car")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_auto_types');
    }
};

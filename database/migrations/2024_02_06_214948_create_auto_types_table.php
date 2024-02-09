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
        Schema::create('auto_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId("model_id")->constrained(
                table: 'auto_models', indexName: 'model_id'
            );
            $table->foreignId("type_id")->constrained(
                table: 'product_auto_types', indexName: 'type_id'
            );
            $table->string('generation');
            $table->year('year_of_issue');
            $table->year('graduation_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_types');
    }
};

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
        Schema::create('auto_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId("vendor_id")->constrained(
                table: 'auto_vendors', indexName: 'vendor_id'
            );
            $table->foreignId("type_id")->constrained(
                table: 'auto_types', indexName: 'type_id'
            );

            $table->string('name');
            $table->year("production_year");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_models');
    }
};

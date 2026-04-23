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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->foreignId('type_id')->constrained();
            $table->foreignId('grade_id')->constrained();
            $table->foreignId('is_digital_id')->constrained('digitals');
            $table->date('release');
            $table->string('desc', 250);
            $table->integer('stock')->default(0);
            $table->string('img_url', 255);
            $table->decimal('price', 10, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

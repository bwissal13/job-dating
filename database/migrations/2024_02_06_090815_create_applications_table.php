<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/YYYY_MM_DD_create_applications_table.php

public function up(): void
{
    Schema::create('applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        $table->foreignId('announcement_id')->constrained()->cascadeOnDelete();
        $table->text('cover_letter');
        $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
        $table->float('match_percentage')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
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
        Schema::table('customized_templates', function (Blueprint $table) {
            $table->string('page_name')->nullable()->after('template');
            $table->date('memory_date')->nullable()->after('from');
            $table->json('heading_images')->nullable()->after('memory_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customized_templates', function (Blueprint $table) {
            $table->dropColumn(['page_name', 'memory_date', 'heading_images']);
        });
    }
};

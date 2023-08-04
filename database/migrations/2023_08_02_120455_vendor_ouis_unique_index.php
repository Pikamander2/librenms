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
        Schema::table('vendor_ouis', function (Blueprint $table) {
            $table->string('oui', 12)->change();
            $table->unique(['oui']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vendor_ouis', function (Blueprint $table) {
            $table->dropUnique('vendor_ouis_oui_unique');
            $table->string('oui')->change();
        });
    }
};

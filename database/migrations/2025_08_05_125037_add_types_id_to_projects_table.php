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
        Schema::table('projects', function (Blueprint $table) {
            // add type_id column
            $table->foreignId("type_id")->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // remove constrain to type_id column
            $table->dropForeign("projects_type_id_foreign");
            // remove type_id column
            $table->dropColumn("type_id");
        });
    }
};

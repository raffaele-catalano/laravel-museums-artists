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
        Schema::table('museums', function (Blueprint $table) {
            $table->string('image_name')->after('web_site');
            $table->string('image_path')->after('web_site');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('museums', function (Blueprint $table) {
            $table->dropColumn('image_name');
            $table->dropColumn('image_path');
        });
    }
};

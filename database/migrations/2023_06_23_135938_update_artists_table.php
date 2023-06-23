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
        Schema::table('artists', function (Blueprint $table) {
          $table->unsignedBigInteger('artwork_id')->nullable()->after('id');
          $table  ->foreign('artwork_id')
                  ->references('id')
                  ->on('artworks')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artists', function (Blueprint $table) {
          $table->dropForeign(['artwork_id']);
          $table->dropColumn('artwork_id');
        });
    }
};

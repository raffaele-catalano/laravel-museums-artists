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
        Schema::table('artworks', function (Blueprint $table) {
          Schema::table('artworks', function (Blueprint $table) {
            $table->unsignedBigInteger('artist_id')->nullable()->after('id');
            $table  ->foreign('artist_id')
                    ->references('id')
                    ->on('artists')
                    ->onDelete('set null');
          });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artworks', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
            $table->dropColumn('artist_id');
        });
    }
};

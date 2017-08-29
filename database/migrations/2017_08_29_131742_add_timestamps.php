<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestamps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->timestamps();

        });
        Schema::table('posts_tags', function (Blueprint $table) {
            $table->timestamps();

        });
        Schema::table('tags', function (Blueprint $table) {
            $table->timestamps();

        });
        Schema::table('users', function (Blueprint $table) {
            $table->timestamps();

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories',function(Blueprint $table)
        {
           $table->dropColumn('created_at');
           $table->dropColumn('updated_at');
        });
        Schema::table('tags',function(Blueprint $table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('post_tags',function(Blueprint $table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::table('users',function(Blueprint $table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
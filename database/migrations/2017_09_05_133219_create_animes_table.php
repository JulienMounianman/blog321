 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->boolean('licenced');
            $table->date('release_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status');
            $table->text('summary');
            $table->string('pictures')->nullable();
            $table->string('vod')->nullable();
            $table->integer('note')->nullable();
            $table->integer('season')->nullable();
            $table->integer('episode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}

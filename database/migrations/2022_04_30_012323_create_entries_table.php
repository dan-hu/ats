<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip');
            $table->string('uri')->nullable();
            $table->string('resource')->nullable();
            $table->string('referer')->nullable();
            $table->string('client')->default('web');
            $table->string('device')->nullable();
            $table->string('os')->nullable();
            $table->string('resolution')->nullable();
            $table->string('browser')->nullable();
            $table->string('lang')->nullable();
            $table->string('action')->default('open');
            $table->unsignedBigInteger('vid')->default(0);
            $table->unsignedBigInteger('uid')->default(0);
            $table->timestamp('arrived_at')->useCurrent();
            $table->timestamp('left_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}

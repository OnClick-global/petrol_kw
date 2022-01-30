<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSketerFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sketer_files', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sketer_id')->constrained('sketers')->onDelete('cascade');
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('file')->nullable();
            $table->string('color')->default('#FF0000');
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
        Schema::dropIfExists('sketer_files');
    }
}

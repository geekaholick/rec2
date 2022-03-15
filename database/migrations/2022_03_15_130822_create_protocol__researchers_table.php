<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolResearchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocol__researchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('protocol_id');
            $table->enum('role', ['creator', 'member', 'adviser']);
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
        Schema::dropIfExists('protocol__researchers');
    }
}

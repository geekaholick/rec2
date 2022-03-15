<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocols', function (Blueprint $table) {
            $table->id();
            $table->string('protocol_code',50);
            $table->string('title');
            $table->enum('review_type', ['exempt', 'expedited', 'full']);
            $table->json('form32');
            $table->json('form31');
            $table->json('form22');
            $table->json('form23');
            $table->enum('status', ['Draft', 'Pending', 'Accepted', 'Approved', 'Returned', 'Review Ongoing']);
            $table->foreignId('reviewer1');
            $table->foreignId('reviewer2');
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
        Schema::dropIfExists('protocols');
    }
}

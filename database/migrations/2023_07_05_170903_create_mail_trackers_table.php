<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Heddiyoussouf\Mailtracker\Models\Mail;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_trackers', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('user_agent');
            $table->foreignIdFor(Mail::class)->constrained()->cascadeOnDelete();
            $table->unique(['ip', 'mail_id']);
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
        Schema::dropIfExists('mail_trackers');
    }
};

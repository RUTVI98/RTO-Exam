<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('rto_offices', function (Blueprint $table) {
            $table->id();
            $table->string('stateCode');
            $table->string('stateName');
            $table->string('officeAddress');
            $table->string('contact');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rto_offices');
    }
};

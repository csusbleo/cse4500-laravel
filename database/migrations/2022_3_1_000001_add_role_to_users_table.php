<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (Schema::hasTable('users')) {
            // The "users" table exists...
            Schema::table('users', function (Blueprint $table) {
                $table->string('role')->nullable();
            });
        }
    }
};

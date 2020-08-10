<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersAddMultipleFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthdate')->nullable()->after('email');
            $table->text('address')->nullable()->after('birthdate');
            $table->string('contact', 20)->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('birthdate')->nullable()->after('email');
            $table->text('address')->nullable()->after('birthdate');
            $table->string('contact', 20)->nullable()->after('address');
        });
    }
}

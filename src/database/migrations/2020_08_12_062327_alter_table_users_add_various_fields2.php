<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddVariousFields2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('lancon_id')->nullable()->after('id');
            $table->string('gender')->nullable()->after('birthdate');
            $table->string('salary_rate')->nullable()->after('password');
            $table->string('image')->nullable()->default('default-profile-pic.png')->after('salary_rate');
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
            $table->string('lancon_id')->nullable()->after('id');
            $table->string('gender')->nullable()->after('birthdate');
            $table->string('salary_rate')->nullable()->after('password');
            $table->string('image')->nullable()->default('default-profile-pic.png')->after('salary_rate');
        });
    }
}

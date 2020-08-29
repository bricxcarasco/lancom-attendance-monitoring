<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersAddMultipleFieldsInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('education')->nullable()->after('contact');
            $table->string('skills')->nullable()->after('education');
            $table->string('notes')->nullable()->after('skills');
            $table->text('bio')->nullable()->after('notes');
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
            $table->string('education')->nullable()->after('contact');
            $table->string('skills')->nullable()->after('education');
            $table->string('notes')->nullable()->after('skills');
            $table->text('bio')->nullable()->after('notes');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('avatar');
            $table->integer('questions_count')->default(0);
            $table->integer('answers_count')->default(0);
            $table->integer('comments_count')->default(0);
            $table->integer('favorites_count')->default(0)->comment('收藏数');
            $table->integer('likes_count')->default(0)->comment('点赞数');
            $table->integer('followers_count')->default(0)->comment('关注数');
            $table->integer('followings_count')->default(0)->comment('被关注数');
            $table->json('setting')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject')->default('')->comment('标题');
            $table->string('cover')->default('')->comment('封面图像');
            $table->string('summary')->default('')->comment('摘要');
            $table->text('content')->comment('内容');
            $table->enum('status', ['save', 'publish'])->default('save')->comment('状态');
            $table->unsignedInteger('category_id')->default('0');
            $table->unsignedInteger('user_id')->default('0');
            $table->softDeletes(); // 逻辑删除
            $table->timestamps();

            $table->index('category_id');
            $table->index('user_id');
            $table->index('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

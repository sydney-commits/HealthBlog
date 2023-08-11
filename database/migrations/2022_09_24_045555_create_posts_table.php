<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->string('title')->default('001');
            $table->string('title1')->default('001');

            $table->string('slug')->default('001');

            $table->string('author')->default('admin');


            $table->text('body')->nullable();
            $table->text('excerpt')->nullable();

            $table->boolean('featured')->default(false);

            $table->mediumText('image')->nullable();



         $table->bigInteger('category_id')->unsigned()->nullable();
         $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

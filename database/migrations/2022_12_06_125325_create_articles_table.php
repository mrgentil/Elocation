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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->string("no_serie")->unique();
            $table->string("image_url")->nullable();
            $table->boolean("state")->default(1);
            $table->foreignId("type_article_id")->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("articles", function(Blueprint $table){
            $table->dropForeign("type_article_id");
        });
        Schema::dropIfExists('articles');
    }
};

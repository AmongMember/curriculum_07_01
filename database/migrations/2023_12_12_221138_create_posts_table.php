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
            
            //自動採番カラムを追加したい時に使用する。
            //idカラムや主キーに用いられる。
            //bigIncrementと同義である
            $table->id();
            //文字列型カラムを追加したい時に使用する
            $table->string('title' , 50);   
            $table->string('body' , 200);
            //Laravelフレームワークで使用する作成日時カラム（created_at）
            //と更新日時カラム（updated_at）を追加したい場合に使用する。
            $table->timestamps();
            //Laravelフレームワークの論理削除処理で必要になる
            //削除日時カラム（deleted_at）を追加したい場合に使用する。
            $table->softDeletes();
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

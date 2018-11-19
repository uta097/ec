<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "カステラ",
            "http://placehold.it/200x200&text=kasutera",
            "手作りならではの変わらぬおいしさをお届けします",
            "100"
        ]);
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "ようかん",
            "http://placehold.it/200x200&text=youkan",
            "伝統の味はそのままに、気軽にお楽しみ頂ける一口サイズに仕上げました",
            "200"
        ]);
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "まんじゅう",
            "http://placehold.it/200x200&text=manjuu",
            "甘すぎない上品な味わいはご年配の方を含め様々な方に愛されています",
            "300"
        ]);
        DB::insert("INSERT into items (name,img,description,price) VALUES (?,?,?,?)",[
            "どらやき",
            "http://placehold.it/200x200&text=dorayaki",
            "ふっくらした小豆の食感、豊かな粒あん、そして栗のほっこりとした歯ごたえと存在感が魅力的です",
            "400"
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}

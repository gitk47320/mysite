<?php

use Illuminate\Database\Seeder;

class ReadrecTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'title' => 'Laravel入門',
            'author' => '掌田津耶乃',
            'impression' => 'Laravelについて全く知らなかったが、ビュー、データベースなどweb開発に必要な知識を学ぶことができた。',
            'eval' => '5',
        ];
        DB::table('readrec')->insert($param);

        $param = [
            'title' => 'Oracleの現場を効率化する100の技',
            'author' => '鈴木健吾他',
            'impression' => 'Oracleの知識はあるがそれをどうシステムに生かすか、というところが知らない人向け。障害発生時の対処も記載されており、oracleを使うシステムに従事している人は必読。',
            'eval' => '5',
        ];
        DB::table('readrec')->insert($param);

        $param = [
            'title' => 'はじめてのパターン認識',
            'author' => '平井有三',
            'impression' => '機械学習の基礎理論の教科書という位置づけ。がっつり数式使っているので大学レベルの微積、線形、統計学が読めない人は恐らく無理。個人的には1回では理解できなかったが、何回も繰り返していずれは理解したいと思う。（そう思わせるようなちょうどいいレベル感になっているところが高評価）',
            'eval' => '5',
        ];
        DB::table('readrec')->insert($param);
    }
}

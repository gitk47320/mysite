<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;

class MysiteController extends Controller
{
    const SAVEDIR = "C:\\Users\\junya\\source\\repos\\mysite";
    const JSONFILE = "bulkadd.json";

    public function top(){
        return view('mysite.top');
    }

    public function books(){
        $items = DB::table('readrec')->get();
        return view('mysite.books',['items' => $items]);
    }
    
    public function postbooksadd(Request $req){
        $param = [
            'title' => $req->title,
            'author' => $req->author,
            'impression' => $req->impression,
            'eval' => $req->eval,
        ];
        $item = DB::table('readrec')->insert($param);
        return redirect('/editlist');
    }
    
    public function booksadd(){
        return view('mysite.add');
    }

    public function bookseditlist(){
        $items = DB::table('readrec')->get();
        return view('mysite.editlist',['items' => $items]);
    }

    public function bookspostdelete(Request $req){
        var_dump($req->id);
        DB::table('readrec')->where('id',$req->id)->delete();
        return redirect('/editlist');
    }

    public function bookspostforedit(Request $req){
        $items = DB::table('readrec')->where('id',$req->id)->first();
        return view('mysite.edit',['items' => $items]);
    }

    public function bookspostedit(Request $req){
        $param = [
            'title' => $req->title,
            'author' => $req->author,
            'impression' => $req->impression,
            'eval' => $req->eval,
        ];
        $item = DB::table('readrec')->where('id',$req->id)->update($param);
        return redirect('/editlist');
    }

    public function products(){
        return view('mysite.products');
    }

    public function bookspostbulkadd(Request $req){
        //jsonファイルのチェック
        $json_validrule = [
            'file' => 'mimes:json'
        ];
        
        //アップロードされたjsonファイルをstorage/appに保存する
        if($this->validate($req,$json_validrule)){
            $filename = $req->file('bulkfile')->storeAs("bulkadd.json","/");
        }
        
        /*if ($req->file('bulkfile')->isvalid([])) {
            //ファイルをstorage/appに保存する
            $filename = $req->file('bulkfile')->storeAs("bulkadd.json","/");
        }*/
        //jsonファイルを読み込む
        $json = file_get_contents("../storage/app/bulkadd.json");
        //json形式のデータを連想配列形式に変換する
        $bulkadd = json_decode($json,true);
        //$bulkaddの要素数分insert処理
        //$bulkaddの配列数が一つだけの場合
        //jsonファイルの中身が1レコードか複数レコードかで条件分岐するのは
        //正直ナンセンスな気がするがとりあえず動くこと重視で。後でじっくり対応
        if(count($bulkadd) == 4){
            $param = [
                'title' => $bulkadd['title'],
                'author' => $bulkadd['author'],
                'impression' => $bulkadd['impression'],
                'eval' => $bulkadd['eval']
            ];
            //jsonファイルの中身をinsert実行
            $item = DB::table('readrec')->insert($param);
        }else{
            //$bulkaddの配列数が二つ以上の場合
            foreach($bulkadd as $key => $value){
                //return $value;
                $param = [
                    'title' => $value['title'],
                    'author' => $value['author'],
                    'impression' => $value['impression'],
                    'eval' => $value['eval']
                ];
                //jsonファイルの中身をinsert実行
            $item = DB::table('readrec')->insert($param);
            }
        }
        //editlistページを呼ぶ
        return redirect('/editlist');
    }
}

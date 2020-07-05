<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleModel {
    public static function get_all(){
        $articles = DB::table('articles')->get();
        return $articles;
    }

    public static function save($data, $tag) {
        $content = $data->a_content;
        $title = $data->a_title;
        $slug[0] = Str::slug($data->a_title, '-');
        $uid = $data->user_id;
        $date_c = date('Y-m-d H:i:s');
        $new_article = DB::table('articles')->insert(['a_title' => $title, 
                                        'a_content' => $content, 
                                        'a_slug' => $slug[0],
                                        'user_id' => $uid, 
                                        'created_at' =>  $date_c,
                                        'updated_at' => $date_c]);
        $aid = DB::table('articles')->where([['a_title', $title],
                                            ['created_at', $date_c]])->first();

        $article_tag = self::tag($aid, $tag);

        return $new_article;
    }

    public static function tag($aid, $tag) {
        $new_tag = DB::table('articletags')->insert(['a_id' => $aid->id, 'a_tag' => $tag]);
        return $new_tag;
    }

    public static function find($id) {
        $find_article = DB::table('articles')->where('id', $id)->first();
        return $find_article;
    }

    public static function findtags($id) {
        $find_tags = DB::table('articletags')->where('a_id', $id)->get();
        return $find_tags;
    }

    public static function update($id, $request) {
        $update_article = DB::table('articles')
                            ->where('id', $id)
                            ->update(['a_title' => $request['a_title'],
                                'a_content' => $request['a_content'],
                                'updated_at' => date('Y-m-d H:i:s')]);
        return $update_article;
    }

    public static function destroy($id) {
        $cek = DB::table('articletags')->where('a_id', $id)->first();
        
        if ($cek !== null){
            $del_answer = DB::table('articletags')->where('a_id', $id)->delete();
        }
        
        $del_article = DB::table('articles')->where('id', $id)->delete();
        return $del_article;
    }



}


?>
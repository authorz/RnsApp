<?php
namespace App\Libary\Contracts\Menu;

use Illuminate\Support\Facades\DB;

trait MenuReturn{
    public static function getMenu($id = 0){

        $data = DB::table('system_menu')->where('pid',$id)->get();

        $array = [];


        if($data){
            foreach($data as $key=>$value){

                $data[$key]['_child'] = self::getMenu($value['id']);

                $array[] = $data[$key];
            }

            return $array;
        }else{
            return $array;
        }

    }
    public static function paramMenu($array,$level=0){
        $out = [];
        $title_prefix = '';
        foreach($array as $k=>$v){
            if($v['pid'] != 0){
                $title_prefix = str_repeat('-', $level*4);
                $title_prefix .= "┝ ";
            }

            if(is_array($v)){

                $v['title2'] = $title_prefix.$v['title'];
                $out[] = $v;
                $out = array_merge($out, self::paramMenu($v['_child'],$level+1));

            }else{

                $v['title2'] = $title_prefix.$v['title'];
                $out[] = $v;

                unset($v['_child']);
            }
        }
        return $out;

    }

    public static function getMenuContent($id = 0){
        return DB::table('system_menu')->where('id',$id)->get();
    }

    public static function addMenu($data = null){
        unset($data['state']);
        $result = DB::table('system_menu')->insert($data);
        return $result==true ? ['state'=>1] : ['state'=>-1];
    }
    public static function updateMenu($data = null){
        $result = DB::table('system_menu')->where('id','=',$data['menu_id'])->update([
            'pid'=>$data['pid'],
            'title'=>$data['title'],
            'url'=>$data['url'],
            'icon'=>$data['icon'],
            'sort'=>$data['sort']
        ]);

        return $result==true ? ['state'=>1] : ['state'=>-1];
    }
    public static function delMenu($id = 0){

        $result = DB::table('system_menu')->where('id','=',$id)->delete();
        return $result==true ? ['state'=>1] : ['state'=>-1];
    }


    public static function disable($id = 0){
        $result = DB::table('system_menu')->where('id','=',$id)->update(['status'=>1]);
        return $result==true ? ['state'=>1] : ['state'=>-1];
    }

    public static function enable($id = 0){
        $result = DB::table('system_menu')->where('id','=',$id)->update(['status'=>0]);
        return $result==true ? ['state'=>1] : ['state'=>-1];
    }



}
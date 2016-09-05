<?php namespace App\Http\Controllers\Admin;
/**
 * Login Controller
 * User: crazy
 * Date: 16/8/3
 * Time: 10:55
 */

use App\Http\Controllers\Controller;

use App\Model\Menu;
use Illuminate\Support\Facades\Request;


class MenuController extends Controller{


    protected static $templatePath = '/admin/default/system/menu/';


    public function get_left_menu(){

        return Menu::getMenu(0);
    }

    public function get_system_menu(){
        $menuData = Menu::paramMenu(Menu::getMenu(0));
        return $menuData;
    }
    public function system_menu(){
        return view(self::$templatePath.'system_menu');
    }
    public function add_menu(){
        $menuData = Menu::paramMenu(Menu::getMenu(0));
        return view(self::$templatePath.'system_add_menu',['menuData'=>$menuData]);
    }

    public function get_menu_content(Request $request){
        $data = json_decode(file_get_contents('php://input', true),true);
        $menuContent = Menu::getMenuContent($data['menu_id']);
        return response()->json($menuContent);
    }

    public function _add_menu(){
        $data = json_decode(file_get_contents('php://input', true),true);
        $result = Menu::addMenu($data);
        return response()->json($result);
    }


    public function _del_menu(){
        $data = json_decode(file_get_contents('php://input', true),true);
        $result = Menu::delMenu($data);
        return response()->json($result);
    }

    public function _disable_menu(){
        $data = json_decode(file_get_contents('php://input', true),true);
        $result = Menu::disable($data);
        return response()->json($result);
    }

    public function _enable_menu(){
        $data = json_decode(file_get_contents('php://input', true),true);
        $result = Menu::enable($data);
        return response()->json($result);
    }

    public function _update_menu(){
        $data = json_decode(file_get_contents('php://input', true),true);
        $result = Menu::updateMenu($data);
        return response()->json($result);
    }

}
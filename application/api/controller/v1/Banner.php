<?php
/**
 * Created by PhpStorm.
 * User: Jarvis
 * Date: 2018/5/22
 * Time: 15:57
 */

namespace app\api\controller\v1;


use think\Validate;

class Banner
{

    public function getBanner($id){
        $data = [
            'name'=>'vendor',
            'email'=>'vender@qq.com'
        ];
        $validate = new Validate([
            'name'=>'require|max:10',
            'email'=>'email'
        ]);

        $result = $validate->check($data);
    }
}
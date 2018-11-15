<?php
/**
 * Created by PhpStorm.
 * User: Acker
 * Date: 2018/11/12
 * Time: 1:27
 */

use Illuminate\Http\Request;


class ADController{
    /*
     *
     * 获取轮播图
     *
     */
    public function getListByCon(Request $request){
        $data = $request->all();
        $con_arr = array(
            'status' => '1',
        );
        $ads = ADManager::getListByCon($con_arr, false);
        return ApiResponse::makeResponse(true, $ads, ApiResponse::SUCCESS_CODE);
    }
}
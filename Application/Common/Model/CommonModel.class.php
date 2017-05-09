<?php
/**
 * Created by PhpStorm.
 * User: liuzezhong
 * Date: 2016/11/2
 * Time: 17:06
 */

namespace Common\Model;


use Think\Model;

class CommonModel extends Model {
    /**
     * 转换支持平台格式
     */
    public function convertSupportFormat($support = array(),$model = -1) {
        if(!$support || $model == -1) {
            throw_exception('转换支持平台格式数据错误！');
        }

        if($model == 1) {
            //array => string
            $result = array(0,0,0,0);

            foreach ($support as $k => $item) {
                if($item == 'Windows') {
                    $result[0] = 1;
                }
                if($item == 'Linux') {
                    $result[1] = 1;
                }
                if($item == 'IOS') {
                    $result[2] = 1;
                }
                if($item == 'Android') {
                    $result[3] = 1;
                }
            }
            $results = implode('.',$result);
        }
        if($model == 2) {

            print_r($support);
            //string => array  0112
            $result = explode('.',$support);
            print_r($result);
            $k = 0;
            if($result[0] == 1 ){
                $results[$k++] = 'Windows';
            }
            if($result[1] == 1 ){
                $results[$k++] = 'Linux';
            }
            if($result[2] == 1 ){
                $results[$k++] = 'IOS';
            }
            if($result[3] == 1 ){
                $results[$k++] = 'Android';
            }
        }
        return $results;
    }

     /**
     * 转换日期格式函数
     * 2017年05月01日 与 2017-05-01
     * @param $date
     * @param $mode
     * @return mixed
     */
    public function convertDateFormat($date = '',$mode = -1) {

        if(!$date || $mode == -1) {
            throw_exception('转换日期格式函数数据不存在！');
        }
        //2017年05月01日 => 2017-05-01
        if($mode == 1) {
            $year = substr($date,0,4);
            $month = substr($date,7,2);
            $day = substr($date,12,2);
            return $year . '-' . $month . '-' . $day;
        }
        //2017-05-01 => 2017年05月01日
        if($mode == 2) {
            $year = substr($date,0,4);
            $month = substr($date,5,2);
            $day = substr($date,8,2);
            return $year . '年' . $month . '月' . $day . '日';
        }
    }
}
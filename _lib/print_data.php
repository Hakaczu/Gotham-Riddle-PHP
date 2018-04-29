<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 16:44
 */
class print_data{
    public static function alert_message($txt,$type){
        $w = '<div class="alert alert-' . $type . ' alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $txt . '</div>';
        return $w;
    }

    public static function alert($notice){
        switch($notice) {
            case 'wrong':
                $w = self::alert_message("Wrong Password!" , 'danger');
                break;
            default:
                $w ='';
                break;
        }
        return $w;
    }
}
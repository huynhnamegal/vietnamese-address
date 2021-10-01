<?php namespace Masent\Address\Classes;

class Province  
{
    public static function getList()
    {
        $rs = [];
        $provinces = json_decode(file_get_contents(plugins_path('masent/address/assets/provinces.json')),true);
        foreach ($provinces as $value) {
            $rs[$value['code']] =  $value['name_with_type'];
        }
        return $rs;
    }
}

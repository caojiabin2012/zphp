<?php
/**
 * User: shenzhe
 * Date: 13-6-17
 * Json view
 */


namespace ZPHP\View\Adapter;
use ZPHP\View\Base,
    ZPHP\Core\Config;

class Json extends Base
{
    public function output()
    {
        if (Config::get('server_mode') == 'Http') {
            \header("Content-Type: application/json; charset=utf-8");
        }
        if (\is_string($this->model)) {
            return $this->model;
        } else {
            return \json_encode($this->model);
        }
    }


}
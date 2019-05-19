<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-19
 * Time: 12:00
 */

namespace Dd;

class Config implements \ArrayAccess
{
    protected $path;
    protected $configs = array();

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        if(empty($this->configs[$offset])){
            $file_path = $this->path . DIRECTORY_SEPARATOR . $offset . '.php';
            $config = require "$file_path";
            $this->configs[$offset] = $config;
        }

        return $this->configs[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        throw new \Exception("cannot write config file");
    }

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        return isset($this->configs[$offset]);
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        unset($this->configs[$offset]);
    }
}
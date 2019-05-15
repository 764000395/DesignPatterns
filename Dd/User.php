<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 10:45
 */

namespace Dd;


use Dd\Database\MySQLi;

class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;
    public function __construct($id)
    {
        $this->id = $id;
        $this->db = new MySQLi();
        $this->db->connect('localhost', 'design', 'design123', 'design');
        $sql = "select * from user where id = {$id}";
        $result = $this->db->query($sql);
        $data = $this->db->all_result($result);
        if(!empty($data)){
            $data = $data[0];
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->mobile = $data['mobile'];
            $this->regtime = $data['regtime'];
        }

    }

    /**
     * 析构函数，对象要销毁时调用
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $sql = "update user set `name` = '{$this->name}', `mobile` = '{$this->mobile}', `regtime` = '{$this->regtime}' where id = {$this->id}";
        $this->db->query($sql);
    }

}
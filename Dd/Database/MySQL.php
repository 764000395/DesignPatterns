<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 14:59
 */

namespace Dd\Database;


use Dd\IDatabases;

class MySQL implements IDatabases
{
    protected $conn;
    public function connect($host, $username, $password, $db_name)
    {
        // TODO: Implement connect() method.
        $conn = mysql_connect($host, $username, $password);
        mysql_select_db($db_name, $conn);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return mysql_query($sql, $this->conn);
    }

    public function all_result($result)
    {
        // TODO: Implement all_result() method.
        $res = [];
        while($row = mysql_fetch_array($result)){
            $res[] = $row;
        }
        return $res;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysql_close($this->conn);
    }
}
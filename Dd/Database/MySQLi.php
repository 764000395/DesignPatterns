<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 15:05
 */

namespace Dd\Database;


use Dd\IDatabases;

class MySQLi implements IDatabases
{
    protected $conn;
    public function connect($host, $username, $password, $db_name)
    {
        // TODO: Implement connect() method.
        $conn = mysqli_connect($host, $username, $password, $db_name);
        $this->conn = $conn;
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return mysqli_query($this->conn, $sql);
    }

    public function all_result($result)
    {
        // TODO: Implement all_result() method.
        $res = [];
        while($row = mysqli_fetch_assoc($result)){
            $res[] = $row;
        }
        return $res;
    }

    public function close()
    {
        // TODO: Implement close() method.
        mysqli_close($this->conn);
    }
}
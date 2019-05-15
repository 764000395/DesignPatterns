<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-15
 * Time: 15:24
 */

namespace Dd;


interface IDatabases{
    function connect($host, $username, $password, $db_name);
    function query($sql);
    function all_result($result);
    function close();
}
<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-17
 * Time: 14:32
 */

namespace Dd;


class AllUsers implements \Iterator
{
    protected $ids;
    protected $data = array();
    protected $next;

    public function __construct()
    {
        $db = Factory::createDatabase();
        $result = $db->query('SELECT id FROM user');
        $this->ids = $result->fetch_all(MYSQLI_ASSOC);
    }

    public function current()
    {
        // TODO: Implement current() method.
        $id = $this->ids[$this->next]['id'];
        return Factory::getUser($id);
    }

    public function key()
    {
        // TODO: Implement key() method.
        return $this->next;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $this->next++;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->next = 0;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        return $this->next < count($this->ids);

    }
}
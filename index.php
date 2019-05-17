<?php
/**
 * Created by PhpStorm.
 * User: yangzhiying
 * Date: 2019-05-14
 * Time: 17:41
 */
define("BASEDIR", __DIR__);

require BASEDIR . '/Dd/Loader.php';
spl_autoload_register('\\Dd\\Loader::autoload');

//工厂模式
echo '工厂模式', PHP_EOL;
$con = \Dd\Factory::createDatabase();
$sql = 'SELECT * FROM user';
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
    var_dump($row);
}

//单例模式
echo '单例模式', PHP_EOL;
$single_con = \Dd\Databases::getInstance();
$single_result = $single_con->query($sql);
while($row = $single_result->fetch_assoc()){
    var_dump($row);
}

echo "注册树模式", PHP_EOL;
$register_con = \Dd\Register::get('db_factory');
$register_result = $register_con->query($sql);
while($row = $register_result->fetch_assoc()){
    var_dump($row);
}

echo "适配器模式", PHP_EOL;
$adapter_con = new Dd\Database\MySQLi();
$adapter_con->connect('localhost', 'design', 'design123', 'design');
$result = $adapter_con->query($sql);
var_dump($adapter_con->all_result($result));
$adapter_con->close();

echo "数据对象映射模式",PHP_EOL;
//$user = new \Dd\User(1);
//echo "id: $user->id \t name:$user->name \t mobile:$user->mobile \t regtime:$user->regtime",PHP_EOL;
//接下来改变$user 各属性的值；
//$user->name = '牛二'; $user->mobile = '15515793293'; $user->regtime = date('Y-m-d H:i:s', time());
class page{
    protected $user;
    public function index(){
        $this->user = \Dd\Factory::getUser(1);
        echo "id: {$this->user->id} \t name:{$this->user->name} \t mobile:{$this->user->mobile} \t regtime:{$this->user->regtime}",PHP_EOL;

        $this->test();
        echo 'OK';
    }

    public function test(){
        $this->user = \Dd\Factory::getUser(1);
        $this->user->name = '牛二';
    }
}
$page = new page();
$page->index();

echo PHP_EOL,"观察者模式",PHP_EOL;

class Event extends \Dd\EventGenerator {
    public function trigger(){
        echo "事件触发",PHP_EOL;

        // 通知观察者更新
        $this->notify();
    }
}

class Observer1 implements \Dd\Observe{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo '观察者：', get_class(), '的更新', PHP_EOL;
    }
}

class Observer2 implements \Dd\Observe{
    public function update($event_info = null)
    {
        // TODO: Implement update() method.
        echo '观察者：', get_class(), '的更新', PHP_EOL;
    }
}
$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();

echo '原型模式', PHP_EOL;
$prototype = new \Dd\Canvas();
$prototype->init();
//---
$canvas1 = clone $prototype;
$canvas1->draw('正方形');
//---
$canvas2  = clone $prototype;
$canvas2->draw('三角形');

echo "\n装饰器模式\n";
$canvas1->addDecorator(new \Dd\ColorDecorator('red'));
$canvas1->addDecorator(new \Dd\SizeDecorator('25px'));
$canvas1->beforeDecorator();

$canvas1->draw('装饰器模式下画的图形');

$canvas1->afterDecorator();

/*
Dd\MyObject::test();
App\Controller\Home\Index::test();

echo 'Stack 栈数据结构',PHP_EOL;
$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->top();
$stack->pop();
echo $stack->top();
$stack->pop();

echo 'Queue 队列数据结构',PHP_EOL;

$queue = new SplQueue();
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');

while (!$queue->isEmpty()){
    echo $queue->dequeue(),"\t";
}
echo PHP_EOL;

echo "最大堆",PHP_EOL;
$maxHeap = new SplMaxHeap();
$maxHeap->insert(8);
$maxHeap->insert(6);
$maxHeap->insert(9);
$maxHeap->insert(35);
while (!$maxHeap->isEmpty()){
    echo $maxHeap->extract(),"\t";
}
*/
/*
// 策略模式
class Page{
    protected $strategy;

    public function __construct(\Dd\UserStrategy $strategy){
        $this->strategy = $strategy;
    }

    public function showPage(){
        echo 'AD：';
        $this->strategy->showAd();

        echo '<br><br>';

        echo 'Category：';
        $this->strategy->showCategory();
    }


}
if(isset($_GET['female'])){
    $strategy = new \Dd\FemaleUserStrategy();
}else {
    echo '没有 get 参数，默认为男性：', '<br>';
    $strategy = new \Dd\MaleUserStrategy();
}
//注意这里 page 类不再依赖一种具体的策略，而是只需要绑定一个抽象的接口，这就是传说中的控制反转。
$page = new Page($strategy);
$page->showPage();
*/
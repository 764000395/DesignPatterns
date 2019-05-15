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
exit;
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
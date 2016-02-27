<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/Brave/Loader.php';
spl_autoload_register('\\Brave\\Loader::autoload');




// Brave\Object::test();
// App\Controller\Home\Index::test();


 //测试单例，工厂，注册数
 \Brave\Factory::createDatabase();

 //注册树
 $db1 = \Brave\Register::get('db1');

 //链式操作
 $db1->where()->order()->limit();


//数据库适配器模式
// $db = new Brave\Database\PDO();
// $db->connect('127.0.0.1', 'root', 'root', 'tk');
// $res = $db->query('show databases');
// var_dump($res);
// $db->close();


//策略模式实例
// class Page{
// 	protected $strategy;

// 	function index(){
// 		echo "AD:";
// 		$this->strategy->showAd();
// 		echo "<br>";

// 		echo "CATEGORY:";
// 		$this->strategy->showCategory();
// 		echo "<br>";
// 	}

// 	function setStrategy(\Brave\UserStrategy $strategy){
// 		$this->strategy = $strategy;
// 	}

// }

// $page = new Page();
// if(isset($_GET['female'])){
// 	$strategy = new \Brave\FemaleUserStrategy();
// }else{
// 	$strategy = new \Brave\MaleUserStrategy();
// }

// $page->setStrategy($strategy);
// $page->index();


//数据对象映射模式实例
// $user = new \Brave\User(1);
// $user->mobile = "15218272616";
// $user->name = "test";
// $user->regTime = time();

// $user = new \Brave\User(2);
// $user->mobile = "15218272616";
// $user->name = "yes";
// $user->regTime = time();

// class Page{
// 	function index(){
// 		$user = \Brave\Factory::getUser(1);
// 		$user->name = "fdsafd";
// 		$this->test();
// 	}

// 	function test(){
// 		$user = \Brave\Factory::getUser(1);
// 		$user->mobile = "1111111";
// 	}
// }

// $page = new Page();
// $page->index();

//观察者模式的实例
// class Event extends \Brave\EventGenerator{

// 	function trigger(){
// 		echo "Event<br>\n";

// 		//触发监听的事件
// 		$this->notify();
// 	}

// }

// class Observer1 implements \Brave\Observer{

// 	function update($event_info = null){
// 		echo '逻辑1<br>';
// 	}

// }

// class Observer2 implements \Brave\Observer{

// 	function update($event_info = null){
// 		echo '逻辑2<br>';
// 	}

// }

// $page = new Event();
// $page->addObserver(new Observer1());
// $page->addObserver(new Observer1());
// $page->addObserver(new Observer2());
// $page->trigger();

//原型模式实例
// $prototype = new \Brave\Canvas();
// $prototype->init(20,10,"#","@");

// $page2 = clone $prototype;
// $page2->rect(1,8,2,17);
// $page2->draw();

// echo "<hr>";

// $page2 = clone $prototype;
// $page2->rect(0,9,1,18);
// $page2->draw();


//装饰器模式实例
// $page = new \Brave\Canvas();
// $page->init(20,10,"#","@");
// $page->rect(1,8,2,17);
// $page->addDecorator(new \Brave\ColorDecorator('green'));
// $page->addDecorator(new \Brave\ColorDecorator('red'));
// $page->addDecorator(new \Brave\ColorDecorator('yellow'));
// $page->addDecorator(new \Brave\SizeDecorator('29px'));
// $page->addDecorator(new \Brave\SizeDecorator('39px'));
// $page->addDecorator(new \Brave\SizeDecorator('49px'));
// $page->draw();


//迭代器模式实例
// $users = new \Brave\AllUser();
// foreach ($users as $user) {
// 	$user->serial_no = 9;
// }


//代理模式
// $user = new \Brave\Proxy();
// $user->getUserName(1);
// $user->setUserName(1, 'lisi');
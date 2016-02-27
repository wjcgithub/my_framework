<?php
//栈, 先进后出， 后进先出
$stack = new SplStack();
$stack->push('data1');
$stack->push('data2');

echo $stack->pop();
echo $stack->pop();


//队列， 先进先出，后进后出
$queue = new SplQueue();
$queue->enqueue('data1');
$queue->enqueue('data2');

echo $queue->dequeue();
echo $queue->dequeue();


//堆,最小堆
$heap = new SplMinHeap();
$heap->insert('data1');
$heap->insert('data2');

echo $heap->extract();
echo $heap->extract();


//固定长度数组
$array = new SplFixedArray(10);
$array[0] = 0;
$array[9] = 9;
var_dump($array);
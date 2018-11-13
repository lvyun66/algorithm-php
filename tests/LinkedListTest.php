<?php

use Lvyun\Struct\LinkedList;

include __DIR__ . '/bootstrap.php';

class LinkedListTest extends \PHPUnit\Framework\TestCase
{
    public function testNewLinkedList()
    {
        $linkedList = new LinkedList(10);
        $next = new LinkedList(5);
        $linkedList->next = $next;
        $next1 = new LinkedList(34);
        $next->next = $next1;

        $v = $linkedList->get(5);
        echo $v, "\n";

        $linkedList->addAtHead(1);
        $linkedList->addAtTail(100);

        $linkedList->addAtIndex(1, 200);
        $linkedList->deleteAdHead();
        $linkedList->deleteAtTail();
        $linkedList->deleteAtIndex(1);

        var_dump($linkedList);
    }

    public function testDeleteAdHead()
    {

    }

    public function testDeleteAtIndex()
    {

    }

    public function testDeleteAtTail()
    {

    }

    public function testAddAtHead()
    {

    }

    public function testAddAtIndex()
    {

    }

    public function testAddAtTail()
    {

    }

    public function testGet()
    {

    }
}

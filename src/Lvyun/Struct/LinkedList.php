<?php

namespace Lvyun\Struct;

class LinkedList
{
    public $value;
    /**
     * @var \Lvyun\Struct\LinkedList
     */
    public $next = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function get($index)
    {
        for ($i = 0; $i < $index; $i++) {

        }
    }

    public function addAtHead($value)
    {

    }

    public function addAtTail($value)
    {

    }

    public function addAtIndex($index, $value)
    {

    }

    public function deleteAdHead()
    {

    }

    public function deleteAtTail()
    {

    }

    public function deleteAtIndex($index)
    {

    }
}

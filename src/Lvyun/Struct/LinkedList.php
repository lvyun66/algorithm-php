<?php

namespace Lvyun\Struct;

class LinkedList
{
    public $value = null;
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
        $current = $this;
        $i = 0;
        $value = -1;

        while (true) {
            if (!$current->value && !$current->next) {
                break;
            }
            if (!$current->next && $i != $index) {
                break;
            }
            if ($index == $i) {
                $value = $current->value;
                break;
            }
            $current = $current->next;
            $i++;
        }

        return $value;
    }

    public function addAtHead($value)
    {
        if (!$this->value) {
            $this->value = $value;
            return;
        }

        $current = new LinkedList($this->value);
        $current->next = $this->next;

        $this->value = $value;
        $this->next = $current;
    }

    public function addAtTail($value)
    {
        if (!$this->value) {
            $this->value = $value;
            return;
        }

        $current = $this;
        while ($current->next) {
            $current = $current->next;
        }
        $last = new LinkedList($value);
        $current->next = $last;
    }

    public function addAtIndex($index, $value)
    {
        $current = $this;
        $i = 0;

        while (true) {
            if ($index == $i) {
                if (!$current->value) {
                    $this->addAtHead($value);
                    break;
                }
                if (!$current->next) {
                    $this->addAtTail($value);
                    break;
                }
                $n = new LinkedList($value);
                $n->next = $current->next;
                $current->next = $n;
                break;
            }
            $current = $current->next;
            $i++;
        }

        return $value;
    }

    public function deleteAdHead()
    {
        if (!$this->value) {
            return;
        }
        if (!$this->next) {
            $this->value = null;
            $this->next = null;
        }
        $this->value = $this->next->value;
        $this->next = $this->next->next;
    }

    public function deleteAtTail()
    {
        if (!$this->value) {
            return;
        }
        $prev = $current = $this;
        while ($current->next) {
            if ($current->next) {
                $prev = $current;
            }
            $current = $current->next;
        }
        if ($prev === $current) {
            $this->value = null;
            $this->next = null;
        }
        $prev->next = null;
    }

    public function deleteAtIndex($index)
    {
        $current = $prev = $this;
        $i = 0;
        while (true) {
            if ($index == $i) {
                if ($current->next) {
                    $prev->next = $current->next;
                    break;
                } else {
                    $this->deleteAtTail();
                }
            }
            $prev = $current;
            $current = $current->next;
            $i++;
        }
    }
}

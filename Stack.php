<?php

class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }
    public function push($item): array
    {
      array_unshift($this->stack,$item);
      return $this->stack;
    }
    public function pop(){
        return array_shift($this->stack);
    }
    public function isEmpty(): bool
    {
      return empty($this->stack);
    }
}

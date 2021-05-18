<?php

class Queue
{
public  $fornt = null;
public  $back = null;

public function isEmpty(): bool
{
    return is_null($this->fornt);
}
public function enqueue($value)
{
    $oldBack = $this->back;
    $this->back = new Element();
    $this->back->value = $value;
    if ($this->isEmpty()){
        $this->fornt = $this->back;
    } else {
        $oldBack->next = $this->back;
    }
}
  public function dequeue()
  {
      if ($this->isEmpty()){
          return null;
      }
      $removedValue = $this->fornt->value;
      $this->fornt = $this->fornt->next;
      return $removedValue;
  }
}
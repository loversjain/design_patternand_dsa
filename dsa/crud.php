<?php

class Crud
{
    public $array = [1 => "Love", 2 =>"Lovey", 3 =>"Lovers"];
    function insert($value)
    {
        array_push($this->array, $value);
        return $this->array;
    }

    function update($key , $value)
    {
        if($this->checkIndex($key)) {
            $this->array[$key] = $value;
            return $this->array;
        }
    }

    function delete($key) {
        if($this->checkIndex($key)) {
            unset($this->array[$key]);
            return $this->array;
        }
    }

    function checkIndex($key) {
        if(array_key_exists($key, $this->array)) {
            return true;
        }
        return false;
    }

}

$crud = new Crud;
//print_r($crud->insert("Lovey-dovey"));
//print_r($crud->update(2, "Lovey-dovey"));
print_r($crud->delete(3));

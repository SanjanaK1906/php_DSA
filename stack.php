<?php
/* Stack Implementation in PHP */

//Stack Class
class Stack {
    private $_items = array();

    public function push($value = NULL) {
        array_push($this->_items, $value);
    }

    public function pop() {
        return array_pop($this->_items);
    }

    public function peek() {
        return end($this->_items);
    }

	public function size() {
		return count($this->_items);
	}

	public function isEmpty() {
		return empty($this->_items);
	}
}

$obj = new stack;
echo"**********PUSH*********** \n";
$obj->push(10);
$obj->push(12);
$obj->push(14);
var_dump($obj);
echo"**********POP***********\n";
$obj->pop();
var_dump($obj);
echo"**********PEEK***********\n";
$peek = $obj->peek();
var_dump($peek);
echo"**********SIZE***********\n";
$size = $obj->size();
var_dump($size);
echo"**********isEMPTY***********\n";
$isEmpty = $obj->isEmpty();
var_dump($isEmpty);
?>

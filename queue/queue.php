<?php
class Queue {
    private $_items = array();

    public function enqueue($value = NULL) {
        array_unshift($this->_items, $value);
    }

    public function dequeue() {
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

$obj = new Queue;
echo"**********enqueue*********** \n";
$obj->enqueue(10);
$obj->enqueue(12);
$obj->enqueue(14);
$obj->enqueue(16);
var_dump($obj);
echo"**********dequeue***********\n";
$obj->dequeue();
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

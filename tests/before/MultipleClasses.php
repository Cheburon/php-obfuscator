<?php

class FirstClass {

    protected $_protectedProperty;
    public $publicProperty;

    protected function _protectedMethod() {
        echo "This is protected method of first class";
    }

    public function publicMethod() {
        echo "This is public method of first class";
    }
}

class SecondClass extends FirstClass {

    private $_privateProperty;

    protected function _protectedMethod() {
        parent::_protectedMethod();
        echo "This is protected method of second class";
        $this->_privateProperty = parent::$_protectedProperty;
    }

    public function publicMethod() {
        parent::publicMethod();
        echo "This is public method of second class";
        $this->_privateProperty = parent::$publicProperty;
    }
}

class ThirdClass {
    public function __construct(SecondClass $secondObject) {
        $secondObject->publicMethod();
    }
}
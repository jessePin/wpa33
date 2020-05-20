<?php
    interface iInputBox
    {
        public function getValue();
        public function setValue($value);
    }
    
    class TextBox implements iInputBox
    {
        private $value;
        public function getValue(){
            return $this->value;
        }
        public function setValue($value){
            $this->value = $value;
        }
    }
    
    class PasswordBox implements iInputBox
    {
        private $value;
        public function getValue(){
            $len = strlen($this->value);
            for($i=0;$i<$len;$i++){
                $result += "*";
            }
            return $result;
        }
        public function setValue($value){
            $this->value = $value;
        }
    }
    
    $txbox = new TextBox;
    $txbox->setValue(1234556);
    echo $txbox->getValue();
    
    $passbox = new PasswordBox;
    $passbox->setValue(12344556);
    echo $passbox->getValue();
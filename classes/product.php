<?php  
    class Product {
        // public $name;
        // publicならどこからでも取得も書き込みもできる
        private $id;
        private $name;
        private $price;
        private $image;
        // privateにすることでインスタンスから取得も書き込みもできない

        public function __construct($id, $name, $price, $image)
        {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            // インスタンスにおける値を取得するという処理
        }

        public function getId() {
            return $this->id;
        }
        public function getName() {
            return $this->name;
        }
        public function getPrice() {
            return $this->price;
        }
        public function getImage() {
            return $this->image;
        }

        // これはインスタンスから呼ばれることは無く、displayPriceからしか呼ばれないから
        // privateでOK
        private function calPriceIncludedTax() {
            $taxRate = 0.1;
            return $this->price + $this->price * $taxRate;
        }

        public function displayPrice() {
            $price = $this->calPriceIncludedTax();
            return $price."円";
        }
    }
?>
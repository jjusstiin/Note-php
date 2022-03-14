<?php
    function checkTWId($id){
        // 長度為 10
        // A-Z x 1
        // 0-9 x 9
        // 第二碼 1 / 2
        $isRight = false;
        if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)){
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $c1 = substr($id, 0, 1);
            $n12 = strpos($letters, $c1) + 10;
            $n1 = (int)($n12 / 10);
            $n2 = $n12 % 10;
            $n3 = substr($id , 1, 1);
            $n4 = substr($id , 2, 1);
            $n5 = substr($id , 3, 1);
            $n6 = substr($id , 4, 1);
            $n7 = substr($id , 5, 1);
            $n8 = substr($id , 6, 1);
            $n9 = substr($id , 7, 1);
            $n10 = substr($id , 8, 1);
            $n11 = substr($id , 9, 1);
            $sum = $n1*1 + $n2*9 + $n3*8 + $n4*7+ $n5*6 + $n6*5 + $n7*4 +
            $n8*3 + $n9*2 +$n10*1 + $n11*1;
            return $sum % 10 == 0;

            
        }
        return $isRight;
    }

    function createTWIdByRandom(){
        $gender = rand(0,1) == 0;
        return createTWIdByGender($gender);
    }
    function createTWIdByGender($gender = false){
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $area = substr($letters, rand(0,25), 1);
        return  createTWIdByBoth($gender,$area);
    }
    function createTWIdByArea($area = 'B'){
       $gender = rand(0,1) == 0;
        return createTWIdByBoth($gender, $area);
    }

    function createTWIdByBoth($gender, $area){
        $tempID = $area;
        $tempID .= $gender ? '1' : '2';
        for($i = 2 ; $i <= 8 ; $i++){
            $tempID .= rand(0,9);
        }
        for($i = 0 ; $i<=9 ; $i++){
            if(checkTWId($tempID . $i)){
                $tempID .= $i;
                break;
            }
        }
        return $tempID;
    }

    class Bike {
        private $speed = 0;
        function upSpeed(){
            $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
        }
        function downSpeed(){
            $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
        }
        function getSpeed(){
            return $this->speed;
        }
    }

?>
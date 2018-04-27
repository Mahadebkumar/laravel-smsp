<?php
    function gp($mark){
        if($mark>=80){
            return 5;
        }
        elseif($mark>=70){
            return 4;
        }
        elseif($mark>=60){
            return 3;
        }
        elseif($mark>=50){
            return 2;
        }
        elseif($mark>=33){
            return 1;
        }
        else{
            return 0;
        }
    }
?>
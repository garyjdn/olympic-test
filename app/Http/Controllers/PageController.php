<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function no1() {
        $head = 0;
        $tail = 1;

        echo "$head ";

        while ($tail < 1000) {

            echo "$tail ";

            $temp = $tail;
            $tail += $head;
            $head = $temp;
        }
    }

    private function blue($number) {
        echo '<span style="color:#00F;">'.$number.'</span>';
    }

    private function red($number) {
        echo '<span style="color:#F00;">'.$number.'</span>';
    }

    public function no2() {
        $array1 = [9, 8, 7, 6, 5, 4, 3, 2];
        $array2 = [];
        $run = true;

        while ($run) {
            for ($j = 0; $j < count($array1); $j++) {
                if ($j == count($array1) - 1) {
                    $this->blue($array1[$j]);
                } else {
                    echo $array1[$j];
                }
            }
    
            echo $this->red(1);
    
            for ($j = 0; $j < count($array2); $j++) {
                echo "$array2[$j]";
            }
    
            if (count($array1) > 0) {
                $num = array_pop($array1);
                $array2[] = $num;
            } else {
                $run = false;
            }
            echo '<br>';
        }  
    }

    public function no3() {
        return view("no3");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskoneController extends Controller
{
    public function count ($start,$end) {
$arr=[];
$start = (int) $start;
$counter = $end -$start;
for ($i=0; $i <= $counter; $i++) { 
    if($start != 5) {
        array_push($arr,$start);
    }
    $start++;
}
return[$arr,count($arr)];
    }

    public function indexof ($str) {
            
            $length = strlen($str);
            $number = 0;

            for($i = 0; $i < $length; $i++){
                $number = $number*26 + ord($str[$i]) - 0x40;
            }
        return $number; 
}
public function minstep ($fnumber, $lnumber) {
    $step=0;
    $n=[(int) $fnumber,(int) $lnumber];
    $rr=[];
    for($i=0; $i< count($n);$i++){
        $a = $n[$i];
        $step=0;
        while($a !== 0) {
          $a % 2 === 0 ? $a /= 2 :$a--;
          $step++;
        }
          array_push($rr,$step);
    }
    return $rr;
}
}
<?php 

class SubstringLength
{
    public function calculate($input){
        $start = 0;   
        $length = 0;
        
        for($i = 0; $i < strlen($input); $i++){
            $char = $input[$i];
            if(isset($arr[$char]) && $arr[$char] >= $start){
                $start = $arr[$char] + 1;
            } elseif($i - $start === $length) {
                $length++;
            }
            $arr[$char] = $i;
        }
        return $length;
    }
}

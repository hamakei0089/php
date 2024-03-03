for($a=1 $a<=50 ; $a++){
    if($a%3 === 0){
        echo "FIZZ";
    }elseif($a%5 === 0){
        echo "BUZZ";
    }elseif($a%15 === 0){
        echo "FIZZBUZZ";
    }else{
        echo $a;
    }
}
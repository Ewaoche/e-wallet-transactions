<?php

class Core {
	
    public function ToMoney($amount){
        $amount = number_format($amount,2,".",",");
        return "&#x20A6;" . $amount;
       }
    
}




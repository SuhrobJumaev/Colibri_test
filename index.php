<?php

  class Ticket {
 	
 	public $price;
 	public $discount;

 	public function __construct($price,$discount = 0) {
         $this->price  = $price;
         $this->discount = $discount; 
 	}

 	public function priceOfTicket($distance){
        
         $result = ($distance * $this->price);

        if ($this->discount != 0){

         	$result1 = ($distance * $this->price);
         	$procent = ($result1 * $this->discount)/100;
         	$result = $result1 - $procent;
            return $result;
        }

         return $result;
 	}

 }

  	$price1 = New Ticket(0.5);
 	echo ' <br> Ваш билет стоит :'.$price1->priceOfTicket(999).' '.'сомони';

 	$price2 = New Ticket(0.5,10);
 	echo ' <br> Ваш билет со скидкой в 10% стоит :'  .$price2->priceOfTicket(1500). ' '.'сомони';

 	$price3 = New Ticket(0.5, 20);
 	echo '<br> Ваш билет со скидкой в 20% стоит:' . $price3->priceOfTicket(2000). ' ' .'сомони';


 ?>
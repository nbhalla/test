<?php

// Code taken from go4expert.com under 'CC BY-SA 3.0' 

function sum_of_primes($n)
{
     $sum = 0;
	 
	 $s_prime;
 
     for ($i = 1; $i <= $n; $i++)
     {
         $is_prime = 1; // Assuming that current value of i is prime
         
         // Checking for prime
         for ($j = 2; $j <= ($i / 2); $j++)
         {
             if($i % $j == 0) // Not prime, set is_prime to 0 and break
             {
                 $is_prime = 0;
                 break;
             }
         }
 
         if($is_prime) // If the number is prime, a
         {
             $sum += $i;             
         }
     }
 
     return $sum;
}

echo sum_of_primes(1000);

?>
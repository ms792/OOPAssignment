<?php
   $obj = new main();
   $array = array(35,37,43,12,10);
   $text = "This is a wonderful day";

   $obj->printthis($text);
   $obj->printthis2();
   $obj->printthis3();
   $obj->printthis4();
   $obj->printthis5();
   $obj->printthis6();
   $obj->printthis7();
   $obj->printthis8();
   $obj->printthis9();
   $obj->printthis10();

   $obj->printArray($array);
   $obj->printArray2($array);
   $obj->printArray3($array);
   $obj->printArray4($array);
   $obj->printArray5($array);
   $obj->printArray6($array);
   $obj->printArray7($array);
   
    class main
   {
     public function __construct()
     {
       echo 'This is my first string and array assignment</br>';
     }

     public function printArray($array)
     {
       echo '<h1>print first array demo</h1>';
       rsort($array);
       print_r($array);
       echo '<hr>';
     }

     public function printArray2($array)
     {
       echo '<h2>print second array demo</h2>';
       count($array);
       print_r($array);
       echo '<hr>';
     }
       public function printArray3()
     {
        echo '<h3>print third array demo</h3>';
        $input_array = array("First" => "A", "Second" =>"B");
        print_r(array_change_key_case($input_array, CASE_UPPER));
        echo '<hr>';
     }

     public function printArray4()
     {
        echo '<h4>print fourth array demo</h4>';
        $input_array = array('Volvo','BMW','Benz','Honda','Toyota');
        print_r(array_chunk($input_array,2));
        print_r(array_chunk($input_array,2,true));
        echo '<hr>';
     }

     public function printArray5()
     {
       echo '<h5>print fifth array demo</h5>';
       $a = array('green', 'blue', 'red');
       $b = array('cucumber','blueberries','cherries');
       $c = array_combine($a,$b);
     }
       
        public function printArray6()
     {
       echo '<h6>print sixth array demo</h6>';
       $stack = array("Pepperoni","Veggie","Cheese","Pineapple","Chicken");
       $pizza_toppings = array_pop($stack);
       print_r($stack);
       echo '<hr>';
     }

     public function printArray7()
     {
       echo '<h7>print seventh array demo</h7></br>';
       $b = array(1,2,3,4);
       echo "sum(b) = " . array_sum($b). "\n";
       echo '<hr>';
     }

     public function printArray8()
     {
       echo '<h8>print eighth array demo</h8></br>';
       $city = "San Jose";
       $state= "CA";
       $experience= "Apple Global Conference";
       $location_vars = array("city","state");
       $outcome = compact("experience", "some information", $location_vars);
       print_r($outcome);
       echo '<hr>';
     }
     
     public function printArray9()
     {
       echo'<h9>print ninth array demo</h9></br>';
      $letters = range("a","z");
       shuffle($letters);
       foreach($letters as $letter)
       {
         echo "$letter ";
       }
       echo '<hr>';
     }
     public function printArray10($array)
     {
       echo '<h10>print tenth array demo</h10></br>';
       arsort($array);
       print_r($array);
       echo '<hr>';
     }

     public function printthis($text)
     {
       echo '<h1>print first string function</h1>';
       print_r($text);
       echo'<hr>';
     }

     public function printthis2()
     {
       echo '<h2>print second string function</h2>';
       $new = htmlspecialchars("<a href='homework'>Homework</a>", ENT_QUOTES);
       print_r($new);
       echo '<hr>';
     }
public function printthis3()
     {
       echo '<h3>print third string function</h3>';
       $number = 10;
       $str = "Hong Kong";
       vprintf("There are %u million bicycles in %s. ", array($number,$str));
       echo '<hr>';
     }

     public function printthis4()
     {
       echo '<h4>print fourth string function</h4>';
       $str = "This is my good friend Elena";
       print_r(str_word_count($str,3));
       echo str_word_count($str);
       echo '<hr>';
     }

     public function printthis5()
     {
       echo '<h5>print fifth string function</h5>';
       $text = "The dog jumped over the fence.";
       $newtext = wordwrap($text,20, "<br/ >\n");
       print_r($newtext);
       echo '<hr>';
     }

     public function printthis6()
     {
      echo '<h6>print sixth string function</h6>';
      $text = substr('This is a wonderful day',1,4);
            print_r($text);
      echo '<hr>';
     }

     public function printthis7()
     {
       echo '<h7>print seventh string function</h7></br>';
       $text  = str_rot13('HTML 5.5.0');
       print_r($text);
       echo '<hr>';
     }
    
    public function printthis8()
    {
      echo '<h8>print eighth string function</h8></br>';
      $str = "Hello Universe!";
      echo $str . "<br>";
      echo trim($str, "Heu!");
      echo '<hr>';
   }
       public function printthis9()
    {
      echo '<h9>print ninth string function</h9></br>';
      echo ucfirst("Welcome to today's news!");
      echo '<hr>';
    }

    public function printthis10()
    {
      echo '<h10>print tenth string function</h10></br>';
      echo substr_count("Hello good morning. Today is a nice","day");
      echo '<hr>';
    }
}
?>

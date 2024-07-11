<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Task 1
    // function isPrime($number)
    // {
    //     $isPrime = true;
    //     if ($number <= 1) {
    //         $isPrime = false;
    //     }
    //     if ($number % 1 == 0) {
    
    //         for ($i = 2; $i < $number; $i++) {
    
    //             if ($number % $i == 0) {
    
    //                 return false;
    
    //             } else {
    
    //                 $isPrime = true;
    
    //             }
    //         }
    //     }
    //     return $isPrime;
    // }
    // for ($i = 0; $i <= 20; $i++) {
    //     if (isPrime($i)) {
    //         echo "  $i is Prime !";
    //         echo "<br>";
    //     } else {
    //         echo "  $i is Not Prime !";
    //         echo "<br>";
    //     }
    // }
    

    // Task 2 
    // $name = "Abdallah";
    // echo strrev($name);
    


    //Task 3
    // $name = "abdallah";
    // $isOkay = true;
    // for ($i = 0; $i < strlen($name); $i++) {
    //     if ($name[$i] != strtolower($name[$i])) {
    //         $isOkay = false;
    //     }
    // }
    // if ($isOkay) {
    //     echo "your Sting $name is Okay";
    // } else {
    //     echo "your Sting $name is Not Okay";
    // }
    
    // Task 4
    // $num1 = 12;
    // $num2 = 10;
    
    // function swapVars(&$x, &$y)
    // {
    //     $z = $x;
    //     $x = $y;
    //     $y = $z;
    // }
    
    // swapVars($num1, $num2);
    
    // echo "$num1, $num2";
    
    //task 5 - armstrong number is the number that
    // the its digets raised to the power of the number of digits 
    // and the sum of them is equal to the number itself
    // example 153 = 1^3 + 5^3 + 3^3
    
    // $number = 9;
    
    // function isArmstong(&$number)
    // {
    //     $result = 0;
    //     // to seperate the digits 
    //     $stringNumber = (string) $number;
    //     // to sum and power the digits
    //     for ($i = 0; $i < strlen($stringNumber); $i++) {
    //         $result += (int) $stringNumber[$i] ** strlen($stringNumber);
    //     }
    //     //checking
    //     if ($result == $number) {
    //         echo "the number is armstrong ";
    //         return true;
    //     } else {
    //         echo "the number is not armstrong ";
    //         return false;
    //     }
    
    // }
    // isArmstong($number);
    
    //task 6
    // $string = "Eva, can I see bees in a cave?";
    // $pattern = '/[^a-zA-Z0-9]/';
    // $cleanedString = preg_replace($pattern, '', $string);
    // $cleanedString = strrev($cleanedString);
    // $cleanedString = strtolower($cleanedString);
    // if ($cleanedString == strtolower(preg_replace($pattern, '', $string))) {
    //     echo " this is palindom";
    // }
    

    // task 7
    // $array1 = array(2, 4, 7, 4, 8, 4);
    // $newArray = array_unique($array1);
    // echo '<pre>';
    // print_r($newArray);
    // echo '</pre>';
    ?>
</body>

</html>
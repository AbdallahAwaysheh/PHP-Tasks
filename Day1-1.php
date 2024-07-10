<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY-PHP</title>
</head>
<body>
    
    <?php 
    // task 1
        $indexedArray = ['banana','kiwi','apple','orange','watermellon'];
        foreach($indexedArray as $element){
            echo $element . '<br>';
        };
        echo "<br> <h1>--------------------------------------------------------</h1>";
        
        
        array_push($indexedArray,"strawberry");
        
        foreach($indexedArray as $element){
            echo $element . '<br>';
        };
        var_dump($indexedArray);
        
        echo "<br> <h1>--------------------------------------------------------</h1>";
        array_pop($indexedArray);
        foreach($indexedArray as $element){
            echo $element . '<br>';
        };
        
        echo "<br> <h1>--------------------------------------------------------</h1>";
        
        $frout = "apple";
        
        for($i = 0; $i<count($indexedArray); $i++){

            if ($indexedArray[$i] == $frout ){
                echo "There is $indexedArray[$i] in array";
                break;
            }else{
                echo `There is no $indexedArray[$i] in array`;
            }
            
        };
        
        echo "<br> <h1>-=================    Task 2    ===================--</h1>";

        $persons = array("person1"=> " Sara", "person2"=>" Abdallah", "person3"=>" Waleed");
        foreach($persons as $person => $hisNmae){
            echo "The $person is $hisNmae <br>";
        };

        echo "<br> <h1>--------------------------------------------------------</h1>";

        $persons+=["person4"=>"Ahmad"];

        foreach($persons as $person => $hisNmae){
            echo "The $person is $hisNmae <br>";
        };

        echo "<br> <h1>--------------------------------------------------------</h1>";
        unset($persons["person2"]);
        foreach($persons as $person => $hisNmae){
            echo "The $person is $hisNmae <br>";
        };
        
        echo "<br> <h1>--------------------------------------------------------</h1>";
        foreach($persons as $person => $hisNmae){
            if($person == "person3"){
                echo "$hisNmae is in the list";
            };
        };
        

        echo "<br> <h1>-=================    Task 3    ===================--</h1>";

        $students = [
            array("name"=>"Abdallah","age"=>"24","grade"=>"100%"),
            array("name"=>"Omar","age"=>"26","grade"=>"94%"),
            array("name"=>"Momen","age"=>"14","grade"=>"90%")
        ];
        
        array_push($students,array("name"=>"sami","age"=>"27","grade"=>"100%"));
        foreach($students as $student){
            echo  "<br>" ."The Name is " . $student["name"] . "<br>" ."The age is ".$student["age"] ."<br>" ."The Grade is ".$student["grade"]."<br>";
        }
        echo "<br> <h1>-=================    Task 4    ===================--</h1>";

        $indexedArr = [1,2,3,4,5,6,7,8,9];
        array_push($indexedArr,10);
        echo "10 was Added to array: ";
        foreach($indexedArr as $x){
            echo $x . ' ';
        };
        echo '<br>';
        array_pop($indexedArr);
        echo "deleted the last element :";
        foreach($indexedArr as $x){
            echo $x . ' ';
        };
        echo '<br>';

        $values = array_values($indexedArr);

        echo "Array values :";
        foreach($values as $x){
            echo $x . ' ';
        };
        echo '<br>';

        $keys = array_keys($indexedArr);
        
        echo 'Array keys :';
        foreach($keys as $x){
            echo $x . ' ';
        };

        echo '<br>';

        echo 'The length of the Array :';
        echo count($indexedArr);
        echo '<br>';
        $secondArr =[11,12,13,14,15];
        array_push($indexedArr,10);
        echo "merged arrays : " ;
        $mergedArr =array_merge($indexedArr,$secondArr);
        foreach($mergedArr as $element){
            echo $element . " ";
        }

        echo '<br>';
        $search = array_search(5,$indexedArr);
        echo $search;//reterned the index of the value "5"


        echo '<br>';
        $unsortedArr =[2,6,4,8,7,9,5,3,1,0];
        echo "the Array Befor Sorting :";
        foreach($unsortedArr as $element){
            echo $element . " ";
        }
        echo "<br>";
        sort($unsortedArr);
        echo "the Array After Sorting :";
        foreach($unsortedArr as $element){
            echo $element . " ";
        }
        echo '<br>';
        $unsortedArray =array(
            "Came" => "Aohn",
            "AastName" => "Bs",
            "Bity" => "Cew York"
        );
        krsort($unsortedArray);
        foreach($unsortedArray as $element){
            echo $element . "-- ";
        }
        echo '<br>';
        asort($unsortedArray);
        foreach($unsortedArray as $element){
            echo $element . "-- ";
        };
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY-PHP</title>
</head>
<body>
    <?php 
        //===============Task 2=====================
        $cities = array("New York", "London", "Paris", "Tokyo", "Sydney", "Berlin", "Dubai", "Rome", "Toronto", "Moscow");
        $reversedArray =array_reverse($cities);//Do not Change the Original Array
        foreach($reversedArray as $element){
            echo $element ;
            echo '<br>';
        }
        echo '=================================================';
        $theIndexOfSpecificCity = array_search("London",$cities);
        echo '<br>';
        echo 'the Index Of Specific City : ' .$theIndexOfSpecificCity;
        echo '<br>';
        // $newArr = array_diff($cities,["London"]);
        unset($cities[array_search("London",$cities)]);
        foreach($cities as $element){
            echo $element ;
            echo '<br>';
        };
        echo '<br>';
        print_r(array_slice($cities,0,3));
        echo '<br>';
        $products = array(
            "Apple" => 1.20,
            "Banana" => 0.50,
            "Orange" => 0.80,
            "Strawberry" => 2.50,
            "Grapes" => 3.00,
            "Watermelon" => 5.00,
            "Pineapple" => 4.00,
            "Mango" => 1.50,
            "Blueberry" => 2.80,
            "Peach" => 1.10
        );
        ksort($products);
        print_r($products);
        echo '<br>';
        asort($products);
        print_r($products);
        echo '<br>';
        $sum =0;
        $avg = 0;
        foreach($products as $price){
            $sum+=$price;
        }
        $avg = $sum/count($products);
        echo 'The Sum is :' .$sum . "<br>";
        echo $avg;
        
        echo '<br>';
        asort($products);//the most expensive is the last element
        
        echo array_search(end($products),$products) . end($products);

        echo '<br>';
        echo '=================================================';
        echo '<br>';
        $booksList = array(
            array("title" => "arabic", "author" => "author1", "year" => 2015),
            array("title" => "clashs", "author" => "author2", "year" => 2022),
            array("title" => "love Story", "author" => "author3", "year" => 2020),
            array("title" => "science Fiction", "author" => "author4", "year" => 2018),
            array("title" => "mystery", "author" => "author5", "year" => 1915),
            array("title" => "fantasy", "author" => "author6", "year" => 2016),
            array("title" => "biography", "author" => "author7", "year" => 1917),
            array("title" => "history", "author" => "author8", "year" => 2021),
            array("title" => "thriller", "author" => "author9", "year" => 2014),
            array("title" => "romance", "author" => "author10", "year" => 2023)
        );
        foreach($booksList as $book){
            if($book["year"] > 2010){
                foreach($book as $key=>$value){
                    echo '<h5>';
                    echo "The $key is : $value";
                    echo '<br>';
                    echo '</h5>';
                }
            };
            echo '=================================================';
        };
        echo '<br>';
        array_push($booksList, array(
            'title'=>'Abdallah',
            'author'=>'abdallah',
            'year' => '2011'
        ));
        foreach($booksList as $book){
            if($book["year"] > 2010){
                foreach($book as $key=>$value){
                    
                    echo "The $key is : $value";
                    echo '<br>';
                    
                }
            };
            echo '=================================================';
            echo '<br>';
        };
        
        echo '<br>';
        foreach($booksList as $book){
            if($book["author"] === "author3"){
                $book["author"] = "Updated";
                foreach($book as $key=>$value){
                    echo "The $key is : $value";
                    echo '<br>';
                }
            };
            echo '=================================================';
            echo '<br>';
        };
        echo '<br>';
        

        





        
    ?>
</body>
</html>
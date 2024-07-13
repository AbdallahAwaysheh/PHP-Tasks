<?php
//task 1 
echo '<pre>';
function toUpperCase($string)
{
    return strtoupper($string);
}
function toLowerCase($string)
{
    return strtolower($string);
}
function firstLetterUpper($string)
{
    trim($string);
    $splitedString = str_split($string);
    $splitedString[0] = strtoupper($splitedString[0]);
    $string = join("", $splitedString);
    return $string;
}

function firstLetterToUpper2($string)
{
    $capetalizedArray = [];
    $wordsArray = str_word_count($string, 1, "01..9");
    foreach ($wordsArray as $word) {
        array_push($capetalizedArray, firstLetterUpper($word));
    }
    return join(" ", $capetalizedArray);
}

function numbsToDateFormat($string)
{
    $string = (string) $string;
    $hours = substr($string, 0, 2);
    $minutes = substr($string, 2, 2);
    $seconds = substr($string, 4, 2);
    $timeString = "$hours:$minutes:$seconds";
    $result = strtotime($timeString);
    return date('H:i:s', $result);
}
// echo numbsToDateFormat('085119');


function searchString($string, $word)
{
    $lowerCaseString = strtolower($string);
    $lowerCaseWord = strtolower($word);
    $wordsArray = str_word_count($lowerCaseString, 1, "01..9");
    if (array_search($lowerCaseWord, $wordsArray)) {
        echo "the word $word Found";
        return true;
    } else {
        echo "the word $word not Found";
        return false;
    }

}
// searchString('I am a full stack developer at orange coding academy', "Orange");

function urlExtract($url)
{
    $url = str_split($url);
    $startPoint = "/";
    $resultArr = array();

    for ($i = 0; $i < count($url); $i++) {
        if ($url[$i] == $startPoint) {
            for ($j = $i + 1; $j < count($url); $j++) {
                array_push($resultArr, $url[$j]);
            }
            break;
        }
    }
    $resultFileName = join("", $resultArr);
    // print_r($resultFileName);
    return $resultFileName;
}
// echo urlExtract('www.orange.com/index.php');

echo "<br>";
function nameExtract($name)
{
    $url = str_split($name);
    $endPoint = "@";
    $resultArr = array();
    for ($i = 0; $i < count($url); $i++) {
        array_push($resultArr, $url[$i]);
        if ($url[$i] == $endPoint) {
            array_pop($resultArr);
            break;
        }
    }
    $resultuserName = join("", $resultArr);
    // echo "The username is : $resultuserName";
    return $resultuserName;
}
nameExtract('Abdallah@gmail.com');

// function passwordGenerator($string)
// {
//     $string = str_split($string);
//     $password = '';
//     for ($i = 0; $i < 16; $i += 2) {
//         $password .= $string[$i];
//     }
//     echo $password;
// }
// passwordGenerator('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz');
function passwordGenerator($string)
{
    $shuffledString = str_shuffle($string);
    $password = substr($shuffledString, 0, 8);
    // echo $password;
}

passwordGenerator('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz');



function replaceFirstWord($string, $replace)
{
    $wordsArray = explode(" ", $string);
    $search = $wordsArray[0];
    $result = str_replace($search, $replace, $string);
    // echo $result;
}

replaceFirstWord('That new trainee is so genius', 'Our');



function differentFind($string1, $string2)
{
    $position = 0;
    for ($i = 0; $i < strlen($string1); $i++) {

        if ($string1[$i] != $string2[$i]) {
            $position = $i + 1;
            echo "First difference between two strings at position $position : $string1[$i] vs $string2[$i]";
            break;
        }
    }
}
// differentFind('dragonball', 'draganboll');

function stringToArray($string)
{
    $convertedString = explode(", ", $string);
    var_dump($convertedString);
    return $convertedString;
}
// stringToArray("Twinkle, twinkle, little star.");



//ord() return the value of the char in ascii 
//chr() convert the char to ascii 
function nextLetter($string)
{
    $asciiNumb = ord($string);
    if ($asciiNumb >= 65 && $asciiNumb < 90) {
        return chr($asciiNumb + 1);
    }
    if ($asciiNumb == 90) {
        return chr(97);
    }
    if ($asciiNumb >= 97 && $asciiNumb < 122) {
        return chr($asciiNumb + 1);
    }
    if ($asciiNumb == 122) {
        return chr(65);
    }
}

// echo nextLetter('A');


function insertToString($string, $beforWord, $wordToAdd)
{
    $convertedString = explode(" ", $string);
    $beforWordIndex = array_search($beforWord, $convertedString) + 1;
    array_splice($convertedString, $beforWordIndex, 0, $wordToAdd);

    return join(" ", $convertedString);
}
// echo insertToString('The brown fox', "The", 'quick');

function removeFromString($string, $stringToRemove)
{
    (string) $string = str_replace($stringToRemove, '', $string);
    echo $string;
}
// removeFromString('0000657022.24', 0);
// echo "<br>";
// removeFromString('The quick brown fox jumps over the lazy dog', " fox");
// echo "<br>";
// removeFromString('The quick brown fox jumps over the lazy dog---', "-");
// echo "<br>";
function removeSpitialChars($string)
{
    $string = preg_replace('/[^0-9\s]/', ' ', $string);
    $string = preg_replace('/\s+/', ' ', $string);
    $string = trim($string);
    echo $string;

}
// removeSpitialChars('\"\1+2/3*2:2-3/4*3');

function selectWords($string, $wordsCount)
{
    $words = explode(' ', $string);
    $result = "";
    for ($i = 0; $i < $wordsCount; $i++) {
        $result .= $words[$i];
        $result .= " ";
    }
    echo $result;

}
// selectWords('The quick brown fox jumps over the lazy dog', 5);

echo "<br>";

// removeFromString("2,543.12", ",");
//$asciiNumb >= 97 && $asciiNumb < 122
function printFromAToZ()
{
    for ($i = 97; $i <= 122; $i++) {
        echo chr($i) . " ";

    }
}
// printFromAToZ();
echo "<br>";


// selectWords('The quick brown fox', 1);
echo '</pre>';







?>
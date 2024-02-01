<?php 
$firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

echo "Hello, my name is $firstname $lastname.<br/>";

if($age >= 18){
    echo "I am $age years old and I am old enough to vote in the United States <br/>";
} else{
    echo "I am $age years old and I am not old enough to vote in the United States <br/>";
}

//Calculate number of days
$numofdays = 365 * $age;
echo "Number of days from the age is $numofdays. <br/>";

//current date
$date = date('Y-m-d H:i:s');
echo $date;
?>




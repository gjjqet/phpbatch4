<?php

$name="Kyaw Kyaw";
$grade=9;

echo $name;
echo "My name is $name";//My name is Kyaw Kyaw
echo "My name is {$name}";//My name is Kyaw Kyaw
echo "My name is ${name}";//My name is Kyaw Kyaw
echo 'My name is $grade';//My name is $grade
print "I'm grade $grade";//I'm grade 9
echo 'My name is $grade';//My name is $grade

echo 400;
echo 458.95;
echo (456.808);
echo true;//1
echo false;//empty
echo null;//empty



$fullname="U Kyaw Kyaw";
$job="Developer";

echo "He's my father , he is a $job";//He is my father , he is a Developer
echo "He's my father , he is a \$job";//He's my father , he is a $job
echo "He\'s my father , he is a $job";//He's my father , he is a Developer
echo "He's my father , he is a \${job}";//He's my father , he is a ${job}
echo "He's my father , he is a \{$job}";//He's my father , he is a {Developer}
echo "He's my father , he is a {\$job}";//He's my father , he is a {$job}


// $gender= echo "female";//error
$nation= print "burma";//burma




//Concat (.)

$firstname="Aung";
$lastname="Kyaw Kyaw";

echo $firstname;
echo $lastname;


echo $firstname." ".$lastname;


//Comment
# Single Line Comment

/*Multi Line Comment
 comment 1
 comment 2
comment 3*/





?>


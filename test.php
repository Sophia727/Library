<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. Write a PHP program to compute the sum of the two given integer values. 
    If the two values are the same, then returns triple their sum. Go to the editor
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12
-->

<!-- 1. answer : --> 

<?php 
function sum($a,$b)
{
return $a == $b ? ($a+$b)*3 : ($a+$b);
}
echo sum(1,2);
echo sum(3,2);
echo sum(2,2);
?> 

<!-- ---------------------------------------------------------- -->
<!-- 2. Write a PHP program to get the absolute difference between n and 51. 
        If n is greater than 51 return triple the absolute difference.
Sample Input:
53
30
51
Sample Output:
6
21
0

2. answer: -->
<!-- <?php

function absDiff($n)
{
    $x = 51;
    if($n > $x) {
        return ($n - $x)*3;
        
    } else {
        return $x - $n;
    }
}
echo absDiff(53)."\n";
echo absDiff(30)."\n";
echo absDiff(51)."\n";
?> -->

<!-- ---------------------------------------------------------- -->
<!-- 3. Write a PHP program to check two given integers, 
and return true if one of them is 30 or if their sum is 30.
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false) 

3. answer : -->
<!-- <?php

 function check($x , $y){
     if (($x || $y == 30) || ($x + $y == 30)) {
     return "true";
 } else {
     return "false";
 }
}

echo check(30 , 0)."\n";
echo check(25 , 5)."\n";
echo check(20 , 30)."\n";
echo check(20 , 25)."\n";

//last one comes out as true. why????

?> -->

<!-- ---------------------------------------------------------- -->

<!-- 4. Write a PHP program to check a given integer 
and return true if it is within 10 of 100 or 200.
Sample Input:
103
90
89
Sample Output:
bool(true)
bool(true)
bool(false)

4. answer: -->
<!-- <?php
function intCheck($x){
    if (($x >= 90) && ($x <= 200)){
        return "true";
    } else {
        return "false";
    }
}
echo intCheck(103)."\n";
echo intCheck(90)."\n";
echo intCheck(89)."\n";

?> -->

<!-- ---------------------------------------------------------- -->
<!-- 5. Write a PHP program to create a new string 
where 'if' is added to the front of a given string. 
If the string already begins with 'if', return the string unchanged.
Sample Input:
"if else"
"else"
"if"
Sample Output:
if else
if else
if

5.answer : -->
<!-- <?php
function newStr($x) {
    if (strlen($x) >= 2 && substr($x, 0, 2) === "if") {
        return $x . "<br>";
    } else {
    return "if " . $x . "<br>" ;
}
}
echo newStr("if else")."\n";
echo newStr("else")."\n";
echo newStr("if")."\n";
?> -->

<!-- ---------------------------------------------------------- -->
<!-- 6. Write a PHP program to remove the character in a given position 
of a given string. 
The given position will be in the range 0..string length -1 inclusive.
Sample Input:
"Python", 1
"Python", o
"Python", 4
Sample Output:
Pthon
ython
Pythn
6. answer : -->
<!-- <?php
????????????????????????????????????????????????????????????????????
?> -->


<!-- ---------------------------------------------------------- -->
<!-- 7. Write a PHP program to exchange the first and last characters 
in a given string and return the new string.
Sample Input:
"abcd"
"a"
"xy"
Sample output:
dbca
a
yx

7. answer: -->

<!-- <?php
function myStr($x) 
{
   return strlen($x) > 1 ? substr($x, strlen($x) - 1) . substr($x, 1, strlen($x) - 2). substr($x, 0, 1) : $x;
   
}

echo myStr("abcd")."\n";
echo myStr("a")."\n";
echo myStr("xy")."\n";

?> -->


<!-- ---------------------------------------------------------- -->
<!-- 8. Write a PHP program to create a new string 
which is 4 copies of the 2 front characters of a given string. 
If the given string length is less than 2 return the original string. 
Sample Input:
"C Sharp"
"JS"
"a"
Sample Output:
C C C C
JSJSJSJS
a

8. answer: -->
<!-- <?php
function
?> -->

<!-- ---------------------------------------------------------- -->
<!-- 9. Write a PHP program to create a new string with 
the last char added at the front and back of a given string 
of length 1 or more. 
Sample Input:
"Red"
"Green"
"1"
Sample Output:
dRedd
nGreenn
111 

9. answer:-->
<!-- <?php
function
?> -->


<!-- ---------------------------------------------------------- -->
<!-- 10. Write a PHP program to check if a given positive number 
is a multiple of 3 or a multiple of 7.
Sample Input
3
14
12
37
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false)

10. answer: -->
<!-- 
<?php
function myTest ($x){
    return $x % 3 == 0 || $x % 7 == 0;
}
echo myTest(3)."\n";
echo myTest(14)."\n";
echo myTest(12)."\n";
echo myTest(37)."\n";

?>  -->

</body>
</html>



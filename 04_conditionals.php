<?php

/*---------- Operators ---------- */

/*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Great than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to 
*/

$age = 17;

if ($age >= 18){
    echo "You are old enough to vote";
}else{
    echo "Sorry, you are not old enough to vote";
}

// You can have as many elseif's as you want.

$t = date("H");

if($t < 17 ){
    echo "Good Morning";
}elseif($t > 15){
    echo "Good Afternoon";
}else{
    echo "Good evening";
}

$posts = ['First Post'];


if(empty($posts)){
    echo 123;
}

//Exclamation represents that its not empty.

if(!empty($posts)){
    echo $posts[0];
}else{
    echo 'No Posts';
}

// if not empty then fetch post 0 else
echo !empty($posts) ? $posts[0] : "No Posts";

// !empty = if not empty
// ? = Then
// : = else

// Setting a vaiable with a condition if not then reverts to No Posts
$firstpost = !empty($posts) ? $posts[0] : 'No Posts';
//$firstpost = !empty($posts) ? $posts[0] : null;
echo $firstpost;

$firstPost = $posts[0] ?? null;
echo $firstPost;

$favcolour = 'yellow';
switch($favcolour){
    case 'red':
        echo "Your favourite colour is red";
        break;
    case 'blue';
    echo "Your favourite colour is blue";
        break;
    case 'green';
    echo 'Your favourite colour is green';
        break;
    default:
        echo "Your favourite colour is not red, green or blue";
}
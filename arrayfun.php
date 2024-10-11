<?php
// sort , rsort,array_push, array_pop, array_shift, array_unshift, array_slice

$ids = [1, 2, 4, 5, 6];
$user = ['user1', 'user2', 'user3'];
array_push($ids, 4);
array_push($user, 'user4');
array_pop($ids);
array_pop($user);
array_shift($ids);
array_shift($user);
array_unshift($ids ,  1);
array_unshift($user , 'user1');

//   $ids2= array_slice($ids , 2, 3);
//   var_dump($ids2);
array_splice($ids,1,1,'newid ');
array_splice($user,0,1,'newuser ');


$tags= 'php,program,pythn';
$tagsArray= explode(',', $tags);
// var_dump($tagsArray);

$tags= ['php', 'program', 'python'];
$tagsString= implode(' ', $tags);
var_dump($tagsString);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <div>
        <h2>this is the array</h2>
        <?php echo "<pre>"; ?>
        <?php echo print_r($ids); ?>
        <?php echo "<pre>"; ?>
        <?php echo print_r($user); ?>

    </div>
</body>

</html>
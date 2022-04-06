<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills PHP</title>
</head>
<body>
<?php
$mySkills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'];
function newList($skillsArray){
echo 'My Skills Include: <ul>';
foreach($skillsArray as $value){
    echo '<li>' . $value . '</li>';
} 
echo '</ul>';
}

newList($mySkills);
?>


</body>
</html>
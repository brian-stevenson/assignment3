<?php
require_once("ParentClass.php");
require_once("ChildClass.php");

function levelUp($object)
{
    $object->level++;
    if($object->class == "Mage"){
        $object->HP += 2;
        $object->ATK +=3;
        $object->DEF +=1;
    }
    elseif($object->class == "Warrior"){
        $object->HP += 2;
        $object->ATK +=2;
        $object->DEF +=2;
    }
    elseif($object->class == "Priest"){
        $object->HP += 2;
        $object->ATK +=1;
        $object->DEF +=3;
    }
    else{
        $object->HP += 1;
        $object->ATK +=1;
        $object->DEF +=1;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>

<body>
    <h1>Brian Stevenson: Assignment 3</h1>
    <section id="basic">
        <h2>Generic character:</h2>
        <?php
            $obj = new ParentClass("CoolName","♂","1");
            echo $obj."<br><br>";
        ?>
    </section>

    <section id="adv">
        <h2>Advanced character:</h2>
        <?php
            $newObj = new ChildClass("CoolName","♂","1","Priest","10","4","1");
            echo $newObj."<br>";
            echo "<br>LEVEL UP!<br>New level and stats:<br>";
            levelUp($newObj);
            echo $newObj."<br>";
            echo "<br>You decide to try a new class(and gender while you're at it):<br>";
            $newObj->setClass("Warrior");
            $newObj->setGender("♀");
            echo $newObj."<br>";
            echo "<br>You level up twice more with your new class:<br>";
            levelUp($newObj);
            levelUp($newObj);
            echo $newObj."<br>";
        ?>
    </section>
</body>
</html>
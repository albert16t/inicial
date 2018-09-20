<?php
    
$title="Mi primera página";
$name="Toni";

if(!isset($_GET['age']))
{
    echo "No has puesto tu edad ";
}
else
{
    $age=$_GET['age'];
    echo "<h1>".$title."</h1>";
    //$valor= gettype($title);
    //echo $valor;
    echo $age."<br>";
    if($age >= 18)
    {
        echo "Es mayor de edad";
    }
    else
    {
        echo "Menor de edad";
    }

}


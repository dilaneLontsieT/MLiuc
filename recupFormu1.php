<?php
session_start();
$con = mysqli_connect("localhost","root","","mliuc");

if(isset($_POST['Enregistrer']))
{
    $ch = $_POST['ch'];
    // echo $ch;

    foreach($brands as $item)
    {
        // echo $item . "<br>";
        $query = "INSERT INTO matieres (choix) VALUES ('$item')";
        $query_run = mysqli_query($con, $query);
    }

    // if($query_run)
    // {
    //     $_SESSION['status'] = "Inserted Successfully";
    //     header("Location: index.php");
    // }
    // else
    // {
    //     $_SESSION['status'] = "Data Not Inserted";
    //     header("Location: index.php");
    // }
}
?>
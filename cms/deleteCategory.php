<?php

if(isset($_GET['categoryId']))
{
        $link = mysqli_connect("localhost", "root", "", "cms");

        if($link)
        {
            $id = $_GET['categoryId'];

            $sql = "DELETE FROM category WHERE id = $id";
            $result = mysqli_query($link, $sql);
            
            if($result)
            {
                header("Location: categoriesPreview.php");
            }
            else
            {
                $reply = "Error! Couldn't delete category.";
                header("Location: categoriesPreview.php?reply=$reply");
            }
        }
        else
        {
            echo "Couldn't connect with database.<br>";
            echo "<a href='index.php'> Home </a> <br>";
        }
}
else
{
    echo "You shouldn't be here.";
}
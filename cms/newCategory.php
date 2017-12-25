<?php

if(isset($_POST['categoryName']))
{
        $link = mysqli_connect("localhost", "root", "", "cms");

        if($link)
        {
            $name = $_POST['categoryName'];

            $sql = "INSERT INTO category (id, name) VALUES (NULL, '$name')";
            $result = mysqli_query($link, $sql);
            
            if($result)
            {
                header("Location: categoriesPreview.php");
            }
            else
            {
                $reply = "Error! Couldn't add new category.";
                header("Location: categoriesPreview.php?reply=$reply");
            }
        }
        else
        {
            echo "Couldn't connect with database<br>";
            echo "<a href='index.php'> Home </a> <br>";
        }
}
else
{
    echo "You shouldn't be here.";
}


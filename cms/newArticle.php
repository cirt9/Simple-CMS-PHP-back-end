<?php

if(isset($_POST['author']) && isset($_POST['title']) && isset($_POST['contents']) && isset($_POST['category']))
{
    $author = $_POST['author'];
    $title = $_POST['title'];
    $contents = $_POST['contents'];
    $id_category = $_POST['category'];
    
    $link = mysqli_connect("localhost", "root", "", "cms");

    if($link)
    {
        $sql = "INSERT INTO article (id, title, author, contents, id_category) "
                . "VALUES (NULL, '$title', '$author', '$contents', '$id_category')";
        $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: articlesPreview.php");
        }
        else
        {
            $reply = "An error ocurred. The article couldn't be added.";
            header("Location: index.php?reply=$reply");
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


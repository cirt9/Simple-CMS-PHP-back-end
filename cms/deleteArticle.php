<?php

if(isset($_GET['articleId']))
{
        $link = mysqli_connect("localhost", "root", "", "cms");

        if($link)
        {
            $id = $_GET['articleId'];

            $sql = "DELETE from article WHERE id = $id";
            $result = mysqli_query($link, $sql);
            
            if($result)
            {
                header("Location: articlesPreview.php");
            }
            else
            {
                $reply = "Error! Couldn't delete article.";
                header("Location: articlesPreview.php?reply=$reply");
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
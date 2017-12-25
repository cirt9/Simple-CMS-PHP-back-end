<?php
           
if(isset($_POST['articleId']) && isset($_POST['category']))
{
    $id = $_POST['articleId'];
    $idCategory = $_POST['category'];
    
    $link = mysqli_connect("localhost", "root", "", "cms");
    
    if($link)
    {
        $sql = "UPDATE article SET id_category = '$idCategory' WHERE id='$id'";
        $result = mysqli_query($link, $sql);

        if($result)
        {
            header("Location: articlesPreview.php");
        }
        else
        {
            $reply = "Error! Couldn't edit category.";
            header("Location: articlesPreview.php?reply=$reply");
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
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Article </title>
    </head>
    <body>
        <?php
            
            if(isset($_GET['articleId']))
            {
                $id = $_GET['articleId'];
                $link = mysqli_connect("localhost", "root", "", "cms");

                if($link)
                {
                    $sql = "SELECT article.title, article.author, article.contents, category.name FROM article "
                            . "JOIN category ON article.id_category = category.id WHERE article.id=$id";
                    $result = mysqli_query($link, $sql);

                    if($result)
                    {
                        while ($row = mysqli_fetch_array($result)) 
                        {
                            $title = $row[0];
                            $author = $row[1];
                            $contents = $row[2];
                            $category = $row[3];
                            
                            echo "<h1> $title </h1>";
                            echo $contents."<br><br><br>";
                            echo "Author: $author <br>";
                            echo "Category: $category <br>";
                            
                            echo "<br><br><br><br><hr>";
                            echo "<a href='index.php'> Home </a> <br>";
                            echo "<a href='articlesPreview.php'> Articles </a> <br>";
                            echo "<a href='categoriesPreview.php'> Categories </a> <br>";
                        }
                    }
                    else
                    {
                        echo "Couldn't read the article.<br>";
                        echo "<a href='index.php'> Home </a> <br>";
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
        
        ?>
    </body>
</html>

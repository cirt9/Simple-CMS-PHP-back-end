<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Articles </title>
    </head>
    <body>
        <h1> Articles </h1>
        
        <div style="background: red; color: white;">
            <?php
                if(isset($_GET['reply']))
                {
                    echo $_GET['reply'];
                }
            ?>
        </div>
        
        <?php
            
            $link = mysqli_connect("localhost", "root", "", "cms");

            if($link)
            {
                $sql = "SELECT article.id, article.author, article.title, category.name FROM article "
                        . "JOIN category ON article.id_category = category.id";
                $result = mysqli_query($link, $sql);
                
                echo "<table border=1>";
                echo "<tr> <td><b>No.</b></td> <td><b>Title</b></td> <td><b>Author</b></td> <td><b>Category</b></td> </tr>";
                if(mysqli_num_rows($result) > 0)
                {
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) 
                    {
                        $id = $row[0];
                        $author = $row[1];
                        $title = $row[2];
                        $category = $row[3];
                        
                        echo "<tr> <td>$i</td> <td>$title</td> <td>$author</td> <td>$category</td> <td> <a href='showArticle.php?articleId=$id'>Show</a></td>"
                                . "<td> <a href='categoryEditForm.php?articleId=$id'>Edit category</a></td> "
                                . "<td> <a href='deleteArticle.php?articleId=$id'> Delete </a> </td> </tr>";
                        $i++;
                    }
                }
                echo "<table>";
            }
            else
            {
                echo "Couldn't connect with database.<br>";
                echo "<a href='index.php'> Home </a> <br>";
            }
        
        ?>
        <br><br><br><br><hr>
        
        <a href="index.php"> Home </a> <br>
        <a href="categoriesPreview.php"> Categories </a> <br>
        
    </body>
</html>

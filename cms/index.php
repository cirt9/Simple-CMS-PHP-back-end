<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> CMS </title>
    </head>
    <body>
        
        <h1> CMS </h1>
        
        <form name = "form" action = "newArticle.php" method = "POST">
            Author: <input type="text" name="author" value="" size="50" /> <br>
            Title: <input type="text" name="title" value="" size="50" /> <br>
            Contents:<br> <textarea name="contents" rows="15" cols="60"> </textarea> <br>
            Category: 
            <select name="category">
                <?php
                    
                    $link = mysqli_connect("localhost", "root", "", "cms");
                    
                    if($link)
                    {
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($link, $sql);
                        
                        if(mysqli_num_rows($result) > 0)
                        {
                            while ($row = mysqli_fetch_array($result)) 
                            {
                                echo "<option value=".$row[0].">".$row[1]."</option>";
                            }
                        }
                    }
                    
                ?>
            </select><br>
            <input type="submit" value="Save" name="button" />
            
        </form>
        
        <div style="background: red; color: white;">
            <?php
                if(isset($_GET['reply']))
                {
                    echo $_GET['reply'];
                }
            ?>
        </div>
        
        <br><br><br><br><hr>
        
        <a href="articlesPreview.php"> Articles </a> <br>
        <a href="categoriesPreview.php"> Categories </a> <br>
    </body>
</html>

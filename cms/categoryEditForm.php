<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Category Edition </title>
    </head>
    <body>
        
        <?php
        
        if(isset($_GET['articleId']))
        {
            echo "<form name='form' action='editCategory.php' method='POST'>
            Choose category: <select name='category'>";
            
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
            
            echo "</select><br>
            <input type='hidden' value='".$_GET['articleId']."' name='articleId' />
            <input type='submit' value='Save' name='button' />
            </form>";
        }
        else
        {
            echo "You shouldn't be here.";
        }
        
        ?>
    </body>
</html>

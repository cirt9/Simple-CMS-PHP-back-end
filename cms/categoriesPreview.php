<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Categories </title>
    </head>
    <body>
        <h1> Categories </h1>
        
        <div style="background: red; color: white;">
            <?php
                if(isset($_GET['reply']))
                {
                    echo $_GET['reply'];
                }
            ?>
        </div>
        <br>
        
        <?php
            
            $link = mysqli_connect("localhost", "root", "", "cms");

            if($link)
            {
                $sql = "SELECT * FROM category";
                $result = mysqli_query($link, $sql);
                
                echo "<table border=1>";
                echo "<tr> <td><b>No.</b></td> <td><b>Name</b></td> </tr>";
                if(mysqli_num_rows($result) > 0)
                {
                    $i = 1;
                    while ($row = mysqli_fetch_array($result)) 
                    {
                        $id = $row[0];
                        echo "<tr> <td>$i</td> <td>".$row[1]."</td> <td><a href='deleteCategory.php?categoryId=$id'>Delete</a></td></tr>";
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
        
        <h3> Add new category </h3>
        
        <form name="form" action="newCategory.php" method="POST">
            
            Category Name: <input type="text" name="categoryName" value="" size="15" /> <br>
            <input type="submit" value="Save" name="button" />
            
        </form>
                    
        <br><br><br><br><hr>
        
        <a href="index.php"> Home </a> <br>
        <a href="articlesPreview.php"> Articles </a> <br>
    </body>
</html>

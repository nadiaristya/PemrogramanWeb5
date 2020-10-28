<?php 
function connection() {
    // membuat konekesi ke database system
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "dbcv";
 
    $conn = mysqli_connect($dbServer, $dbUser, $dbPass);
 
    if(! $conn) {
     die('Koneksi gagal: ' . mysqli_error());
    }
    //memilih database yang akan dipakai
    mysqli_select_db($conn,$dbName);
     
    return $conn;
 } 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Curriculum Vitae</title>
            <link rel="stylesheet" href="css/reset.css" />
            <link rel="stylesheet" href="css/text.css" />
            <link rel="stylesheet" href="css/960.css" />  
            <link rel="stylesheet" href="css/960_24_col.css" />
            <link rel="stylesheet" href="design.css"  />
        </head>
    <body>

    <div class="container_24" style="background-color:#669999 ; margin-top: 100px;">
        <div class="grid_11" style="background-color:#CC9999 ; border: 5px solid #132951">
            <img src="manusia.jpg" height="300" width="300" align="center" alt="" class="img">
            <h3>Nadia Ristya Dewi</h3>
            <h6>Informatics Student</h6>
            <h6>UPN Veteran Jawa Timur</h6>
        </div>
        
        <div class="grid_12" style="background-color: #CCCCCC; border: 5px solid #132951;">
            <h2>Formal Education</h2>
            <?php 
                $query = "SELECT * FROM cv order by education_year desc";
                $result = mysqli_query(connection(),$query);
            ?>

            <?php while($data = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?php echo "<span class= 'educ'>".$data['education_year']."</span>";  ?></td>
                    <td><?php echo "<span class= 'edu'>".$data['education_year2']."</span>"."&emsp;"."&emsp;"."&emsp;"."&emsp;";  ?></td>
                    <td><?php echo "<span class= 'edu'>".$data['education_name']."</span>"."&emsp;";  ?></td><br>
                </tr>
            <?php endwhile; ?>
        </div>

        <div class="grid_10" style="background-color:#CCCCCC ;">
            <h2>Language</h2>
            <pre id="t2">
        Indonesia      &#9899  &#9899  &#9899  &#9899  &#9899
        English           &#9899  &#9899  &#9899  &#9899  &#9898
        Jawa               &#9899  &#9899  &#9899  &#9899  &#9898
        Banjar           &#9899  &#9898  &#9898  &#9898  &#9898
        Melayu           &#9899  &#9899  &#9899  &#9898  &#9898
        Minang          &#9899  &#9899  &#9899  &#9898  &#9898
            </pre>
        </div>

        <div class="grid_14" style="background-color:#CCCCCC ;">
            <h3>Hobbies</h3>
                <ul>
                    <li><img src="travelling.jpg" width="130px" height="130px"><h2>Travelling</h2></li> 
                    <li><img src="watching.jpg" width="130px" height="130px"><h2>Watch Movie</h2></li>
                    <li><img src="shopping.jpg" width="130px" height="130px"><h2>Shopping</h2></li>
                </ul>
        </div>
        <div class="grid_24" style="background-color: #132951;">
            <ul>
                <li><img src="youtube.jpg" width="30px" height="30px"><h2>Nadia Ristya</h2></li> 
                <li><img src="snapchat.jpg" width="30px" height="30px"><h2>nadiaristya</h2></li>
                <li><img src="instagram.jpg" width="30px" height="30px"><h2>nadiaristya</h2></li>
                <li><img src="email.jpg" width="30px" height="30px"><h2>nadiaristya@gmail.com</h2></li>
            </ul>
         
        </div>
    </div>

        

    </body>
</html>

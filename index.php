<!DOCTYPE html>
<html>
<head>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 0px;
  background-color: #bfbfbf;
  background-repeat: repeat;
}

.wrap{
    margin: 0;
    padding: 0;
}

.header {
  padding-top: 40px;
  padding-bottom: 40px;
  text-align: center;
  background: #8c1aff;
  margin-top, margin-left, margin-right: 0px;
}

.header h1 {
  font-size: 50px;
  margin: 0px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  background-color: black;
  padding: 0;
  padding-left: 43%;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: white;
  color: black;
}

.leftcolumn {   
  float: left;
  width: 25%;
  padding-right: 20px;
}

.rightcolumn {
  float: left;
  width: 75%;
  
}

.fakeimg {
  width: 100%;
  padding: 20px;
}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  padding: 20px;
  text-align: fixed;
  background: #ddd;
  margin-top: 20px;
  padding-top: 10px;
  background-color: white;
  text-align: center;
}


@media screen and (max-width: 1000px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
  .topnav{
      padding-left: 40%;
  }
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

</style>
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>Watchlist hulp</h1>
        <p>Deze website is bedoelt om alle series die je gekeken hebt op een rijtje te krijgen</p>
    </div>

    <div class="topnav responsive" id="myTopnav">
        <a href="index.php" class="active">Homepage</a>
        <a href="overmij.php">Over mij</a>
        <!--<a href="login.php" class="div123">Login</a>
        <a href="logout.php" class="div123">Logout</a>
        <a href="register.php" class="div123">Register</a>-->
    </div>
    <div class="row">

    <div class="leftcolumn">
            <div class="films">
                <div class="card">
                    <?php
                    $dbhost = "localhost";
                    $dbroot = "id17176924_root";
                    $dbww = "cKWw]H8Nu4+piGwW";
                    $dbname = "id17176924_fullstackproject";
                    
                    $conn = mysqli_connect("$dbhost", "$dbroot", "$dbww", "$dbname");
                        $sql1 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 1;";
                        $result1 = $conn-> query($sql1);
                        $sql2 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 2;";
                        $result2 = $conn-> query($sql2);
                        $sql3 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 3;";
                        $result3 = $conn-> query($sql3);
                        
                        $conn -> close();
                    ?>
                    <h2>Top 3 Nieuwe films</h2>
                    <div class="fakeimg">
                        <?php
                        if ($result1 -> num_rows > 0){
                            while($row = $result1-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2>
                                <p>".$row["filmtext"]."</p>
                                <p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
                    </div>
                    <div class="fakeimg">
                        <?php
                        if ($result1 -> num_rows > 0){
                            while($row = $result2-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2>
                                <p>".$row["filmtext"]."</p>
                                <p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
                    </div>
                    <div class="fakeimg">
                        <?php
                        if ($result1 -> num_rows > 0){
                            while($row = $result3-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2>
                                <p>".$row["filmtext"]."</p>
                                <p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightcolumn">

            <?php
                    $dbhost = "localhost";
                    $dbroot = "id17176924_root";
                    $dbww = "cKWw]H8Nu4+piGwW";
                    $dbname = "id17176924_fullstackproject";
                    
                    $conn = mysqli_connect("$dbhost", "$dbroot", "$dbww", "$dbname");
                        $sql4 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 1;";
                        $result4 = $conn-> query($sql4);
                        $sql5 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 2;";
                        $result5 = $conn-> query($sql5);
                        $sql6 = "SELECT filmname, filmtext, datumschema FROM films WHERE id = 3;";
                        $result6 = $conn-> query($sql6);
                        
                        $conn -> close();
                    ?>
            <div class="card">
                <?php
                        if ($result4 -> num_rows > 0){
                            while($row = $result4-> fetch_assoc()){
                                echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
            </div>

            <div class="card">
                <?php
                        if ($result4 -> num_rows > 0){
                            while($row = $result4-> fetch_assoc()){
                                echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
            </div>

            <div class="card">
                <?php
                        if ($result4 -> num_rows > 0){
                            while($row = $result4-> fetch_assoc()){
                                echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
        </div>
    </div>
    
    
</div>
<div class="footer">
        <h4>Heb jij nog nieuws dat er niet staat, neem dan contact op met mij!</h4>
        <h5>Contact informatie    <br>--------------------------------------------------------<br>
            Email: ditiseenfakeemail@outluuk.com <br> Telefoon: 0612345678 <br> Fax: nee</h5>
    </div>

</body>
</html>

<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto Condensed', sans-serif;
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

#myBtn {
  display: none;
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: purple;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  margin:5px;
}

#myBtn:hover {
  background-color: #555;
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

.hierbenje {
    border-top: 3px solid white;
}

#upvote{
    position:inherit;
    width:30px;
    height:30px;
    background-color:white;
    display:inline-block;
    right:50px;
    transition:0s 1s;
}

#upvote:active{
    width:30px;
    height:30px;
    background-color:#57de8d;
    border:none;
    transition:0s;
}

#downvote{
    position:inherit;
    width:30px;
    height:30px;
    background-color:white;
    display:inline-block;
    right:15px;
    transition:0s 1s;
}

#downvote:active{
    width:30px;
    height:30px;
    background-color:#d1364b;
    border:none;
    transition:0s;
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

i {
    padding-left:25px;
}

#welcome{
    position: absolute;
    right:0;
}


@media screen and (max-width: 1000px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>Watchlist nieuws</h1>
        <p>Deze website is bedoelt om al het nieuws van series en films te weergeven</p>
    </div>

<button onclick="topFunction()" id="myBtn" title="Go to top"> ↑ </button>

<script>
var mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

    <div class="topnav responsive" id="myTopnav">
        <a href="index.php" class="hierbenje">Homepage</a>
        <a href="overmij.php">Over mij</a>
        <a href="logout.php" class="div123">Logout</a>
        <li id="welcome"><?php  if(isset($_SESSION['username'])){
        echo "<a href='logout.php'>";
        echo "Welkom ";
        echo $_SESSION['username'];
        }else{ 
        echo '<a href="login.php">';
        echo 'Je bent niet ingelogd';
        }?></a></li>
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
                        $sql = "SELECT filmname, filmtext, datumschema FROM films ORDER BY datumschema DESC;";
                        $result = $conn-> query($sql);
                        
                        $conn -> close();
                    ?>
                    <h2>Top 3 Nieuwe films</h2>
                        <?php
                        if ($result -> num_rows > 0){
                            $counter = 0;
                            while($row = $result-> fetch_assoc() and ($counter < 3)){
                                echo "<div class='fakeimg'>";
                                echo "<h2>".$row["filmname"] ."</h2>
                                <p>".$row["filmtext"]."</p>
                                <p>" .$row["datumschema"] ."</p>";
                                echo "</div>";
                                $counter++;
                            }
                        }
                        else{
                            echo "0 Result";
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="rightcolumn">
            <?php
                    
                    
                    $conn = mysqli_connect("$dbhost", "$dbroot", "$dbww", "$dbname");
                        $sql = "SELECT title, articles.id, serie, tekstvak, datum, films.datumschema FROM articles INNER JOIN films on articles.id = films.id ORDER BY datum DESC";
                        $result = $conn-> query($sql);
                        $conn -> close();
                
                if(isset($_POST['button1'])){
                    liked();
                }
                
                if(isset($_POST['button2'])){
                    disliked();
                }
                        
                function liked(){
                    $dbhost = "localhost";
                    $dbroot = "id17176924_root";
                    $dbww = "cKWw]H8Nu4+piGwW";
                    $dbname = "id17176924_fullstackproject";
                    
                    $conn = mysqli_connect("$dbhost", "$dbroot", "$dbww", "$dbname");
                    
                    $userid = $_SESSION["userid"];
                    
                    $sql1 = "SELECT user_id, film_id, liked FROM likes WHERE user_id = ".$userid." AND film_id = ".$_POST['film_id']."";
                    $unliked = "INSERT INTO likes (user_id, film_id, liked) VALUES (".$userid.", ".$_POST['film_id'].", '1')";
                    $delete = "DELETE FROM `likes` WHERE `user_id` = ".$userid." AND `film_id` = ".$_POST['film_id']."";
                    $result1 = $conn-> query($sql1);
                    
                    if($result1 -> num_rows > 0){
                        $conn->query($delete);
                    }else{
                        $conn-> query($unliked);
                    }
                }
                
                function disliked(){
                    $dbhost = "localhost";
                    $dbroot = "id17176924_root";
                    $dbww = "cKWw]H8Nu4+piGwW";
                    $dbname = "id17176924_fullstackproject";
                    
                    $conn = mysqli_connect("$dbhost", "$dbroot", "$dbww", "$dbname");
                    
                    $userid = $_SESSION["userid"];
                    
                    $sql1 = "SELECT user_id, film_id, liked FROM likes WHERE user_id = ".$userid." AND film_id = ".$_POST['film_id']."";
                    $undisliked = "INSERT INTO likes (user_id, film_id, liked) VALUES (".$userid.", ".$_POST['film_id'].", '0')";
                    $delete = "DELETE FROM `likes` WHERE `user_id` = ".$userid." AND `film_id` = ".$_POST['film_id']."";
                    $result1 = $conn-> query($sql1);
                    
                    if($result1 -> num_rows > 0){
                        $conn->query($delete);
                    }else{
                        $conn-> query($undisliked);
                    }
                }
                
                        if ($result -> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<div class='card'>";
                                echo "<h2>".$row["title"] ."</h2><br><h4>" .$row["serie"] ."</h4><br><h4>" .$row["tekstvak"] ."</h4><br><p>" .$row["datumschema"] ."</p>";
                                echo '<form method="post"><input type="hidden" name="film_id" value="'.$row["id"].'"/><input id="upvote" type="submit" name="button1" value= "▲"/></form>';
                                echo '<form method="post"><input type="hidden" name="film_id" value="'.$row["id"].'"/><input id="downvote" type="submit" name="button2" value= "▼"/></form>';
                                echo "</div>";
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

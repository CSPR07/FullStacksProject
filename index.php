<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial;
            padding: 10px;
            background-image: url("img/portal.png");
            background-repeat: repeat;
        }

        .header {
            padding: 30px;
            text-align: center;
            background: white;
        }

        .header h1 {
            font-size: 50px;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: white;
        }

        .leftcolumn {
            float: left;
            width: 74%;
        }

        .rightcolumn {
            float: left;
            width: 24%;
            padding-left: 20px;

        }

        .fakeimg {
            background-color: #aaa;
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
            background: #ddd;
            margin-top: 20px;
            padding-top: 10px;
            background-color: white;
            text-align: center;
        }


        @media screen and (max-width: 800px) {
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
</head>
<body>
<div class="wrap">
    <div class="header">
        <h1>Watchlist hulp</h1>
        <p>Deze website is bedoelt om alle series die je gekeken hebt op een rijtje te krijgen</p>
    </div>

    <div class="topnav responsive" id="myTopnav">
        <a href="index.php" class="active">Home</a>
        <a href="login.php">Login</a>
        <a href="logout.php">Logout</a>
        <a href="register.php">Register</a>
        </a>
    </div>
    <div class="row">

        <div class="leftcolumn">

            <div class="card">
                <?php
                $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                $sql = "SELECT title, serie, tekstvak, datum FROM articles WHERE id = 1;";
                $result = $conn-> query($sql);

                if ($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                    }
                }
                else{
                    echo "0 Result";
                }

                $conn -> close();
                ?>
            </div>

            <div class="card">
                <?php
                $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                $sql = "SELECT title, serie, tekstvak, datum FROM articles WHERE id = 2;";
                $result = $conn-> query($sql);

                if ($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                    }
                }
                else{
                    echo "0 Result";
                }

                $conn -> close();
                ?>
            </div>

            <div class="card">
                <?php
                $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                $sql = "SELECT title, serie, tekstvak, datum FROM articles WHERE id = 3;";
                $result = $conn-> query($sql);

                if ($result -> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        echo "<h2>".$row["title"] ."</h2><br><h5>" .$row["serie"] ."</h5><br><h5>" .$row["tekstvak"] ."</h5><br><p>" .$row["datum"] ."</p>";
                    }
                }
                else{
                    echo "0 Result";
                }

                $conn -> close();
                ?>
            </div>
        </div>

        <div class="rightcolumn">
            <div class="films">
                <div class="card">
                    <h2>Top 3 Nieuwe films</h2>
                    <div class="fakeimg">
                        <?php
                        $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                        $sql = "SELECT filmname, datumschema FROM films WHERE id = 1;";
                        $result = $conn-> query($sql);

                        if ($result -> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2><p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }

                        $conn -> close();
                        ?>
                    </div>
                    <div class="fakeimg">
                        <?php
                        $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                        $sql = "SELECT filmname, datumschema FROM films WHERE id = 2;";
                        $result = $conn-> query($sql);

                        if ($result -> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2><p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }

                        $conn -> close();
                        ?>
                    </div>
                    <div class="fakeimg">
                        <?php
                        $conn = mysqli_connect("localhost", "id17176924_root", "cKWw]H8Nu4+piGwW", "id17176924_fullstackproject");
                        $sql = "SELECT filmname, datumschema FROM films WHERE id = 3;";
                        $result = $conn-> query($sql);

                        if ($result -> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                                echo "<h2>".$row["filmname"] ."</h2><p>" .$row["datumschema"] ."</p>";
                            }
                        }
                        else{
                            echo "0 Result";
                        }

                        $conn -> close();
                        ?>
                    </div>
                </div>
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

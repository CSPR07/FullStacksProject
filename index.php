<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
            background: #f1f1f1;
            background-image: url("img/portal.png");
            background-repeat: repeat;
            background-position-y: top;
            margin: 0;
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
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #33cc33;
            color: white;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {display: none;}
            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {position: relative;}
            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        .header {
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 50px;
        }

        .leftcolumn {
            float: left;
            width: 75%;
        }

        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        .fakeimg {
            width: 100%;
            padding: 20px;
            border-color: white;
            border-width: 1px;
        }

        .card {
            padding: 20px;
            margin-top: 100px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }


        .leftcolumn, .rightcolumn {
            width: 100%;
            padding: 0;
        }

        @media screen and (max-width: 400px) {
            .wrap{
                display: inline-block;
                align-items: start;
            }
        }

        .films{
            background-color: white;
        }

        .wrap{
            background-color: #f1f1f1;
            position: center;
            width: 70%;
            opacity: 96%;
            margin-left: 15%;
            margin-right: 15%;
        }

        .footer {
            border-top: 1px black solid;
            position: static;
            width: 100%;
            color: black;
            text-align: left;
            padding: 25px;
            padding-bottom: 5px;
            padding-top: 100px;
            opacity: 50%;
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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="row">

        <div class="rightcolumn">
            <div class="films">
                <div class="card">
                    <h2>Top 3 Nieuwe films</h2>
                    <div class="fakeimg">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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
                        $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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
                        $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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

        <div class="leftcolumn">

            <div class="card">
                <?php
                $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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
                $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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
                $conn = mysqli_connect("localhost", "root", "R@ps@c2307", "fullstackproject");
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
    <div class="footer">
        <h4>Heb jij nog nieuws dat er niet staat, neem dan contact op met mij!</h4>
        <h5>Contact informatie    <br>--------------------------------------------------------<br>
            Email: ditiseenfakeemail@outluuk.com <br> Telefoon: 0612345678 <br> Fax: nee</h5>
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

</body>
</html>

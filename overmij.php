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

.rightcolumn {
  float: left;
  width: 100%;
  
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
<body>
<div class="wrap">
    <div class="header">
        <h1>Watchlist hulp</h1>
        <p>Deze website is bedoelt om alle series die je gekeken hebt op een rijtje te krijgen</p>
    </div>

    <div class="topnav responsive" id="myTopnav">
        <a href="index.php" class="active">Homepage</a>
        <a href="overmij.php">Over mij</a>
        </a>
    </div>
    <div class="row">
        <div class="rightcolumn">
            <div class="card">
                <h2>Dingen die ik graag doe</h2>
			<img src="https://i.pinimg.com/originals/68/5f/ef/685fefb76bb493a0b0ac212e8fb6f0cf.jpg">
			<img src="https://www.netflix-nederland.nl/wp-content/uploads/2019/06/Lucifer-Netflix-seizoen-5.jpg">
			<img src="https://cdn.myanimelist.net/images/anime/5/17407.jpg">
		<h2>Over mij</h2>
			<p>Mijn naam is Caspar. Ik woon in Almere-buiten, nederland.
			De leukste dingen die ik vind om te doen zijn Gamen, 
			naar muziek luisteren en series kijken (dus ook Animé).
			Dit zijn ook activiteiten die ik elke dag wel doe, omdat ik ze zo leuk vind
			Later wil ik ook graag game developer worden omdat ik dan ook mijn hobby's kan combineren
			Ik ben vergeetachtig, aardig, kan goed in een team werken en ik ben lomp.
			Gewoon een paar dingen over mij :)</p>
			<h2>Favorite Animé/Series</h2>
			<ul>
				<li>Black clover</li>
				<li>Naruto Shippuden</li>
				<li>Lucifer</li>
			</ul>
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

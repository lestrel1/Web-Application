<!DOCTYPE html>
<html>
	<head>
		<title> Reioc Web Application</title>
		<style type="text/css">
			/* header 1 */
			h1 {font-family:"Verdana"; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:"Verdana"; font-size: 10pt; text-align: center;}

            h2 {font-family:"Verdana"; font-size: 24pt; text-align: center; margin-top: 12%;}

			body {font-family:"Verdana"; background-color: lightgray;}

			/* p --> buttons  
            */  
            p {display: flex; justify-content: center; align-items: center;}
            input[type="submit"] {font-family: "Verdana"; border: thin solid; border-radius: 0.1cm; font-size: 30pt; width: 450px}
            input.submit2[type="submit"] {font-family: "Verdana"; text-align: center; border: thin solid; border-radius: 0.1cm; font-size: 15pt;width: 140px}
            input.submit3[type="submit"] {font-family: "Verdana"; text-align: center; border: thin solid; border-radius: 0.1cm; font-size: 10pt;width: 140px}

            /*body {background-image: url('Image.jpg'); filter: blur(10px);}*/

            .background {position: absolute; height: 95%; width: 100%; background-image: url("Image.jpg"); background-size: cover; 
            background-position: center; filter: blur(10px); z-index: -1; }  

            p.author {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            p.course {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}

		</style>
	</head>
	<body>
        <div class="background" style="background-image: url('Image.jpg');"></div>
		<!-- header 1 -->
		<h1> Reioc Company </h1>
        <p class="subphrase"> Gravesite & Cemetery Care Services </p>
		<hr>
		<form method="post" action="Reioc-Form.php">

            <h2> Welcome To Our Online Service! </h2><br></br>
            <!-- Button 1 -->
				<p>
 					<input class="submit" type="submit" name="submit" value="Become a Customer">
				</p>
        </form>
        <form method="post" action="Reioc-AboutUs.php">
            <!-- Button 2 -->
                <p>
 					<input class="submit2" type="submit" name="aboutUs" value="About Us">
				</p>
        </form>
        <br></br><br></br>
        </form><br></br><br></br><br></br>
        <hr>
        <p class="author"> By: Loraine Estrella De Leon </p> 
        <p class="course"> Computer Science 424 Database Management Systems </p>

	</body>
</html>
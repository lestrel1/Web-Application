<!DOCTYPE html>
<html>
	<head>
		<title> Reioc Web Application</title>
		<style type="text/css">
			/* header 1 */
			h1 {font-family:"Verdana"; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:"Verdana"; font-size: 10pt; text-align: center;}

			/* header 2 */ /* header 3 */
			h2 {font-family:"Verdana"; font-size: 15pt; text-align: center;}
            h3 {font-family:"Verdana"; font-size: 15pt; text-align: center;}

			h4 {font-family:"Verdana"; font-size: 20pt;}

            p.author {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            p.course {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}

			body {font-family:"Verdana";}
			/* td,th {padding:5px;} background-color: lightsteelblue; */

			/* table1 */

			table.table1 [class="zip"]{width: 60px;}
            table.table1 {text-align: left; display: flex; justify-content: center; 
                align-items: center; margin-left: 25.5%; margin-right: 25.5%;}
            

			/* p --> buttons */

            p {display: flex; justify-content: center;}

            input[type="submit"] {font-family: "Verdana";text-align: center;width: 140px; 
                border: thin solid; border-radius: 0.1cm;font-size: 10pt; margin: 0 10px;}

            input[type="reset"] {font-family: "Verdana";text-align: center; width: 165px;
                border: thin solid; border-radius: 0.1cm;font-size: 10pt;margin: 0 10px;}  

            input.submit2[type="submit"] {font-family: "Verdana";text-align: center; width: 75px;
                border: thin solid; border-radius: 0.1cm;font-size: 10pt;margin: 0 10px;}  



                
            .background {position: absolute; height: 95%; width: 100%; 
                background-image: url("Image.jpg"); background-size: cover; 
                background-position: center; filter: blur(10px); z-index: -1; }     

		</style>
	</head>
	<body>

        <div class="background" style="background-image: url('Image.jpg');"></div>

		<!-- header 1 -->
		<h1> Reioc Company </h1>
        <p class="subphrase"> Gravesite & Cemetery Care Services </p>
        <form method="post" action="Reioc-FrontPage.php">
            <!-- Buttons -->
				<p>
 					<input class="submit2" type="submit" name="submit" value="Home">
				</p>
        </form>        
		<hr><h/>

		<!----------------- Customer Information Code! ----------------->

        
		<form method="post" action="Reioc-Process.php">
			<table class="table1">
				<!-- header 2 -->
                <br></br>
				<h2> Customer Information </h2>

			<!-- first and last name  -->
				<tr>
					<td id="information" > Customer First Name: </td>
					<td><input type="text" id="firstname" name="firstname" value=" " /> 
					</td>
				</tr>		

				<tr>
                    <td id="information" > Customer Last Name: </td>
                    <td><input type="text" id="lastname" name="lastname" value=" " /> 
					</td>
                </tr>	


                <tr>
                    <td id="information" > Email: </td>
                    <td><input type="text" id="email" name="email" value=" " /> 
					</td>
                </tr>

                <tr>
                    <td id="information" > Phone Number: </td>
                    <td><input type="text" id="phoneNum" name="phoneNum" value=" " /> 
					</td>
                </tr>

			<!-- address  -->
				<tr>
                    <td id="information" > Street: </td>
                    <td><input type="text" id="street" name="street" value=" " /> 
					</td>
                </tr>
				<tr>
                    <td id="information" > City: </td>
                    <td><input type="text" id="city" name="city" value=" " /> 
					</td>
                </tr>
				<tr>
                    <td id="information"> State: </td>
                    <td><select name="states">
						<option value=" "></option>
                        <option value="Alabama">Alabama</option>
						<option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
						<option value="California">California</option>
						<option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
						<option value="Delaware">Delaware</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
						<option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
						<option value="Kentucky">Kentucky</option>
						<option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
						<option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
						<option value="Minnesota">Minnesota</option>
						<option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
						<option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
						<option value="New Hampshire">New Hampshire</option>
						<option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
						<option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
						<option value="Ohio">Ohio</option>
						<option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
						<option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
						<option value="South Dakota">South Dakota</option>
						<option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
						<option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
						<option value="Virginia">Virginia</option>
						<option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    	</select>
                    </td>    
                </tr>
				<tr>
                    <td id="information" > Zip Code: </td>
					<td><input type="text" id="zip" name="zip" class="zip" value=" " /></td>
                </tr>	
			</table>
                                    <!-- Buttons -->
                <br></br>      
                <br></br>                     
				<p>
 					<input class="submit" type="submit" name="submit" value="Submit your Order">
  					<input class="reset" type="reset" name="reset" value="Reset your Order Form">
                </p>

        </form>
        <br></br>      
        <br></br>   
        <br></br>    
        <br></br> 
        <br></br>        
		<hr>
        <p class="author"> By: Loraine Estrella De Leon </p> 
        <p class="course"> Computer Science 424 Database Management Systems </p>


        <script>
        function validateForm() {
            var form = document.getElementById("customerForm");
            var elements = form.elements;
            var isValid = true;

            for (var i = 0; i < elements.length; i++) {
                if (elements[i].type !== "submit" && elements[i].type !== "reset") {
                    if (elements[i].value.trim() === "") {
                        isValid = false;
                        showErrorMessage("All fields are required");
                        break;
                    }
                }
            }

            return isValid;
        }

        function showErrorMessage(message) {
            var errorDiv = document.getElementById("errorMessage");

            if (!errorDiv) {
                errorDiv = document.createElement("div");
                errorDiv.id = "errorMessage";
                errorDiv.className = "error-message";
                document.getElementById("customerForm").insertBefore(errorDiv, document.getElementById("customerForm").firstChild);
            }

            errorDiv.innerHTML = message;
        }
    </script>
	</body>
</html>
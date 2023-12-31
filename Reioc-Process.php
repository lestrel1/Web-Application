<!DOCTYPE html>
	<html>
	<head>
		<style type='text/css'>

            h1 {font-family:'Verdana'; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:'Verdana'; font-size: 10pt; text-align: center;}     

			h2 {font-family:'Verdana'; font-size: 15pt;}
            h3 {font-family:'Verdana'; font-size: 15pt; text-align: center;}

			body {font-family:'Verdana';}

            /* table2 --> box */
            table.table2 {margin-top:0.5cm; border: 1px solid;}
			table.table2 td,th {border-style:solid; padding:5px; border-width: thin;}
			table.table2 [class='title'] {text-align:center; font-weight: bold;}
			table.table2 [type='text'] {width: 35px;}
			table.table2 .totalPrice::before {content:'$ ';}
			table.table2 [class='totalPrice'] {text-align:right; width: 60px;}
            table.table2 {font-family:'Verdana'; font-size: 9pt;}    
            table.table2 {text-align: center; display: flex; justify-content: center; 
                align-items: center; margin-left: 38.5%; margin-right: 38.5%;}


                /* table3 --> box */
            table.table3 {margin-top:0.5cm; border: 1px solid;}
			table.table3 td,th {border-style:solid; padding:5px; border-width: thin;}
			table.table3 [class='title'] {text-align:center; font-weight: bold;}
			table.table3 [type='text'] {width: 35px;}
			table.table3 .totalPrice::before {content:'$ ';}
			table.table3 [class='totalPrice'] {text-align:right; width: 60px;}
            table.table3 {font-family:'Verdana'; font-size: 9pt;}    
            table.table3 {text-align: center; display: flex; justify-content: center; 
                align-items: center; margin-left: 36%; margin-right: 36%;}
			


            p {display: flex; justify-content: center;}

            input.submit2[type='submit'] {font-family: 'Verdana';text-align: center; width: 75px;
                border: thin solid; border-radius: 0.1cm;font-size: 10pt;margin: 0 10px;}   

                
            .background {position: absolute; height: 190%; width: 100%; 
                background-image: url('Image.jpg'); background-size: cover; 
                background-position: center; filter: blur(10px); z-index: -1; }     

            p.author {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            p.course {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
   

		</style>
        <script>
            // JavaScript for improving page layout
            document.addEventListener('DOMContentLoaded', function () {
                // Center the header and subphrase
                var header = document.querySelector('h1');
                var subphrase = document.querySelector('.subphrase');
                header.style.margin = '0';
                subphrase.style.margin = '0';
                header.style.marginTop = '10%';

                // Center the order confirmation heading
                var orderHeading = document.querySelector('h2');
                orderHeading.style.textAlign = 'center';
                orderHeading.style.marginTop = '1%';

                // Center the background
                var background = document.querySelector('.background');
                background.style.top = '0';

                // Center the form
                var form = document.querySelector('form');
                form.style.margin = 'auto';
                form.style.maxWidth = '800px';
                form.style.padding = '20px';
                form.style.backgroundColor = 'white';
                form.style.borderRadius = '10px';
                form.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';

                // Adjust button styles
                var buttons = document.querySelectorAll('input[type="submit"]');
                buttons.forEach(function (button) {
                    button.style.margin = '10px';
                });

                // Position the author and course information
                var author = document.querySelector('.author');
                var course = document.querySelector('.course');
                author.style.margin = '20px 0';
                course.style.margin = '10px 0';
            });
    </script>
	</head>
	<body>

        <div class='background' style="background-image: url('Image.jpg');"></div>

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
    </body>            
	</html>
        
        <br></br>        
		<h2> Order Confirmation </h2>
		<?php
        	error_reporting(E_ALL);
            ini_set('display_errors', 1);
        
			if (isset($_POST['submit'])) {

			    $orderType = false;


                $FirstName = isset($_POST['firstname']) ? $_POST['firstname'] : '';
                $LastName = isset($_POST['lastname']) ? $_POST['lastname'] : '';
                $Street = isset($_POST['street']) ? $_POST['street'] : '';
                $State = isset($_POST['states']) ? $_POST['states'] : '';
                $City = isset($_POST['city']) ? $_POST['city'] : '';
                $zipCode = isset($_POST['zip']) ? $_POST['zip'] : '';
                $Email = isset($_POST['email']) ? $_POST['email'] : '';
                $CPhoneNum = isset($_POST['phoneNum']) ? $_POST['phoneNum'] : '';
                $CAddress = $Street . $City . $State  . $zipCode;
                $CustomerID = 0;


                    $quantity1 = 0;
                    $quantity2 = 0;
                    $quantity3 = 0;
                    $quantity4 = 0;
                    $quantity5 = 0;
                    $quantity6 = 0;
                    $quantity7 = 0;
                    $quantity8 = 0;
                    $quantity9 = 0;
                    $quantity10 = 0; 
                    $quantity11 = 0;
                    $quantity12 = 0;
                    $quantity13 = 0;
                    $quantity14 = 0;
                    $quantity15 = 0;
                    $quantity16 = 0;
                    $quantity17 = 0;
                    $quantity18 = 0;
                    $quantity19 = 0;
                    $quantity20 = 0;
                    $quantity21 = 0;
                    $quantity22 = 0; 
                    $quantity23 = 0;
                    $quantity24 = 0;
                    $quantity25 = 0;
                    $quantity26 = 0;
                    $quantity27 = 0;

                    $quantity1 = $_POST['quantity1'] ?? 0;
                    $quantity2 = $_POST['quantity2'] ?? 0;  
                    $quantity3 = $_POST['quantity3'] ?? 0;
                    $quantity4 = $_POST['quantity4'] ?? 0;
                    $quantity5 = $_POST['quantity5'] ?? 0;
                    $quantity6 = $_POST['quantity6'] ?? 0;
                    $quantity7 = $_POST['quantity7'] ?? 0;  
                    $quantity8 = $_POST['quantity8'] ?? 0;
                    $quantity9 = $_POST['quantity9'] ?? 0;
                    $quantity10 = $_POST['quantity10'] ?? 0;
                    $quantity11 = $_POST['quantity11'] ?? 0;
                    $quantity12 = $_POST['quantity12'] ?? 0;
                    $quantity13 = $_POST['quantity13'] ?? 0;
                    $quantity14 = $_POST['quantity14'] ?? 0;
                    $quantity15 = $_POST['quantity15'] ?? 0;
                    $quantity16 = $_POST['quantity16'] ?? 0;  
                    $quantity17 = $_POST['quantity17'] ?? 0;
                    $quantity18 = $_POST['quantity18'] ?? 0;
                    $quantity19 = $_POST['quantity19'] ?? 0;
                    $quantity20 = $_POST['quantity20'] ?? 0; 
                    $quantity21 = $_POST['quantity21'] ?? 0;
                    $quantity22 = $_POST['quantity22'] ?? 0;
                    $quantity23 = $_POST['quantity23'] ?? 0;
                    $quantity24 = $_POST['quantity24'] ?? 0;
                    $quantity25 = $_POST['quantity25'] ?? 0; 
                    $quantity26 = $_POST['quantity26'] ?? 0;
                    $quantity27 = $_POST['quantity27'] ?? 0;

                $itemPrice1 = $quantity1 * 150;
				$itemPrice2 = $quantity2 * 200;
				$itemPrice3 = $quantity3 * 100;
				$itemPrice4 = $quantity4 * 70;
				$itemPrice5 = $quantity5 * 1200;
                $itemPrice6 = $quantity6 * 1700;
				$itemPrice7 = $quantity7 * 2700;
				$itemPrice8 = $quantity8 * 60;
				$itemPrice9 = $quantity9 * 3000;
				$itemPrice10 = $quantity10 * 150;
                $itemPrice11 = $quantity11 * 50;
				$itemPrice12 = $quantity12 * 500;
				$itemPrice13 = $quantity13 * 800;
				$itemPrice14 = $quantity14 * 3000;
				$itemPrice15 = $quantity15 * 1500;
                $itemPrice16 = $quantity16 * 2500;
				$itemPrice17 = $quantity17 * 400;
				$itemPrice18 = $quantity18 * 400;
				$itemPrice19 = $quantity19 * 150;
				$itemPrice20 = $quantity20 * 350;
                $itemPrice21 = $quantity21 * 20;
				$itemPrice22 = $quantity22 * 30;
				$itemPrice23 = $quantity23 * 300;
				$itemPrice24 = $quantity24 * 2500;
				$itemPrice25 = $quantity25 * 600;
                $itemPrice26 = $quantity26 * 200;
				$itemPrice27 = $quantity27 * 150;

                $OrderTotalPrice = $itemPrice1 + $itemPrice2 + $itemPrice3 + $itemPrice4 + $itemPrice5 
                + $itemPrice6 + $itemPrice7 + $itemPrice8 + $itemPrice9 + $itemPrice10 + $itemPrice11 + 
                $itemPrice12 + $itemPrice13 + $itemPrice14 + $itemPrice15 + $itemPrice16 + 
                $itemPrice17 + $itemPrice18 + $itemPrice19 + $itemPrice20 + $itemPrice21 + $itemPrice22 + 
                $itemPrice23 + $itemPrice24 + $itemPrice25 + $itemPrice26 + $itemPrice27;  
                

            

				$orderType = true;

				if ($orderType) {
                    $db = new mysqli('localhost', 'root', '', 'Reioc');
        
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    }
        
                    $cCheck = "SELECT CustomerID FROM customers WHERE FirstName='$FirstName' AND LastName='$LastName' AND CAddress='$CAddress'";
                    $result = $db->query($cCheck);
        
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $CustomerID = $row['CustomerID'];
                        echo "Welcome back $FirstName!<br>";
                        echo "<br>";

                    } 
                    else {
                            $addCSql = $db->prepare("INSERT INTO customers (FirstName, LastName, CAddress, Email, CPhoneNum) 
                                VALUES (?, ?, ?, ?, ?)");
                            
                            $addCSql->bind_param("sssss", $FirstName, $LastName, $CAddress, $Email, $CPhoneNum);
                        
        
                        $CAddress = substr($CAddress, 0, 100);
                        $zipCode = substr($zipCode, 0, 15);
        
                        try {
                            $addCSql->execute();
                            $CustomerID = $db->insert_id;
                            echo "Welcome to our store $FirstName! We have added you to our customer database.<br>";
                            echo "<br>";
                        } catch (mysqli_sql_exception $e) {
                            echo "Error adding customer: " . $e->getMessage() . "<br>";
                        }
        
                        $addCSql->close();
                    }
                    
                    $insertOrderSql = "INSERT INTO orders (CustomerID, OrderTotalPrice) 
                    VALUES ('$CustomerID', '$OrderTotalPrice')";
    
                    if ($db->query($insertOrderSql) === TRUE) {
                        echo "Thank you. Your order was submitted successfully!<br>";
                        echo "<br>";
                        echo "<br>";
                        echo "<hr>";
                    } 
                    else {
                        echo "Error inserting order: " . $db->error . "<br>";

                    } 
                    
                
                    echo "<br>";
					echo "<h3> Sales Report for All Orders </h3>";


                    echo "<table class='table3'>

						<tr class='title'>
                            <th> Customer ID </th>
                            <th> Customer </th>
                            <th> Date </th>
						    <th> Total Price </th>
            			</tr>

						<tr>
                            <td class='CustomerID' name='CustomerID'>$CustomerID</td> 
                            <td class='Customer' name='Customer'>$FirstName $LastName</td>
                            <td class='Date' name='Date'>". date("Y-m-d H:i:s") . "</td>
							<td class='OrderTotalPrice' name='OrderTotalPrice'>$OrderTotalPrice</td>
						</tr>

					</table>";
                    echo "<br>";

					echo "<table class='table2'>

                    <tr class='title'>
                        <th> QTY </th>
                        <th> Services </th>
                        <th> Price </th>
                    </tr>
                    
                    <tr>
                        <td class='quantity' type='text' name='quantity1'>$quantity1</td>
                        <td class='itemName' name='itemName1'> Care of memorials </td>
                        <td class='totalPrice' name='itemPrice1' value='itemPrice'>$itemPrice1</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity2'>$quantity2</td>
                        <td class='itemName' name='itemName2'> Maintaining grounds </td>
                        <td class='totalPrice' name='itemPrice2' value='itemPrice'>$itemPrice2</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity3'>$quantity3</td>
                        <td class='itemName' name='itemName3'> Grave liners & vaults </td>
                        <td class='totalPrice' name='itemPrice3' value='itemPrice'>$itemPrice3</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity4'>$quantity4</td>
                        <td class='itemName' name='itemName4'> Interment services </td>
                        <td class='totalPrice' name='itemPrice4' value='itemPrice'>$itemPrice4</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity5'>$quantity5</td>
                        <td class='itemName' name='itemName5'> Burial plots </td>
                        <td class='totalPrice' name='itemPrice5' value='itemPrice'>$itemPrice5</td>
                    </tr>
                    <!-- 1 -->
                    <tr>
                        <td class='quantity' type='text' name='quantity6'>$quantity6</td>
                        <td class='itemName' name='itemName6'> Grave openings and closings </td>
                        <td class='totalPrice' name='itemPrice6' value='itemPrice'>$itemPrice6</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity7'>$quantity7</td>
                        <td class='itemName' name='itemName7'> Grave markers and monuments </td>
                        <td class='totalPrice' name='itemPrice7' value='itemPrice'>$itemPrice7</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity8'>$quantity8</td>
                        <td class='itemName' name='itemName8'> Record keeping and sales </td>
                        <td class='totalPrice' name='itemPrice8' value='itemPrice'>$itemPrice8</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity9'>$quantity9</td>
                        <td class='itemName' name='itemName9'> Endowment care fund </td>
                        <td class='totalPrice' name='itemPrice9' value='itemPrice'>$itemPrice9</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity10'>$quantity10</td>
                        <td class='itemName' name='itemName10'> Grave decorations </td>
                        <td class='totalPrice' name='itemPrice10' value='itemPrice'>$itemPrice10</td>
                    </tr>
                    <!-- 2 -->
                    <tr>
                        <td class='quantity' type='text' name='quantity11'>$quantity11</td>
                        <td class='itemName' name='itemName11'> Grave locator services </td>
                        <td class='totalPrice' name='itemPrice11' value='itemPrice'> $itemPrice11</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity12'>$quantity12</td>
                        <td class='itemName' name='itemName12'> Religious accommodations </td>
                        <td class='totalPrice' name='itemPrice12' value='itemPrice'>$itemPrice12</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity13'>$quantity13</td>
                        <td class='itemName' name='itemName13'> Green burials </td>
                        <td class='totalPrice' name='itemPrice13' value='itemPrice'>$itemPrice13</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity14'>$quantity14</td>
                        <td class='itemName' name='itemName14'> Pet burials </td>
                        <td class='totalPrice' name='itemPrice14' value='itemPrice'>$itemPrice14</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity15'>$quantity15</td>
                        <td class='itemName' name='itemName15'> Indigent burials </td>
                        <td class='totalPrice' name='itemPrice15' value='itemPrice'>$itemPrice15</td>
                    </tr>
                    <!-- 3 -->
                    <tr>
                        <td class='quantity' type='text' name='quantity16'>$quantity16</td>
                        <td class='itemName' name='itemName16'> Cemetery restoration </td>
                        <td class='totalPrice' name='itemPrice16' value='itemPrice'> $itemPrice6</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity17'>$quantity17</td>
                        <td class='itemName' name='itemName17'> Gravesite photography </td>
                        <td class='totalPrice' name='itemPrice17' value='itemPrice'>$itemPrice17</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity18'>$quantity18</td>
                        <td class='itemName' name='itemName18'> Digital memorials </td>
                        <td class='totalPrice' name='itemPrice18' value='itemPrice'>$itemPrice18</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity19'>$quantity19</td>
                        <td class='itemName' name='itemName19'> Legacy history compilations </td>
                        <td class='totalPrice' name='itemPrice19' value='itemPrice'>$itemPrice19</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity20'>$quantity20</td>
                        <td class='itemName' name='itemName20'> Burial right Transfers </td>
                        <td class='totalPrice' name='itemPrice20' value='itemPrice'>$itemPrice20</td>
                    </tr>
                    <!-- 4 -->
                    <tr>
                        <td class='quantity' type='text' name='quantity21'>$quantity21</td>
                        <td class='itemName' name='itemName21'> Cemetery tours </td>
                        <td class='totalPrice' name='itemPrice21' value='itemPrice'>$itemPrice21</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity22'>$quantity22</td>
                        <td class='itemName' name='itemName22'> Online access portal </td>
                        <td class='totalPrice' name='itemPrice22' value='itemPrice'>$itemPrice22</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity23'>$quantity23</td>
                        <td class='itemName' name='itemName23'> Surname sections </td>
                        <td class='totalPrice' name='itemPrice23' value='itemPrice'>$itemPrice23</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity24'>$quantity24</td>
                        <td class='itemName' name='itemName24'> Private mausoleum estates </td>
                        <td class='totalPrice' name='itemPrice24' value='itemPrice'>$itemPrice24</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity25'>$quantity25</td>
                        <td class='itemName' name='itemName25'> Memorial benches and fixtures </td>
                        <td class='totalPrice' name='itemPrice25' value='itemPrice'>$itemPrice25</td>
                    </tr>
                    <!-- 5 -->
                    <tr>
                        <td class='quantity' type='text' name='quantity26'>$quantity26</td>
                        <td class='itemName' name='itemName26'> Memorial tree planting </td>
                        <td class='totalPrice' name='itemPrice26' value='itemPrice'>$itemPrice26</td>
                    </tr>
                    <tr>
                        <td class='quantity' type='text' name='quantity27'>$quantity27</td>
                        <td class='itemName' name='itemName27'> Casket/urn selection services </td>
                        <td class='totalPrice' name='itemPrice27' value='itemPrice'>$itemPrice27</td>
                </tr>
    
                </table>";
					

					$db->close(); 
				}
				else {
					echo "<p>No order information supplied.</p>";	
				}
                echo "<br>";
		        echo '<a href="Reioc-Form.php">Click here to submit another order</a>';

                echo "<br>";
                echo "<br>";
                echo "<hr>";
                echo "<p class='author'> By: Loraine Estrella De Leon </p> 
                <p class='course'> Computer Science 424 Database Management Systems </p>";
            }
        
		?>
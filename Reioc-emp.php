<!DOCTYPE html>
<html>
	<head>
		<title> Reioc Web Application</title>
		<style type="text/css">
			/* header 1 */
			h1 {font-family:"Verdana"; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:"Verdana"; font-size: 10pt; text-align: center;}
            h2 {font-family:"Verdana"; font-size: 15pt;}


			body {font-family:"Verdana"; background-color: lightgray;}

			/* p --> buttons  
            */  
            p {display: flex; justify-content: center; align-items: center;}
            input[type="submit"] {font-family: "Verdana"; border: thin solid; border-radius: 0.1cm; 
                font-size: 10pt; width: 165px}

            /*body {background-image: url('Image.jpg'); filter: blur(10px);}*/

            .background {position: absolute; height: 120%; width: 100%; background-image: url("Image.jpg"); 
                background-size: cover; background-position: center; filter: blur(10px); z-index: -1; }  

            p.author {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            p.course {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            h3 {font-family:"Verdana"; font-size: 15pt;}
            div.des {font-family:"Verdana"; font-size: 10pt;}

            /* table1 --> box */
			table.table1 {margin-top:0.5cm; border: 1px solid; text-align: center;
                font-family:"Verdana"; font-size: 9pt;}
			table.table1 td,th {border-style:solid; padding:5px; border-width: thin;}
			table.table1 [class="title"] {text-align:center; font-weight: bold;}
			table.table1 [type="text"] {width: 35px;} 
            table.table1 {text-align: center; display: flex; justify-content: center; 
                align-items: center; margin-left: 37.5%; margin-right: 37.5%;}

            h3 {font-family:"Verdana"; font-size: 15pt; text-align: center;}

            

		</style>
	</head>
	<body>
        <div class="background" style="background-image: url('Image.jpg');"></div>
		<!-- header 1 -->
		<h1> Reioc Company </h1>
        <p class="subphrase"> Gravesite & Cemetery Care Services </p>
        <form method="post" action="Reioc-Form.php">
                <p>
 					<input class="submit" type="submit" name="submit" value="Become a Customer">
				</p>
		<hr>
            <br></br>
            <h3> Our Employees </h3>		
			<table class="table1">

				<tr class="title">
                	<th> Name </th>
                	<th> Gender </th>
                    <th> Role Title </th>
                    <th> Department </th>
            	</tr>
				
                <tr>
                    <td class="emp" name="emp1"> Mary Sanders </td>
                	<td class="emp" name="emp1"> Female </td>
                    <td class="emp" name="emp1"> CEO </td>
                    <td class="emp" name="emp1"> 00 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp2"> Marcos Johns </td>
                	<td class="emp" name="emp2"> Male </td>
                    <td class="emp" name="emp2"> Investment Associate </td>
                    <td class="emp" name="emp2"> 09 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp3"> Chris Duarte </td>
                	<td class="emp" name="emp3"> Male </td>
                    <td class="emp" name="emp3"> Software Engineer </td>
                    <td class="emp" name="emp3"> 05 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp4"> Kate Guio </td>
                	<td class="emp" name="emp4"> Female </td>
                    <td class="emp" name="emp4"> Director </td>
                    <td class="emp" name="emp4"> 01 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp5"> Lina Reed </td>
                	<td class="emp" name="emp5"> Female </td>
                    <td class="emp" name="emp5"> Technician </td>
                    <td class="emp" name="emp5"> 02 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp6"> Noah Junior </td>
                	<td class="emp" name="emp6"> Female </td>
                    <td class="emp" name="emp6"> Assitant </td>
                    <td class="emp" name="emp6"> 03 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp7"> Oliver Johnson </td>
                	<td class="emp" name="emp7"> Male </td>
                    <td class="emp" name="emp7"> Specialist </td>
                    <td class="emp" name="emp7"> 04 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp8"> Benjamin Gavi </td>
                	<td class="emp" name="emp8"> Male </td>
                    <td class="emp" name="emp8"> Data Scientist </td>
                    <td class="emp" name="emp8"> 05 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp9"> Madison Liz </td>
                	<td class="emp" name="emp9"> Female </td>
                    <td class="emp" name="emp9"> Customer Representative </td>
                    <td class="emp" name="emp9"> 06 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp10"> Elijah Grayson </td>
                	<td class="emp" name="emp10"> Male </td>
                    <td class="emp" name="emp10"> Sales Representative </td>
                    <td class="emp" name="emp10"> 07 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp11"> Sophia Amado </td>
                	<td class="emp" name="emp11"> Female </td>
                    <td class="emp" name="emp11"> Associate </td>
                    <td class="emp" name="emp11"> 08 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp12"> David Pavel </td>
                	<td class="emp" name="emp12"> Male </td>
                    <td class="emp" name="emp12"> Specialist </td>
                    <td class="emp" name="emp12"> 010 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp13"> Gil Arnie </td>
                	<td class="emp" name="emp13"> Male </td>
                    <td class="emp" name="emp13"> Graveyard Guardian </td>
                    <td class="emp" name="emp13"> 011 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp14"> Boba Mellin </td>
                	<td class="emp" name="emp14"> Female </td>
                    <td class="emp" name="emp14"> Graveyard Guardian </td>
                    <td class="emp" name="emp14"> 011 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp15"> Sariq Dajuan </td>
                	<td class="emp" name="emp15"> Male </td>
                    <td class="emp" name="emp15"> Asset Manager </td>
                    <td class="emp" name="emp15"> 09 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp16"> Milly Adora </td>
                	<td class="emp" name="emp16"> Female </td>
                    <td class="emp" name="emp16"> Accounting </td>
                    <td class="emp" name="emp16"> 09 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp17"> Wren Penny </td>
                	<td class="emp" name="emp17"> Male </td>
                    <td class="emp" name="emp17"> Specialist </td>
                    <td class="emp" name="emp17"> 010 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp18"> Flo Bambie </td>
                	<td class="emp" name="emp18"> Male </td>
                    <td class="emp" name="emp18"> Graveyard Guardian </td>
                    <td class="emp" name="emp18"> 011 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp19"> Dori Miyondette </td>
                	<td class="emp" name="emp19"> Female </td>
                    <td class="emp" name="emp19"> Graveyard Guardian </td>
                    <td class="emp" name="emp19"> 011 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp20"> Mignon Niu </td>
                	<td class="emp" name="emp20"> Male </td>
                    <td class="emp" name="emp20"> HR Manager </td>
                    <td class="emp" name="emp20"> 012 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp21"> Fr Achilles Brantley </td>
                	<td class="emp" name="emp21"> Male </td>
                    <td class="emp" name="emp21"> Priest </td>
                    <td class="emp" name="emp21"> 012 </td>
				</tr>

                <tr>
                    <td class="emp" name="emp22"> Fr Kai Maverick </td>
                	<td class="emp" name="emp22"> Male </td>
                    <td class="emp" name="emp22"> Priest </td>
                    <td class="emp" name="emp22"> 012 </td>
				</tr>


            </table>
        </form>
        <hr>
        <p class="author"> By: Loraine Estrella De Leon </p> 
        <p class="course"> Computer Science 424 Database Management Systems </p>
        
        
        <script>
            function validateForm() {
                
                alert("Thank you for expressing your interest! We'll get in touch with you soon.");
                return true;
            }

            function toggleBlur() {
                var background = document.querySelector('.background');
                background.classList.toggle('blur');
            }
        </script>
	</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title> Reioc Web Application</title>
		<style type="text/css">
			/* header 1 */
			h1 {font-family:"Verdana"; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:"Verdana"; font-size: 10pt; text-align: center;}
            h2 {font-family:"Verdana"; font-size: 15pt; text-align: center;}


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
            h3 {font-family:"Verdana"; font-size: 15pt; text-align: center;}
            div.des {font-family:"Verdana"; font-size: 10pt; text-align: center;}

            /* table1 --> box */
			table.table1 {margin-top:0.5cm; border: 1px solid; text-align: center;
                font-family:"Verdana"; font-size: 9pt;}
			table.table1 td,th {border-style:solid; padding:5px; border-width: thin;}
			table.table1 [class="title"] {text-align:center; font-weight: bold;}
			table.table1 [type="text"] {width: 35px;} 
            table.table1 {text-align: center; display: flex; justify-content: center; 
                align-items: center; margin-left: 38.5%; margin-right: 38.5%;}

            h3 {font-family:"Verdana"; font-size: 15pt; position: absolute; top: 198px; right: 455px;}
            

		</style>
	</head>
	<body>
        <div class="background" style="background-image: url('Image.jpg');"></div>
		<!-- header 1 -->
		<h1> Reioc Company </h1>
        <p class="subphrase"> Gravesite & Cemetery Care Services </p>
        <form method="post" action="Reioc-emp.php">
                <p>
 					<input class="submit" type="submit" name="submit" value="Our Employees">
				</p>
		<hr>
        <br></br>
                <h2> Our Purpose </h2> 
                <div class="des">
                - Offer gravesite or cemetery care service <br></br>
                - Intercede and help those who can't make it to the cemetery <br></br>
                - Provide support, respect, and facilitate <br></br>
                - Let others know that people who die were and still are important <br></br>
                - All is to honor the deceased and bring their family peace and comfort
                </div> <br></br>

            <h2> Our Departments </h2>		
			<table class="table1">

				<tr class="title">
                	<th> Name </th>
                    <th> Department </th>
                	<th> Office </th>
                    <th> Phone Number </th>
            	</tr>
				
				<tr>
                    <td class="dept" name="dept1"> All Departments </td>
                    <td class="dept" name="dept1"> 00 </td>
                	<td class="dept" name="dept1"> #101 </td>
                    <td class="dept" name="dept1"> 401-311-1000 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept2"> Marketing </td>
                    <td class="dept" name="dept2"> 01 </td>
                	<td class="dept" name="dept2"> #102 </td>
                    <td class="dept" name="dept2"> 401-311-1020 </td>
				</tr>
                <tr>
                    <td class="dept" name="dept3"> Engineering </td>
                    <td class="dept" name="dept3"> 02 </td>
                	<td class="dept" name="dept3"> #103 </td>
                    <td class="dept" name="dept3"> 401-311-1030 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept4"> Operations management </td>
                    <td class="dept" name="dept4"> 03 </td>
                	<td class="dept" name="dept4"> #104 </td>
                    <td class="dept" name="dept4"> 401-311-1040 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept5"> Quality Assurance </td>
                    <td class="dept" name="dept5"> 04 </td>
                	<td class="dept" name="dept5"> #105 </td>
                    <td class="dept" name="dept5"> 401-311-1050 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept6"> Technology </td>
                    <td class="dept" name="dept6"> 05 </td>
                	<td class="dept" name="dept6"> #106 </td>
                    <td class="dept" name="dept6"> 401-311-1060 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept7"> Customer Service </td>
                    <td class="dept" name="dept7"> 06 </td>
                	<td class="dept" name="dept7"> #107 </td>
                    <td class="dept" name="dept7"> 401-311-1070 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept8"> Sales </td>
                    <td class="dept" name="dept8"> 07 </td>
                	<td class="dept" name="dept8"> #108 </td>
                    <td class="dept" name="dept8"> 401-311-1080 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept9"> Administration </td>
                    <td class="dept" name="dept9"> 08 </td>
                	<td class="dept" name="dept9"> #109 </td>
                    <td class="dept" name="dept9"> 401-311-1090 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept10"> Finance </td>
                    <td class="dept" name="dept10"> 09 </td>
                	<td class="dept" name="dept10"> #110 </td>
                    <td class="dept" name="dept10"> 401-311-1010 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept11"> Purchasing </td>
                    <td class="dept" name="dept11"> 010 </td>
                	<td class="dept" name="dept11"> #111 </td>
                    <td class="dept" name="dept11"> 401-311-1011 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept12"> Production </td>
                    <td class="dept" name="dept12"> 011 </td>
                	<td class="dept" name="dept12"> #112 </td>
                    <td class="dept" name="dept12"> 401-311-1012 </td>
				</tr>

                <tr>
                    <td class="dept" name="dept13"> Human Resources </td>
                    <td class="dept" name="dept13"> 012 </td>
                	<td class="dept" name="dept13"> #113 </td>
                    <td class="dept" name="dept13"> 401-311-1013 </td>
				</tr>
            </table>
             
        </form>
        <hr>
        <p class="author"> By: Loraine Estrella De Leon </p> 
        <p class="course"> Computer Science 424 Database Management Systems </p>

	</body>
</html>
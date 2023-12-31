<!DOCTYPE html>
<html>
	<head>
		<title> Reioc Web Application</title>
		<style type="text/css">
			/* header 1 */
			h1 {font-family:"Verdana"; font-size: 24pt; text-align: center;}
            p.subphrase {font-family:"Verdana"; font-size: 10pt; text-align: center;}

			/* header 2 */ /* header 3 */
			h2 {font-family:"Verdana"; font-size: 15pt;}
            h3 {font-family:"Verdana"; font-size: 15pt; text-align: center;}

			h4 {font-family:"Verdana"; font-size: 20pt;}

            p.author {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}
            p.course {font-family:"Verdana"; font-size: 8.5pt; text-align: center;}

			body {font-family:"Verdana";}
			/* td,th {padding:5px;} background-color: lightsteelblue; */

			/* table1 */

			table.table1 [class="boxsize"]{width: 60px;}

			/* table2 --> box */
			table.table2 {margin-top:0.5cm; border: 1px solid;}
			table.table2 td,th {border-style:solid; padding:5px; border-width: thin;}
			table.table2 [class="title"] {text-align:center; font-weight: bold;}
			table.table2 [type="text"] {width: 35px;}
			table.table2 .totalPrice::before {content:'$ ';}
			table.table2 [class="totalPrice"] {text-align:right; width: 60px;}
            table.table2 {font-family:"Verdana"; font-size: 9pt;}    
            table.table2 {text-align: center; display: flex; justify-content: center; 
                align-items: center; margin-left: 25.5%; margin-right: 25.5%;}
            

			/* p --> buttons */

            p {display: flex; justify-content: center;}

            input[type="submit"] {font-family: "Verdana";text-align: center;width: 140px; 
                border: thin solid; border-radius: 0.1cm;font-size: 10pt; margin: 0 10px;}

            input[type="reset"] {font-family: "Verdana";text-align: center; width: 165px;
                border: thin solid; border-radius: 0.1cm;font-size: 10pt;margin: 0 10px;}  

            input.submit2[type="submit"] {font-family: "Verdana";text-align: center; width: 75px;
                border: thin solid; border-radius: 0.1cm;font-size: 10pt;margin: 0 10px;}   

                
            .background {position: absolute; height: 350%; width: 100%; 
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

        
		<form method="post" action="Reioc-Cus.php">

		<!----------------- Order Information Code! ----------------->
            <br></br>
			<h3> Order Information </h3>		
			<table class="table2">

				<tr class="title">
                	<th> QTY </th>
                	<th> Services </th>
                    <th> Description </th>
                	<th> Price </th>
            	</tr>
				
				<tr>
                	<td class="quantity"><input type="text" name="quantity1" value="0" /></td>
                	<td class="itemName" name="itemName1"> Care of memorials </td>
                    <td class="itemName" name="itemName1"> 
                        Cleaning and preserving existing headstones, monuments, and other memorial <br></br>
                        markers/structures including statues and plaques. May involve repairs. </td>
					<td class="totalPrice" name="itemPrice1" value="itemPrice"> 150</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity2" value="0" /></td>
                	<td class="itemName" name="itemName2"> Maintaining grounds </td>
                    <td class="itemName" name="itemName2"> 
                        Year-round upkeep of cemetery landscapes, roads, facilities, and infrastructure. <br></br>
                        This includes mowing, pruning, snow removal, trash removal, repairs, etc. </td>
					<td class="totalPrice" name="itemPrice2" value="itemPrice"> 200</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity3" value="0" /></td>
                	<td class="itemName" name="itemName3"> Grave liners & vaults </td>
                    <td class="itemName" name="itemName3"> 
                        Offering protective caskets, liners, and vaults made of materials like <br></br>
                        concrete to place the coffin in for more secure interment. </td>
					<td class="totalPrice" name="itemPrice3" value="itemPrice"> 100</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity4" value="0" /></td>
                	<td class="itemName" name="itemName4"> Interment services </td>
                    <td class="itemName" name="itemName4"> 
                        Coordinating with funeral homes, families, and other parties for burial ceremonies. <br></br>
                        Staff oversee any rituals, prayers, flowers and more at the grave site. </td>
					<td class="totalPrice" name="itemPrice4" value="itemPrice"> 70</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity5" value="0" /></td>
                	<td class="itemName" name="itemName5"> Burial plots </td>
                    <td class="itemName" name="itemName5"> 
                        This involves selling plots of land for burying casketed remains or cremated remains (ashes). <br></br>
                        The business handles documentation, coordinates with local regulations, and maintains the grounds. </td>
					<td class="totalPrice" name="itemPrice5" value="itemPrice"> 1200</td>
				</tr>
                <!-- 1 -->
                <tr>
                	<td class="quantity"><input type="text" name="quantity6" value="0" /></td>
                	<td class="itemName" name="itemName6"> Grave openings and closings </td>
                    <td class="itemName" name="itemName6"> 
                        Preparing the grave site by digging and securing the <br></br>
                        perimeter, setting up lowering devices, receiving the casketed remains, properly <br></br>
                        interring the casket, refilling the grave, installing any vaults, and cleaning up. </td>
					<td class="totalPrice" name="itemPrice6" value="itemPrice"> 1700</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity7" value="0" /></td>
                	<td class="itemName" name="itemName7"> Grave markers and monuments </td>
                    <td class="itemName" name="itemName7"> 
                        Providing, engraving, and installing flat or upright <br></br>
                        headstones, monuments, plaques, etc. to memorialize the deceased. <br></br>
                        This includes onsultation on materials, inscriptions, and design. </td>
					<td class="totalPrice" name="itemPrice7" value="itemPrice"> 2700</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity8" value="0" /></td>
                	<td class="itemName" name="itemName8"> Record keeping and sales </td>
                    <td class="itemName" name="itemName8"> 
                        Maintaining records of plot ownership, burials, caller <br></br>
                        inquiries, and handling plot sales to new customers. <br></br> 
                        This is typically an office-based activity.</td>
					<td class="totalPrice" name="itemPrice8" value="itemPrice"> 60</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity9" value="0" /></td>
                	<td class="itemName" name="itemName9"> Endowment care fund </td>
                    <td class="itemName" name="itemName9"> 
                        Maintaining a trust fund from a portion of plot sales to help <br></br>
                        fund long-term maintenance and upkeep of the cemetery. </td>
					<td class="totalPrice" name="itemPrice9" value="itemPrice"> 3000</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity10" value="0" /></td>
                	<td class="itemName" name="itemName10"> Grave decorations </td>
                    <td class="itemName" name="itemName10"> 
                        Allowing families to decorate graves with approved items (e.g. <br></br>
                        flowers, wreaths, small keepsakes) and providing guidelines for permitted decorations. </td>
					<td class="totalPrice" name="itemPrice10" value="itemPrice"> 150</td>
				</tr>
                <!-- 2 -->
                <tr>
                	<td class="quantity"><input type="text" name="quantity11" value="0" /></td>
                	<td class="itemName" name="itemName11"> Grave locator services </td>
                    <td class="itemName" name="itemName11"> 
                        Helping visitors locate the specific site of a grave within the <br></br>
                        cemetery grounds. May involve record lookup and guidance to the site. For older <br></br>
                        cemeteries, staff can provide burial record lookups and other genealogy helps to aid <br></br>
                        those researching family history. </td>
					<td class="totalPrice" name="itemPrice11" value="itemPrice"> 50</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity12" value="0" /></td>
                	<td class="itemName" name="itemName12"> Religious accommodations </td>
                    <td class="itemName" name="itemName12"> 
                        Providing designated sections, facilities, or modifications <br></br>
                        to support various religious burial traditions and customs. For example, Jewish <br></br>
                        cemeteries, Muslim cemeteries, Catholic sections, etc. </td>
					<td class="totalPrice" name="itemPrice12" value="itemPrice"> 500</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity13" value="0" /></td>
                	<td class="itemName" name="itemName13"> Green burials </td>
                    <td class="itemName" name="itemName13"> 
                        Offering burial options that forgo certain preparations for the body (e.g. <br></br>
                        embalming) and utilize only natural or biodegradable materials for the casket/shroud <br></br>
                        allowing more natural decomposition.</td>
					<td class="totalPrice" name="itemPrice13" value="itemPrice"> 800</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity14" value="0" /></td>
                	<td class="itemName" name="itemName14"> Pet burials </td>
                    <td class="itemName" name="itemName14"> 
                        Maintaining a trust fund from a portion of plot sales to help <br></br>
                        fund long-term maintenance and upkeep of the cemetery. </td>
					<td class="totalPrice" name="itemPrice14" value="itemPrice"> 3000</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity15" value="0" /></td>
                	<td class="itemName" name="itemName15"> Indigent burials </td>
                    <td class="itemName" name="itemName15"> 
                        Providing burial services at reduced or no cost for families that do not <br></br>
                        have the means to cover expenses. May involve a potters field. </td>
					<td class="totalPrice" name="itemPrice15" value="itemPrice"> 1500</td>
				</tr>
                <!-- 3 -->
                <tr>
                	<td class="quantity"><input type="text" name="quantity16" value="0" /></td>
                	<td class="itemName" name="itemName16"> Cemetery restoration </td>
                    <td class="itemName" name="itemName16"> 
                        For older historic cemeteries, offering specialized services to <br></br>
                        repair, reset, and restore severely damaged memorials, markers and monuments that <br></br>
                        have deteriorated over the decades. </td>
					<td class="totalPrice" name="itemPrice16" value="itemPrice"> 2500</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity17" value="0" /></td>
                	<td class="itemName" name="itemName17"> Gravesite photography </td>
                    <td class="itemName" name="itemName17"> 
                        Taking professional photos of headstones and burial sites for <br></br>
                        families to have a visual remembrance, especially for loved ones who cannot <br></br>
                        visit the physical gravesite frequently. </td>
					<td class="totalPrice" name="itemPrice17" value="itemPrice"> 400</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity18" value="0" /></td>
                	<td class="itemName" name="itemName18"> Digital memorials </td>
                    <td class="itemName" name="itemName18"> 
                        Providing online virtual spaces to memorialize the deceased, share <br></br>
                        photos/stories, light virtual candles, and enable remote connections to the memorial. </td>
					<td class="totalPrice" name="itemPrice18" value="itemPrice"> 400</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity19" value="0" /></td>
                	<td class="itemName" name="itemName19"> Legacy history compilations </td>
                    <td class="itemName" name="itemName19"> 
                        Collecting photos, biographical information, family tree <br></br>
                        materials, and memorial site images over time to provide as a archived legacy <br></br>
                        keepsake for families. </td>
					<td class="totalPrice" name="itemPrice19" value="itemPrice"> 150</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity20" value="0" /></td>
                	<td class="itemName" name="itemName20"> Burial right Transfers </td>
                    <td class="itemName" name="itemName20"> 
                        Legal services to help families facilitate ownership transfers of <br></br>
                        burial property rights as needed over generations. Includes handling all <br></br>
                        appropriate paperwork. </td>
					<td class="totalPrice" name="itemPrice20" value="itemPrice"> 350</td>
				</tr>
                <!-- 4 -->
                <tr>
                	<td class="quantity"><input type="text" name="quantity21" value="0" /></td>
                	<td class="itemName" name="itemName21"> Cemetery tours </td>
                    <td class="itemName" name="itemName21"> 
                        Historical/educational tours of their cemetery grounds to highlight <br></br>
                        notable memorials, gravesites of significant people, unique artwork/architecture, <br></br>
                        heritage of the property, etc. </td>
					<td class="totalPrice" name="itemPrice21" value="itemPrice"> 20</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity22" value="0" /></td>
                	<td class="itemName" name="itemName22"> Online access portal </td>
                    <td class="itemName" name="itemName22"> 
                        Provide an online dashboard for families to access documents <br></br>
                        related to their lot purchase, burial records, locations via integrated <br></br>
                        mapping, requests forms, etc. </td>
					<td class="totalPrice" name="itemPrice22" value="itemPrice"> 30</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity23" value="0" /></td>
                	<td class="itemName" name="itemName23"> Surname sections </td>
                    <td class="itemName" name="itemName23"> 
                        Designating burial areas of the cemetery by surnames only to allow <br></br>
                        families of the same lineage to be interred together. </td>
					<td class="totalPrice" name="itemPrice23" value="itemPrice"> 300</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity24" value="0" /></td>
                	<td class="itemName" name="itemName24"> Private mausoleum estates </td>
                    <td class="itemName" name="itemName24"> 
                        Constructing small private mausoleum buildings, estates, <br></br>
                        or large private plots that individual wealthy families can use across <br></br>
                        generations. </td>
					<td class="totalPrice" name="itemPrice24" value="itemPrice"> 2500</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity25" value="0" /></td>
                	<td class="itemName" name="itemName25"> Memorial benches and fixtures </td>
                    <td class="itemName" name="itemName25"> 
                        Offering benches, lamp posts, small statues, birdbaths, garden <br></br> 
                        fixtures and other items to families that they can customize and place <br></br>
                        in memory of loved ones. </td>
					<td class="totalPrice" name="itemPrice25" value="itemPrice"> 600</td>
				</tr>
                <!-- 5 -->
                <tr>
                	<td class="quantity"><input type="text" name="quantity26" value="0" /></td>
                	<td class="itemName" name="itemName26"> Memorial tree planting </td>
                    <td class="itemName" name="itemName26"> 
                        Planting trees chosen by families in designated spots on the <br></br>
                        cemetery grounds in memory of the deceased. Includes memorial placards and maintenance. </td>
					<td class="totalPrice" name="itemPrice26" value="itemPrice"> 200</td>
				</tr>
				<tr>
                	<td class="quantity"><input type="text" name="quantity27" value="0" /></td>
                	<td class="itemName" name="itemName27"> Casket/urn selection services </td>
                    <td class="itemName" name="itemName27"> 
                        If not selling caskets/urns directly, providing catalogs, <br></br>
                        purchasing support, and coordination with partners vendors on <br></br> 
                        selecting caskets, urns, keepsake urns, etc. </td>
					<td class="totalPrice" name="itemPrice27" value="itemPrice"> 150</td>
            </tr>

            </table>

                        <!-- Buttons -->
				<p>
 					<input class="submit" type="submit" name="submit" value="Submit your Order">
  					<input class="reset" type="reset" name="reset" value="Reset your Order Form">
                </p>

        </form>

		<hr>
        <p class="author"> By: Loraine Estrella De Leon </p> 
        <p class="course"> Computer Science 424 Database Management Systems </p>
	</body>
</html>
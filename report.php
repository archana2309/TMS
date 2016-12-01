<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
		<title>Report Form</title>
		<!--<link rel="stylesheet" type="text/css" href="Style/customstyle.css">-->
         <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" type="text/css" href="css/common.css">
         <!-- jQuery library -->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!---Include Validation Script---->
		<script src="js/myscript.js"></script>

    </head>


	<form class="form-inline"action="" method="post">

		<body class=" container">
            <div clasid="main_report_div">
                 <center><h2>Report</h2></center>



                <div class="form-group"id="rptinterestin">
    					        <label class="bold">Interest in</label>
    						   <select class="form-control" name="selected_interest" required>
                                <option value="All" selected="selected">All</option>
    						     <option value="Nagios">Nagios</option>
                                    <option value="Jira">Jira</option>
                                    <option value="Jira Training">Jira Training</option>
                                    <option value="Confluence">Confluence</option>
                                    <option value="Sencha">Sencha</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="Atlassian">Atlassian</option>
                                    <option value="Embarcadero">Embarcadero</option>
                                    <option value="HardCat">HardCat</option>
                                    <option value="Redgate">Redgate</option>
                                    <option value="Sanbolic">Sanbolic</option>
                                    <option value="JetBrain">JetBrain</option>
                                    <option value="Services Development">Services Development</option>
                                    <option value="Partner">Partner</option>
                                   <option value="EConsult">EConsult</option>
                                   <option value="BI">BI</option>
    						   </select>
			         </div>


                       <!------------------- Start Date ---------------->
                        <div class="form-group"id="startdate">
                            <label class="bold">Start Date</label>
                            <input class="form-control commen_dt" type="date" name="start_date">
                        </div>

                       <!------------------- End Date ---------------->
                         <div class="form-group" id="enddate">
                             <label class="bold">End Date</label>
                              <input type="date" class="form-control commen_dt" name="end_date"value="<?php echo date('Y-m-d'); ?>">
                          </div>

                        <div id="btn_save" class="form-group">
		                    <input class="btn btn-primary"id="btn_prt_show"type="submit"name="submit" value="Submit">
                        </div>

                        <div id="export_div" class="form-group">
                                <input type="submit" class="btn btn-primary"name="export" id="btn-export"value="Export"onclick="exportFile()">
                        </div>



            </div>
        </body>
    </form>

</html>




<!------------------------PHP Code-------------------------------->
<?php
	include("Class/Connection.php");//include Class Connection file
	$con=new createConnection();//Create Object
	if(isset($_POST['submit']))
	{
		$s=$_POST['selected_interest'];
        $start_dt=$_POST['start_date'];
        $end_dt=$_POST['end_date'];
		$con->connectToDatabase(); //Connection established
		$con->selectDatabase();
       // $sql="SELECT  M.`ENTITY_NAME`, M.`ENTITY_WEBSITE_URL`, M.`CREATED_TIMESTAMP`,M.INTERESTED, M.`SOURCE` ,D.`C_ADDRESS_1` , D.`C_CONTACT_PERSON` ,D.`C_EMAIL_ID` ,  D.`C_MOBILENO` ,  D.`Notes` ,  D.`C_PHONE_NO` ,  D.C_DESGNATION ,F.FILE_NAME FROM `entity_mst_tbl` M inner join entity_mst_detail_tbl D ON M.ENTITY_MST_PK=D.ENTITY_MST_FK INNER JOIN entity_attachment_tbl F ON  M.ENTITY_MST_PK=F.ENTITY_MST_FK WHERE ";
        $sql="SELECT M.`ENTITY_NAME`, M.`ENTITY_WEBSITE_URL`, M.`CREATED_TIMESTAMP`,M.INTERESTED, M.`SOURCE` ,D.`C_ADDRESS_1` , D.`C_CONTACT_PERSON` ,D.`C_EMAIL_ID` , D.`C_MOBILENO` , D.`Notes` , D.`C_PHONE_NO` , D.C_DESGNATION ,F.FILE_NAME FROM `entity_mst_tbl` M inner join entity_mst_detail_tbl D ON M.ENTITY_MST_PK=D.ENTITY_MST_FK LEFT JOIN entity_attachment_tbl F ON M.ENTITY_MST_PK=F.ENTITY_MST_FK WHERE ";
        if(empty($start_dt) AND $s=='All')
        {
        $sql.="date(M.`CREATED_TIMESTAMP`)<= '$end_dt'";
        }
        elseif($s!=='All'AND $start_dt)
        {
             $sql.="(instr(M.INTERESTED,'$s')>0 and  (date(M.`CREATED_TIMESTAMP`) BETWEEN date('$start_dt') AND date('$end_dt')))";
        }
        elseif($s!=='All' AND !$start_dt)
        {
            $sql.="(instr(M.INTERESTED,'$s')>0 and  (date(M.`CREATED_TIMESTAMP`) <='$end_dt'))";
        }
        else
        {
            $sql.="date(M.`CREATED_TIMESTAMP`) BETWEEN date('$start_dt')and date('$end_dt')";
        }
        //echo($sql);
        $ss=$con->fetch_record($sql);
        if(mysql_num_rows($ss)>0)
        {
        echo("<center><h3>List of all visitors interested in <b>".$s."</b></h3></center>");
		echo "<div class='table-responsive container' id='dvData'><table class='table table-striped table-bordered table-hover' cellspacing='0' width='100%' id='hovertable'border='1'align='center'>";
		echo "<tr><th>Sr No</th><th>Date</th><th>Event</th><th>Name</th>
				<th>Mobile</th><th>Email</th><th>Designation</th>
				<th>Orgname</th><th>Website</th><th>Address</th><th>Office No</th><th>Notes</th>
				<th>Interested IN</th><th>Images</th>";
			$cnt=1;
            while($row = mysql_fetch_array($ss))
          	{
        	  echo "<tr><td> ". $cnt++ . "</td>
        	            <td>" . date('d/m/y',strtotime($row['CREATED_TIMESTAMP'])) . "</td>
        	            <td> ". $row['SOURCE'] . "</td>
        	  		    <td> ". $row['C_CONTACT_PERSON'] . "</td>
        	  			<td>" . $row['C_MOBILENO'] . "</td>
        	  			<td> ". $row['C_EMAIL_ID'] . "</td>
        	  			<td>" . $row['C_DESGNATION'] . "</td>
        	  			<td> ". $row['ENTITY_NAME'] . "</td>
        	  			<td>" . $row['ENTITY_WEBSITE_URL'] . "</td>
        	  			<td> ". $row['C_ADDRESS_1'] . "</td>
        	  			<td>" . $row['C_PHONE_NO'] . "</td>
        	  			<td> ". $row['Notes'] . "</td>
        	  			<td>" . $row['INTERESTED'] . "</td>
        	  			<td><a href='".'uploads/'.$row['FILE_NAME']."'target='_blank'>$row[12]</a></td>
        	  		</tr>";
	 		}

            echo "</table></div>";
 		}
        else
        {
            $msg="Record Not Found.";
            //echo '<script type="text/javascript">alert("' . $msg . '")</script>';
            echo "</br><div class='alert alert-danger'>
           <strong>Sorry....</strong>$msg   </div>";
        }
	}


?>

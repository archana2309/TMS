<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/html">
<!--<meta charset="utf-8" >-->
	<head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<title>Registration Form</title>

        <link rel="stylesheet" type="text/css" href="css/common.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
                <!-- jQuery library -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!---Include Validation Script---->
        <script src="js/myscript.js"></script>
		<!-- <link rel="stylesheet" type="text/css" href="css/customstyle.css"> -->

<script>
	alert('archu');
	<script>
	</head>
	<form class="form-inline"id="registrationform" name="registrationform"action="" method="post" enctype="multipart/form-data" role="form">
		<body class="body">
        <!----Main Div---->
			<div class="container" id="root_div">
			<div id="main_start">
				<center><h2>Registration Form</h2></center>



                  <div id="first_div">
				    <!------------------- Date ---------------->
					<div class="form-group"id="regi_date">
					  <label>Date</label>
					  <input type="date" id="join_date"class="form-control commen_textbox date_set" value="<?php echo date('Y-m-d'); ?>" name="Registration_date"max="<?php echo date('Y-m-d'); ?>" required> <!--<small> MM/DD/YYYY</small>-->
					</div>

                    <div class="form-group div_event">
                        <label>Event</label>
                      <select id="event"class="form-control" name="selected_event">
                         <!-- <option value="All" selected="selected">All</option>-->
                          <option value="eTailing India 2016">eTailing India 2016</option>
                          <option value="Medifair 2016">Medifair 2016</option>
                      </select>
                    </div>

                          <div class="clearfix"></div>

                        <div class="div_space""><!--1part Div-->
                            <!--------------------First Name -------------->
                            <div class="form-group" id="first_name">
                              <label>First Name</label>
                              <input type="text" id="name_id" class="form-control"name="First_name" onkeypress="return validate(event)" required>
                            </div>




                                <!------------------- Last Name ---------------->
                            <div class="form-group" id="last_name">
                              <label>Last Name</label>
                              <input type="text" class="form-control lastname" name="Last_name"onkeypress="return validate(event)" required>
                            </div>
                              <!---------------------File Upload--------------->

                            <div class="form-group" id="fileupload">
                              <label id="lblupload">Image </label>
                            <span class="file-input btn btn-default btn-file upload_spn">
                            <input id="file_img" type="file"name="image"class="file_img"accept='image/*' onchange="checkFile()">
                            </span>
                            </div>
                       </div>


                   <div class="div_space">
                        <!--------------------Mobile -------------->
                        <div class="form-group" id="mobile">
                          <label>Mobile No</label>
                          <input type="tel"name="mobile" class="form-control mob_no" pattern="[789][0-9]{9}" title=""required>
                        </div>

                            <!------------------- Email ---------------->
                        <div class="form-group" id="email">
                          <label class="lblemail">Email Id</label>
                          <input type="email" class="form-control email_id" name="email"required>
                        </div>

                        <!--------------------Designation -------------->
                        <div class="form-group" id="designation">
                          <label>Designation </label>
                          <input type="text" class="form-control" name="profile">
                        </div>

                    </div>


                   <div class="div_space">
                        <!--------------------Org Name -------------->
                        <div class="form-group" id="orgname">
                          <label class="lblorgname">Org Name </label>
                          <input type="text" class="form-control orgname"name="org_name">
                        </div>

                        <!--------------------URL -------------->
                        <div class="form-group" id="url">
                            <label class="lblurl">Website </label>
                            <input type="text" class="form-control urlname" name="url_name">
                        </div>


                          <!--------------------Off Number -------------->
                          <div class="form-group" id="offnumber">
                              <label class="lbloffno">Off Number </label>
                              <input id="txtoffno"type="text" class="form-control"name="off_number">
                          </div>
                    </div>



                        <div class="div_space">

                            <!--------------------Address -------------->
                            <div class="form-group" id="address">
                              <label class="lbl_top">Address </label>
                              <textarea rows="3" cols="22"class="form-control add" name="address"></textarea>
                            </div>

                            <!----------Interest-------------------->

                            <div class="form-group" id="interestin">
                               <label class="lblinterestin lbl_top">Interest in</label>
                                <select class="form-control interest_in" name="selected_interest[]" multiple="multiple" required>
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
                            <!--------------------Notes -------------->
                            <div class="form-group" id="notes">
					  <label class="lblnotes lbl_top">Notes </label>
					  <textarea class="form-control notes_name"rows="3" cols="22" name="notes"></textarea>
					</div>

                         </div>



                   <div class="div_space">

                        <!--------------------Exhibition -------------->
                        <div class="form-group" id="exhibition">
                          <label>From where you heard about us / Exhibition? </label>
                          <input type="text" class="form-control exhibition_nm"name="exhibition">
                        </div>

                        <!-------------------explain the services and Products------------>
                        <div class="form-group" id="products">

                             <label>Do you want our Sales Representative to Visit and explain the services and Products? (YES / NO)</label>
                                <input type="radio"name="ans"id="yes"value="Yes" selected="selected"/><label>Yes</label>
                                <input type="radio"name="ans"id="No"value="No"/><label>No</label>

                        </div>
                   </div>

                        <input type="submit" class="submit btn btn-primary"name="submit" value="Submit">
                        <input type="reset" class="submit btn btn-primary""name="reset" value="Cancel">

                   </div><!--End Of First_Div-->

                </div>
			</div><!----End of main div---->

        <!-- ------------------Modal Record Save---------------------->
        <div id="top">
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content" id="myid">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="memberModalLabel">Thank you...</h4>
                    </div>
                   <div class="modal-body">
                        <p>Record saved successfully...</p>
                    </div>
                   <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>-->
                </div>
            </div>
        </div>
        </div>
        <!--**********************************-->





        <!-- ------------------Modal Record Not Save---------------------->
        <div class="modal fade" id="DangerModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title " id="memberModalLabel">Sorry!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Record Not save successfully...</p>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************-->

		</body>
	</form>

</html>

<!----------------------PHP Code------------------------------>
<?php
	include("Class/Connection.php");//include Class Connection file
	$con=new createConnection();//Create Object
	$interest_str='';
    error_reporting(E_WARNING|E_PARSE);
/*echo " <script type=\"text/javascript\">
                 $('#memberModal').modal('show');
                 $('#memberModalConfirm').modal('toggle').location='registration.php';
                 //window.location.href='registration.php';
                    </script>
                ";
//header( "refresh:2; url=registration.php" );*/
if(isset($_POST['submit']))
	{
        $flag=0;
		$Reg_date=$_POST['Registration_date'];
		$Fname=$_POST['First_name'];
		$Lname=$_POST['Last_name'];
		$Mob_no=$_POST['mobile'];
		$Email_id=$_POST['email'];
		$Desi=$_POST['profile'];
		$orgname=$_POST['org_name'];
		$Address=$_POST['address'];
		$Off_no=$_POST['off_number'];
		$Notes=$_POST['notes'];
		$Exhibition=$_POST['exhibition'];
		$services=$_POST['ans'];
		$urlname=$_POST['url_name'];
        $event_name=$_POST['selected_event'];
        /*Multipal Select*/
		foreach ($_POST['selected_interest'] as $names)
		{
        	$interest_str=$interest_str.",".$names;
		}
		$final_str=trim($interest_str, ",");
        /*-------------------Image Upload--------------------------------*/
        $file_name = $_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];

        $ext = pathinfo($file_name, PATHINFO_EXTENSION); //For Image extension
        $filename = time().rand(1000000,9999999).".".$ext;
        move_uploaded_file($file_tmp,"uploads/".$filename);//for Window
	    //move_uploaded_file($file_tmp,"/var/www/html/uploads/".$filename);//for linux
            if (empty($_FILES['image']['name']))
            {
                 $filename='';
            }
		$con->connectToDatabase(); //Connection established
		$con->selectDatabase();  
        //Entity Table Data
        $lead_qry="INSERT INTO lead_id(lead_temp) VALUES ('temp')";
        $r4=$con->insert_query($lead_qry);
        $lead_top_id_query="SELECT `lead_id` FROM lead_id ORDER BY lead_id DESC LIMIT 1";
        $lead_result=$con->fetch_record($lead_top_id_query);
        $lead_row = mysql_fetch_row($lead_result);

        $lead_id=1000+$lead_row[0];
        $final_lead_id="L".$lead_id;

        //Master Table Entry
        $mast_qry="INSERT INTO entity_mst_tbl (ENTITY_ID,ENTITY_NAME,ENTITY_WEBSITE_URL,ENTITY_CATAGORY,CREATED_BY_FK,CREATED_TIMESTAMP,ENTITY_STATUS,INTERESTED,SOURCE) VALUES ('$final_lead_id','".$orgname."','".$urlname."','Lead','1','".date('Y-m-d H:i:s')."','Active','".$final_str."','".$event_name."')";
        //echo($mast_qry);
        $r1=$con->insert_query($mast_qry);
        $mast_id_query="SELECT `ENTITY_MST_PK` FROM entity_mst_tbl ORDER BY ENTITY_MST_PK DESC LIMIT 1";
        $mast_result=$con->fetch_record($mast_id_query);
        $mast_row = mysql_fetch_row($mast_result);
        $mast_id=$mast_row[0];
        //Master_details
        $Mst_details_qry="insert into entity_mst_detail_tbl(ENTITY_MST_FK,C_MOBILENO,C_EMAIL_ID,Notes,C_CONTACT_PERSON,C_DESGNATION,C_PHONE_NO,C_ADDRESS_1)values('$mast_id','$Mob_no','$Email_id','$Notes','$Fname $Lname','$Desi','$Off_no','$Address')";
        // echo("</br>".$Mst_details_qry);
        //File Upload Qry
        $File_qry="INSERT INTO entity_attachment_tbl(ENTITY_MST_FK,FILE_NAME,CREATED_TIMESTAMP) VALUES ('$mast_id','$filename','".date('Y-m-d H:i:s')."')";
        //  echo("</br>".$File_qry);
		$r2=$con->insert_query($Mst_details_qry);
		$r3=$con->insert_query($File_qry);



        if($r1 and $r2 and $r3 and $r4==1)
        {
           /* $msg="Record saved successfully...";
            echo '<script type="text/javascript">alert("' . $msg . '");
            window.location.href="registration.php";
            </script>';*/

            echo " <script type=\"text/javascript\">
                    $('#memberModal').modal('show');
                  //  window.location.href='registration.php';
                    </script>
                ";
            header( "refresh:3; url=registration.php" );
        }
        else
        {
            echo " <script type=\"text/javascript\">
                    $('#DangerModal').modal('show');
                    </script>
                ";
            header( "refresh:3; url=registration.php" );
          /* $msg="Sorry...Record Not saved.";
           echo '<script type="text/javascript">alert("' . $msg . '")</script>';*/
        }

		$con->closeConnection();
        /*SELECT * FROM `profile` where( instr(profile_name,"Jira")>0 and instr(profile_name,"pepperoni")>0)*/

	}
?>

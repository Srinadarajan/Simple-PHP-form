<!--Form creation in php for web programming Student Reg No - SOF/19/B1/12-->
<html >
<title>Student Detail</title>
<!-- CSS Styles for beautify the form -->
<style type="text/css">
	#Header {
		font-family: Tahoma, Geneva, sans-serif;
		font-size: 20px;
		font-weight: bolder;
		color: #003;
		text-decoration: underline;
		text-align: center;
	}
	#title {
		font-family: "Courier New", Courier, monospace;
		font-size: 20px;
		font-style: oblique;
		font-weight: bold;
		color: #EEE;
		background-color: #00E;
		text-align: center;
	}
	
	table {
		border: medium solid #005;
	}
	
	#btnReset,#btnSubmit{
		font-family: Georgia, "Times New Roman", Times, serif;
		font-size: 16px;
		font-style: oblique;
		font-weight: normal;
		color:#003;
		background-color:#EEE;
	}
	tr {
		height: 45px;
	}
	 #footer{
		 height: 60px;
		 background-color: #00E;
		 bgcolor: #00E;
		 }
	</style>
   
</head>

<body>
<!--header part of the page -->
    <div id="Header">
        <h1> Student Details</h1>
    </div>
<!--From for fill student details -->
<div id="Form">
<!--Call process php file for dispaly given details -->
    <form action="StudentDetail_Process.php" method="post" enctype="multipart/form-data" ><!-- enctype="multipart/form-data" - this tag used to upload files -->
        <table width="579" border="1" align="center" cellpadding="5" cellspacing="5">
          <tr id="title">
            <td colspan="3"><strong>Details of Students</strong></td>
            </tr>
           <tr>
             <td width="12">1.</td>
            <td width="222">Name</td>
            <td width="281"><input name="name" type="text" id="name" size="35" /></td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Address</td>
            <td><textarea name="address" cols="37" rows="3" id="address"></textarea></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Sex </td>
            <td>
              <input name="rbtSex" type="radio" id="rbtMale" value="Male" checked="checked" />
                Male
              <br />
             <input type="radio" name="rbtSex" id="rbtFemale" value="Female"/>
                Female
             </td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Favourite Subject </td>
            <td>
        
         <input type="checkbox" name="subject[]" value="VB" id="chkVB" />
            VB
          <input type="checkbox" name="subject[]" value="Csharp" id="chkCsharp" />
            C# <br />
            <input type="checkbox" name="subject[]" value="Php" id="chkPhp" checked/>
            PHP
            <input type="checkbox" name="subject[]" value="Phyton" id="chkPhyton" />
            Phyton
        </td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Entry Qualification </td>
            <td><select name="qualification" size="1">
              <option value="NVQ5" selected="selected">NVQ Level 5</option>
              <option value="AL">Advanced Level</option>
              <option value="HNDIT">HNDIT</option>
             </select></td>
          </tr>
          <tr>
            <td>6.</td>
            <td>Comments </td>
            <td><textarea name="comments" cols="36" rows="4"></textarea></td>
          </tr>
        
          <tr>
            <td>7.</td>
            <td>Image</td>
            <td><input type="file" name="file"></td>
          </tr>
          
           <tr>
            <td>8.</td>
            <td>Email Id </td>
            <td><input type="text" name="email"></td>
          </tr>
              <tr>
            <td>9.</td>
            <td>Age </td>
            <td><select name="age" id="age">
                   <!-- php tag for age within the for loop -->
                    <?php
                        for ($i = 0; $i <= 100; $i++) {
                            echo "<option>$i</option>";
                        }
                    ?>
               </select>
          </td>
          </tr>
          <tr id="footer">
            <td colspan="3">
            	<!--Reset button for clear all details given in the form  -->
                <input name="Reset" type="reset" id="btnReset" value="Reset" style="margin-left:60px" / >
                <!--Submit button for derict to the StudentDetail_Process.php and display given details -->
                <input name="Submit" type="submit" id="btnSubmit" value="Submit" style="margin-left:200px" />
            </td>
           </tr>
        </table>
    </form>
</div>
</body>
</html>
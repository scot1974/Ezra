<!DOCTYPE html>
<html>
<head>
    
<title>Frsc Traffic Tracking System</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">



</head>
<body>
	<div class="container" style="padding-top:50px;">
	 <div class="jumbotron reg">
         <h2>NOTICE OF OFFENCE SHEET</h2>
         <p>Pursuant To Sections 10(4),28(2) of FRSC (Establishment Act. 2007 & Regulation 220 of NRTR, 2012)</p>
	<h2>ADD SHEET</h2><hr>
         <fieldset class="fieldset">
            
          
            <form class="form-group" method="POST" action="offenceSheet.php">
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Name Of Offender" name="names"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Address" name="address"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Telephone No" name="telephone"></div><br><hr>
            
            <legend style="text-align:center;font-weight:bold">VEHICLE</legend>
            <table border="0" cellspacing="2" cellpadding="2" width="100%">
		<tr>
        <td style="text-align:right">REG. NO:</td>
		<td><input type="text" name="regno" required>
        <td style="text-align:right">COLOR:</td>
		<td><input type="text" name="color" required>
        </tr>
        	<tr>
        <td style="text-align:right">TYPE:</td>
		<td><input type="text" name="type" required>
        <td style="text-align:right">MAKE:</td>
		<td><input type="text" name="make" required>
        </tr>
        </table>
		<br>  
        <hr>
        <legend style="text-align:center;font-weight:bold">OFFENCES</legend>
            <table border="0" cellspacing="2" cellpadding="2" width="100%">
		<tr>
        <td style="text-align:right">CODE:</td>
		<td><input type="text" name="code" required>
        <td style="text-align:right">LOCATION:</td>
		<td><input type="text" name="location" required>
        </tr>
        	<tr>
        <td style="text-align:right">ROUTE:</td>
		<td><input type="text" name="route" required>
        <td style="text-align:right">DATE:</td>
		<td><input type="text" name="dt1" required>
        </tr>
        </table>
        <br>  
        <hr>
        <legend style="text-align:center;font-weight:bold">DRIVERS LICENCE</legend>
            <table border="0" cellspacing="2" cellpadding="2" width="100%">
		<tr>
        <td style="text-align:right">NUMBER:</td>
		<td><input type="text" name="number" required>
        <td style="text-align:right">DATE ISSUED:</td>
		<td><input type="text" name="dateissued" required>
        <td style="text-align:right">RENEWAL DATE:</td>
		<td><input type="text" name="renewaldt" required>
        </tr>
        <tr>
        
        <td style="text-align:right">EXPIRY DATE:</td>
		<td><input type="text" name="expiry" required>
        <td style="text-align:right">ISSUING STATE:</td>
		<td><input type="text" name="issuing" required>
        </tr>
        </table>
        <br>  
        <hr>
        <legend style="text-align:center;font-weight:bold">CONFISTICATION</legend>
            <table border="0" cellspacing="2" cellpadding="2" width="100%">
		<tr>
        <td style="text-align:right">VEHICLE LICENCE:</td>
		<td><input type="text" name="licence" required>
        <td style="text-align:right">ID CARD:</td>
		<td><input type="text" name="idcard" required>
        <td style="text-align:right">DRIVERS LICENCE:</td>
		<td><input type="text" name="drivers" required>
        </tr>
        <tr>
        
        <td style="text-align:right">VEHICLE KEY:</td>
		<td><input type="text" name="key1" required>
        <td style="text-align:right">INSURANCE:</td>
		<td><input type="text" name="insurance" required>
        <td style="text-align:right">PASSPOT:</td>
		<td><input type="text" name="passport" required>
        </tr>
        </table>
         <hr>
            
            <legend style="text-align:center;font-weight:bold">CAUTION</legend>
            <div class="col-sm-12">
                        
                    <p>If you do not wish to be PROSECUTED, then pay the prescribed penality to the specified bank and present the original teller to FRSC Office (See details overleaf).</p>
                    <p>This notice of Offences expires after 7 days from the date of issue, you may be PROSECUTED.</p>
            </div>
            
		<br>
		<br>
        <div class="col-md-4">
                  <input type="submit" class="btn btn-primary" name="btnsubmt" value="Submit"> 
                    <a href="admin-panel.php"><button type="button" class="btn btn-default">Back</button></a>
                  </div>
        
            
	
 <script src="js/valid.js"></script>	

      
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>


      
      
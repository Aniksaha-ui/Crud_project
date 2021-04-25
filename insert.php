 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>user insert</title>
</head>

<body>
<br>
<br><br>
<br>
<h1><center>Registration form.</center></h1>
<br>
<form action="insertController.php" method="post" enctype="multipart/form-data">
<table align="center" bgcolor="#B7E2F3" border="2" bordercolor="#0000FF">
		<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"  /></td>
		</tr>
		<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"  /></td>
		</tr>
		<tr>
				<td>Confirm Email</td>
				<td>:</td>
				<td><input type="text" name="cemail"  /></td>
		</tr>
		<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"  /></td>
		</tr>
		<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input type="password" name="cpass"  /></td>
		</tr>
		<tr>
				<td>Address</td>
				<td>:</td>
				<td><input type="text" name="add"  /></td>
		</tr>
		<tr>
				<td>Mobile</td>
				<td>:</td>
				<td><input type="text" name="mob"  /></td>
		</tr>
		<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
						<select name="gen">
								<option value="male">MALE</option>
								<option value="female">FEMALE</option>
						</select>
				</td>
		</tr>
		<tr>
				<td>Image</td>
				<td>:</td>
				<td><input type="file" name="file"  /></td>
		</tr>
		<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>
					cricket<input type="checkbox"  name="hobb[]" value="cricke"/>
					singing<input type="checkbox" name="hobb[]" value="singing"/>
					dancing<input type="checkbox" name="hobb[]" value="dancing"/>				
				</td>
		</tr>
		<tr>
				<td>Country</td>
				<td>:</td>
				<td><input type="text" name="country"  /></td>
		</tr>
		<tr>
				<td>Date Of Birth</td>
				<td>:</td>
				<td><input type="text" name="dob" placeholder="yyyy-mm-dd" /></td>
		</tr>
		
		<tr>
		<td colspan="3" align="center"><input type="submit" name="signup" /></td>
		</tr>
</table>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Berlatih HTML - Form Sign Up - Ahmad Fahrudin</title>
</head>
<body>
	<h1>Buat Account Baru</h1>
	<h3>Sign Up Form</h3>
	<form action="{{url('welcome')}}" method="POST">
		@csrf
		<label for="first_name">First Name:</label><br><br>
 	 	<input type="text" id="first_name" name="first_name"><br><br>
 	 	
 	 	<label for="last_name">Last Name:</label><br><br>
 	 	<input type="text" id="last_name" name="last_name"><br><br>

 	 	<label for="gender">Gender:</label><br><br>
 	 	<input type="radio" id="male" name="gender" value="male">
 	 	<label for="male">Male</label><br>
 	 	<input type="radio" id="female" name="gender" value="female">
 	 	<label for="female">Female</label><br>
 	 	<input type="radio" id="other" name="gender" value="other">
 	 	<label for="other">Other</label><br><br>

 	 	<label for="nationality">Nationality:</label><br><br>
 	 	<select id="nationality" name="nationality">
 	 		<option value="Indonesian">Indonesian</option>
 	 		<option value="Malaysian">Malaysian</option>
 	 		<option value="Singapore">Singapore</option>
 	 		<option value="Australian">Australian</option>
 	 	</select><br><br>

 	 	<label for="language_spoken">Language Spoken:</label><br><br>
 	 	<input type="checkbox" id="checkbox_bahasaindo" name="checkbox_bahasaindo" value="Bahasa Indonesia">
  		<label for="checkbox_bahasaindo"> Bahasa Indonesia</label><br>
  		<input type="checkbox" id="checkbox_english" name="checkbox_english" value="English">
  		<label for="checkbox_english"> English</label><br>
  		<input type="checkbox" id="checkbox_other" name="checkbox_other" value="Other">
  		<label for="checkbox_other"> Other</label><br><br>
 	 	
 	 	<label for="bio">Bio:</label><br><br>
 	 	<textarea id="bio" name="bio" rows="10"></textarea><br>
 	 	<input type="submit" value="Sign Up">
	</form>
</body>
</html>
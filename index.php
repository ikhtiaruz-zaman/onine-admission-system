<!doctype html>
<html>
<head>
<title>EDUCATION CENTER</title>
<style>

</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
echo("Zaman")
?>
<h1>EDUCATION CENTER</h1>
<p>Admission form for the session 2021</p>
<form action="/Submit" method="post"
enctype="multipart/form-data">
<div>
<label class="required field" 
for="name">Name</label>
<input id="name" type="text" >
</div>
<div>
<label class="required field" 
for="Father's name">Father's Name</label>
<input id="Father's Name" type="text">
</div>
<div>
<label class="required field" 
for="Father's name">Mother's Name</label>
<input id="Mother's Name" type="text">
</div>
<div>
<label class="required field" 
for="Address">Address</label>
<textarea id="bio" rows="6" 
cols="40"></textarea>
</div>
<div>
<label class="required field" 
for="HSLC Score">HSLC Score</label>
<input id="HSLC Score" type="number">
</div>
<div>
<label class="required field" 
for="HSLC Year" >HSLC Year</label>
<input id="HSLC Year" type="number">
</div>
<div>
<label class="required field" 
for="HS score">HS score</label>
<input id="HS score" type="number">
</div>
<div>
<label class="required field" 
for="HS Year">HS Year</label>
<input id="HS Year" type="number">
</div>
<div>
<label class="required field" 
for="JEE score" >JEE Score</label>
<input id="JEE Score" type="number">
</div>
<div>
<label class="required field" 
for="JEE rank">JEE rank</label>
<input id="JEE rank" type="number">
</div>
<div>
<label class="required field" 
for="JEE roll no">JEE roll no</label>
<input id="JEE roll no" type="text"/>
</div>
<div>
<label class="required field" 
for="DOB">DOB</label>
<input id="DOB" type="date">
</div>


<div>
<label class="required field">Gender</label>
<label><input type="radio" name="gender" 
value="male"> male</label>
<label><input type="radio" name="gender" 
value="female"> female</label>
</div>

<div>
<label class="required field">Branch applied for</label>
<select id="Branch">
<option value="Computer Science">Computer Science</option>
<option value="Civil">Civil</option>
<option value="Electrical">Electrical</option>
</select> 
</div>

<div>
<label class="required field">Caste</label>
<select id="caste">
<option value="General">General</option>
<option value="Sc">Sc</option>
<option value="ST">ST</option>
<option value="ST Hills">ST Hills</option>
<option value="OBC">OBC</option>
</select> 
</div>

<div class="submit">
<input type="submit" value="submit">
</div>
</form>
</body>
</html>
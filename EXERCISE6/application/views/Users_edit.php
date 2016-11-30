<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Edit User</title>
<style>
@charset "utf-8";
/* CSS Document */

*
{
 margin:0;
 padding:0;
}
body
{
 background-color: pink;
 font-family:"Courier New", Courier, monospace;
}
#header
{
 width:100%;
 height:50px;
 background:#4CAF50;
 color:pink;
 font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
 font-size:35px;
 text-align:center;
}

#header a
{
 color:#fff;
 text-decoration:blink;
}
#body
{
 margin-top:50px;
}
table
{
 width:80%;
 font-family:Tahoma, Geneva, sans-serif;
 font-weight:bolder;
 color:#4CAF50;
 margin-bottom:80px;
}
table a
{
 text-decoration:none;
 color:#4CAF50;
}
table,td,th
{
 border-collapse:collapse;
 border:solid #4CAF50 1px;
 padding:20px;
}
table td input
{
 width:97%;
 height:35px;
 border:dashed #4CAF50 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}
table td input:focus
{
 box-shadow:inset 1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
}
table td button
{
 border:solid #4CAF50 0px;
 box-shadow:1px 1px 1px rgba(1,0,0,0.2);
 outline:none;
 background:#4CAF50;
 padding:9px 15px 9px 15px;
 color:pink;
 font-family:Arial, Helvetica, sans-serif;
 font-weight:bolder;
 border-radius:3px;
 width:49.5%;
}
table td button:active
{
 position:relative;
 top:1px;
}
</style>
</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/update">
<?php
extract($users);
?>
<div id="header">
 <div id="content">
    <label>Edit User</label>
    </div>
</div>
<div id="body" style="margin-left: 220px;">
 <div id="content">
<table align="center">
    <tr>
    <td><input type="text" name="name" placeholder="Complete Name" value="<?php echo $name; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email Address" value="<?php echo $email; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="address" placeholder="Home Address" value="<?php echo $address; ?>" required /></td>
    </tr>
	<tr>
    <td>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo $gender; ?> value="Female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo $gender; ?> value="Male">Male
	</td>
    </tr>
	<tr>
    <td><input type="number" name="cp_number" placeholder="Cellphone Number" value="<?php echo $cp_number; ?>" required /></td>
    </tr>
	<tr>
	<td>
	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
    <button type="submit" name="submit" value="Update" /><strong>UPDATE</strong></button>
	<a href="<?php echo base_url();?>index.php/users/"><strong>Cancel</strong></a></button>
    </td>
    </tr>
    </table>
</div>
</div>
</form>

</body>

</html>
<?php
function convert($size,$unit) 
{
 if($unit == "KB")
 {
  return $fileSize = round($size / 1024,4) . 'KB';	
 }
 if($unit == "MB")
 {
  return $fileSize = round($size / 1024 / 1024,4) . 'MB';	
 }
 if($unit == "GB")
 {
  return $fileSize = round($size / 1024 / 1024 / 1024,4) . 'GB';	
 }
}

if(isset($_POST['convert_size']))
{
 $size=$_POST['size'];
 $unit=$_POST['convert_unit'];
 $size=convert($size,$unit);
}
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="convert_style.css"/>
</head>
<body>
<div id="wrapper">

<div id="convert_div">
 <form method="post"action="">
  <input type="text" name="size" placeholder="Enter Bytes">
  <select name="convert_unit">
   <option>KB</option>
   <option>MB</option>
   <option>GB</option>
  </select>
  <br>
  <input type="submit" name="convert_size" value="Convert Bytes">
 </form>
 <p><?php echo $size;?></p>
</div>

</div>
</body>
</html>
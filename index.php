<?php
function convert($size) 
{
  if($size){
        $precision = 2;
        if ($size > 0) {
            $size = (int) $size;
            $base = log($size) / log(1024);
            $suffixes = array(' bytes', ' KB', ' MB', ' GB', ' TB');
            return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
        }
    } else {
        return $size ="Opps! File Does't Exits.";
    }
}

if(isset($_POST['convert_size']))
{
   $size=$_POST['size'];
   // $unit=$_POST['convert_unit'];
   $size=convert($size);
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
  <input type="text" name="size" placeholder="Enter Bytes" required="" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )">
<!--   <select name="convert_unit">
   <option>KB</option>
   <option>MB</option>
   <option>GB</option>
  </select> -->
  <br>
  <input type="submit" name="convert_size" value="Convert Bytes">
 </form>
 <p><?php echo $size;?></p>
</div>

</div>
</body>
</html>

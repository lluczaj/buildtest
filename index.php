<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<font size="20"><center><b><p>Hello SDI !!!!!</p></b></center></font>'; 
  $hostname = getenv('HOSTNAME');
  $build = getenv('OPENSHIFT_BUILD_NAME');
  echo "<span style='font-size: 15pt'><center><p>Hostname:<b><font color='red'> ".$hostname."</font></b></p></center></span>";
  echo "<span style='font-size: 15pt'><center><p>Build:<b><font color='red'> ".$build."</font></b></p></center></span>";
  for($i = 0; $i < 200; $i++) {
     $a += $i;
  }
  ?> 
  <img src="Big-Water.jpg" alt="Mountain View" width="1024" height="720">
 </body>
</html>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<font size="20"><center><b><p>Hello SDI !!!!!!</p></b></center></font>'; 
  $hostname = getenv('HOSTNAME');
  $build = getenv('OPENSHIFT_BUILD_NAME');
  echo "<span style='font-size: 15pt'><center><p>Hostname:<b><font color='green'> ".$hostname."</font></b></p></center></span>";
  echo "<span style='font-size: 15pt'><center><p>Build:<b><font color='green'> ".$build."</font></b></p></center></span>";
  ?> 
 </body>
</html>

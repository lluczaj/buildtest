<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<font size="20"><center><b><p>Hello SDI ! ! !</p></b></center></font>'; 
  $hostname = getenv('HOSTNAME');
  $build = getenv('OPENSHIFT_BUILD_NAME');
  echo "<center><p><b>Hostname: ".$hostname."</b></p></center>";
  echo "<center><p><b>Build: ".$build."</b></p></center>";
  ?> 
 </body>
</html>

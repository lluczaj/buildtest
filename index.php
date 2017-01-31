<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<font size="20"><center><b><p>Hello SDI ! ! !\n\n</p></b></center></font>'; 
  $hostname = getenv('HOSTNAME');
  $build = getenv('OPENSHIFT_BUILD_NAME');
  echo '<font size="10"><center><b><p>Hostname: $hostname\n </p></b></center></font>';
  echo '<font size="10"><center><b><p>Build: $build\n </p></b></center></font>';
  ?> 
 </body>
</html>

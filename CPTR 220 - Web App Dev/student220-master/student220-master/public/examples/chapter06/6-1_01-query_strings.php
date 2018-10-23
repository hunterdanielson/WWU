<!DOCTYPE html>
<html>
  <head>
    <title>Query Strings</title>
    <meta charset="UTF-8" />
  </head>
  <body>
    <h1>Query Strings</h1>
    
    <p>
      Modify the URL for this page to see how it changes the REQUEST and SERVER 
      variables. You may also wish to use this 
      <a href="http://www.url-encode-decode.com/">URL encoder/decoder</a>
    </p>
        
    <h2>REQUEST variable</h2>
    <pre>    
<?php
  
  print_r($_REQUEST);

?>
    </pre>

    <h2>SERVER variable</h2>
    <pre>    
<?php
  
  print_r($_SERVER);

?>
    </pre>
    
    <p><a href="https://validator.w3.org/check/referer">validate me</a></p>
  </body>
</html>

<html>
 <head>
  <title>PHP greeting!</title>
 </head>
 <body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <h1 style='text-align: center; padding: 25px 0 10px'>Hello World</h1>
 <h2 id="runningTime" style='text-align: center; padding: 10px 0 25px'></h2>
 <script type="text/javascript">
 $(document).ready(function() {
  setInterval(runningTime, 1000);
 });
 function runningTime() {
   $.ajax({
     url: 'timeScript.php',
     success: function(data) {
        $('#runningTime').html(data);
      },
   });
 }
 </script>
 <?php phpinfo();?>
 </body>
</html>
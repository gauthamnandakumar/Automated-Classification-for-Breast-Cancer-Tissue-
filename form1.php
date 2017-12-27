<html>
<body>

<style type="text/css">

body {text-align: center;font-size:22pt;}
form {color:DeepPink;text-align: center;font-size:22pt; }       
table { border: 10px solid pink;}  
</style>

<form action="form2.php" method="post">
<input type='submit' name='newdata' value='PLEASE CLICK HERE IF YOU ARE ENTERING NEW DATA' />
<br>
</form>

<form method='get'>
IF YOU WOULD LIKE TO VIEW EXISTING RECORD,<br> Enter Sample Code Number: <input type='text' name='Sample_Codenumber'><br>
<input type='submit' name='submit' value='SUBMIT' />
<br>
</form>
<?php
if($_REQUEST['Sample_Codenumber']){
$a=$_REQUEST['Sample_Codenumber'];
if(!strncmp(gethostname(),'sacan',5)) require_once getenv('AHMETLIBPHP').'/ahmet.php';
echo "$a";
$MLEXE='matlab';
if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
	if(file_exists($try='C:\Matlab 2016b\bin\matlab.exe')) $MLEXE=$try;
}
else{
	#On MAC, matlab is probably on the path already. So, nothing to do.
}

$cmd="\"$MLEXE\" -nosplash -logfile runmatlab.out -r \"disp(Databasefind($a));\"";
set_time_limit(150); #extend maximum run time for php so it doesn't terminate us.
$out=exec($cmd);
sleep(100); #wait some time for matlab to complete...
echo "<p>The features of the entered data is :</p> <pre>".file_get_contents('runmatlab.out')."</pre>";
}
?>
</body>
</html>
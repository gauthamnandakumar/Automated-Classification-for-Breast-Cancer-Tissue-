<html>
<body>

<style type="text/css">
body {text-align: center;font-size:22pt;}
form {color:DeepPink;text-align: center;font-size:14pt; }       
table { border: 10px solid pink;}  
</style>

<form method="post">
PLEASE ENTER THE FOLLOWING SCORES <br />
(1 BEING LEAST AND 10 BEING HIGHEST FOR MALIGNANCY) <br />
<br />
Clump Thickness:<br />
<input type="radio" name="CT" value="1">1
<input type="radio" name="CT" value="2">2
<input type="radio" name="CT" value="3">3
<input type="radio" name="CT" value="4">4
<input type="radio" name="CT" value="5">5
<input type="radio" name="CT" value="6">6
<input type="radio" name="CT" value="7">7
<input type="radio" name="CT" value="8">8
<input type="radio" name="CT" value="9">9
<input type="radio" name="CT" value="10">10
<br>
<br>
Uniformity of Cell Size:<br />
<input type="radio" name="UCSize" value="1">1
<input type="radio" name="UCSize" value="2">2
<input type="radio" name="UCSize" value="3">3
<input type="radio" name="UCSize" value="4">4
<input type="radio" name="UCSize" value="5">5
<input type="radio" name="UCSize" value="6">6
<input type="radio" name="UCSize" value="7">7
<input type="radio" name="UCSize" value="8">8
<input type="radio" name="UCSize" value="9">9
<input type="radio" name="UCSize" value="10">10
<br>
<br>
Uniformity of Cell Shape:<br />
<input type="radio" name="UCShape" value="1">1
<input type="radio" name="UCShape" value="2">2
<input type="radio" name="UCShape" value="3">3
<input type="radio" name="UCShape" value="4">4
<input type="radio" name="UCShape" value="5">5
<input type="radio" name="UCShape" value="6">6
<input type="radio" name="UCShape" value="7">7
<input type="radio" name="UCShape" value="8">8
<input type="radio" name="UCShape" value="9">9
<input type="radio" name="UCShape" value="10">10
<br>
<br>
Marginal Adhesion:<br />
<input type="radio" name="MC" value="1">1
<input type="radio" name="MC" value="2">2
<input type="radio" name="MC" value="3">3
<input type="radio" name="MC" value="4">4
<input type="radio" name="MC" value="5">5
<input type="radio" name="MC" value="6">6
<input type="radio" name="MC" value="7">7
<input type="radio" name="MC" value="8">8
<input type="radio" name="MC" value="9">9
<input type="radio" name="M" value="10">10
<br>
<br>
Single Epithelial Cell Size:<br />
<input type="radio" name="SEC" value="1">1
<input type="radio" name="SEC" value="2">2
<input type="radio" name="SEC" value="3">3
<input type="radio" name="SEC" value="4">4
<input type="radio" name="SEC" value="5">5
<input type="radio" name="SEC" value="6">6
<input type="radio" name="SEC" value="7">7
<input type="radio" name="SEC" value="8">8
<input type="radio" name="SEC" value="9">9
<input type="radio" name="SEC" value="10">10
<br>
<br>
Bare Nuclei:<br />
<input type="radio" name="BaNu" value="1">1
<input type="radio" name="BaNu" value="2">2
<input type="radio" name="BaNu" value="3">3
<input type="radio" name="BaNu" value="4">4
<input type="radio" name="BaNu" value="5">5
<input type="radio" name="BaNu" value="6">6
<input type="radio" name="BaNu" value="7">7
<input type="radio" name="BaNu" value="8">8
<input type="radio" name="BaNu" value="9">9
<input type="radio" name="BaNu" value="10">10
<br>
<br>
Bland Chromatin:<br />
<input type="radio" name="BlCh" value="1">1
<input type="radio" name="BlCh" value="2">2
<input type="radio" name="BlCh" value="3">3
<input type="radio" name="BlCh" value="4">4
<input type="radio" name="BlCh" value="5">5
<input type="radio" name="BlCh" value="6">6
<input type="radio" name="BlCh" value="7">7
<input type="radio" name="BlCh" value="8">8
<input type="radio" name="BlCh" value="9">9
<input type="radio" name="BlCh" value="10">10
<br>
<br>
Normal Nucleoli:<br />
<input type="radio" name="NoNu" value="1">1
<input type="radio" name="NoNu" value="2">2
<input type="radio" name="NoNu" value="3">3
<input type="radio" name="NoNu" value="4">4
<input type="radio" name="NoNu" value="5">5
<input type="radio" name="NoNu" value="6">6
<input type="radio" name="NoNu" value="7">7
<input type="radio" name="NoNu" value="8">8
<input type="radio" name="NoNu" value="9">9
<input type="radio" name="NoNu" value="10">10
<br>
<br>
Mitoses:<br />
<input type="radio" name="Mito" value="1">1
<input type="radio" name="Mito" value="2">2
<input type="radio" name="Mito" value="3">3
<input type="radio" name="Mito" value="4">4
<input type="radio" name="Mito" value="5">5
<input type="radio" name="Mito" value="6">6
<input type="radio" name="Mito" value="7">7
<input type="radio" name="Mito" value="8">8
<input type="radio" name="Mito" value="9">9
<input type="radio" name="Mito" value="10">10
<br>
<br>
<input type='submit' value='SUBMIT' />
</form>

<?php
if ($_REQUEST['CT']){
            #foreach($_REQUEST  as $key=>$value){
             #   echo "$key: $value<br>";
            #}
            
	    echo "<br><p>Clump Thickness: ". $_REQUEST['CT'];
	    echo "<br><p>Uniformity of Cell Size: " . $_REQUEST['UCSize'];
	    echo "<br><p>Uniformity of Cell Shape:" . $_REQUEST['UCShape'];
	    echo "<br><p>Marginal Adhesion:" . $_REQUEST['MC'];
	    echo "<br><p>Single Epithelial Cell Size: " . $_REQUEST['SEC'];
	    echo "<br><p>Bare Nuclei: " . $_REQUEST['BaNu'];
	    echo "<br><p>Bland Chromatin: " . $_REQUEST['BlCh'];
            echo "<br><p>Normal Nucleoli:" . $_REQUEST['NoNu'];
            echo "<br><p>Mitosis: " . $_REQUEST['Mito'];

            $a=$_REQUEST['CT'];
            $b=$_REQUEST['UCSize'];
            $c=$_REQUEST['UCShape'];
            $d=$_REQUEST['MC'];
            $e=$_REQUEST['SEC'];
            $f=$_REQUEST['BaNu'];
            $g=$_REQUEST['BlCh'];			
            $h=$_REQUEST['NoNu'];
            $i=$_REQUEST['Mito'];	
               
    }
?>

<?
if ($i){
if(!strncmp(gethostname(),'sacan',5)) require_once getenv('AHMETLIBPHP').'/ahmet.php';


$MLEXE='matlab';
if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN'){
	if(file_exists($try='C:\Matlab 2016b\bin\matlab.exe')) $MLEXE=$try;
}
else{
	#On MAC, matlab is probably on the path already. So, nothing to do.
}

$cmd="\"$MLEXE\" -nosplash -logfile runmatlab.out -r \"disp(cancer_data($a,$b,$c,$d,$e,$f,$g,$h,$i));\"";
set_time_limit(100); #extend maximum run time for php so it doesn't terminate us.
$out=exec($cmd);
sleep(60); #wait some time for matlab to complete...

echo "<p>Our classification system indicates the entered data to be the following tissue type:</p> <pre>".file_get_contents('runmatlab.out')."</pre>";

}
?>
</body>
</html>
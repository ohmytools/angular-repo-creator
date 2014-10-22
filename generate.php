<?php 
echo "Angular App Path:/";
$path = readline();
echo "Angular App Name:";
$app = readline();
$path = $path."/".$app."/";
mkdir($path);

#create template for app
echo $app;
$fh = fopen($path.$app.".js", "w+");
fwrite($fh, "var app = angular.module('".$app."', ['ngResource','ngRoute']);");
fclose($fh);
#install with bower
/*exec("bower install angularjs");
exec("bower install angular-resource");
exec("bower install angular-route");
exec("bower install bootstrap");
exec("bower install jquery");*/

 ?>
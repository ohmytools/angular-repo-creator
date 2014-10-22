<?php 
echo "Angular App Path:/";
$path = readline();
echo "Angular App Name:";
$app = readline();
$path = $path."/".$app."/";
if(!file_exists($path))
mkdir($path);

#create template for app
$fh = fopen($path."app.js", "w+");
fwrite($fh, "var app = angular.module('".$app."', ['ngResource','ngRoute']);");
fclose($fh);
#create routes for app
$fh = fopen($path."routes.js", "w+");
fwrite($fh, 'app.config(function ($routeProvider) {
	$routeProvider.when(\'/\', {
		templateUrl:\'/html/home.html\',
		controller: \'AuthCtrl\'
	});
});');
fclose($fh);
#install with bower
/*exec("bower install angularjs");
exec("bower install angular-resource");
exec("bower install angular-route");
exec("bower install bootstrap");
exec("bower install jquery");*/

echo "done...\n";

 ?>
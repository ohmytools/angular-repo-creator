<?php 
echo "Angular App Path:/";
$path = readline();
echo "Angular App Name:";
$app = readline();
$path = $path."/".$app."/";
mkdir($path,755,true);

#install with bower
/*exec("bower install angularjs");
exec("bower install angular-resource");
exec("bower install angular-route");
exec("bower install bootstrap");
exec("bower install jquery");*/

 ?>
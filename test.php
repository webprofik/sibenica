<?
$slovo="Ahoj";
$num=strlen($slovo);
$num=$num-1;
session_start();



for($i=0; $i<=$num; $i++) {
	$_SESSION[$i] = $slovo[$i];
}

function restart($num){
for($i=0; $i<=$num; $i++){
	 
	
	echo $_SESSION[$i."r"];
	
}
}


function start($num){
for($i=0; $i<=$num; $i++){
	$_SESSION[$i."r"] = "_ "; 
	
	echo $_SESSION[$i."r"];
	
}
}
function test($test, $num){
	for($i=0; $i<=$num; $i++) {
	if ($_SESSION[$i] == $test)
		{
			$_SESSION[$i."r"] = $_SESSION[$i];
			echo $_SESSION[$i."r"];
		}
		else {echo $_SESSION[$i."r"];}
	

   
}
	
}




if ($_GET["tip"])
{
$test =$_GET["tip"];
test($test, $num);
$i=1;
echo ${$i."r"};
echo ${0};

}
else{start($num);}


?>


<form method="get">
							    <br>
							    <div class="form-group"><label for="password">Tip</label><input class="form-control" type="name" id="name" name="tip" required></div>
								<br><br><br>
								<button class="btn btn-success btn-block" type="submit">Tipnuť</button>
						    </form>
<?php

require_once("config.php");
//Log the user out
if(isUserLoggedIn())
{
	destroySession("ThisUser");
	//destroySession("NEWSESSION");


}
header("Location:index.php");
die();
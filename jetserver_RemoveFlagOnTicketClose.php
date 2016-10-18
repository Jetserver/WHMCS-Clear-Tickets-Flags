<?php
/*
*
* Remove Flag On Ticket Close
* Created By Idan Ben-Ezra
*
* Copyrights @ Jetserver Web Hosting
* www.jetserver.net
*
* Hook version 1.0.0
*
**/

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function jetserverRemoveFlagOnTicketClose_removeFlag($vars)
{
	$sql = "UPDATE tbltickets
		SET flag = 0
		WHERE id = '{$vars['ticketid']}'";
	mysql_query($sql);
}

add_hook('TicketClose', 0, 'jetserverRemoveFlagOnTicketClose_removeFlag');

?>
<?php
	function getStatus($ip, $port)
	{
		$socket = @fsockopen($ip, $port, $errorNo, $errorStr, 2);
		if (!$socket) return false;
		else return true;
	}

	function status()
	{
		$file = "servers.xml";
		if(file_exists($file))
		{
			$servers = file_get_contents("servers.xml");
			if (trim($servers) == '')
			{	
				$content = "<?xml encoding=\"UTF-8\"?><servers></servers>";
				file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
			}
			else
			{
				$servers = simplexml_load_file("servers.xml");
				foreach ($servers as $server)
				{
					echo "<tr>";
					echo "<td>".$server->name."</td>";
					if (getStatus((string)$server->host, (string)$server->port))
					{
						echo "<td class=\"status\"><span class=\"online\">Online</span></td>";
					}
					else 
					{
						echo "<td class=\"status\"><span class=\"offline\">Offline</span></td>";
					}
				}
			}
		}
		else
		{
			$content = "<?xml encoding=\"UTF-8\"?><servers></servers>";
			file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
		}
	}
?>
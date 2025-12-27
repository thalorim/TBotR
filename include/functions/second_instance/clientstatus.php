<?php 

function clientstatus()
	{
	global $config;
	global $tsAdmin;
	global $user;
	global $groups;	
	global $footer;
	global $language;
	$interval = intervaltosecond($config['function']['clientstatus']['interval']);
	$loopdate3 = date('Y-m-d G:i:s');
	
	if(ready($loopdate3,$config['function']['clientstatus']['datazero2'], intervaltosecond($config['function']['clientstatus']['interval2'])) == true)
						{
							$changedesc = true;
							$config['function']['clientstatus']['datazero2'] = $loopdate3;
						}
						else
						{
							$changedesc = false;
						}
	
	foreach($config['function']['clientstatus']['aalgroup'] as $group)
	{
		$usersgroup = $tsAdmin->serverGroupClientList($group, $names = true);
		foreach($usersgroup['data'] as $client)
		{
			foreach($config['function']['clientstatus']['info'] as $number)
			{
				if($client['cldbid'] == $number['dbid'])
				{
					$clientfind = $tsAdmin->clientFind($client['client_nickname']);
					if(!empty($clientfind['data']))
					{
						$status = "ONLINE";
						$statusEmoji = "🟢";
					}
					else
					{
						$status = "OFFLINE";
						$statusEmoji = "🔴";
					}
					$channelname = str_replace('[RANG]', groupname($group), $config['function']['clientstatus']['channelname']);
					$channelname = str_replace('[NICK]', $client['client_nickname'], $channelname);
					$channelname = str_replace('[STATUS]', $statusEmoji." ".$status, $channelname);
					$tsAdmin->channelEdit($number['channel'], array('channel_name' => $channelname));
					if($changedesc)
					{
							
						$clientinfo = $tsAdmin->clientDbInfo($client['cldbid']);
						
						if($status == "ONLINE")
						{
							$data1 = time();
							$data2 = $clientinfo['data']['client_lastconnected'];
							$difference = $data1 - $data2;
							$m = floor($difference / 60);
							$h = floor($m/60);
							$m = $m-($h*60);
							
							$statusText = "[color=green][b]".$status."[/b][/color]\n⏱️ ".$language['clientstatus']['activeby'].": [b]".$h."h ".$m."m[/b]"."\n";
						}
						else
						{
							$statusText = "[color=red][b]".$status."[/b][/color]\n🕐 ".$language['clientstatus']['lastconnection'].": [b]".date('Y-m-d G:i:s',$clientinfo['data']['client_lastconnected'])."[/b]\n";
						}
						
						$desc = "[center][size=15][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n";
						$desc .= "[center][size=14][b]👤 USER PROFILE[/b][/size][/center]\n";
						$desc .= "[center][size=15][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n\n";
						
						$desc .= "[size=11]";
						if($config[2]['bot']['icons']['enable'])
						{
							$desc .= "[img]".$config[2]['bot']['icons']['adress'].$group.".png[/img] ";
						}
						else
						{
							$desc .= "⭐ ";
						}
						$desc .= "[b][URL=client://1/".$client['client_unique_identifier']."]".$client['client_nickname']."[/url][/b]\n";
						$desc .= "[size=10][color=#888888]━━━━━━━━━━━━━━━━━━━━━━[/color][/size]\n\n";
						
						$desc .= "💻 [b]Status:[/b] ".$statusText;
						$desc .= "🔌 [b]".$language['clientstatus']['connections'].":[/b] [b]".$clientinfo['data']['client_totalconnections']."[/b]\n";
						
						if($config['function']['clientstatus']['steamstatus'])
						{
							$desc .= "\n[center][size=12][b]━━━ 🎮 STEAM STATUS ━━━[/b][/size][/center]\n\n";
							
							$api = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$config['function']['clientstatus']['steamapi']."&steamids=".$number['steamid'];
							$steamuser = json_decode(file_get_contents($api));
							$steam_status = $steamuser->response->players[0]->personastate;
							
							switch($steam_status)
							{
								case 0: 
									$steam_status = "🔴 [color=red][b]Offline[/b][/color]\n🕐 ".$language['clientstatus']['lastseen'].": [b]".date('Y-m-d G:i:s', $steamuser->response->players[0]->lastlogoff)."[/b]"; 
									break;
								case 1: 
									$steam_status = "🟢 [color=green][b]Online[/b][/color]"; 
									break;
								case 2: 
									$steam_status = "🟡 [color=blue][b]".$language['clientstatus']['busy']."[/b][/color]"; 
									break;
								case 3: 
									$steam_status = "🟡 [color=blue][b]".$language['clientstatus']['away']."[/b][/color]"; 
									break;
								case 4: 
									$steam_status = "🟡 [color=blue][b]".$language['clientstatus']['snooze']."[/b][/color]"; 
									break;
								case 5: 
									$steam_status = "🔵 [color=blue][b]".$language['clientstatus']['lookingtotrade']."[/b][/color]"; 
									break;
								case 6: 
									$steam_status = "🔵 [color=blue][b]".$language['clientstatus']['lookingtoplay']."[/b][/color]"; 
									break;
							}
							
							if(isset($steamuser->response->players[0]->gameextrainfo))
							{
								$gamename = $steamuser->response->players[0]->gameextrainfo;
								$game = "🎮 [b]".$language['clientstatus']['currentlyplaying'].":[/b] [color=#4A90E2][b]".$gamename."[/b][/color]\n";
							}
							else
							{
								$game = "🎯 [b]".$language['clientstatus']['curentlynotplaying']."[/b]\n";
							}
							
							$nicksteam = $steamuser->response->players[0]->personaname;
							$profilelink = $steamuser->response->players[0]->profileurl;
					
							$desc .= "👤 [b]Steam Nick:[/b] [URL=".$profilelink."][b]".$nicksteam."[/b][/URL]\n";
							$desc .= "💻 [b]Status:[/b] ".$steam_status."\n";
							$desc .= $game;
							$desc .= "\n[center][URL=".$profilelink."][size=10][b]🔗 View Steam Profile[/b][/size][/URL][/center]\n";
						}
						
						$desc .= "[/size]\n";
						$desc .= "[center][size=15][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n";
						$desc .= $footer;
						
						$tsAdmin->channelEdit($number['channel'], array('channel_description' => $desc));
					}
				}		
			}
		}	
	}
	
	unset($changedesc);
	unset($channelname);
	unset($clientinfo);
	unset($status);
	unset($statusEmoji);
	unset($statusText);
	unset($data1);
	unset($data2);
	unset($difference);
	unset($h);
	unset($m);
	unset($desc);
	unset($steam_status);
	unset($api);
	unset($steamuser);
	unset($gamename);
	unset($game);
	unset($nicksteam);
	unset($profilelink);
	unset($group);
	unset($usersgroup);
	unset($names);
	unset($number);
	unset($clientfind);
	unset($http_response_header);
}
		
?>
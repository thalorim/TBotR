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
						
						// Header
						$desc = "[center]═══════════════════════════[/center]\n";
						$desc .= "[center][size=13][b]👤 USER PROFILE 👤[/b][/size][/center]\n";
						$desc .= "[center]═══════════════════════════[/center]\n\n";
						
						// User nickname with rank icon
						$desc .= "[size=12]";
						if($config[2]['bot']['icons']['enable'])
						{
							$desc .= "[center][img]".$config[2]['bot']['icons']['adress'].$group.".png[/img][/center]\n";
						}
						
						$desc .= "[center][b][size=13][URL=client://1/".$client['client_unique_identifier']."]".$client['client_nickname']."[/URL][/size][/b][/center]\n";
						$desc .= "[center]───────────────────────[/center]\n\n";
						
						// TeamSpeak Status Section
						$desc .= "[size=11][b]💻 TEAMSPEAK STATUS[/b][/size]\n\n";
						
						if($status == "ONLINE")
						{
							$data1 = time();
							$data2 = $clientinfo['data']['client_lastconnected'];
							$difference = $data1 - $data2;
							$m = floor($difference / 60);
							$h = floor($m/60);
							$m = $m-($h*60);
							
							$desc .= "   🟢 [color=green][b]ONLINE[/b][/color]\n";
							$desc .= "   ⏱️ Active for: [b]".$h."h ".$m."m[/b]\n";
						}
						else
						{
							$desc .= "   🔴 [color=red][b]OFFLINE[/b][/color]\n";
							$desc .= "   🕐 Last seen: [b]".date('Y-m-d H:i:s',$clientinfo['data']['client_lastconnected'])."[/b]\n";
						}
						
						$desc .= "   🔌 Total connections: [b]".$clientinfo['data']['client_totalconnections']."[/b]\n\n";
						
						// Steam Section
						if($config['function']['clientstatus']['steamstatus'])
						{
							$desc .= "[center]═══════════════════════════[/center]\n";
							$desc .= "[size=11][center][b]🎮 STEAM PROFILE 🎮[/b][/center][/size]\n";
							$desc .= "[center]═══════════════════════════[/center]\n\n";
							
							$api = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$config['function']['clientstatus']['steamapi']."&steamids=".$number['steamid'];
							$steamuser = json_decode(file_get_contents($api));
							
							if(isset($steamuser->response->players[0]))
							{
								$steam_status = $steamuser->response->players[0]->personastate;
								$nicksteam = $steamuser->response->players[0]->personaname;
								$profilelink = $steamuser->response->players[0]->profileurl;
								
								$desc .= "   👤 Steam name: [URL=".$profilelink."][b]".$nicksteam."[/b][/URL]\n";
								$desc .= "   💻 Status: ";
								
								switch($steam_status)
								{
									case 0: 
										$desc .= "🔴 [color=red][b]Offline[/b][/color]\n";
										if(isset($steamuser->response->players[0]->lastlogoff))
										{
											$desc .= "   🕐 Last online: [b]".date('Y-m-d H:i:s', $steamuser->response->players[0]->lastlogoff)."[/b]\n";
										}
										break;
									case 1: 
										$desc .= "🟢 [color=green][b]Online[/b][/color]\n"; 
										break;
									case 2: 
										$desc .= "🟡 [color=#FFA500][b]Busy[/b][/color]\n"; 
										break;
									case 3: 
										$desc .= "🟡 [color=#FFA500][b]Away[/b][/color]\n"; 
										break;
									case 4: 
										$desc .= "💤 [color=#FFA500][b]Snooze[/b][/color]\n"; 
										break;
									case 5: 
										$desc .= "🔵 [color=#4A90E2][b]Looking to Trade[/b][/color]\n"; 
										break;
									case 6: 
										$desc .= "🔵 [color=#4A90E2][b]Looking to Play[/b][/color]\n"; 
										break;
								}
								
								// Game status
								if(isset($steamuser->response->players[0]->gameextrainfo))
								{
									$gamename = $steamuser->response->players[0]->gameextrainfo;
									$desc .= "   🎮 Currently playing: [color=#4A90E2][b]".$gamename."[/b][/color]\n";
								}
								else
								{
									$desc .= "   🎯 Not playing any game\n";
								}
								
								$desc .= "\n[center][URL=".$profilelink."][b]🔗 View Steam Profile[/b][/URL][/center]\n";
							}
							else
							{
								$desc .= "[center][color=red][b]⚠️ Steam profile not found[/b][/color][/center]\n";
							}
						}
						
						$desc .= "\n[center]═══════════════════════════[/center]\n";
						$desc .= "[/size]";
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
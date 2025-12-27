<?php
		
	function adminslist()
	{
		global $footer;
		global $config;
		global $tsAdmin;
		
		$list = "[center][size=16][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n";
		$list .= "[center][size=16][b]⭐ ADMIN TEAM ⭐[/b][/size][/center]\n";
		$list .= "[center][size=16][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n\n";
		
		$totalOnline = 0;
		$totalOffline = 0;
		
		foreach($config['function']['adminslist']['group'] as $group)
		{	
			$groupname = groupname($group);
			$groupclients = $tsAdmin->serverGroupClientList($group, $names = true);
			$countclientsnumber = count($groupclients['data']);
			
			// Count online/offline for this group
			$groupOnline = 0;
			$groupOffline = 0;
			
			foreach($groupclients['data'] as $client)
			{
				$nick_array = $tsAdmin->clientFind($client['client_nickname']);
				if($nick_array['data']) {
					$groupOnline++;
				} else {
					$groupOffline++;
				}
			}
			
			$totalOnline += $groupOnline;
			$totalOffline += $groupOffline;
			
			// Group header with stats
			$list .= "[center][size=14][b][color=#4A90E2]━━━ ".$groupname." ━━━[/color][/b][/size][/center]\n";
			$list .= "[center][size=10]🟢 Online: [color=green][b]".$groupOnline."[/b][/color] | 🔴 Offline: [color=red][b]".$groupOffline."[/b][/color] | 📊 Total: [b]".$countclientsnumber."[/b][/size][/center]\n\n";
			
			// List admins
			foreach($groupclients['data'] as $client)
			{
				$nick = $client['client_nickname'];
				$nick_array = $tsAdmin->clientFind($nick);
				
				if($nick_array['data'])
				{
					$status = "🟢 [color=green][b]ONLINE[/b][/color]";
					$emoji = "✅";
				}
				else
				{
					$status = "🔴 [color=red][b]OFFLINE[/b][/color]";
					$emoji = "❌";
				}
				
				$list .= "   ".$emoji." [size=11][b][URL=client://1/".$client['client_unique_identifier']."]".$nick."[/URL][/b] - ".$status."[/size]\n";
			}
			$list .= "\n";
		}
		
		// Footer with total stats
		$list .= "[center][size=16][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n";
		$list .= "[center][size=12][b]📊 TOTAL STATISTICS[/b][/size][/center]\n";
		$list .= "[center][size=11]🟢 [color=green][b]".$totalOnline."[/b][/color] Online | 🔴 [color=red][b]".$totalOffline."[/b][/color] Offline | 👥 [b]".($totalOnline + $totalOffline)."[/b] Total Admins[/size][/center]\n";
		$list .= "[center][size=16][b]━━━━━━━━━━━━━━━━━━[/b][/size][/center]\n";
		
		$tsAdmin->channelEdit($config['function']['adminslist']['channel'], array('channel_description' => $list.$footer));
	}
?>
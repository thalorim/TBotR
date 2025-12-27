<?php
$config['control']['enable'] = true;
$config['control']['speed'] = 60;
$config['control']['max_ram'] = 100;
////////////////////////////////////////////
////////////////DO NOT CHANGE///////////////
////////////////////////////////////////////
$config['bot']['loop']['interval']=Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0);
$config['bot']['loop']['datazero']= '1970-01-01 00:00:00';
$config['bot']['loop']['enable'] = true;

////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
$config[1]['server']['defaultchannel'] = 28;
$config[1]['server']['defaultgroup'] = 8;

////////////////////////////////////////////
/////////////////LNGUAGE////////////////////
////////////////////////////////////////////
$config['bot']['laguage'] = "en";  //language
////////////////////////////////////////////
/////////////FIRST INSTANCE/////////////////
////////////////////////////////////////////
$config[1]['enable'] = true; 

$config[1]['server']['ip'] = '127.0.0.1'; //server ip
$config[1]['server']['port'] = 9987; //server port
$config[1]['server']['queryport'] = 10011; //server query port
$config[1]['query']['login'] = 'serveradmin'; //server query username
$config[1]['query']['password'] = ''; //server query password
$config[1]['bot']['name'] = "#1"; //bot name
$config[1]['bot']['channel'] =  28; //bot default channel
$config[1]['bot']['speed'] = 1; //bot interval

$config[1]['functions'] = Array('day', 'hour','useronline' ,'register' ,'recordonline' ,'afk' ,'pgroup' ,'banlist' ,'channelscount' ,'visitors', 'packetloss', 'ping', 'uptime', 'generatebanner', 'channelzoneclient', 'adminslist', 'timeleft');

		// Day
//Function generates date in channel name
 $config['function']['day'] = Array(
	'enable' => true,
	'channel' => 1096,  //channel id
	'channelname' => "[cspacer0]● [DAY].[MONTH].[YEAR] ●",  //channel name, [DAY], [MONTH], [YEAR]
	'interval' => Array('days' => 0, 'hours' => 1, 'minutes' => 0, 'seconds' => 0),  //interval
	'datazero' => '1970-01-01 00:00:00',
 );

		// Hour
//Function generates hour in channel name
$config['function']['hour'] = Array(
	'enable' => true,
	'channel' => 9,  //channel id
	'channelname' => "[cspacer0]● Time: [HOUR]:[MINUTES] ●",  //channel name, [HOUR],[MINUTES]
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// User online
//Function generates number of users online in channel name
$config['function']['useronline'] = Array(	
	'enable' => true,
	'channel'=> 8,  //channel id
	'channelname' => "[cspacer]● Online: [ONLINE] ([%]%)●",  //channel name  [ONLINE] - users online, [%] - server usage percentage
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Register
//Function assigns registration rank after entering specified channel
$config['function']['register'] = Array(
	'enable' => true,
	'allgroup' => Array(14,15,87),	//all groups	
	'channeldelgroup' => 1061,  //channel id where registration ranks will be removed
	'info' => Array(
		1 => Array(
			'group' => 14,  //group id
			'channel' => 90  //channel id
		),
		2 => Array(
			'group' => 15,
			'channel' => 91,
		),
		3 => Array(
			'group' => 87,
			'channel' => 528
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Record online
//Function displays record number of users online in channel name
$config['function']['recordonline'] = Array(
	'enable' => true,
	'channel' => 11, //channel id
	'channelname' => "[cspacer]●Record online: [RECORD] ●",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// AFK
//Function manages AFK users
$config['function']['afk'] = Array(
	'enable' => false,
	'mode' => 2, //1 - move to channel; 2 - assign rank,
	'idlechannel' => 677, //channel id, if mode = 1
	'afkgroup' => 89, //afk group id, if mode = 2
	'idletime' => 30,  //Time after which user will be moved, if mode = 2 
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Poke group
//Function pokes selected groups at specified intervals
$config['function']['pgroup'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array(
			'group' => 8, //group id
			'message' => "Remember to register (registration available in help zone)."  //message
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 20, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Ban list
//Function generates ban list in channel description
$config['function']['banlist'] = Array(
	'enable' => true,
	'channel_name_enable' => true, //enable channel name generation
	'channel' => 111,  //channel id
	'channel_name' => "[cspacer]● Ban list [COUNT]●",  //channel name, if enabled  [COUNT] - number of bans
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 30, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// channels count
//Function generates number of channels in channel name
$config['function']['channelscount'] = Array(
	'enable' => true,
	'channel' => 648,  //channel id
	'channelname' => "[cspacer]● Total channels: [COUNT] ●",  //channel name, [COUNT] - number of channels
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 2, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Visitors
//Function generates number of visits in channel name
$config['function']['visitors'] = Array(
	'enable' => true,
	'channel' => 148,  //channel id
	'channelname' => "[cspacer0]●Visits: [COUNT] (since reset)●",  //channel name, [COUNT] - number of visits
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Packet loss
//Function generates average packet loss in channel name
$config['function']['packetloss'] = Array(
	'enable' => false,
	'channel' => 1101,  //channel id
	'channelname' => "[cspacer0]●Average packet loss: [COUNT]% ●",  //channel name, [COUNT] - packet loss
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Ping
//Function generates average ping in channel name
$config['function']['ping'] = Array(
	'enable' => false,
	'channel' => 992,  //channel id
	'channelname' => "[cspacer0]●Average ping: [COUNT] ms●",  //channel name, [COUNT] - average ping
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Uptime
//Function generates server uptime in channel name
$config['function']['uptime'] = Array(
	'enable' => false,
	'channel' => 992,  //channel id
	'channelname' => "[cspacer0]●Uptime: [COUNT]●",  //channel name, [COUNT] - server uptime
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Generate banner
//Function generates banner
$config['function']['generatebanner'] = Array(
	'enable' => true,
	
//users online	
	'useronline' => Array(
	'enable' => true,
	'color' => Array(255,255,255),  //rgb color
	'font' => "brlnsdb",  //font (arial, brlnsdb, calibri, katana, tahoma)
	'position' => Array(40,0,105,171)  // (size, rotation, position x, position y)
	),

//admins online count	
	'adminonline' => Array(
	'enable' => true,
	'adminsgroup' => Array(6,30),
	'color' => Array(255,255,255),
	'font' => "brlnsdb",
	'position' => Array(40,0,850,171)
	),

//record online
	'recordonline' => Array(
	'enable' => false,
	'color' => Array(255,255,255),
	'font' => "brlnsdb",
	'position' => Array(40,0,105,325)
	),

//month record	
	'monthrecord' => Array(
	'enable' => false,
	'color' => Array(255,255,255),
	'font' => "brlnsdb",
	'position' => Array(40,0,105,325)
	),

//time
	'time' => Array(
	'enable' => true,
	'color' => Array(255,255,255),
	'font' => "brlnsdb",
	'position' => Array(40,0,440,103)
	),

//date	
	'date' => Array(
	'enable' => false,
	'color' => Array(255,255,255),
	'font' => "brlnsdb",
	'position' => Array(40,0,105,325)
	),
	
	'image' => "include/cache/bg.png",  //banner file location
	'savethere' => "/var/www/html/image.png",  //location where banner will be saved
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Channel zone clients count
//Function generates number of users in specified zone in channel name
$config['function']['channelzoneclient'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array(
			'channel' => 1214,  //channel id
			'channelname' => "[cspacer0]Clients: [count]",  //channel name, [count] - number of clients
			'channelzonestart' => 265,  //channel id where user counting starts
			'channelzonestop' => 1212  //channel id where user counting ends
		),
		2 => Array(
			'channel' => 1213,
			'channelname' => "[cspacer1]Clients: [count]",  
			'channelzonestart' => 35,
			'channelzonestop' => 307
		),
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Admins list
//Function generates admin list in channel name
$config['function']['adminslist'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'group' => Array(30, 6),  //all admin groups
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Time left
//Function displays remaining time to event in channel name
$config['function']['timeleft'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'channel' => 992,  //channel id
			'channelname' => "admin birthday: [left]",  //channel name  [left] - time remaining
			'time' => "27.11.2018 12:30", // d.m.YYYY h:m
			'channelnameafter' => "Happy"  //channel name after date passes
		),
		2 => Array(
			'channel' => 1058,
			'channelname' => "admin birthday: [left]",
			'time' => "31.12.2017 0:0", // d.m.YYYY h:m
			'channelnameafter' => "Happy"
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

/////////////////////////////////////////
/////////////SECOND INSTANCE/////////////
/////////////////////////////////////////
$config[2]['enable'] = true;

$config[2]['server']['ip'] = '127.0.0.1'; //server ip
$config[2]['server']['port'] = 9987; //server port
$config[2]['server']['queryport'] = 10011; //server query port
$config[2]['query']['login'] = 'serveradmin'; //server query username
$config[2]['query']['password'] = ''; //server query password
$config[2]['bot']['name'] = "#2"; //bot name
$config[2]['bot']['channel'] =  28; //bot default channel
$config[2]['bot']['speed'] = 1; //bot interval
$config[2]['bot']['icons']['enable'] = true;  //icon generation
$config[2]['bot']['icons']['localization'] = "/var/www/html/icon/icons/";  //icon generation location
$config[2]['bot']['icons']['adress'] = "https://xtrust.pl/icon/icons/";  //icon web address

$config[2]['functions'] = Array('groupclientcount', 'privatechannel', 'checkchannels', 'servername', 'clientstatus', 'timechannel', 'imieniny', 'monthrecord', 'youtube', 'twitch', 'welcomemessage', 'pokeonchannel', 'vpndetection', 'advertisement', 'botinfo', 'ddosdetection', 'antyrecording', 'nickcontrol', 'gameinfo');

		// Group client count
//Function generates number of users in specified server group in channel name
$config['function']['groupclientcount'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array  
			(
			'channel' => 286,  //channel id
			'group' => 30,  //group id
			'channelname' => '[cspacer][RANG] Online: [ONLINE] / [MAX]',  //channel name, [RANG] - rank name, [ONLINE] - users online, [MAX] - total users
		),
		2 => Array  
			(
			'channel' => 287,
			'group' => 6,  
			'channelname' => '[cspacer][RANG] Online: [ONLINE] / [MAX]',
		),
		3 => Array  
			(
			'channel' => 485,
			'group' => 28,  
			'channelname' => '[cspacer][ONLINE]/[MAX]',
		)
		
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Private channel
//Function assigns private channels to users
$config['function']['privatechannel'] = Array(
	'enable' => true,
	'clientonchannel' => 93, //channel id where user can get private channel
	'needgroup' => Array(14,15),  //required groups to get channel
	'channelzone' => 265, //private channel zone
	'admingroup' => 5,  //channel admin group id
	'subchannels' => 2, //number of subchannels
	'channeltopic' => "#free", //topic in free channels
	'messageafter' => "Remember to change password",  //message after receiving channel
	'channelname' => "Private channel - [NICK]",  //channel name
	'subchannelname' => "Subchannel",  //subchannel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Check channels
//Function checks private channels
$config['function']['checkchannels'] = Array(
	'enable' => true,
	'channelzone' => 265,  //private channel zone
	'channelzonename' => "[cspacer]Private channels: [COUNT]",  //zone main channel name, [COUNT] - number of private channels
	'channeltopic' => "#free", //topic in free channels
	'freechannelscount' => 5,  //minimum number of free channels
	'channelslist' => 265,  //channel id where free and occupied channels will be listed
	'channelname' => "[NUMBER]. Private channel - free",  //Free channel name
	'intervaldelete' => 7, //number of days after which channel will be deleted 
	'setdate' => true, //set current date if someone is on channel
	'checkname' => true, //check channel names
	'block' => "fuck,shit,ass,bitch,damn,crap,piss,dick,cock,pussy,TeamSpeakUser,[RooT],[HSA]", //blocked words in channel names
	'message' => "Change channel name",  //message if channel name contains blocked word
	'intervalname' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0),  //interval for checking channel names
	'datazeroname' => '1970-01-01 00:00:00',
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Server name
//Function changes server name 
$config['function']['servername'] = Array(
	'enable' => true,
	'channelname' => "xTrust.pl [ONLINE]/[MAX]",  //server name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
		// Client status
//Function generates user status in channel name and detailed information in channel description
$config['function']['clientstatus'] = Array(
	'enable' => true,
	'aalgroup' => Array(6, 30),  //all group ids
	'steamstatus' => true,  //steam status
	'steamapi' => "A3F4695EEF3317F8EE14941692AA7BA6",  //steam api
	'info' => Array(
		1 => Array(
			'dbid' => 2, //user database id
			'channel' => 184,  //channel id
			'steamid' => 76561198101162681  //user steam id
			),  //steamid64
		2 => Array(
			'dbid' => 1824,
			'channel' => 190,
			'steamid' => 76561198257069727
		),
		3 => Array(
			'dbid' => 797,
			'channel' => 187,
			'steamid' => 76561198088102844
		),
		4 => Array(
			'dbid' => 636,
			'channel' => 188,
			'steamid' => 76561197963803454
		),
		5 => Array(
			'dbid' => 1283,
			'channel' => 189,
			'steamid' => 76561198167928642
		),
		6 => Array(
			'dbid' => 12,
			'channel' => 186,
			'steamid' => 76561198345510948
		),
	
	),
	'channelname' => "[cspacer]◥◣━[RANG]┃[NICK]┃[STATUS]━◢◤",  //channel name, [RANG] - rank, [NICK] - user name, [STATUS] - teamspeak status
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10),  //interval
	'interval2' => Array('days' => 0, 'hours' => 0, 'minutes' => 2, 'seconds' => 0),  //interval for updating information in channel descriptions
	'datazero' => '1970-01-01 00:00:00',
	'datazero2' => '1970-01-01 00:00:00'
);

		// Time channel
//Function opens channel at specified hours
$config['function']['timechannel'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'channel' => 992,  //channel id
			'channelnameon' => "Working",  //channel name when available
			'channelnameoff' => "Not working",  //channel name when unavailable
			'timeon' => "9:54",
			'timeoff' => "19:51"
		),
		2 => Array(
			'channel' => 993,
			'channelnameon' => "Working2", 
			'channelnameoff' => "Not working2",
			'timeon' => "8:00",
			'timeoff' => "9:53"
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1),  //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Name days (for Polish users)
//Function generates name day celebrations in channel name
$config['function']['imieniny'] = Array(
	'enable' => false,
	'channel' => 992,  //channel id
	'channelname' => "Name days: [NAME]",  //channel name, [NAME] - names
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1),  //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Month record
//Function generates month record in channel name
$config['function']['monthrecord'] = Array(
	'enable' => true,
	'channel' => 857,//channel id
	'channelname' => "[cspacer]● Month record: [RECORD] ●",  //channel name, [RECORD] - record
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Youtube
//Function displays YouTube channel subscriber count in channel name and detailed information in description
$config['function']['youtube'] = Array(
	'enable' => true,
	'youtubeapi' => "AIzaSyDovcc8n_eHnRuTwKItjJLaPkFwG-u7lWk",  //youtube api
	'channnelname' => "[cspacer]✯[NICK] - [SUBSCOUNT]✯",  //channel name, [NICK] - channel name, [SUBSCOUNT] - subscriber count
	'info' => Array(
		1 => Array(
			'channelid' => 611,  //channel id
			'youtubechannel' => "UCswiY-euT4t-0gq-_2dZwKA"  //youtube channel
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Twitch
//Function displays Twitch stream status in channel name and detailed information in description
$config['function']['twitch'] = Array(
	'enable' => false,
	'twitchapi' => "352ei7jf3jq2mu6jvvovjy4qwv6huc",  //twitch api
	'channelname' => "[cspacer]✯[NICK] - [STATUS]✯",  //channel name, [NICK] - channel name,  [STATUS] - status 
	'info' => Array(
		1 => Array(
			'channelid' => 992,  //channel id
			'channelname' => "izakooo"  //channel name
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Welcome message
//Function generates welcome message
$config['function']['welcomemessage'] = Array(
	'enable' => true,
	'mode' => 1,  //1 - poke, 2 - send message
	'message' => "		[b]Currently [online]/[max] people online![/b]\n Are you a YouTuber/streamer? Write to us!",  //message, [online] - users online, [max] - number of slots
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Poke on channel
//Function pokes selected groups when someone is on specified channel
$config['function']['pokeonchannel'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array(
			'channel' => 33,  //channel id
			'pokegroup' => Array(6,30),  //group ids to poke
			'message' => "[NICK] has a complaint"  //message
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// VPN detection
//Function detects VPN in users (currently not working)
$config['function']['vpndetection'] = Array(
	'enable' => false,
	'ignore' => Array(6, 30),  //ignored groups
	'key' => "111111-222222-333333-444444",
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// advertisement
//Function sends message to server at specified intervals
$config['function']['advertisement'] = Array(
	'enable' => false,
	'message' => "Message [online]/[max]",  //message [online] - users online, [max] - total users
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Bot info
//Function displays bot instance information in channel description
$config['function']['botinfo'] = Array(
	'enable' => true,
	'channel' => 1074, //channel id
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 2, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Ddos detection
//Function detects DDoS attack and sends message to server
$config['function']['ddosdetection'] = Array(
	'enable' => true,
	'packetloss' => 10, //average packet loss on server
	'message' => "[b]DDoS attack detected[/b]",  //message
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Anti recording
//Function detects people recording on server
$config['function']['antyrecording'] = Array(
	'enable' => true,
	'mode' => 2,  // 1 - poke, 2 - kick from server
	'message' => "[b]Turn off recording[/b]",  //message
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Nick control
//Function checks user nicknames
$config['function']['nickcontrol'] = Array(
	'enable' => true,
	'block' => "fuck,shit,ass,bitch,damn,crap,piss,dick,cock,pussy,TeamSpeakUser,[RooT],[HSA]", //blocked words
	'message' => "Change nickname",  //message
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Game info
//Function displays game server information in channel names for CS:GO and Minecraft servers added to gametracker.com
$config['function']['gameinfo'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'game' => "csgo",  //game  (csgo - Counter Strike Global Offensive, mc - Minecraft)
			'channel' => 992,  //channel id
			'servername' => "Counter Strike [ONLINE]/[MAX]",  //channel name, [ONLINE] - players online, [MAX] - number of slots
			'serverip' => "137.74.1.201:27195",
		),
		2 => Array(
			'game' => "mc",
			'channel' => 1058,
			'servername' => "Minecraft [ONLINE]/[MAX]",
			'serverip' => "37.187.137.123:25565",
		),
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

/////////////////////////////////////////
/////////////HELP CHANNEL/////////////
/////////////////////////////////////////
$config[3]['enable'] = true;

$config[3]['server']['ip'] = '127.0.0.1'; //server ip
$config[3]['server']['port'] = 9987; //server port
$config[3]['server']['queryport'] = 10011; //server query port
$config[3]['query']['login'] = 'serveradmin'; //server query username
$config[3]['query']['password'] = ''; //server query password
$config[3]['bot']['name'] = "LiveHelp"; //bot name
$config[3]['bot']['channel'] =  28; //bot default channel
$config[3]['bot']['speed'] = 1; //bot interval

$config[3]['functions'] = Array('helpchannel');

		// Help channel
//Function provides automatic help to users
$config['function']['helpchannel'] = Array(
	'channel' => 30,  //channel id
	'channeldesc' => "[COMMAND]",  //channel description, [COMMAND] - commands
	'admingroup' => Array(6, 30),  //admin group ids
	'channeladmingroups' => Array(5,10),  //channel admin group ids
	'bangroup' => 18,  //banning group id on channel
	'commandlist' => "!commands", //command list
	'grouplist' => "!groups",  //command for available groups list
	'adminpokemessage' => "[NICK] needs help!",  //message to admins after using !admin command
	'needgroupall' => Array(14,15),  //required groups to get help
	'ignoredonchannel' => Array(191,292),  //channels where admins are not poked
	'profilelinkenable' => true,  //profile link
	'profilelink' => "xtrust.pl/stats",  //website address
	//registration
	'needgroup' => Array(  
		1 => Array(
			'groupid' => 14,  //group id
			'command' => "!m"  //command
		),
		2 => Array(
			'groupid' => 15,
			'command' => "!k"
		),
	),
	'servergroup' => Array(19,20,21,22,23,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,88,83),  //available server groups
	'maxservergroup' => 6,  //maximum number of groups
	'channeldesctopic' => "[center][size=15][b]Commands[/b][/size][/center]",  //channel description
	'msgtoadminenable' => true, //message to admins, if 4th instance is enabled
	'msgtoadminchannel' => 17, //channel id where admin messages will be displayed
	'msgtoadminmax' => 12,  //maximum number of admin messages
	'msgtoadmindelete' => true,  //delete older messages
	//custom commands
	'info' => Array(
		1 => Array(
	'command' => "!levels",  //command
	'message' => "\n[b]Levels list:[/b]
1 level - 1 hour
2 level - 2 hours
3 level - 4 hours
4 level - 8 hours
5 level - 12 hours
6 level - 18 hours
7 level - 1 day
8 level - 2 days
9 level - 3 days
10 level - 5 days
11 level - 7 days
12 level - 9 days
13 level - 11 days
14 level - 13 days
15 level - 15 days 
16 level - 18 days
17 level - 21 days
18 level - 24 days
19 level - 27 days
20 level - 30 days
21 level - 33 days
22 level - 36 days
23 level - 39 days
24 level - 42 days
25 level - 45 days
26 level - 50 days
27 level - 55 days
28 level - 60 days
29 level - 75 days
30 level - 90 days",  //text to display
	'desc' => "levels list"
	),
		2 => Array(
			'command' => "!vip",
			'message' => "[b]To buy VIP rank or channel, go to [url=http://xtrust.pl]xtrust.pl[/url][/b]",
			'desc' => "VIP information"
		),
	),
	'datazero' => '1970-01-01 00:00:00',  //datazero
	'datazeroadmin' => '1970-01-01 00:00:00'  //datazero admin
);

////////////////////////////////////////////
/////////////fourth INSTANCE/////////////////
////////////////////////////////////////////
$config[4]['enable'] = true;

$config[4]['server']['ip'] = '127.0.0.1'; //server ip
$config[4]['server']['port'] = 9987; //server port
$config[4]['server']['queryport'] = 10011; //server query port
$config[4]['query']['login'] = 'serveradmin'; //server query username
$config[4]['query']['password'] = ''; //server query password
$config[4]['bot']['name'] = "#4"; //bot name
$config[4]['bot']['channel'] =  28; //bot default channel
$config[4]['bot']['speed'] = 5; //bot interval
$config[4]['database']['host'] ='127.0.0.1';  //database host address
$config[4]['database']['login'] = 'phpmyadmin';  //database login
$config[4]['database']['password'] = '';  //database password
$config[4]['database']['dbname'] = 'xTrustbot';  //database name
$config[4]['bot']['idletime'] = 5;  //idle time after which it will be counted
$config[4]['bot']['admins_group'] = Array(30,6);  //admin group ids
$config[4]['bot']['channel_admin_group'] = 5;  //channel admin group id



$config[4]['functions'] = Array('top_active_time_all', 'top_active_time_month', 'top_active_time_week', 'top_time_all', 'top_time_month', 'top_time_week', 'top_idle_time_all', 'top_idle_time_month', 'top_idle_time_week', 'top_connections', 'new_users', 'top_lvl', 'rank');

		// Top time all
//Function displays users with most total time on server in channel description
$config['function']['top_time_all'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top time month
//Function displays users with most monthly time on server in channel description
$config['function']['top_time_month'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top time week
//Function displays users with most weekly time on server in channel description
$config['function']['top_time_week'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);


		// Top active time all
//Function displays users with most total active time in channel description
$config['function']['top_active_time_all'] = Array(
	'enable' => false,
	'channel' => 1058, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top active time month
//Function displays users with most monthly active time in channel description
$config['function']['top_active_time_month'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top active time week
//Function displays users with most weekly active time in channel description
$config['function']['top_active_time_week'] = Array(
	'enable' => true,
	'channel' => 83706, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top idle time all
//Function displays users with most total idle time in channel description
$config['function']['top_idle_time_all'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top idle time month
//Function displays users with most monthly idle time in channel description
$config['function']['top_idle_time_month'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top idle time week
//Function displays users with most weekly idle time in channel description
$config['function']['top_idle_time_week'] = Array(
	'enable' => false,
	'channel' => 992, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top connections
//Function displays users with most connections to server in channel description
$config['function']['top_connections'] = Array(
	'enable' => true,
	'channel' => 83707, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// New users
//Function displays new users in channel description
$config['function']['new_users'] = Array(
	'enable' => true,
	'channel' => 83682, //channel id
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 10, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Top lvl
//Function displays users with highest level in channel description
$config['function']['top_lvl'] = Array(
	'enable' => false,
	'channel' => 1058, //channel id
	'icon' => true, //icons in description, if icon generation is enabled
	'count' => 10,  //number of people to display
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

		// Rank
//Function assigns ranks based on time spent on server
$config['function']['rank'] = Array(
	'enable' => false,
	'type' => 1, // 1 - active time, 2 - total time
	'needrank' => Array(14,15),  //required ranks
		'info' => Array(  //ranks
			1 => Array(52,3600),  
			2 => Array(53,7200),
			3 => Array(54,14400),
			4 => Array(55,28800),
			5 => Array(56,43200),
			6 => Array(57,64800),
			7 => Array(58,86400),
			8 => Array(59,172800),
			9 => Array(60,259200),
			10 => Array(61,432000),
			11 => Array(62,604800),
			12 => Array(63,777600),
			13 => Array(64,950400),
			14 => Array(65,1123200),
			15 => Array(66,1296000),
			16 => Array(67,1555200),
			17 => Array(68,1814400),
			18 => Array(69,2073600),
			19 => Array(70,2332800),
			20 => Array(71,2592000),
			21 => Array(72,2851200),
			22 => Array(73,3110400),
			23 => Array(74,3369600),
			24 => Array(75,3628800),
			25 => Array(76,3888000),
			26 => Array(77,4320000),
			27 => Array(78,4752000),
			28 => Array(79,5184000),
			29 => Array(80,6480000),
			30 => Array(81,7776000),
		),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 20), //interval
	'datazero' => '1970-01-01 00:00:00'
);




////////////////////////////////////////////
/////////////fifth INSTANCE/////////////////
////////////////////////////////////////////
//Instance is responsible for admin commands 
$config[5]['enable'] = true;

$config[5]['server']['ip'] = '127.0.0.1'; //server ip
$config[5]['server']['port'] = 9987; //server port
$config[5]['server']['queryport'] = 10011; //server query port
$config[5]['query']['login'] = 'serveradmin'; //server query username
$config[5]['query']['password'] = ''; //server query password
$config[5]['bot']['name'] = "#5"; //bot name
$config[5]['bot']['channel'] =  19; //bot default channel
$config[5]['database']['host'] ='127.0.0.1';  //database host address
$config[5]['database']['login'] = 'phpmyadmin';  //database login
$config[5]['database']['password'] = '';  //database password
$config[5]['database']['dbname'] = 'xTrustbot';  //database name
$config[5]['bot']['admins_bot'] = Array(30,6);  //bot admin group ids
$config[5]['bot']['admins_group'] = Array(30,6);  //admin group ids




////////////////////////////////////////////
/////////////sixth INSTANCE/////////////////
////////////////////////////////////////////

$config[6]['enable'] = true;

$config[6]['server']['ip'] = '127.0.0.1'; //server ip
$config[6]['server']['port'] = 9987; //server port
$config[6]['server']['queryport'] = 10011; //server query port
$config[6]['query']['login'] = 'serveradmin'; //server query username
$config[6]['query']['password'] = ''; //server query password
$config[6]['bot']['name'] = "#6"; //bot name
$config[6]['bot']['channel'] =  992; //bot default channel
$config[6]['bot']['speed'] = 1; //bot interval

$config[6]['functions'] = Array('karaoke');

		// Karaoke //
$config['function']['karaoke'] = Array(
	'enable' => true,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);
?>
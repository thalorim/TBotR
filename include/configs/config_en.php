<?php
////////////////////////////////////////////
////////////////DO NOT CHANGE///////////////
////////////////////////////////////////////
global $config;
require_once("include/cache/version.php");
$config['bot']['loop']['interval']=Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0);
$config['bot']['loop']['datazero']= '1970-01-01 00:00:00';
$config['bot']['loop']['enable'] = true;
$config[1]['server']['defaultchannel'] = 28;
$config[1]['server']['defaultgroup'] = 8;

////////////////////////////////////////////
/////////////////LNGUAGE////////////////////
////////////////////////////////////////////
$config['bot']['laguage'] = "pl";
////////////////////////////////////////////
/////////////FIRST INSTANCE/////////////////
////////////////////////////////////////////
$config[1]['enable'] = true; //instance enable

$config[1]['server']['ip'] = '127.0.0.1'; //server ip
$config[1]['server']['port'] = 9987; //server port
$config[1]['server']['queryport'] = 10011; //server query port
$config[1]['query']['login'] = 'serveradmin'; //server query name
$config[1]['query']['password'] = ''; //server query password
$config[1]['bot']['name'] = "#1"; //bot name
$config[1]['bot']['channel'] =  28; //bot default channel
$config[1]['bot']['speed'] = 1; //bot interval

$config[1]['functions'] = Array('day', 'hour','useronline' ,'register' ,'recordonline' ,'afk' ,'pgroup' ,'banlist' ,'channelscount' ,'visitors', 'packetloss', 'ping', 'uptime', 'generatebanner', 'channelzoneclient', 'adminslist', 'timeleft');

// Day
 $config['function']['day'] = Array(
	'enable' => true,
	'channel' => 1096,  //channel
	'channelname' => "[cspacer0]● [DAY].[MONTH].[YEAR] ●",  //channel name, [DAY], [MONTH], [YEAR]
	'interval' => Array('days' => 0, 'hours' => 1, 'minutes' => 0, 'seconds' => 0),  //interval
	'datazero' => '1970-01-01 00:00:00',
 );

// Hour
$config['function']['hour'] = Array(
	'enable' => true,
	'channel' => 9,  //channel
	'channelname' => "[cspacer0]● Godzina: [HOUR]:[MINUTES] ●",  //channel name, [HOUR],[MINUTES]
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// User online
$config['function']['useronline'] = Array(	
	'enable' => true,
	'channel'=> 8,  //channel
	'channelname' => "[cspacer]● Online: [ONLINE] ([%]%)●",  //channel name  [ONLINE] - clients online count, [%] - server full percent
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// Register
$config['function']['register'] = Array(
	'enable' => true,
	'allgroup' => Array(14,15,87),	//all groups	
	'channeldelgroup' => 1061,  //channel id where client can delete registeer group
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
	
// Rekord online
$config['function']['recordonline'] = Array(
	'enable' => true,
	'channel' => 11,//channel
	'channelname' => "[cspacer]●Rekord onlnie: [RECORD] ●",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// AFK
$config['function']['afk'] = Array(
	'enable' => false,
	'mode' => 2, //1 - move to channel; 2 - give rang,
	'idlechannel' => 677, //idle channel, if mode = 1
	'afkgroup' => 89, //afk group, if mode = 2
	'idletime' => 30,  //time after which the client will be moved
	'afkicon' => 1,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Poke group
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
$config['function']['banlist'] = Array(
	'enable' => true,
	'channel_name_enable' => true, //enable/disable channel name
	'channel' => 111,  //channel
	'channel_name' => "[cspacer]● Ban list [COUNT]●",  //channel name, if enable  [COUNT] - ban count
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 30, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// channels count
$config['function']['channelscount'] = Array(
	'enable' => true,
	'channel' => 648,  //channel
	'channelname' => "[cspacer]● Total channels: [COUNT] ●",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 2, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// Visitors 
$config['function']['visitors'] = Array(
	'enable' => true,
	'channel' => 148,  //channel
	'channelname' => "[cspacer0]●Visits: [COUNT] (since reset)●",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Packet loss 
$config['function']['packetloss'] = Array(
	'enable' => false,
	'channel' => 1101,  //channel
	'channelname' => "[cspacer0]●Average packet loss: [COUNT]% ●",  //channel name, [COUNT] - average packet loss
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Ping
$config['function']['ping'] = Array(
	'enable' => false,
	'channel' => 992,  //channel
	'channelname' => "[cspacer0]●Average ping: [COUNT] ms●",  //channel name, [COUNT] - average ping
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Uptime
$config['function']['uptime'] = Array(
	'enable' => false,
	'channel' => 992,  //channel
	'channelname' => "[cspacer0]●Uptime: [COUNT]●",  //channel name, [COUNT] - uptime
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);
// Generate banner
$config['function']['generatebanner'] = Array(
	'enable' => true,
	
//user online	
	'useronline' => Array(
	'enable' => true,
	'color' => Array(255,255,255),  //rgb color 
	'font' => "brlnsdb",  //font (arial, brlnsdb, calibri, katana, tahoma)
	'position' => Array(40,0,105,171)  // (size, rotation, position x, position y)
	),

//admin online	
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

//month record online	
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
	
	'image' => "include/cache/bg.png",  //image file location
	'savethere' => "/var/www/html/image.png",  //save image there
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Channel zone clients count
$config['function']['channelzoneclient'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array(
			'channel' => 1214,  //channel id
			'channelname' => "[cspacer0]Clients: [count]",  //channel name, [count] - count clients
			'channelzonestart' => 265,  //channel id where zone started
			'channelzonestop' => 1212  //channel id where zone ended
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
$config['function']['adminslist'] = Array(
	'enable' => false,
	'channel' => 992, 
	'group' => Array(30, 6),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Time left
$config['function']['timeleft'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'channel' => 992,
			'channelname' => "urodziny admina: [left]",
			'time' => "27.11.2018 12:30", // d.m.YYYY h:m
			'channelnameafter' => "Happy"
		),
		2 => Array(
			'channel' => 1058,
			'channelname' => "urodziny admina: [left]",
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
$config[2]['enable'] = true; //instance enable

$config[2]['server']['ip'] = '127.0.0.1'; //server ip
$config[2]['server']['port'] = 9987; //server port
$config[2]['server']['queryport'] = 10011; //server query port
$config[2]['query']['login'] = 'serveradmin'; //server query name
$config[2]['query']['password'] = ''; //server query password
$config[2]['bot']['name'] = "#2"; //bot name
$config[2]['bot']['channel'] =  28; //bot default channel
$config[2]['bot']['speed'] = 1; //bot interval
$config[2]['bot']['icons']['enable'] = true;
$config[2]['bot']['icons']['localization'] = "/var/www/html/icon/icons/";
$config[2]['bot']['icons']['adress'] = "https://xtrust.pl/icon/icons/";

$config[2]['functions'] = Array('groupclientcount', 'privatechannel', 'checkchannels', 'servername', 'clientstatus', 'timechannel', 'imieniny', 'monthrecord', 'youtube', 'twitch', 'welcomemessage', 'pokeonchannel', 'vpndetection', 'advertisement', 'botinfo', 'ddosdetection', 'antyrecording', 'nickcontrol', 'gameinfo');

// Group client count
$config['function']['groupclientcount'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array  //channel
			(
			'channel' => 286,  //channel id
			'group' => 30,  //group id
			'channelname' => '[cspacer][RANG] Online: [ONLINE] / [MAX]',  //channel name, [RANG] - rang name, [ONLINE] - clients online, [MAX] - server slots
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
$config['function']['privatechannel'] = Array(
	'enable' => true,
	'clientonchannel' => 93, //get channel in this channel
	'needgroup' => Array(14,15),  //need group to get channel
	'channelzone' => 265, //private channel zone
	'admingroup' => 5,  //admin group
	'subchannels' => 2, //subchannels count
	'channeltopic' => "#free", //free channel topic
	'messageafter' => "Remember to change password",  //message after 
	'channelname' => "Private channel - [NICK]",  //channel name
	'subchannelname' => "Subchannel",  //subchannel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// Check channels
$config['function']['checkchannels'] = Array(
	'enable' => true,
	'channelzone' => 265,  //channel zone
	'channelzonename' => "[cspacer]Private channels: [COUNT]",  //channel zone name, [COUNT] - count private channels
	'channeltopic' => "#free", //topic name in free channels
	'freechannelscount' => 5,  //minimum number of free channels
	'channelslist' => 265,  //channel id where are list free and busy channels
	'channelname' => "[NUMBER]. Private channel - free",  //free channel name
	'intervaldelete' => 7, //days after which the channel will be deleted
	'setdate' => true, //set curent date if someone is on channel
	'checkname' => true, //check channels name
	'block' => "fuck,shit,ass,bitch,damn,crap,piss,dick,cock,pussy,TeamSpeakUser,[RooT],[HSA]", 
	'message' => "Change channel name",
	'intervalname' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0),  //interval for checking channel names
	'datazeroname' => '1970-01-01 00:00:00',
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// Server name 
$config['function']['servername'] = Array(
	'enable' => true,
	'channelname' => "xTrust.pl [ONLINE]/[MAX]",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5),  //interval
	'datazero' => '1970-01-01 00:00:00'
);
	
// Client status
$config['function']['clientstatus'] = Array(
	'enable' => true,
	'aalgroup' => Array(6, 30),  //all client group id
	'steamstatus' => true,  //enable steam info
	'steamapi' => "A3F4695EEF3317F8EE14941692AA7BA6",  //steam api
	'info' => Array(
		1 => Array(
			'dbid' => 2, //user dbid 
			'channel' => 184,  //channel
			'steamid' => 76561198101162681
			),  //steamid64
		2 => Array(
			'dbid' => 7,
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
	'channelname' => "[cspacer]◥◣━[RANG]┃[NICK]┃[STATUS]━◢◤",  //channel name, [RANG], [NICK], [STATUS]
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10),  //interval
	'interval2' => Array('days' => 0, 'hours' => 0, 'minutes' => 2, 'seconds' => 0),  //interval user info in description
	'datazero' => '1970-01-01 00:00:00',
	'datazero2' => '1970-01-01 00:00:00'
);

// Time channel
$config['function']['timechannel'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'channel' => 992,
			'channelnameon' => "Working",  //channel name on
			'channelnameoff' => "Not working",  //channel name off
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

// Imieniny [for Polish users]
$config['function']['imieniny'] = Array(
	'enable' => false,
	'channel' => 992,  //channel
	'channelname' => "Imieniny: [NAME]",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 1),  //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Month record
$config['function']['monthrecord'] = Array(
	'enable' => true,
	'channel' => 857,//channel
	'channelname' => "[cspacer]● Month record: [RECORD] ●",  //channel name
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Youtube
$config['function']['youtube'] = Array(
	'enable' => true,
	'youtubeapi' => "AIzaSyDovcc8n_eHnRuTwKItjJLaPkFwG-u7lWk",  //youtube api
	'channnelname' => "[cspacer]✯[NICK] - [SUBSCOUNT]✯",  //channel name, [NICK] - youtube nick, [SUBSCOUNT] - subs count
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
$config['function']['twitch'] = Array(
	'enable' => false,
	'twitchapi' => "352ei7jf3jq2mu6jvvovjy4qwv6huc",  //youtube api
	'channelname' => "[cspacer]✯[NICK] - [STATUS]✯",  //channel name, [NICK] - youtube nick, [STATUS] - status 
	'info' => Array(
		1 => Array(
			'channelid' => 992,  //channel id
			'channelname' => "izakooo"  //youtube channel
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Welcome message
$config['function']['welcomemessage'] = Array(
	'enable' => true,
	'mode' => 1,  //1 - poke, 2 - send msg
	'message' => "		[b]Currently [online]/[max] people online![/b]\n You can now leave a message to admins if they are not currently on the server (on help channel)",  //channel name, [online] - clients online, [max] - server slots
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 2), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Poke on channel
$config['function']['pokeonchannel'] = Array(
	'enable' => true,
	'info' => Array(
		1 => Array(
			'channel' => 33,
			'pokegroup' => Array(6,30),
			'message' => "[NICK] has a complaint"
		)
	),
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// VPS detection
$config['function']['vpndetection'] = Array(
	'enable' => false,
	'ignore' => Array(6, 30),  //ignored group
	'key' => "111111-222222-333333-444444",
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);
// advertisement
$config['function']['advertisement'] = Array(
	'enable' => false,
	'message' => "Message [online]/[max]",  // [online] - client count, [max] - max clients
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 5), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Bot info
$config['function']['botinfo'] = Array(
	'enable' => true,
	'channel' => 1074, 
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 30, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Ddos detection
$config['function']['ddosdetection'] = Array(
	'enable' => true,
	'packetloss' => 10, 
	'message' => "[b]DDoS attack detected[/b]",
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 30), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Anty recording
$config['function']['antyrecording'] = Array(
	'enable' => true,
	'mode' => 2,  // 1 - poke, 2 - kick 
	'message' => "[b]Turn off recording[/b]",
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Nick control
$config['function']['nickcontrol'] = Array(
	'enable' => true,
	'block' => "fuck,shit,ass,bitch,damn,crap,piss,dick,cock,pussy,TeamSpeakUser,[RooT],[HSA]", 
	'message' => "Change nickname",
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 1, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Game info
$config['function']['gameinfo'] = Array(
	'enable' => false,
	'info' => Array(
		1 => Array(
			'game' => "csgo",
			'channel' => 992,
			'servername' => "Counter Strike [ONLINE]/[MAX]",
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
$config[3]['enable'] = true; //help bot enable

$config[3]['server']['ip'] = '127.0.0.1'; //server ip
$config[3]['server']['port'] = 9987; //server port
$config[3]['server']['queryport'] = 10011; //server query port
$config[3]['query']['login'] = 'serveradmin'; //server query name
$config[3]['query']['password'] = ''; //server query password
$config[3]['bot']['name'] = "LiveHelp"; //help bot name
$config[3]['bot']['channel'] =  28; //bot default channel
$config[3]['bot']['speed'] = 1; //bot interval

$config[3]['functions'] = Array('helpchannel');

// Help channel
$config['function']['helpchannel'] = Array(
	'channel' => 30,  //chanel
	'admingroup' => Array(6, 30),  //admins group
	'channeladmingroups' => Array(5,10),
	'bangroup' => 18,
	'commandlist' => "!commands", //comand for commands list
	'grouplist' => "!groups",  //command for group list
	'adminpokemessage' => "[NICK] needs help!",  //admin poke message
	'needgroupall' => Array(14,15),  //all the necessary groups to use bot
	'ignoredonchannel' => Array(191,292),  //doesn't poke administrators on the channels
	'profilelinkenable' => true,
	'profilelink' => "xtrust.pl/stats",
	//register
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
	'servergroup' => Array(19,20,21,22,23,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,88,83),  //server group 
	'maxservergroup' => 6,  //max server group
	'channeldesctopic' => "[center][size=15][b]Commands[/b][/size][/center]",  //channel desc topic
	'msgtoadminenable' => true, //if core 3 i enabled
	'msgtoadminchannel' => 17, //if core 3 i enabled
	'msgtoadminmax' => 12,
	'msgtoadmindelete' => true,
	'channeldesc' => "[COMMAND]",  //channel desc, [COMMAND] - command
	//new commands
	'info' => Array(
		1 => Array(
	'command' => "!levels",  //command
	'message' => "\n[b]	Levels list:[/b]\n	1 level - 1 hour  
	2 level - 2 hours 
	3 level - 4 hours 
	4 level - 8 hours 
	5 level - 12 hours 
	6 level - 18 hours 
	7 level - 24 hours (1 day) 
	8 level - 48 hours (2 days) 
	9 level - 72 hours (3 days) 
	10 level - 120 hours (5 days) 
	11 level - 168 hours (7 days) 
	12 level - 216 hours (9 days) 
	13 level - 264 hours (11 days) 
	14 level - 312 hours (13 days) 
	15 level - 360 hours (15 days) 
	16 level - 432 hours (18 days) 
	17 level - 504 hours (21 days) 
	18 level - 576 hours (24 days) 
	19 level - 648 hours (27 days) 
	20 level - 720 hours (30 days) 
	21 level - 792 hours (33 days) 
	22 level - 864 hours (36 days) 
	23 level - 936 hours (39 days) 
	24 level - 1008 hours (42 days) 
	25 level - 1080 hours (45 days) 
	26 level - 1200 hours (50 days) 
	27 level - 1320 hours (55 days) 
	28 level - 1440 hours (60 days) 
	29 level - 1800 hours (75 days) 
	30 level - 2160 hours (90 days)",  //description
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
$config[4]['enable'] = true; //instance enable

$config[4]['server']['ip'] = '127.0.0.1'; //server ip
$config[4]['server']['port'] = 9987; //server port
$config[4]['server']['queryport'] = 10011; //server query port
$config[4]['query']['login'] = 'serveradmin'; //server query name
$config[4]['query']['password'] = ''; //server query password
$config[4]['bot']['name'] = "#4"; //bot name
$config[4]['bot']['channel'] =  28; //bot default channel
$config[4]['bot']['speed'] = 5; //bot interval
$config[4]['database']['host'] ='127.0.0.1';
$config[4]['database']['login'] = 'phpmyadmin';
$config[4]['database']['password'] = '';
$config[4]['database']['dbname'] = 'xTrustbot';
$config[4]['bot']['idletime'] = 5;
$config[4]['bot']['admins_group'] = Array(30,6);
$config[4]['bot']['channel_admin_group'] = 5;



$config[4]['functions'] = Array('top_active_time_all', 'top_active_time_month', 'top_active_time_week', 'top_time_all', 'top_time_month', 'top_time_week', 'top_idle_time_all', 'top_idle_time_month', 'top_idle_time_week', 'top_connections', 'new_users', 'top_lvl', 'rank');

// Top time all
$config['function']['top_time_all'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top time month
$config['function']['top_time_month'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top time week
$config['function']['top_time_week'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);


// Top active time all
$config['function']['top_active_time_all'] = Array(
	'enable' => false,
	'channel' => 1058, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top active time month
$config['function']['top_active_time_month'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top active time week
$config['function']['top_active_time_week'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top idle time all
$config['function']['top_idle_time_all'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top idle time month
$config['function']['top_idle_time_month'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top idle time week
$config['function']['top_idle_time_week'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top connections
$config['function']['top_connections'] = Array(
	'enable' => false,
	'channel' => 992, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// New users
$config['function']['new_users'] = Array(
	'enable' => false,
	'channel' => 1058, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 5, 'seconds' => 0), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Top lvl
$config['function']['top_lvl'] = Array(
	'enable' => false,
	'channel' => 1058, 
	'icon' => true, 
	'count' => 10,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);

// Rank
$config['function']['rank'] = Array(
	'enable' => false,
	'type' => 1, // 1 - active time, 2 - all time
	'needrank' => Array(14,15),
		'info' => Array(
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
$config[5]['enable'] = true; //instance enable

$config[5]['server']['ip'] = '127.0.0.1'; //server ip
$config[5]['server']['port'] = 9987; //server port
$config[5]['server']['queryport'] = 10011; //server query port
$config[5]['query']['login'] = 'serveradmin'; //server query name
$config[5]['query']['password'] = ''; //server query password
$config[5]['bot']['name'] = "#5"; //bot name
$config[5]['bot']['channel'] =  19; //bot default channel
$config[5]['bot']['speed'] = 5; //bot interval
$config[5]['database']['host'] ='127.0.0.1';
$config[5]['database']['login'] = 'phpmyadmin';
$config[5]['database']['password'] = '';
$config[5]['database']['dbname'] = 'xTrustbot';
$config[5]['bot']['admins_group'] = Array(30,6);
$config[5]['bot']['admins_bot'] = Array(30,6);





$config[6]['enable'] = true; //instance enable

$config[6]['server']['ip'] = '127.0.0.1'; //server ip
$config[6]['server']['port'] = 9987; //server port
$config[6]['server']['queryport'] = 10011; //server query port
$config[6]['query']['login'] = 'serveradmin'; //server query name
$config[6]['query']['password'] = ''; //server query password
$config[6]['bot']['name'] = "#6"; //bot name
$config[6]['bot']['channel'] =  992; //bot default channel
$config[6]['bot']['speed'] = 1; //bot interval

$config[6]['functions'] = Array('karaoke');

// Top lvl
$config['function']['karaoke'] = Array(
	'enable' => true,
	'interval' => Array('days' => 0, 'hours' => 0, 'minutes' => 0, 'seconds' => 10), //interval
	'datazero' => '1970-01-01 00:00:00'
);
?>
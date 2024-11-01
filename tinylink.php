<?php
/*
Plugin Name: Tiny Link
Plugin URI: http://www.brajeshwar.com/2007/tiny-link-a-wordpress-plugin-to-create-a-tinyurl-for-your-articles/
Description: Get an alternate <a href="http://tinyurl.com/">TinyURL</a> link for your article or post permalink.
Author: Brajeshwar
Version: 0.1
Author URI: http://www.brajeshwar.com/

Licence:
Provided under the GNU General Public Licence v3.0
http://www.gnu.org/licenses/gpl-3.0.txt

USAGE:
<?php TinyLink() ?>

README (include detailed usage)
http://code.google.com/p/tinylink/

*/

function TinyLink() {
	// get the tinyurl link and create one for the current permalink		
	$tinylink =  file_get_contents("http://tinyurl.com/api-create.php?url=" . get_permalink());

	// Print the result
	echo $tinylink;

	}
?>
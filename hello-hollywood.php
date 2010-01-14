<?php
/*
Plugin Name: Hello Hollywood
Plugin URI: http://www.doc4design.com/plugins/hello-hollywood
Description: Adds random movie quotes to your admin header
Version: 1.0
Author: Doc4
Author URI: http://www.doc4design.com
*/

/******************************************************************************

Copyright 2008  Doc4 : info@doc4design.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
The license is also available at http://www.gnu.org/copyleft/gpl.html

*********************************************************************************/

// These are the lyrics to Hello Dolly
$quotes = "Your life is defined by its opportunities... even the ones you miss.<div id=\"notes\">[ Benjamin Button - The Curious Case of Benjamin Button ]</div>
Only after disaster can we be resurrected. <div id=\"notes\">[ Tyler Durden - Fight Club ]</div>
I am gone-o-reha. That didn't sound right. <div id=\"notes\">[ Carl Allen - Yes Man ]</div>
Now I want you to take a step back... and literally fuck your own face!<div id=\"notes\">[ Les Grossman - Tropic Thunder ]</div>
HEY! There's no singin' in the North Pole! <div id=\"notes\">[ Gimbel's Manager - Elf ]</div>
Here comes the human. <div id=\"notes\">[ Rosalie Hale - Twilight ]</div>
We all go a little mad sometimes.<div id=\"notes\">[ Norman Bates - Psycho 1960 ]</div>
Mrs. Robinson, you're trying to seduce me.<div id=\"notes\">[ Ben Braddock - The Graduate ]</div>
Hey, don't knock masturbation. It's sex with someone I love.<div id=\"notes\">[ Alvy Singer - Annie Hall ]</div>
Take your stinking paws off me, you damn dirty ape.<div id=\"notes\">[ Taylor - Planet of the Apes ]</div>
No, I'm all man. I even fought in WWII. Of course, I was wearing women's undergarments under my uniform.<div id=\"notes\">[ Ed Wood - Ed Wood ]</div>
Your mother's in here with us, Karras. Would you like to leave a message? I'll see that she gets it.<div id=\"notes\">[ Regan MacNeil / Satan - The Exorcist ]</div>
I fart in your general direction. Your mother was a hamster and your father smelt of elderberries.<div id=\"notes\">[ French Soldier - Monty Python and the Holy Grail ]</div>
Excuse me while I whip this out.<div id=\"notes\">[ Bart - Blazing Saddles ]</div>
No, Mr. Bond. I expect you to die!<div id=\"notes\">[ Auric Goldfinger - Goldfinger ]</div>
Kid, the next time I say, 'Let's go someplace like Bolivia,' let's go someplace like Bolivia.<div id=\"notes\">[ Butch Cassidy - Butch Cassidy and the Sundance Kid ]</div>
Wendy? Darling? Light of my life?...I'm not gonna hurt ya. I'm just gonna bash your brains in. I'm gonna bash 'em right the fuck in!<div id=\"notes\">[ Jack Torrance - The Shining ]</div>
I just hate you and I hate your ass face.<div id=\"notes\">[ Corky St. Clair - Waiting for Guffman ]</div>
The greatest trick the devil ever pulled was convincing the world he didn't exist.<div id=\"notes\">[ Verbal Kint - The Usual Suspects ]</div>
That's what I love about these high school girls, man: I get older, they stay the same age.<div id=\"notes\">[ Wooderson - Dazed and Confused ]</div>
I have nipples, Greg. Could you milk me?<div id=\"notes\">[ Jack Byrnes - Meet the Parents ]</div>
Joey, do you like movies about gladiators?<div id=\"notes\">[ Captain Oveur = Airplane ]</div>
";

// Here we split it into lines
$quotes = explode("\n", $quotes);
$notes = explode("\n", $notes);

// And then randomly choose a line
$chosen = wptexturize( $quotes[ mt_rand(0, count($quotes) - 1) ] );

// This just echoes the chosen line
function hello_hollywood() {
	global $chosen;
	echo "<div class='clear'></div><div id='hollywood'><a href='http://www.doc4design.com'></a><p id='main-quote'>$chosen</p></div>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_notices', 'hello_hollywood');


// We need some CSS to position the quotes
function hollywood_css() {
	echo '<link href="'.get_bloginfo('siteurl').'/wp-content/plugins/hello-hollywood/hello-hollywood.css" rel="stylesheet" type="text/css" />'."\n";
}

add_action('admin_head', 'hollywood_css');
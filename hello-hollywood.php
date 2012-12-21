<?php
/*
Plugin Name: Hello Hollywood
Plugin URI: http://www.doc4design.com/plugins/hello-hollywood
Description: Adds movie quotes to the dashboard
Version: 3.0
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

function hello_hollywood_get_quotes() {
$quotes =
"Your life is defined by its opportunities... even the ones you miss.<div id=\"note\">[ Benjamin Button - The Curious Case of Benjamin Button ]</div>
You don't understand! I coulda had class. I coulda been a contender. <div id=\"note\">[ Terry Malloy - On the Waterfront ]</div>
Toto, I've got a feeling we're not in Kansas anymore. <div id=\"note\">[ Dorothy Gate - The Wizard of Oz ]</div>
Here's looking at you, kid.<div id=\"note\">[ Rick Blaine - Casablanca ]</div>
All right, Mr. DeMille, I'm ready for my close-up. <div id=\"note\">[ Norma Desmond - Sunset Boulevard ]</div>
May the Force be with you. <div id=\"note\">[ Han Solo - Star Wars ]</div>
Fasten your seatbelts. It's going to be a bumpy night.<div id=\"note\">[ Margo Channing - All About Eve ]</div>
You talkin' to me?<div id=\"note\">[ Travis Bickle - taxi Driver ]</div>
What we've got here is failure to communicate.<div id=\"note\">[ Captain - Cool Hand Luke ]</div>
I love the smell of napalm in the morning.<div id=\"note\">[ Lt. Col. Bill Kilgore - Apocalypse Now ]</div>
Love means never having to say you're sorry.<div id=\"note\">[ Jennifer Cavilleri Barrett - Love Story ]</div>
The stuff that dreams are made of.<div id=\"note\">[ Sam Spade - The Maltese Falcon ]</div>
They call me Mister Tibbs!<div id=\"note\">[ Virgil Tibbs - In the Heat of the Night ]</div>
Rosebud.<div id=\"note\">[ Charles Foster Kane - Citizen Kane ]</div>
A census taker once tried to test me. I ate his liver with some fava beans and a nice Chianti.<div id=\"note\">[ Hannibal Lector - The Silence of the Lambs ]</div>
Only after disaster can we be resurrected. <div id=\"note\">[ Tyler Durden - Fight Club ]</div>
I am gone-o-reha. That didn't sound right. <div id=\"note\">[ Carl Allen - Yes Man ]</div>
Now I want you to take a step back... and literally fuck your own face!<div id=\"note\">[ Les Grossman - Tropic Thunder ]</div>
HEY! There's no singin' in the North Pole! <div id=\"note\">[ Gimbel's Manager - Elf ]</div>
Here comes the human. <div id=\"note\">[ Rosalie Hale - Twilight ]</div>
We all go a little mad sometimes.<div id=\"note\">[ Norman Bates - Psycho 1960 ]</div>
Mrs. Robinson, you're trying to seduce me.<div id=\"note\">[ Ben Braddock - The Graduate ]</div>
Hey, don't knock masturbation. It's sex with someone I love.<div id=\"note\">[ Alvy Singer - Annie Hall ]</div>
Take your stinking paws off me, you damn dirty ape.<div id=\"note\">[ Taylor - Planet of the Apes ]</div>
No, I'm all man. I even fought in WWII. Of course, I was wearing women's undergarments under my uniform.<div id=\"note\">[ Ed Wood - Ed Wood ]</div>
Your mother's in here with us, Karras. Would you like to leave a message? I'll see that she gets it.<div id=\"note\">[ Regan MacNeil / Satan - The Exorcist ]</div>
I fart in your general direction. Your mother was a hamster and your father smelt of elderberries.<div id=\"note\">[ French Soldier - Monty Python and the Holy Grail ]</div>
Excuse me while I whip this out.<div id=\"note\">[ Bart - Blazing Saddles ]</div>
No, Mr. Bond. I expect you to die!<div id=\"note\">[ Auric Goldfinger - Goldfinger ]</div>
Kid, the next time I say, 'Let's go someplace like Bolivia,' let's go someplace like Bolivia.<div id=\"note\">[ Butch Cassidy - Butch Cassidy and the Sundance Kid ]</div>
Wendy? Darling? Light of my life?...I'm not gonna hurt ya. I'm just gonna bash your brains in. I'm gonna bash 'em right the fuck in!<div id=\"note\">[ Jack Torrance - The Shining ]</div>
I just hate you and I hate your ass face.<div id=\"note\">[ Corky St. Clair - Waiting for Guffman ]</div>
The greatest trick the devil ever pulled was convincing the world he didn't exist.<div id=\"note\">[ Verbal Kint - The Usual Suspects ]</div>
That's what I love about these high school girls, man: I get older, they stay the same age.<div id=\"note\">[ Wooderson - Dazed and Confused ]</div>
I have nipples, Greg. Could you milk me?<div id=\"note\">[ Jack Byrnes - Meet the Parents ]</div>
Joey, do you like movies about gladiators?<div id=\"note\">[ Captain Oveur - Airplane ]</div>
This was maybe not such a good idea!<div id=\"note\">[ Lindsay Brigman - The Abyss ]</div>
This is a four thousand dollar sofa upholstered in Italian silk. It is not just a couch.<div id=\"note\">[ Carolyn Burnham - American Beauty ]</div>
Naked blonde walks into a bar with a poodle under one arm, and a two-foot salami under the other.<div id=\"note\">[ John Bender - The Breakfast Club ]</div>
What's with that slime on your backpack? <div id=\"note\">[ Michael Williams - The Blair Witch Project ]</div>
It's a break-dancing stripper emergency.<div id=\"note\">[ Chester - Dude, Where's My Car? ]</div>
I used to kill for the CIA.<div id=\"note\">[ Oyyo - A Fish Called Wanda ]</div>
Gee, I'm really sorry your mom blew up, Ricky. I guess she won't be able to eat any spicy foods for awhile.<div id=\"note\">[ Lane - Better Off Dead ]</div>
Somone saw a cochroach on 14th floor<div id=\"note\">[ Dr. Venkman - Ghostbusters ]</div>
So it's sort of social.  Demented and sad, but social.<div id=\"note\">[ John Bender - The Breakfast Club ]</div>
You ditched Napoleon?<div id=\"note\">[ Bill - Bill and Ted's Excellent Adventure ]</div>
Say Bob, do I have any openings that this man might fit?<div id=\"note\">[ Empress Nympho - History of the World Part I ]</div>
Frankly, my dear, I don't give a damn.<div id=\"note\">[ Rhett Butler - Gone with the Wind ]</div>
I'm going to make him an offer he can't refuse.<div id=\"note\">[ Don Vito Corleone - The Godfather ]</div>
Here's looking at you, kid.<div id=\"note\">[ Ricky Blaine - Casablanca ]</div>
Go ahead, make my day<div id=\"note\">[ Harry Callahan - Sudden Impact ]</div>
";

// Here we split it up
$quotes = explode("\n", $quotes);
$notes = explode("\n", $notes);

// And then randomly choose a quote
return wptexturize( $quotes[ mt_rand( 0, count( $quotes ) - 1 ) ] );
}

// This just echoes the chosen line
function hello_hollywood() {
	$chosen = hello_hollywood_get_quotes();
	echo "<div class='clear'></div><div id='hollywood'><p id='quote'>$chosen</p></div>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_menu', 'hello_hollywood');


// We need some CSS to position the paragraph
function hollywood_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

    $site_url = get_bloginfo('siteurl' );
	echo "
	<style type='text/css'>
	#hollywood {
      margin: 0 13px 0 0;
      padding: 1px 10px;
      color: #333;
      border-bottom: 1px solid #DFDFDF;
      } 

	#quote {
      margin: 15px 0 0 5px;
      padding: 0;
      font-size: 13px;
      }
   
	#note {
      margin: 0 0 15px 5px;
      padding: 0;
      font-size: 10px;
      }
	</style>
	";
}

add_action( 'admin_head', 'hollywood_css' );

?>
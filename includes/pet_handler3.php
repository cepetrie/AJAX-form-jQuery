<?php

if($_REQUEST['land-water']=='lives on land only')
{
	if ($_REQUEST['legs']=='four or more legs')
	{
		if ($_REQUEST['fur']=='no fur')
		{
				echo '<p>Meet Scarlet!  Scarlet lives on land only, has four or more legs and has no fur, just like you wanted!  Scarlet is a ladybug, so be sure to be very gentle with her!</p>
				<img src="images/ladybug.jpg" id="ladybug" alt="picture of a ladybug" align="right" />';
		}
		else
		{
				echo '<p>Meet Juno!  Juno lives on land only, has four or more legs and has fur, just like you wanted!  Juno is a dog, so be sure to walk him every day!</p>
				<img src="images/dog.jpg" id="dog" alt="picture of a dog" align="right" />';
		}
	}
	else
	{
		if ($_REQUEST['fur']=='no fur')
		{
				echo '<p>Meet Fish-bait!  Fish-bait lives on land only, has two or less legs (hopefully none) and has no fur, just like you wanted!  Fish-bait is a earthworm and earthworms live underground, so a pet earthworm is probably not the most exciting pet in the world!</p>
					<img src="images/earthworm.jpg" id="earthworm" alt="picture of an earthworm" align="right" />';
		}
		else
		{
				echo '<p>Meet Curious George!  George lives on land only, has two or less legs and has fur, just like you wanted!  George is a gorilla and the Gorilla can easily take 5-8 of the strongest men in the world on a pound for pound basis, break both their arms and legs in a blink of an eye and rip their heads off in a split second! That is, if you really got him pissed off and angry as hell which would be a very bad idea and I don\'t recommend you do that EVER! </p>
				<img src="images/gorilla.jpg" id="gorilla" alt="picture of a gorilla" align="right" />';
		}
	}
}
else
{
	if ($_REQUEST['legs']=='four or more legs')
	{
		if ($_REQUEST['fur']=='no fur')
		{
				echo '<p>Meet Flyswatter! Flyswatter lives on both land and water, has four or more legs and has no fur, just like you wanted! Flyswatter is a frog. You can\'t teach them tricks, take them for walks, or make them speak on command. Frogs which aren\'t particularly active will quickly become a boring pet. The novelty will wear off and you\'ll be left with a blob that eats a lot. </p>
				<img src="images/frog.jpg" id="frog" alt="picture of a frog" align="right" />';
		}
		else
		{
				echo '<p>Meet Leroy! Leroy lives on both land and water, has four or more legs and has fur, just like you wanted! Leroy is an otter so beware because some otters produce a pungent smell and they do spray it just like the skunk\'s spray. </p>
				<img src="images/otter.jpg" id="otter" alt="picture of an otter" align="right" />';
		}
	}
	else
	{
		if ($_REQUEST['fur']=='no fur')
		{
				echo '<p>Meet Bronx! Bronx lives on both land and water, has two or less legs and has no fur, just like you wanted! Bronx is a rubber eel. Some people love snaky-looking critters, others hate them because they look like snakes.  </p>
				<img src="images/eel.jpg" id="ell" alt="picture of a rubber eel" align="right" />';
		}
		else
		{
				echo '<p>Meet SeaSide! SeaSide lives on both land and water, has two or less legs and has fur, just like you wanted! SeaSide is a seal. Before you take SeaSide home you should know that seals are illegal to have as pets and can be dangerous. There is no possible way you could make a habitat that would be comfortable and suitable for a seal. They belong in the ocean where they are actually HAPPY.  </p>
				<img src="images/seal.jpg" id="seal" alt="picture of a seal" align="right" />';
		}
	}
}
	

?>

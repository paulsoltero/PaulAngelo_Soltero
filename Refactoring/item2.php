<?php

public function getDistanceTravelled ($time, $haggis) {

	$result = 0;
	$primaryAcceleration = getPrimaryAcceleration($haggis);
	$primaryTime = getPrimaryTime($time,$haggis);
	$result = 0.5 * $primaryAcceleration *primaryTime * primaryTime;
	$secondaryTime = getSecondaryTime($time,$haggis);
	
	if($secondaryTime > 0) {
		$primaryVelocity = getPrimaryVelocity($haggis, $primaryAccelaration);
		$secondaryAccelaration = getSecondaryAcceleration ($haggis);
		$result += ($primaryVelocity * primaryTime) + (0.5 * $secondaryAccelaration * secondaryTime * secondaryTime);
	}
	
	return $result;
	
}


public function getPrimaryTime ($time, $haggis){
	return min($time, haggis->delay);
}

public function getSecondaryTime ($time, $haggis){
	return $time, haggis->delay;
}

public function getPrimaryAcceleration ($haggis) {
	return $haggis->primaryForce / $haggis->mass;
}

public function getSecondaryAcceleration ($haggis) {
	return ($haggis->primaryForce + $haggis->secondaryForce) / $haggis->mass;
}

public function getPrimaryVelocity ($haggis, $primaryAccelaration)
{
	return $primaryAccelaration * $haggis->delay;
}


?>

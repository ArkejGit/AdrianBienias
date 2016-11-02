<?php 

class Building {

	private $rooms = 0;

	public function __construct() {
		echo 'Created object of class ' . __CLASS__ . '<br>';
	}

	public function __destruct() {
		echo 'Deleted object of class ' . __CLASS__ . '<br>';
	}

	public function set_rooms($new_rooms) {
		$this->rooms = $new_rooms;
	}

	public function get_rooms() {
		return $this->rooms;
	}
};

class BuildingWithGarage extends Building {
	public $parking_spots = 2;
}


$building1 = new Building;
$building1->set_rooms(17);

$building2 = new BuildingWithGarage;
$building2->set_rooms(5);

echo 'Building1 has ' . $building1->get_rooms() . ' windows <br>';
echo 'Building2 has ' . $building2->get_rooms() . ' windows and ' .  $building2->parking_spots . ' parking spots in garage<br>';

echo 'End of file' . '<br>'
?>

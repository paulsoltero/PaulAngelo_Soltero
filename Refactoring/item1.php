<?php
class Rectangle{
	public int $height;
	public int $width;
	public int $depth;
	public int $area;
	public int $volume;
	
	public function setValue(string $name, int $value) {
		if($name == 'height') {
			return $this->height = $value;
		}
		if($name == 'width') {
			return $this->width = $value;
		}
		if($name == 'depth') {
			return $this->depth = $value;
		}
	}
	
	public function setArea () {
		$this->area = $this->height * $this->width;
		return $this->area;
	}
	
	public function setVolume () {
		$this->volume = $this->height * $this->widhth * $this->depth;
		return $this->volume;
	}
}
?>

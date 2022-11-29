<?php
abstract class CarDetail {
	protected $isBroken;
	public function __construct($isBroken)
	{
		$this->isBroken = $isBroken;
	}
	public function isBroken()
	{
		return $this->isBroken;
	}
}
class Door extends CarDetail
{
	public function isBroken()
	{
		return $this->isBroken;
	}
}
class Tyre extends CarDetail
{
	public function isBroken()
	{
		return $this->isBroken;
	}
}
class Painting extends CarDetail
{
	public function isBroken()
	{
		return $this->isBroken;
	}
}
class Car
{
	/**
	* @var CarDetail[]
	*/
	private $details;
	/**
	* @param CarDetail[] $details
	*/
	public function __construct(array $details)
	{
		$this->details = $details;
	}
	public function isBroken()
	{
		foreach ($this->details as $detail) {
			if ($detail->isBroken()) {
				return true;
			}
		}
		return false;
	}
}

$car = new Car([new Door(true), new Tyre(false), new Painting(true)]);
echo '<pre>';
print_r($car);
?>
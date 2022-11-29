<?php
class User {
	public $firstName;
	public $lastName;
	public $email;
	function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}

	function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $this;
	}

	function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}
}
$user = new User();
$user->setFirstName('John')
->setLastName('Doe')
->setEmail('john.doe@example.com');

$fullName = '"'.$user->firstName.' '.$user->lastName.' '.htmlspecialchars('<'.$user->email.'>').'"';
echo $fullName;
?>
<?php

/**
* and Experience is an abstract class for PersonalExperience, ProfessionalExperience & Qualification
*/
class Experience
{
	public $name;
	public $begin;
	public $end;



	function title(){
		return $this->name.' depuis '.$this->begin;
	}
}
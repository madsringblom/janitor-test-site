<?php
/**
* @package janitor.itemtypes
* This file contains itemtype functionality
*/

class TypeMeeting extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		// construct ItemType before adding to model
		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_meeting";


		$this->addToModel("title", array(
			"type" => "string",
			"label" => "title",
			"required" => true,
			"hint_message" => "a descriptive title",
			"error_message" => "String must be string"
		));

		$this->addToModel("participants", array(
			"type" => "number",
			"label" => "Number of Participants",
			"required" => true,
			"hint_message" => "A whole number",
			"error_message" => "Must be a number"
		));

		$this->addToModel("date", array(
			"type" => "date",
			"label" => "date",
			"required" => true,
			"hint_message" => "Meeting date",
			"error_message" => "must be valid format"
		));

	}

}

?>
<?php

class Achievements {

	function add($data) {
		$db = Database::obtain();
					
		$pid = $db->insert('tbl_achievements', $data);
		
		return $pid;

	}
	
}

?>
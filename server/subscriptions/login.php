<?php
ini_set('display_errors', 1);


$username = $_POST['username'];
$password = $_POST['password'];

$data = array();
$user = ml_login_wordpress($username,$password);

if(get_class($user) == "WP_User")
{

	// Get capabilities from Groups plugin if it's present
	if (class_exists('Groups_User')) {

		$group_user = new Groups_User($user->ID);
		$data['user'] = array();
		$data['user']['name'] = "$user->user_firstname $user->user_lastname";
		$data['groups'] =  array();
		$data['capabilities'] = array();

		$groups = $group_user->__get('groups');
		foreach($groups as $group) {
			$g = array();
			$g['id'] = $group->group_id;
			$g['name'] = $group->name;
			$data['groups'][] = $g;

			//capabilities
			$capabilities = $group->__get('capabilities');
			if($capabilities != NULL) {
				foreach($capabilities as $capability) {
					$data['capabilities'][] = $capability->__get('capability');
				}			
			}
		}
	} else { // Default WP capabilities
		foreach($user->allcaps as $capability => $value) {
			if ($value==true) $data['capabilities'][] = $capability;
		}
	}

}
else {
	//error
}

echo json_encode($data);
?>
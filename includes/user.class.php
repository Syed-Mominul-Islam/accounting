<?php
/* Developed by WEBSNIT
Email: info@websnit.com
Web: websnit.com*/

class user{

  private $con;

  public function __construct($db) {
    $this->con = $db;
  }

  public function get_user_role_permissions($role_id) {
    $permissions = [];
    $permission_query = "SELECT permission_id FROM snit_role_permission_map WHERE role_id = $role_id";
    $permission_result = $this->con->query($permission_query);
    while($permission_row = mysqli_fetch_array($permission_result)) {
      $permissions[] = $permission_row['permission_id'];
    }
    return $permissions;
  }

}

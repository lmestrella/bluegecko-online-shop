<?php
class Login extends Dbh {
  
  public function getAdminUser($user) {
    $sql = "SELECT * FROM admin_account WHERE admin_uid = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$user]);
    return $stmt->fetch();
  }

}
<?php

class userData {
   public $USERNAME = "";
   public $FOTO = "";
   public $EMAIL = "";
   public $FULLNAME = "";
   public $NIP = "";
   public $USER_LEVEL = "";
   public $JABATAN = "";
   public $USERNAME_TARGET = "";
   public $LAST_LOGIN = "";

   public function __construct(){}

   public function get_username() {
       return $this->USERNAME;
   }
   public function set_username($username) {
       $this->USERNAME = $username;
   }
   public function get_fullname() {
       return $this->FULLNAME;
   }
   public function set_fullname($fullname) {
       $this->FULLNAME = $fullname;
   }
   public function get_email() {
       return $this->EMAIL;
   }
   public function set_email($email) {
       $this->EMAIL = $email;
   }
   public function get_foto() {
       return $this->FOTO;
   }
   public function set_foto($foto) {
       $this->FOTO = $foto;
   }
   public function get_nip() {
       return $this->NIP;
   }
   public function set_nip($nip) {
       $this->NIP = $nip;
   }
   public function get_jabatan() {
       return $this->JABATAN;
   }
   public function set_jabatan($jabatan) {
       $this->JABATAN = $jabatan;
   }
   public function get_userLevel() {
       return $this->USER_LEVEL;
   }
   public function set_userLevel($ulevel) {
       $this->USER_LEVEL = $ulevel;
   }
   public function get_usernameTarget() {
       return $this->USERNAME_TARGET;
   }
   public function set_usernameTarget($utarget) {
       $this->USERNAME_TARGET = $utarget;
   }
   public function get_lastLogin() {
       return $this->LAST_LOGIN;
   }
   public function set_lastLogin($ll) {
       $this->LAST_LOGIN = $ll;
   }

}

$bapasUser = new userData();
?>

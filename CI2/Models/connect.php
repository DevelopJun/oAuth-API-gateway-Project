<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

Class Auth_m extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   /**
    * 아이디 비밀번호 체크
    *
    * @param array $auth 폼 전송받은 아이디, 비밀번호
    * @return array
    */
   function login($auth) {
       $sql = "SELECT username, email FROM users WHERE username = '" . $auth['username'] . "' AND password = '" . $auth['password'] . "' ";

       $query = $this -> db -> query($sql);

       if ($query -> num_rows() > 0) {
           return $query -> row();
       } else {
           return FALSE;
       }
   }

}


출처: https://palpit.tistory.com/entry/CodeIgniter-7-사용자-인증로그인 [Palpit's Techlog]

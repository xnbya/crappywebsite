<?php
  class UserController {

      static public function random_string($length) {

        $out = "";
        $chars = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($chars) - 1;

        for ($i = 0; $i < $length; $i++) {

          $rand = mt_rand(0, $max);
          $out .= $chars[$rand];
        }

      return $out;
    }

    //generate a token that will be stored in a hidden field of the form
    static public function get_token() {

      if(isset($_SESSION['token'])) { 

        return $_SESSION['token'];
      } 

      else {

        $token = self::random_string(30);
        $_SESSION['token'] = $token;
        return $token;
      }  
    }

    static public function display() {

      require_once("controllers/auth_controller.php");
      $auth = new AuthController();

      if($auth->authorise()) {

        require_once('models/user_model.php');
        require_once("views/change_user_data.php");
      }
    }

    static public function check_valid() {

      if( isset($_POST['token']) && ($_POST['token'] == self::get_token())) {
              return true;
      } 
      else {
              return false;   
      } 
    }


    static public function set() {

       if(self::check_valid() ) {
        require_once('models/user_model.php');

        // read what has to be changed from form
        $type =   $_POST['type'] ;
        $value =  $_POST['value'] ;

       if ($type == 'password') {
        $value = password_hash($value, PASSWORD_DEFAULT);
       }
         
        User::set_data($type, $value);
        $user = User::getUserByID($_SESSION["userID"]);

      }

      header("Location: index.php?controller=user&action=display");
    
}
}
?>

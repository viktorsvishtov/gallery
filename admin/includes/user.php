<?php require_once("database.php");?>
<?php

	class User{
		
		public $id;
		public $username;
		public $password;
		public $first_name;
		public $last_name;
		
		public static function find_all_users(){
			$sql = "SELECT * FROM users";
			$set_result = self::find_by_query($sql);
			return $set_result;
			
			
		}
		public static function find_user_by_id($user_id){
			global $database;
			$sql = "SELECT * FROM users WHERE id = $user_id" ;
			$the_result_array = self::find_by_query($sql);
			
			if(!empty($the_result_array)){
				$first_item = array_shift($the_result_array);
				return $first_item;
			}else{
				return false;
			}		
			
		}
		
		/*public static function find_this_query($sql){
			global $database;
			
			$set_result = $database->query($sql);
			$the_object_array = array();
			while($row = mysqli_fetch_array($set_result)){
				$the_object_array[] = static::instantation($row);
			}
			return $the_object_array;
			
			
		}*/
		
		public static function find_by_query($sql) {
    global $database;   
    $result_set = $database->query($sql);
    $the_object_array = array();
        
        while($row = mysqli_fetch_array($result_set)) {
           
            $the_object_array[] = static::instantation($row);
        
        }
        
    return $the_object_array;
   
    }
		
		public static function verify_user($username,$password){
			global $database;
			
			$username = $database->escape_string($username);
			$password = $database->escape_string($password);
			$sql = "SELECT * FROM users WHERE";
			$sql .= " username = '{$username}' ";
			$sql .= " AND ";
		    $sql .= " password = '{$password}' ";
			$sql .= "LIMIT 1";
			
			$the_result_array = self::find_by_query($sql);
			return !empty($the_result_array) ? array_shift($the_result_array) : false;
			
			
		}
		
		
		public  function has_the_attribute($the_atribute){
			$object_properties = get_object_vars($this);
			
			return array_key_exists($the_atribute,$object_properties);
		}
		
		  public static function instantation($the_record){
    
			$calling_class = get_called_class();
			$the_object = new $calling_class;            
    
			foreach($the_record as $the_attribute => $value) {
			if($the_object->has_the_attribute($the_attribute)){
			$the_object->$the_attribute = $value;
        }
        
    }    
        
   /* $the_object->id = $found_user['id']; 
    $the_object->username = $found_user['username']; 
    $the_object->password = $found_user['password']; 
    $the_object->first_name = $found_user['first_name'];
    $the_object->last_name = $found_user['last_name'];   */
        
        
        
      return $the_object;  
    }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	}















?>
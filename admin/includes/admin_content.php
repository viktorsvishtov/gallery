			
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin <small>Statistics Overview</small>
                        </h1>
                        
          <?php 
            require_once("includes/header.php");
			
			/*$set_result = User::find_all_users();
			while($row = mysqli_fetch_array($set_result)){
			echo $row['username']."<br>" ;
			} */
			
		/*	$users = User::find_all_users();
			
			foreach($users as $user){
				
				echo $user->username."</br>";
			}
			
			
			$user2 = User::find_user_by_id(1);		
			
			
			echo $user2->last_name; 
			
			
			
			
		/*	$sql = "SELECT username FROM users ";
			$result = $database->query($sql);
			while($users_found = mysqli_fetch_array($result)){
			echo $users_found['username']."     " ;
			}  */
			
       /*    $photo = new Photo();
                        
             $photo->title = "Just some test title";
             $photo->size = 20;          
             
        
             $photo->create(); */             
                        
                        
   /*  $photo = Photo::find_by_id(3);*/
                        
  /*  echo $photo->filename; */
                        
                        
                        
                        
                        
                        
       /*                 
           $photos = Photo::find_all();
        foreach ($photos as $photo) {
            echo $photo->title;                 
                        
        }
                        
                    */    
                        
                        
   /*                     
                        
            $users = User::find_all();
        foreach ($users as $user) {
            echo $user->username;
            
        }*/
                        
                        
                        
                        
                        
        /*
             $user = new User();
                        
             $user->username = "MirYourHome";
             $user->password = "miranda_law";          
             $user->first_name = "Miranda"; 
             $user->last_name = "Andreeva"; 
        
             $user->save(); */ 
                        
                        
             /*           
                $user = User::find_user_by_id(1);  $user->last_name = "WILLIAMS";
                $user->update();  
                */
                        
                        
            /*            
                $user = User::find_user_by_id(2);  
                $user->delete();*/           
          /*  $user = User::find_user_by_id(4);    
           
          $user->username = "Димитрий";     
          $user->update();*/
                        
          //   $user = new User();
                        
                        
         /*   $user->username = "Student";
            $user->password = "secrest_password";
            $user->first_name = "TOLITA";
            $user->last_name = "Cravis";
            
            $user->create();*/
                        
                        
                        
/*          $user = User::find_user_by_id(19);
          $user->username = "YanaIV";
          $user->password = "incom";
          $user->first_name = "Yana";
          $user->last_name = "Ivanchenko";

          $user->update();*/
                        
                        
                        
              
          ?>              
                        
                        
                        
                        
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            </div>              
            <!-- /.container-fluid -->
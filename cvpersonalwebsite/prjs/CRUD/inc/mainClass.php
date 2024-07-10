<?php
    date_default_timezone_set('Asia/Manila');

    Class Template{
        private $server = "mysql:host=localhost;dbname=crud_db";
        private $user = 'root';
        private $password = '';
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        protected $con;



// =========================================================================Creating Connection
        public function openConnection(){
            try{
                $this->con =new PDO($this->server, $this->user, $this->password, $this->options);
                return $this->con;
            }catch(PDOException $e){
                echo "There is a problem with the connection:". $e->getMessage();
            }
        }

        public function addRecord($date){
            if(isset($_POST['add']) && isset($_FILES['image'])){
                $image_name = $_FILES['image']['name'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                $image_error = $_FILES['image']['error'];
                // $currentProfile = $_POST['currentProfile'];

                if($image_error === 0){
                    $fname = ucfirst(strtolower($_POST['fname'])) ;
                    $mname = ucfirst(strtolower($_POST['mname'])) ;
                    if(!isset($mname)){
                        $mname = "";   
                    }
                    $lname = ucfirst(strtolower($_POST['lname'])) ;
                    $birthday = $_POST['birthday'];
                    $age = date_diff(date_create($birthday), date_create('today'))->y;
                    $gender = $_POST['gender'];
                    
                    if($image_size >  1000000){
                        $em = "File too large!";
                        header("Location: index.php?image error");
                    }else{
                                $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                                $img_ex_lc = strtolower($img_ex);
                                $allowed_exs = array("jpg", "jpeg", "png");
                    
                                if(in_array($img_ex_lc, $allowed_exs)){
        
                                    // if($currentProfile != null){
                                    //     $path = "profiles/$currentProfile";
                                    //     if(file_exists($path)){
                                    //         unlink($path);
                                    //     }
                                    // }
        
                                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                                    $img_upload_path = 'uploads/'.$new_img_name;
                                    move_uploaded_file( $image_tmp_name, $img_upload_path);
        
                                    $con = $this->openConnection();
                                    $stmt = $con->prepare("INSERT INTO records_tb (`image`,`fname`,`mname`,`lname`,`birthday`,`age`,`gender`,`dateAdded`) VALUES (?,?,?,?,?,?,?,?)");
                                    $stmt->execute([$new_img_name, $fname, $mname, $lname, $birthday, $age, $gender, $date]);
                                    $sm = "Added Successfully!";
                                    header("Location: index.php?sm=$sm");
                                   
                                }else{
                                    $em = "File not allowed.";
                                    echo $em;
                                }
                            }
                }else{
                    $fname = ucfirst(strtolower($_POST['fname'])) ;
                    $mname = ucfirst(strtolower($_POST['mname'])) ;
                    if(!isset($mname)){
                        $mname = "";   
                    }
                    $lname = ucfirst(strtolower($_POST['lname'])) ;
                    $birthday = $_POST['birthday'];
                    $age = date_diff(date_create($birthday), date_create('today'))->y;
                    $gender = $_POST['gender'];

                    $con = $this->openConnection();
                    $stmt = $con->prepare("INSERT INTO records_tb (`image`,`fname`,`mname`,`lname`,`birthday`,`age`,`gender`,`dateAdded`) VALUES (?,?,?,?,?,?,?,?)");
                    $stmt->execute(["", $fname, $mname, $lname, $birthday, $age, $gender, $date]);
                    $sm = "Added Successfully!";
                    header("Location: index.php?sm=$sm");
                }
            }
        }

        public function updateRecord(){
            if(isset($_POST['update']) && isset($_FILES['image'])){
                $image_name = $_FILES['image']['name'];
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                $image_error = $_FILES['image']['error'];
                $currentProfile = $_POST['currentProfileTxt'];

                if($image_error === 0){
                    $fname = ucfirst(strtolower($_POST['fname'])) ;
                    $mname = ucfirst(strtolower($_POST['mname'])) ;
                    if(!isset($mname)){
                        $mname = "";   
                    }
                    $lname = ucfirst(strtolower($_POST['lname'])) ;
                    $birthday = $_POST['birthday'];
                    $id = $_POST['id'];
                    $age = date_diff(date_create($birthday), date_create('today'))->y;
                    $gender = $_POST['gender'];
                    
                    if($image_size >  1000000){
                        $em = "File too large!";
                        header("Location: index.php?image error");
                    }else{
                                $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
                                $img_ex_lc = strtolower($img_ex);
                                $allowed_exs = array("jpg", "jpeg", "png");
                    
                                if(in_array($img_ex_lc, $allowed_exs)){
        
                                    if($currentProfile != null){
                                        $path = "uploads/$currentProfile";
                                        if(file_exists($path)){
                                            unlink($path);
                                        }
                                    }
        
                                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                                    $img_upload_path = 'uploads/'.$new_img_name;
                                    move_uploaded_file( $image_tmp_name, $img_upload_path);
        
                                    $con = $this->openConnection();
                                    $stmt = $con->prepare("UPDATE records_tb SET `image` = ?,`fname` = ?,`mname` = ?,`lname` = ?,`birthday` = ?,`age` = ?,`gender` = ? WHERE id  = ?");
                                    $stmt->execute([$new_img_name, $fname, $mname, $lname, $birthday, $age, $gender, $id]);
                                    $sm = "Updated Successfully!";
                                    header("Location: index.php?sm=$sm");
                                   
                                }else{
                                    $em = "File not allowed.";
                                    echo $em;
                                }
                            }
                }else{
                    $id = $_POST['id'];
                    $fname = ucfirst(strtolower($_POST['fname'])) ;
                    $mname = ucfirst(strtolower($_POST['mname'])) ;
                    if(!isset($mname)){
                        $mname = "";   
                    }
                    $lname = ucfirst(strtolower($_POST['lname'])) ;
                    $birthday = $_POST['birthday'];
                    $age = date_diff(date_create($birthday), date_create('today'))->y;
                    $gender = $_POST['gender'];

                    $con = $this->openConnection();
                    $stmt = $con->prepare("UPDATE records_tb SET `fname` = ?,`mname` = ?,`lname` = ?,`birthday` = ?,`age` = ?,`gender` = ? WHERE id  = ?");
                    $stmt->execute([$fname, $mname, $lname, $birthday, $age, $gender, $id]);
                    $sm = "Updated Successfully!";
                    header("Location: index.php?sm=$sm");
                }
            }
        }

        public function deleteRecord(){
            if(isset($_POST['delete'])){
                $recordIDs = $_POST['recordID'];

                $con = $this->openConnection();
                $stmt = $con->prepare("DELETE FROM records_tb WHERE id = ?");
                $stmt1 = $con->prepare("SELECT * FROM records_tb WHERE id = ?");

                if(is_array($recordIDs)){
                    foreach($recordIDs as $id){
                        $stmt1->execute([$id]);
                        $result = $stmt1->fetch();

                        echo $result;

                        if($result['image']){
                            $path = "uploads/{$result['image']}";
                                if(file_exists($path)){
                                    unlink($path);
                                }
                        }

                        $stmt->execute([$id]);
                       
                        header("Location: index.php?Deleted");
                    }
                }else{
                    $con = $this->openConnection();
                    $stmt = $con->prepare("DELETE FROM records_tb WHERE id = ?");
                    $stmt1 = $con->prepare("SELECT * FROM records_tb WHERE id = ?");
                    
                    $stmt1->execute([$recordIDs]);
                        $result = $stmt1->fetch();

                        echo $result;
                        
                        if($result['image']){
                            $path = "uploads/{$result['image']}";
                                if(file_exists($path)){
                                    unlink($path);
                                }
                        }

                        $stmt->execute([$recordIDs]);
                    header("Location: index.php?Deleted");
                }
            }
        }

        public function showAllRecords(){
            $con = $this->openConnection();
            $stmt = $con->prepare("SELECT * FROM records_tb ORDER BY CAST(age AS UNSIGNED) DESC");
            $stmt->execute([]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total >= 0){
                return $result;
            }else{
                return null;
            }
        }

        public function selectAges(){
            $con = $this->openConnection();
            $stmt = $con->prepare("SELECT SUM(age > 18) as adult, SUM(age <= 18) as minor FROM `records_tb`");
            $stmt->execute([]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total >= 0){
                return $result;
            }else{
                return null;
            }
        }

        public function selectGenders(){
            $con = $this->openConnection();
            $stmt = $con->prepare("SELECT 
                SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) as Male,
                SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) as Female,
                SUM(CASE WHEN gender = 'Other' THEN 1 ELSE 0 END) as Other
            FROM records_tb");
            $stmt->execute([]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total >= 0){
                return $result;
            }else{
                return null;
            }
        }

        public function showAllByName($name){
            $con = $this->openConnection();
            $stmt = $con->prepare('SELECT * FROM records_tb WHERE fname  LIKE ?  OR  lname LIKE ?');
            $stmt->execute(["%".$name."%", "%".$name."%"]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total >= 0){
                return $result;
            }else{
                return null;
            }
        }

        public function selectLastNames(){
            $con = $this->openConnection();
            $stmt = $con->prepare('SELECT lname, COUNT(lname) as count FROM records_tb  GROUP BY lname ORDER BY COUNT(lname) DESC LIMIT 3');
            $stmt->execute([]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total >= 0){
                return $result;
            }else{
                return null;
            }
        }

        public function removeData($currentDate){
            $con = $this->openConnection();
            $stmt = $con->prepare('SELECT * FROM records_tb');
            $stmt->execute([]);
            $result = $stmt->fetchAll();
            $total = $stmt->rowCount();
            if($total > 0){
                $stmt1 = $con->prepare('DELETE FROM records_tb WHERE id = ?');
                    foreach($result as $d){
                        $dateOfDeletion = date('Y-m-d', strtotime($d['dateAdded'] . ' +1 day'));

                        if($currentDate >= $dateOfDeletion){

                            if($d['image']){
                                $path = "uploads/{$d['image']}";
                                    if(file_exists($path)){
                                        unlink($path);
                                    }
                            }   
                            $stmt1->execute([$d['id']]);
                        }
                    }
            }else{
                return null;
            }
        }
        
        // public function removeData($currentDate){
        //     $con = $this->openConnection();
        //     $stmt = $con->prepare('SELECT * FROM records_tb');
        //     $stmt->execute([]);
        //     $result = $stmt->fetchAll();
        //     $total = $stmt->rowCount();
        //     if($total > 0){
        //         // foreach($result as $data){
        //         //     $dateOfDeletion = date('Y-m-d', strtotime($data['dateAdded'] . ' +1 day'));

        //         //     echo `<p>The record of {$data['fname']} {$data['lname']} must be deleted on: {$dateOfDeletion}</p><br>`;

        //         //     if($currentDate > $dateOfDeletion){
        //         //             // $stmt1 = $con->prepare("DELETE FROM records_tb WHERE id =  ?");
        //         //             // $stmt1->execute([$data['id']]);

        //         //             // if($data['image'] != null){
        //         //             //     $path = `uploads/{$data['image']}`;
        //         //             //     if(file_exists($path)){
        //         //             //         unlink($path);
        //         //             //     }
        //         //             // }
        //         //     }
        //         // }
        //     }else{
        //         header('Location: index.php?NothingFound');
        //     }
           

        // }

    } //LAST BRACKET

    $system = new Template();

?>
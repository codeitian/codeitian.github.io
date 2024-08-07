<?php
    date_default_timezone_set('Asia/Manila');

    Class Removal{
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

        // public function removeData($currentDate){
        //     $con = $this->openConnection();
        //     $stmt = $con->prepare('SELECT * FROM records_tb');
        //     $stmt->execute([]);
        //     $result = $stmt->fetchAll();
        //     $total = $stmt->rowCount();
        //     if($total > 0){
        //         foreach($result as $data){
        //             $dateOfDeletion = date('Y-m-d', strtotime($data['dateAdded'] . ' +1 day'));

        //             echo `<p>The record of {$data['fname']} {$data['lname']} must be deleted on: {$dateOfDeletion}</p><br>`;

        //             // if($currentDate > $dateOfDeletion){
        //             //         // $stmt1 = $con->prepare("DELETE FROM records_tb WHERE id =  ?");
        //             //         // $stmt1->execute([$data['id']]);

        //             //         // if($data['image'] != null){
        //             //         //     $path = `uploads/{$data['image']}`;
        //             //         //     if(file_exists($path)){
        //             //         //         unlink($path);
        //             //         //     }
        //             //         // }
        //             // }
        //         }
        //     }else{
        //         header('Location: index.php?NothingFound');
        //     }
           

        // }

        public removeData($currentDate){
            $haha = "HAHAHHAHAHAHAHAHA";
            return $haha;
        }


    } //LAST BRACKET

    $system1 = new Removal();

?>
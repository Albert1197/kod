
//Vamos a definir como viene y como luce mi informacion
    //obtiene todos los valores
    <?php 
    //Vamos a definir como viene y luce mi informacion
        class Bootcamp {
            private $conn;
    
            public function __construct() {
                $this->conn = new mysqli("127.0.0.1","root","", "bootcamps");
                if($this->conn->connect_error){
                    die("conection fail: " . $this->conn->connect_error);
                }
                echo "Connection successfully";
            }
    
            //obteniendo datos de los bootcamps
            public function get_bootcamps(){
                //creo la consulta
                $sql = "SELECT * FROM bootcamp1";
                $result = $this->conn->query($sql);
                $bootcamp1 = array();
                //transformar a un array
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $bootcamp1[] = $row;
                    }
                }
                return $bootcamp1;
            }
        }
    
    ?>
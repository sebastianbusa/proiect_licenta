<?php


class CreateDb
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;


    // constructorul
    public function __construct(
        $dbname = "Newdb",
        $tablename = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
        $this->dbname = $dbname;
        $this->tablename = $tablename;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        // creare conexiune cu baza de date
        $this->con = mysqli_connect($servername, $username, $password);

        // verificare conexiune
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $dbname);

            // creare tabela noua
            $sql = " CREATE TABLE IF NOT EXISTS $tablename
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (35) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100),
                             product_category VARCHAR (20)
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // functie get pentru luarea produsului din database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }

}


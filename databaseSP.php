<?php
    function connect(){
        $servername="localhost";
        $usename="root";
        $password="";
        $db="t2008m_php";
        $conn=new mysqli($servername,$usename,$password,$db);
        if($conn->connect_error){
            return null;
        }
        return $conn;
    }
    function querydb($sql_text){
        $conn=connect();
        $list=[];
        if ($conn!=null){
            $rs=$conn->query($sql_text);
            if ($rs->num_rows>0){
                while ($row = $rs->fetch_assoc()){
                    $list[]=$row;
                }
            }
        }
        return $list;
    }
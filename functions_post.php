<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include('connections.php');
    function post_get($which, $collum){
        $result = mysql_query("SELECT * FROM posts");
        $count = false;
        while($row = mysql_fetch_assoc($result)){
            $var = $row[$which];
            if($var == $collum){
                $array = array($row['id'], $row['title'], $row['body'], $row['user_id']);
                return $array;
            }
        }
        if($count==false){echo 'The id '.$collum.' does not exist in the table posts';};
    }
    function post_change($change, $id_to_change, $collum){
        $sql = "UPDATE posts SET ".$collum."='".$change."' WHERE id=".$id_to_change;
        $mysql_query = mysql_query($sql);
        $result = mysql_query("SELECT * FROM posts");
        $count = false;
        while($row = mysql_fetch_assoc($result)){
            $var = $row['id'];
            if($var == $id_to_change){
                $count = true;
                if ($change == $row['body']){
                    return true;
                }else{
                    return false;
                }
            }
        }
        if($count==false){echo 'The id '.$collum.' does not exist in the table posts';};
    }

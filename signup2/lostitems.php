<?php
include_once('db.php');

//collect
if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $sql = mysql_query("SELECT * FROM report WHERE 'description' LIKE '%$searchq%'") or die("could not search");
    $count = mysql_num_rows($sql);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysql_fetch_array($sql)){
            $description = $row['description'];

            $output .= '<div>'.$description.'</div>';
        }
    }
}
?>
<?php
$conn = mysqli_connect('localhost','root', '', 'comment');

if(!$conn)
{
    die('error :'. mysqli_errno($conn));
}


$sql = "SELECT * FROM user ORDER BY time DESC";
$result = mysqli_query($conn, $sql);



$comments = "";
  
while($row = mysqli_fetch_array($result))
{
    $comments .= '<div class="textt" >';
    $comments .=    '<div class="dis_name">' . $row['Name'] . "</div>" .
                    '<div class="dis_com">' . $row['Comment'] . '</div>
                    <div>
                        <button class="edit" style="background-color: lightgreen;" data-id="' .$row['ID']. '">Update</button>
                        <button class="delete" style="background-color: lightcoral;" data-id="' .$row['ID']. '">Delete</button>
                    </div>
                </div>';
}


if(isset($_POST['save'])){
    $name = $_POST['Name'];
    $comment = $_POST['Comment'];

    $sql = "INSERT INTO user (Name, Comment) VALUES ('{$name}', '{$comment}')";
    mysqli_query($conn, $sql);
    /*if(mysqli_query($conn, $sql)){
        $saved_comm = '<div class="textt" > 
                            <div class="msg">' . $name . '</div>
                            <div>' . $comment . "</div>
                        </div>";
                        echo $saved_comm;
    }
    
    exit();*/
}


if(isset($_GET['delete'])){
    $id = $_GET['ID'];

    $sql = "DELETE FROM user WHERE id=" .$id;
    mysqli_query($conn, $sql);
}

if(isset($_POST['update'])){
    $name = $_POST['Name'];
    $comment = $_POST['Comment'];
    $id = $_POST['id'];

    $sql = "UPDATE user SET Name='{$name}', Comment='{$comment}' WHERE id=".$id;
    mysqli_query($conn, $sql);
}


?>
<?php include("server.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title>My Chat App</title>
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div class="main-con">
    <div id="heder">
        <i class="fa fa-gg" style="font-size:4vw;margin-top: 3vh;color: rgb(135, 206, 235)"></i>
        <h1 style="color: whitesmoke;">JavaScript ChatApp</h1>
        <p style="color: whitesmoke;margin-bottom: 3vh;">Chackout the source code on codepane.io</p>
    </div>
    <div id="com-form">
        <form id="form">
            <input type="text" id="name" name="firstname" placeholder="Your name..">
            <input type="text" id="comment" name="name" placeholder="Your comment..">
            <button id="btn">COMMENT</button>
        </form>
        <div id="msgs">
            <!--<div class="textt" >
                <div class = "msg">Test Name</div>
                <div>Test Comment</div>
                <div>
                    <button id="update" style="background-color: lightgreen;">Update</button>
                    <button id="delete" style="background-color: lightcoral;">Delete</button>
                </div>
            </div> -->
            <?php echo $comments; ?>
        </div>

    </div>
</div>
</body>
</html>
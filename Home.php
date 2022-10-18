<!DOCTYPE html>
<?php
session_start();
if($_SESSION['user']){
?>
<html>
<head></head>
<body>
Welcome,<?php echo $_SESSION['user']; ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Sharing Website - Easy Tutorials Youtube Channel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <nav class="flex-div">
         <div class="nav-left flex-div">
             <img src="images/menu.png" class="menu-icon"> 
             <img src="images/logo1.png" class="logo">
         </div>
         <div class="nav-middle flex-div">
                <div class="search-box flex-div">
                    <input type="text" placeholder="search">
                    <img src="images/search.png">
                </div>
                <img src="images/voice-search.png" class="mic-icon">
         </div>
         <div class="nav-right">
         <a href="upload.php>">   <img src="images/upload.png"></a>
            <img src="images/more.png">
            <img src="images/notification.png">
            <img src="images/user.png" class="user-icon">
         </div>
         
    </nav>

    <!-----------------slidebar-------->

    <div class="sidebar">
        <div class="shortcut-links">
            <a href=""><img src="images/home.png"><p>Home</p></a>
            <a href=""><img src="images/explore.png"><p>Explore</p></a>
            <a href=""><img src="images/subscriprion.png"><p>Subscriprion</p></a>
            <a href=""><img src="images/library.png"><p>Library</p></a>
            <a href=""><img src="images/history.png"><p>History</p></a>
            <a href=""><img src="images/playlist.png"><p>Playlist</p></a>
            <a href=""><img src="images/messages.png"><p>Messages</p></a>
            <a href=""><img src="images/show-more.png"><p>Show More</p></a>
            <hr>
        </div>
        <div class="subscribe-list">
            <h3>SUBSCRIBED</h3>
            <a href=""><img src="images/user.png"><p>Jack Nicholson</p></a>
            <a href=""><img src="images/user.png"><p>Simon Baker</p></a>
            <a href=""><img src="images/user.png"><p>Tom Hardy</p></a>
            <a href=""><img src="images/user.png"><p>Magan Ryan</p></a>
            <a href=""><img src="images/user.png"><p>cameron Diaz</p></a>
            
        </div>
    </div>

    <!-----------------main--------------->


    <div class="container">
        <div class="banner">
            <img src="images/banner.png">
        </div>
        <div class="list-container">
            <div class="vid-list">
            <a href="play-video.php" ><img src="images/thumbnail1.png" class="thumbnail"></a>
            <div class="flex-div">
                <img src="images/user.png">
                <div class="vid-info">
                    <a href="play-video.html">Best chnanel to learn coding that help to be a web devloper</a>
                    <p>Easy Tutorials</p>
                    <p>15k views &bull; 2 days</p>
                </div>
            </div>
            </div>
            <div class="vid-list">
                <a href="play-video.php"><img src="images/thumbnail2.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/user.png">
                    <div class="vid-info">
                        <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                        <p>Easy Tutorials</p>
                        <p>15k views &bull; 2 days</p>
                    </div>
                </div>
            </div>
                <div class="vid-list">
                    <a href=""><img src="images/thumbnail3.png" class="thumbnail"></a>
                    <div class="flex-div">
                        <img src="images/user.png">
                        <div class="vid-info">
                            <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                            <p>Easy Tutorials</p>
                            <p>15k views &bull; 2 days</p>
                        </div>
                    </div>
                </div>
                    <div class="vid-list">
                        <a href=""><img src="images/thumbnail4.png" class="thumbnail"></a>
                        <div class="flex-div">
                            <img src="images/user.png">
                            <div class="vid-info">
                                <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                                <p>Easy Tutorials</p>
                                <p>15k views &bull; 2 days</p>
                            </div>
                        </div>
                    </div>
                        <div class="vid-list">
                            <a href=""><img src="images/thumbnail5.png" class="thumbnail"></a>
                            <div class="flex-div">
                                <img src="images/user.png">
                                <div class="vid-info">
                                    <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                                    <p>Easy Tutorials</p>
                                    <p>15k views &bull; 2 days</p>
                                </div>
                            </div>
                        </div>
                            <div class="vid-list">
                                <a href=""><img src="images/thumbnail6.png" class="thumbnail"></a>
                                <div class="flex-div">
                                    <img src="images/user.png">
                                    <div class="vid-info">
                                        <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                                        <p>Easy Tutorials</p>
                                        <p>15k views &bull; 2 days</p>
                                    </div>
                                </div>
                            </div>
                                <div class="vid-list">
                                    <a href=""><img src="images/thumbnail7.png" class="thumbnail"></a>
                                    <div class="flex-div">
                                        <img src="images/user.png">
                                        <div class="vid-info">
                                            <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                                            <p>Easy Tutorials</p>
                                            <p>15k views &bull; 2 days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="vid-list">
                                        <a href=""><img src="images/thumbnail8.png" class="thumbnail"></a>
                                        <div class="flex-div">
                                            <img src="images/user.png">
                                            <div class="vid-info">
                                                <a href="">Best chnanel to learn coding that help to be a web devloper</a>
                                                <p>Easy Tutorials</p>
                                                <p>15k views &bull; 2 days</p>
                                            </div>
                                        </div>
                                        </div>
                                        

        </div>
        
    </div>




<script src="script.js"></script>

</body>
</html>
<?php
}
else{
echo "<script>window.location='login.php'</script>";
}
?>
<?php
include('./classes/DB.php');
include('./classes/Login.php');
include('./classes/posts.php');
include('./classes/Image.php');
$username = "";
$userid = "";     
$postid="";           
$loggedInUserId=Login::isLoggedIn();
$town="";
$estate="";
$town=$_GET['town'];
$estate=$_GET['estate'];


if (Login::isLoggedIn()) {
    $loggedInUserId=Login::isLoggedIn();
    $username = DB::query('SELECT username FROM users WHERE id=:loggedInUserId', array(':loggedInUserId'=>$loggedInUserId))[0]['username'];
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title> Talnet| Search</title>  <link href="assets/img/avatar.png" rel="shortcut icon" sizes="250x250"> 
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <header class="hidden-sm hidden-md hidden-lg" style="background-color: #3B6889;">
        <div class="searchbox">
            <form action="search.php" id="searching">
                <h1 class="text-left"> Talnet<font style="font-size:19px;">.ke</font></h1>
<div class="searchbox">
 <form method="post" id="searching">
        <input type="text" name="town" id="town"placeholder="Search Your Town" style=" padding: 2px 4px; width:140px; background-color: white;" required>
        <input type="text" name="estate" id="estate"placeholder="Search Estate" style="width:170px; padding: 2px 4px; background-color: white;" ></br>
        <input hidden type="button" class="post2" style=" border: 0; color:white; font-weight: bold;  padding: 2px 4px; background-color:#228B22;">
        <input type="submit" value="Search &#128269;" class="post" style=" border: 0; color:white; font-weight: bold;  padding: 2px 4px; background-color:#228B22;"></form></div></form><p>
    <div > <a href="index.php"><font color="white">HOME |</font></a>
         <?php if (Login::isLoggedIn()) { echo '<a href="posts.php?username='; echo $username; echo '"> <font style="text-transform:uppercase;" color="white">'; echo $username; echo ' |</font></a>';} else{echo' <a href="create-account.php"><font color="white">JOIN |</font></a>';}?> 
         <a href="contact-us.php"><font color="white">CONTACT US |</font></a> <a href="about-us.php"><font color="white">ABOUT US</font></a>
                </div>
                 <div class="dropdown">
                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">MENU <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                       <?php if (Login::isLoggedIn()) {echo '<li role="presentation"><a href="posts.php?username='; echo $username; echo '">'; echo $username; echo '</a></li>';} else { echo '<li role="presentation"><a href="index.php">Home</a></li>';}?>
                                <li class="divider" role="presentation"></li>
                                <?php if (Login::isLoggedIn()) { echo '<li role="presentation"><a href="index.php">Home</a></li>'; echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo ' <li role="presentation"><a href="change-password.php">Change Password </a></li>';  echo ' <li role="presentation"><a href="logout.php">Log Out </a></li>';} else { echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo '<li role="presentation"><a href="login.php">Log In</a></li>'; echo '<li role="presentation"><a href="create-account.php">Sign Up</a></li>';}?>
                    </ul>
                </div>
            </form>
        </div>
        <hr>
    </header>
    <div>
        <nav class="navbar navbar-default hidden-xs navigation-clean">
            <div class="container">
                <div class="navbar-header"><a href="index.php"><img src="assets/img/avatar.png" class="avatar" style="height: 80px;"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1" style=" position:relative;">
                     <font color="black"><div style="text-align:center"><h1>    <b><font size="25px">Talnet</font><font style="font-size:19px;">.ke</font></font></b></h1></div>
                   <form action="search.php" id="searching2" class="navbar-form navbar-left">
                        <div class="searchbox">





 <form method="post"  id="searching2" >
        <input type="text" name="town" id="town"placeholder="Search Your Town" style="  font-size: inherit; border: 0.2em solid  #3B6889; padding: 0.2em 0.5em; outline: 0;"required>
        <input type="text" name="estate" id="estate"placeholder="Search Estate" style="  font-size: inherit; border: 0.2em solid  #3B6889; padding: 0.2em 0.5em; outline: 0;" >
         <input hidden type="button" class="post2" style="background-color:  #3B6889; border-color:  #3B6889;  font-size: inherit; border: 0.2em solid  #3B6889;  background-color:  #3B6889;border-left: 0;padding: 0 0.75em;color: white;font-weight: bold; outline: 0;cursor: pointer; height:30px;" >
        <input type="submit" class="post" style="background-color:  #3B6889; border-color:  #3B6889;  font-size: inherit; border: 0.2em solid  #3B6889;  background-color:  #3B6889;border-left: 0;padding: 0 0.75em;color: white;font-weight: bold; outline: 0;cursor: pointer; height:30px;" value=" SEARCH &#128269;" ></form>










                         
                            </ul>
                        </div>
                    </form>
                    <ul class="nav navbar-nav hidden-md hidden-lg navbar-right">
                        <li  role="presentation"><a href="index.php">Home</a></li>
                        <li class="dropdown open"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">User <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <?php if (Login::isLoggedIn()) {echo '<li role="presentation"><a href="posts.php?username='; echo $username; echo '">'; echo $username; echo '</a></li>';} else { echo '<li role="presentation"><a href="index.php">Home</a></li>';}?>
                                <li class="divider" role="presentation"></li>
                                <?php if (Login::isLoggedIn()) { echo '<li role="presentation"><a href="index.php">Home</a></li>'; echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo ' <li role="presentation"><a href="change-password.php">Change Password </a></li>';  echo ' <li role="presentation"><a href="logout.php">Log Out </a></li>';} else { echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo '<li role="presentation"><a href="login.php">Log In</a></li>'; echo '<li role="presentation"><a href="create-account.php">Sign Up</a></li>';}?>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav hidden-xs hidden-sm navbar-right">
                        <li  role="presentation"><a href="index.php">Home</a></li>
                       <?php if (Login::isLoggedIn()) { echo '<li role="presentation"><a href="posts.php?username='; echo $username; echo '">'; echo $username; echo '</a></li>';echo '<li role="presentation"><a href="newpost.php?username='; echo $username; echo '">NEW POST</a></li>'; } else { echo '<li role="presentation"><a href="login.php">LOGIN</a></li>'; echo '<li role="presentation"><a href="create-account.php">SIGN UP</a></li>';}?>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">User <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <?php if (Login::isLoggedIn()) {echo '<li role="presentation"><a href="posts.php?username='; echo $username; echo '">'; echo $username; echo '</a></li>';} else { echo '<li role="presentation"><a href="index.php">Home</a></li>';}?>
                                <li class="divider" role="presentation"></li>
                                <?php if (Login::isLoggedIn()) { echo '<li role="presentation"><a href="index.php">Home</a></li>'; echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo ' <li role="presentation"><a href="change-password.php">Change Password </a></li>';  echo ' <li role="presentation"><a href="logout.php">Log Out </a></li>';} else { echo ' <li role="presentation"><a href="about-us.php">About Us </a></li><li role="presentation"><a href="contact-us.php">Contact Us</a></li>'; echo '<li role="presentation"><a href="login.php">Log In</a></li>'; echo '<li role="presentation"><a href="create-account.php">Sign Up</a></li>';}?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Search</h1></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group">
                           <?php if($town!=""){echo '<font size="4px">Town: <font color="grey">'; echo $town; echo '</font></font>';}?>
                           <?php if($estate!=""){echo '<font size="4px">Estate: <font color="grey">'; echo $estate; echo '</font></font>';}?>





                        <input class="btn btn-default" type="button" value="post an ad"style="width:100%;background-image:url(&quot;none&quot;);background-color:#3B6889;color:#fff;padding:16px 32px;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;" onclick="location.href = 'noticelogin.php'; this.value='Loading...';">
                        
                        
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                            <div class="timelineposts">

                            </div>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-group">
                         <li class="list-group-item"><span><strong>Talnet.ke</strong></span>
                            <p>Welcome to Talnet.ke follow us on Facebook <a href="https://www.facebook.com/rentnyumbaKE">www.facebook.com/rentnyumbaKE</a></p>  
                              <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ba22983c9abba579677b19e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      <div class="modal fade" id="commentsmodal" role="dialog" tabindex="-1" style="padding-top:100px;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title">More Images</h4></div>
                <div class="modal-body" style="max-height: 400px; overflow-y: auto">
                    <p>The content of your modal.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                 <p class="copyright">Talnet.CO.KE© 2018</p>
                 <p class="copyright">Powered by tru developers</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script type="text/javascript">

 var start = 5;
    var working = false;
    $(window).scroll(function() {
            if ($(this).scrollTop() + 1 >= $('body').height() - $(window).height()) {
                    if (working == false) {
                            working = true;
                             $.ajax({

                        type: "GET",
                         url: "api/search?town=<?php echo $town; ?>&estate=<?php echo $estate; ?>&start="+start,
                        processData: false,
                        contentType: "application/json",
                        data: '',
                       success: function(r) {
                                var posts = JSON.parse(r)
                                $.each(posts, function(index) {

                                    if (posts[index].Postedby == "") {
                                            $('.timelineposts').html(
                                                $('.timelineposts').html() + ''
                                        )
                                               }else{
                                        if (posts[index].Postedby == "null estate") {
                                            $('.timelineposts').html(
                                                $('.timelineposts').html() + ''
                                        )
                                     }else{


                                        if (posts[index].PostImage == "") {
                                                $('.timelineposts').html(
                                                  $('.timelineposts').html() + '<blockquote><p><font size="2"><font size="2"><p><font color="red">Residence: </font> '+posts[index].Residence+ '<font size="1"><i><font color="grey"><div style="text-align:right">POSTID: </font> '+posts[index].PostId+ '</i></p></font></div></p><font color="red">House size: </font> '+posts[index].PlotSize+ ' <font color="red">  Rent: </font> '+posts[index].Rentamount+'</p><p><font color="red">Town: </font> '+posts[index].Town+'  <font color="red">Estate: </font> '+posts[index].Estate+'</p><p><font color="red">Phone number: </font> '+posts[index].PhoneNumber+ '   <button   class="phonecell" type="button" style="width:20%;background-image:url(&quot;none&quot;);background-color:green;color:#fff;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;" data-call="'+posts[index].PhoneNumber+'">call</button></p><p><font color="grey">Posted by ~ </font><a href="users.php?username='+posts[index].Postedby+'">'+posts[index].Postedby+'</a></font><footer>Description:'+posts[index].describe+'</p> Posted at '+posts[index].PostedAt+'</footer></blockquote>'
                                        )

                                    }else{

                                                $('.timelineposts').html(
                                                $('.timelineposts').html() + '<blockquote><p><font size="2"><font size="2"><p> '+posts[index].Residence+ '<font size="1"><i><p><font color="grey"> '+posts[index].Estate+' , '+posts[index].Town+' </font></p><font color="grey" size="1px"><div style="text-align:right">PostId: '+posts[index].PostId+ '</i></p></font></div><img src="" style="opacity: 0; object-fit: contain; transition: all 2s ease-out; max-height: 300px; width:100%;" data-tempsrc="'+posts[index].PostImage+'" class="postimg" id="img'+posts[index].postId+'"><font color="black" size="2px"> '+posts[index].PlotSize+ '  @  '+posts[index].Rentamount+' KES</font>   <button class="btn btn-default comment" data-postid=\"'+posts[index].PostId+'\" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"><span style="color:#3B6889;">MORE IMAGES</span></button></p><p>'+posts[index].describe+'</p><p>'+posts[index].PhoneNumber+ ' ~ </font><a href="users.php?username='+posts[index].Postedby+'">'+posts[index].Postedby+'</a><p><button   class="phonecell" type="button" style="width:20%;background-image:url(&quot;none&quot;);background-color:green;color:#fff;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;" data-call="'+posts[index].PhoneNumber+'">call</button></p><p><footer>Posted at '+posts[index].PostedAt+'</footer></blockquote>'
                                        )


                                    }}}

 $(function() {
        $(".phonecell").click(function(){
            var PhoneNumber = $(this).attr('data-call');
            PhoneNumber=PhoneNumber.replace("Phone:","");
            window.location.href="tel://"+PhoneNumber;
        });
    });
$(function() {
  $("#searching").submit(function(){

    $(".post")
      .hide();
       $(".post2")
      .val("Searching...").show();
     
 
    return true;
  });
   });

$(function() {
  $("#searching2").submit(function(){

    $(".post")
      .hide();
       $(".post2")
      .val("Searching...").show();
     
 
    return true;
  });
   });



                                        $('[data-postid]').click(function() {
                                                var buttonid = $(this).attr('data-postid');

                                                $.ajax({

                                                        type: "GET",
                                                        url: "api/imagemodal?postid=" + $(this).attr('data-postid'),
                                                        processData: false,
                                                        contentType: "application/json",
                                                        data: '',
                                                        success: function(r) {
                                                                var res = JSON.parse(r)
                                                                showCommentsModal(res);
                                                        },
                                                        error: function(r) {
                                                                console.log(r)
                                                        }

                                                });
                                        });
                                })

                                   $('.postimg').each(function() {
                                        this.src=$(this).attr('data-tempsrc')
                                        this.onload = function() {
                                                this.style.opacity = '1';
                                        }
                                })

                                    start+=5;
                                            setTimeout(function() {
                                                    working = false;
                                            }, 4000)

                        },
                        error: function(r) {
                                console.log(r)
                       
                                     }

                            });
                    }
            }
    })








        $(document).ready(function() {
              
                $.ajax({

                        type: "GET",
                         url: "api/search?town=<?php echo $town; ?>&estate=<?php echo $estate; ?>&start=0",
                        processData: false,
                        contentType: "application/json",
                        data: '',
                       success: function(r) {
                                var posts = JSON.parse(r)
                                $.each(posts, function(index) {
                                     if (posts[index].Postedby == "") {
                                            $('.timelineposts').html(
                                                $('.timelineposts').html() + '<blockquote><p><font color="grey">Ooops! </br>Sorry looks like there are no posts for<font color=#3B6889>  <?php echo $town;?> </font>Town</br>Please help in sharing our site to help landlords post their vacant houses in your town, Thank you.</font></blockquote>'
                                        )
                                     }else{
                                        if (posts[index].Postedby == "null estate") {
                                            $('.timelineposts').html(
                                                $('.timelineposts').html() + '<blockquote><p><font color="grey">Ooops! </br>Sorry looks like there are no posts for the estate<font color=#3B6889>  <?php echo $estate;?> </font></br> in <?php echo $town; ?> Town. Please help in sharing our site to help landlords post their vacant houses in your estate, Thank you.</font></blockquote>'
                                        )
                                     }else{
                                        if (posts[index].PostImage == "") {
                                                $('.timelineposts').html(
                                                   $('.timelineposts').html() + '<blockquote><p><font size="2"><font size="2"><p><font color="red">Residence: </font> '+posts[index].Residence+ '<font size="1"><i><font color="grey"><div style="text-align:right">POSTID: </font> '+posts[index].PostId+ '</i></p></font></div></p><font color="red">House size: </font> '+posts[index].PlotSize+ ' <font color="red">  Rent: </font> '+posts[index].Rentamount+'</p><p><font color="red">Town: </font> '+posts[index].Town+'  <font color="red">Estate: </font> '+posts[index].Estate+'</p><p><font color="red">Phone number: </font> '+posts[index].PhoneNumber+ '   <button   class="phonecell" type="button" style="width:20%;background-image:url(&quot;none&quot;);background-color:green;color:#fff;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;" data-call="'+posts[index].PhoneNumber+'">call</button></p><p><font color="grey">Posted by ~ </font><a href="users.php?username='+posts[index].Postedby+'">'+posts[index].Postedby+'</a></font><footer>Description:'+posts[index].describe+'</p> Posted at '+posts[index].PostedAt+'</footer></blockquote>'
                                        )

                                    }else{


                                                 $('.timelineposts').html(
                                                $('.timelineposts').html() + '<blockquote><p><font size="2"><font size="2"><p> '+posts[index].Residence+ '<font size="1"><i><p><font color="grey"> '+posts[index].Estate+' , '+posts[index].Town+' </font></p><font color="grey" size="1px"><div style="text-align:right">PostId: '+posts[index].PostId+ '</i></p></font></div><img src="" style="opacity: 0; object-fit: contain; transition: all 2s ease-out; max-height: 300px; width:100%;" data-tempsrc="'+posts[index].PostImage+'" class="postimg" id="img'+posts[index].postId+'"><font color="black" size="2px"> '+posts[index].PlotSize+ '  @  '+posts[index].Rentamount+' KES</font>   <button class="btn btn-default comment" data-postid=\"'+posts[index].PostId+'\" type="button" style="color:#eb3b60;background-image:url(&quot;none&quot;);background-color:transparent;"><span style="color:#3B6889;">MORE IMAGES</span></button></p><p>'+posts[index].describe+'</p><p>'+posts[index].PhoneNumber+ ' ~ </font><a href="users.php?username='+posts[index].Postedby+'">'+posts[index].Postedby+'</a><p><button   class="phonecell" type="button" style="width:20%;background-image:url(&quot;none&quot;);background-color:green;color:#fff;margin:0px 0px 6px;border:none;box-shadow:none;text-shadow:none;opacity:0.9;text-transform:uppercase;font-weight:bold;font-size:13px;letter-spacing:0.4px;line-height:1;outline:none;" data-call="'+posts[index].PhoneNumber+'">call</button></p><p><footer>Posted at '+posts[index].PostedAt+'</footer></blockquote>'
                                        )

                                    }}}

 $(function() {
        $(".phonecell").click(function(){
            var PhoneNumber = $(this).attr('data-call');
            PhoneNumber=PhoneNumber.replace("Phone:","");
            window.location.href="tel://"+PhoneNumber;
        });
    });
 $(function() {
  $("#searching").submit(function(){

    $(".post")
      .hide();
       $(".post2")
      .val("Searching...").show();
     
 
    return true;
  });
   });

$(function() {
  $("#searching2").submit(function(){

    $(".post")
      .hide();
       $(".post2")
      .val("Searching...").show();
     
 
    return true;
  });
   });



                                        $('[data-postid]').click(function() {
                                                var buttonid = $(this).attr('data-postid');

                                                $.ajax({

                                                        type: "GET",
                                                        url: "api/imagemodal?postid=" + $(this).attr('data-postid'),
                                                        processData: false,
                                                        contentType: "application/json",
                                                        data: '',
                                                        success: function(r) {
                                                                var res = JSON.parse(r)
                                                                showCommentsModal(res);
                                                        },
                                                        error: function(r) {
                                                                console.log(r)
                                                        }

                                                });
                                        });
                                })

                                   $('.postimg').each(function() {
                                        this.src=$(this).attr('data-tempsrc')
                                        this.onload = function() {
                                                this.style.opacity = '1';
                                        }
                                })

                        },
                        error: function(r) {
                                console.log(r)
                        }

                });
        });
     
       function showCommentsModal(res) {
                $('.modal').modal('show')
                var output = "";
                for (var i = 0; i < res.length; i++) {
                        output += "<img src='"+res[i].image1+"' style=' max-height: 300px; object-fit: contain; width:100%; padding-bottom: 25px;'>";
                        output +=  "<img src='"+res[i].image2+"' style=' max-height: 300px; object-fit: contain; width:100%;padding-bottom: 25px;'>";
                        output +=  "<img src='"+res[i].image3+"' style=' max-height: 300px; object-fit: contain; width:100%;padding-bottom: 25px;s'>";
                        output += "<hr />";
                }

                $('.modal-body').html(output)
        }

    </script>
</body>

</html>

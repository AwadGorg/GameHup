<?php
        include_once '../browser-games/dbh.php';
?>
    <div class="big_wrapper">
        <div id="footer">
            <ul id="footer_menu">
                <li class="homebutton">
                    <a href="../browser-games/index">
                      <img class="homebutton" alt="home button" src="../images/home.jpg">
                    </a>
                </li>

                <li class="li">
                    <a>Account</a>
                    <div class="one_col_layout">
                        <div class="col_1">
                            <a class="headerlinks">Stream</a>
                            <a class="headerlinks">Information</a>
                            <a class="listlinks" href="../include/contactUs">contact Us</a>
                            <a class="listlinks" href="../include/basicinfo">Basic Info</a>
                            <a title="create website" class="listlinks" href="../include/education">make your own website</a>
                            <a href="../include/puplish_game" class="listlinks">Publish your game in GameHup</a>
                        </div>
                    </div>
                </li>
                <li class="li">
                    <span><a>profile</a></span>

                    <div class="card">

                        <div class="container">
                            <!-- img -->

                            <div class="prof">

                                <?php
                               if(isset($_SESSION['id'])){

                                     echo "<p class='username'>".$_SESSION['username']."</p>";
                                   echo '<form action="../include/logout.php">
                                   <button type="submit">LogOut</button>
  </form>'; }else{ echo '<a href="../include/register-page"> <strong class="login">Login Now</strong></a></span>'; } ?>




                            </div>
                            <a href="../include/basicinfo">
                             <i>   Read Me...</i></a>


                            <blockquote class="working">we still working in the profile page for more interactivity in your profile </blockquote>

                                <a href="../include/contactUs">
                                    <button class="login">Contact Us!</button>
                                </a>

                        </div>
                    </div>
                    <li class="li">
                        <span id="menu"><a>
			Join us in Social Media</a></span>
                        <ul class="dropup">
                            <a href="https://web.facebook.com/AwadGoorg/">
                                <li class="lil">Facebook</li>
                            </a>
<a href="https://www.linkedin.com/company/25054298/">
                                <li class="lil">LinkedIn</li>
                            </a>
                            <a href="https://www.instagram.com/gamehup_1/">
                            <li class="lil"> instgram</li> </a>
                            <a href="https://www.pinterest.com/gamehup/">
                                <li class="lil">Pinterest</li></a>
                        </ul>
                        <div class="clear">
                        </div>
                    </li>
                <span>
                    <li class="li">
                        <a href="../include/privacypolicy.htm" class="logout">Privacy</a>
                    </li></span>
                    <li class="copy_rights">
                        <span><a>
<i>Copyright 2017!!!</i></a></span>

                                <li class="copy_rights">
                <span class="li"><a href="../include/terms-of-use">Term Of Use</a> </span></li>
            </ul>

        </div>
    </div>

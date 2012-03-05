<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Urbaneous - Coming Soon</title>
        <LINK REL="SHORTCUT ICON" HREF="images/favicon.ico"> 
        <script type="text/javascript" src="http://api.eventful.com/js/api"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src="js/engine.js"></script>
        <script type="text/javascript" src="js/events.js"></script>
        <script type="text/javascript" src="js/motions.js"></script>
        <link rel="stylesheet" href="css/urbaneous.css" type="text/css" />
        <script>
        
            $(function() {
                Engine.init();
            });
                   
          
        </script>
        <!--[if IE]>
                <script ƒsrc="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="header_bg">&nbsp; </div>
        <header class="header">
            <div class="header_container">
                <figure class="header_logo">
                    <img src="images/biglogo.png" alt="Urbaneous logo"/>
                </figure>
                <nav class="header_nav">
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">how it works</a></li>
                        <li><a href="">download</a></li>
                        <li><a href="">contacts</a></li>
                    </ul>
                </nav>
                <div class="header_banner">
                    <div class="header_banner_left">
                        <div class="header_banner_headline">
                            What's around<br/>
                            Anytime, <span style="color:#2fb0dc">Anywhere</span>
                        </div>
                        <div class="header_banner_box">
                            <input class="defaultText" title="Enter your city" id="city" type="text"/>
                        </div>
                        <div class="header_banner_box_button">&nbsp;</div>
                    </div>
                    <div class="header_banner_right">
                        <figure>
                            <img class="header_banner_world" alt="World Logo" src="images/world.png"/>
                        </figure>
                    </div>
                </div>
            </div>
        </header>
        <section class="section_white">
            <div class="section_white_container">
                <article class="section_white_box">
                    <div class="section_white_box_title">Find Everything</div>
                    <div class="section_white_box_text">
                        Find <span class="blue_transform">what's going on</span> around you <br/>
                        with <span class="blue_transform">your computer</span> or <br/>
                        your <span class="blue_transform">mobile phone</span><br/>
                    </div>
                </article>
                <div class="section_white_box_separator">
                    &nbsp;
                </div>
                <article class="section_white_box">
                    <div class="section_white_box_title">Help to choose</div>
                    <div class="section_white_box_text">
                        <span class="blue_transform">See photos</span> and <span class="blue_transform">reviews</span> <br/>
                        on <span class="blue_transform">past editions</span> of the event.
                    </div>
                </article> 
                <div class="section_white_box_separator">
                    &nbsp;
                </div>
                <article class="section_white_box" style="border:none;">
                    <div class="section_white_box_title">Social Share</div>
                    <div class="section_white_box_text">
                        Share with <span class="blue_transform">your friends</span> everything <br />
                        that goes on <span class="blue_transform">around you</span> <br/>
                        and <span class="blue_transform">around them</span>
                    </div>
                </article>
            </div>
        </section>
        <section class="section_gray">
            <div class="section_gray_container">
                <div class="section_gray_left">
                    <figure class="section_gray_pcimg">
                        <img src="images/pcimg.png" alt="Compatibities"/>
                    </figure>
                </div>
                <div class="section_gray_right">
                    <div class="section_gray_down_title">Get mobile application</div>
                    <div class="section_gray_down_text">Avaible for iPhone, Android, Windows Phone</div>
                    <div class="section_gray_bt_down">&nbsp;</div>
                </div>

            </div>
        </section>
        <footer class="footer">
            <div class="footer_container">
                <div class="footer_divs" style="width:230px;">
                    <div class="footer_divs_title" style="margin-left: 30px;">Lasts Posts On</div><div class="footer_divs_twitter"></div>
                </div>
                <div class="footer_separator">
                </div>
                <div class="footer_divs" style="width:230px;">
                    <div class="footer_divs_title" >Lasts Event Updated</div><div class="footer_divs_world"></div>

                </div>
                <div class="footer_separator">
                    &nbsp;
                </div>
                <div class="footer_divs" style="width:290px;">
                    <div class="footer_bigbt">
                        <a style="margin-left:17px;" href="#">home</a>
                        <a href="#">how it work</a>
                        <a href="#">help</a>
                    </div>
                    <div class="footer_twitterbt"></div>
                    <div class="footer_facebt"></div>

                </div>
                <div class="footer_copyright">
                    <span> © 2011, </span> <img style="float:left;" alt="urbaneous mini logo" src="images/logomini.png"/> <span> All Rights Reserved </span>
                </div>
            </div>
        </footer>
    </body>
</html>

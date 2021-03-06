<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

    <title>Creative Fuel Interactive | Contact</title>
</head>
<body>
    <header>
        <div id="logo">
            <a href="../index.html"><img src="../assets/logos/logo-w.svg" alt="Logo" width="216" height="80"></a>
        </div>
        <nav id="desktop-menu">
            <a href="../index.html">Home</a>
            <a href="../html/about.html">About</a>
            <a href="../html/services.html">Services</a>
            <a href="contact.php" class="a-bttn-feel active-nav">Contact</a>
        </nav>
        <nav id="mobile-menu">
            <div id="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div id="mobile-menu-container">
                <a href="../index.html">Home</a>
                <a href="../html/about.html">About</a>
                <a href="../html/services.html">Services</a>
                <a href="contact.php" class="a-bttn-feel mobile-active-nav">Contact</a>
            </div>
        </nav>
    </header>
    <section class="main">
        <h1>Contact Us</h1>
    </section>
    <section class="bttm-image"></section>
    <section class="form-section">
        <div class="form-section-left">
            <h2>Are you ready to take your marketing plan to the next level?</h2>
            <p>Drop us a line and we will contact you shortly to schedule a meeting. Let’s get started!</p>
        </div>
        <div class="form-section-right">
            <form action="validation.php" method="POST">
                <input type="text" name="name" id="name" placeholder="Name" required value="<?php if(isset($_GET['success'])) if($_GET['success']=='false') {
                    echo(explode("-&&&&-", base64_decode($_GET['key']))[0]);
                }
                ?>">
                <input type="email" name="email" id="email" placeholder="Email" required value="<?php if(isset($_GET['success'])) if($_GET['success']=='false') {
                    echo(explode("-&&&&-", base64_decode($_GET['key']))[1]);
                }
                ?>">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required style="resize:vertical" ><?php if(isset($_GET['success'])) if($_GET['success']=='false') {
                            echo(explode("-&&&&-", base64_decode($_GET['key']))[2]);
                        }
                    ?></textarea>

                <?php 
                    require_once("Image_Captcha_Doc/PHP Templates/image_captcha_checkpoint.php");
                ?>

                <button class="a-bttn-feel">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer-top">
            <div>
                <div class="footer-logo">
                    <a href="index.html"><img src="../assets/logos/logo-w.svg" alt="Logo" width="216" height="80"></a>
                </div>
                <p>We assist you in growing your business by putting all of our creativity, dedication, and ability into it.  </p>
            </div>
            <div>
                <div>
                    <a href="../index.html">Home</a>
                    <a href="../html/about.html">About</a>
                    <a href="../html/services.html">Services</a>
                    <a href="contact.php" class="active-nav">Contact</a>
                </div>
                <div>
                    <a href="../html/services.html#seo">SEO</a>
                    <a href="../html/services.html#sem">SEM</a>
                    <a href="../html/services.html#branding">Branding</a>
                    <a href="../html/services.html#social">Social Media Merketing</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© Copyright <script>document.write(new Date().getFullYear())</script>
                Creative Fuel Interactive. All Rights Reserved.</p>
        </div>
    </footer>
    <div id="back-top"><i class="fa-solid fa-caret-up"></i></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/back-to-top.js"></script>

    <script>
        $( document ).ready(function() {
            $('.fa-x').click(function() {

                $('body').css({
                    'overflow': 'auto'
                });
            });
        });


    </script>
    <?php 
        require_once("Image_Captcha_Doc/PHP Templates/image_captcha_template.php");
    ?>
</body>
</html>
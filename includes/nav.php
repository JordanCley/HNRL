
<div><!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a id="hnrl" class="navbar-brand" href="#">HNRL</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                    foreach ($navItems as $item) {
                        if("$item[title]" === "The Crew"){
                            echo "<li class='$item[class]'>
                                            <a class='nav-link dropdown-toggle' id='$item[id]' href=\"$item[slug]\" 
                                                role='button'  data-toggle='dropdown' aria-haspopup='true' 
                                                aria-expanded='false'>
                                                
                                                $item[title]
                                                
                                            </a>
                                        
                                       
                                            <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                                                <a class='dropdown-item' href='/crew.php'>Brandon Perea</a>
                                                <a class='dropdown-item' href='/crew.php'>Diamond Walker</a>
                                                <a class='dropdown-item' href='/crew.php'>Hunter Collins</a>
                                                <a class='dropdown-item' href='/crew.php'>Jordan McQuiston</a>
                                                <a class='dropdown-item' href='/crew.php'>Tony Zane</a>
                                            </div>
                                
                                         </li>";
                        } else {
                            echo "<li class='$item[class]'>
                                     <a class='nav-link' id='$item[id]' href=\"$item[slug]\">
                                                
                                       $item[title]
                                                    
                                     </a>
                                  </li>";
                        }
                    }
                ?>
            </ul>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" href="https://www.facebook.com/thehnrl/">
                        <img src="img/fb_icon.png" alt="Facebook">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/thehnrl/">
                        <img src="img/insta_icon.png" alt="Instagram">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">
                        <button class="btn btn-outline-warning btn-lg my-2 my-sm-0" type="button">
                            Contact Us!
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div><!-- navabar end -->

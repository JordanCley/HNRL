
<div><!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a id="hnrl" class="navbar-brand" href="#">HNRL</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach ($navItems as $item) {
                    if($item['title'] === "The Crew"){
                ?>
                        <li class="<?php echo $item['class']; ?>">
                            <a class="nav-link dropdown-toggle"
                                id="<?php echo $item['id']; ?>"
                                href="<?php echo $item['slug']; ?>"
                                role='button'
                                data-toggle='dropdown'
                                aria-haspopup='true'
                                aria-expanded='false'
                            >
                                <?php echo $item['title']; ?>
                            </a>

                            <div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
                                <?php foreach ($crewMembers as $crewMember) { ?>
                                    <a class="dropdown-item" href="/crew.php?id=<?php echo $crewMember['id']; ?>">
                                        <?php echo $crewMember['name']; ?>
                                   </a>
                                <?php } ?>
                            </div>
                        </li>
                <?php } else { ?>
                    <li class="<?php echo $item['class']; ?>">
                        <a class="nav-link" id="<?php echo $item['id']?>" href="/<?php echo $item['slug']; ?>">
                           <?php echo $item['title']; ?>
                        </a>
                    </li>
                <?php
                    }
                } ?>
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

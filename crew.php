<?php

    define("TITLE", "The Crew | Honor Roll Skate Crew");

    include('includes/header.php');

    $queryArgumentId = $_GET['id'];

    $arrayIndexOfCrewMember = $queryArgumentId - 1;

    $crewMember = $crewMembers[$arrayIndexOfCrewMember];
?>

<div class="jumbotron jumbotron-fluid" id="jumbo">
    <div class="card container" id="crew-card" style="width: 45rem;">
        <hr>
            <img src="/img/<?php echo $crewMember['img']; ?>.png" class="card-img-top" alt="<?php echo $crewMember['name']; ?>">
            <hr>
            <div class="card-body">
                <h5 class="card-title"><?php echo $crewMember['name']; ?></h5>
                <p class="card-text"><?php echo $crewMember['bio']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $crewMember['age']; ?></li>
                <li class="list-group-item"><?php echo $crewMember['age']; ?></li>
                <li class="list-group-item"><?php echo $crewMember['other']; ?></li>
            </ul>
            <div class="card-body">
                <a href="<?php echo $crewMember['facebook']; ?>" class="card-link">
                    <img src="img/fb_icon.png" alt="Facebook">
                </a>
                <a href="<?php echo $crewMember['instagram']; ?>" class="card-link">
                    <img src="img/insta_icon.png" alt="Instagram">
                </a>
            </div>



    </div>
</div>
<?php include('includes/footer.php') ?>

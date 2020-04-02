
<?php

define("TITLE", "About | Honor Roll Skate Crew");

include('includes/header.php');

?>

<div class="jumbotron jumbotron-fluid" id="jumbo">
    <div class="container">
        <hr>
        <h1 class="display-4 contactTitle">Honor Roll Skate Crew</h1>
        <hr>

        <?php

        $query = 'SELECT u.id AS user_id, u.email_address, u.password, r.role_name FROM users u LEFT JOIN roles r ON (u.role_id = r.id)';

        $link = mysqli_connect("127.0.0.1", "root", "password", "jordan");

        $result = mysqli_query($link, $query);

        echo '<table>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                    echo '<td>';
                        echo $row['user_id'];
                    echo '</td>';
                    echo '<td>';
                        echo $row['email_address'];
                    echo '</td>';
                    echo '<td>';
                        echo $row['password'];
                    echo '</td>';
                    echo '<td>';
                        echo $row['role_name'];
                    echo '</td>';
                echo '</tr>';
            }

        echo '</table>';

        ?>

        <p class="lead">
            Honor Roll offers a form of entertainment like you've never seen! They have taken all the
            elements you love about dancing and skating and <em>ROLLED</em> them into one amazing show! Lorem Ipsum
            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
            to make a type specimen book.
        </p>

        <img class="dcpic d-block w-100" src="/img/Virginia.png"  alt="">

        <p class="lead">
            Honor Roll offers a form of entertainment like you've never seen! They have taken all the
            elements you love about dancing and skating and <em>ROLLED</em> them into one amazing show! Lorem Ipsum
            is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
            to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
</div>



<?php include('includes/footer.php') ?>

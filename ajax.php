<?php
    if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
        die(json_encode(array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname']
        )));
    }
?>
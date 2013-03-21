<?php
// POST

if (!empty($_POST)) {
    echo $_POST['job'];
}

?>

<form method="post" action="?handle_form">
    Job: <input type="text" name="job" />
    <input type="submit" />
</form>
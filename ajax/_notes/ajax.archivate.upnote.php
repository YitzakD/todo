<?php
session_start();
require "../../config/database.php";
require "../../includes/functions.php";
require "../../includes/constants.php";
require "../../filters/auth.filter.php";
?>
<?php if(isset($_POST['nid'])
    && isset($_POST['bid'])
    && is_numeric($_POST['bid'])
    && is_numeric($_POST['nid'])
): ?>

    <?php

    extract($_POST);

    $board = find_table_by_id($bid);

    $note = find_one_id_in_table($nid, 'id', 'notes');

    $story_msg = "a archivé une note: <u>".$note->note."</u>.";

    $i = 1;
    $counter = $board->contributions+$i;

    $q = $db->prepare("UPDATE notes SET archivate = :archivate WHERE id = :id ");

    set_contributions($bid, 'boards', $counter, get_session('user_id'));

    set_story_msg('', $story_msg, 'activities_story', get_session('user_id'), $bid);

    $q->execute([
        'archivate' => "1",
        'id' => $nid,
    ]);

    if($q) {

        die("Saved");

    } else {

        die("Not saved");

    }

    ?>

<?php else: ?>

    <div class='alert alert-danger set-alert-in-block blanco blocked margin-bottoms-zx' style='width: 89%'>
        Impossible de trouver cette note!<br />
        Raison: Le système n'a pas reconu l'identifiant de la note.<br/>
        Solution: Recharger la page en cliquant sur le lien ci-dessous.
    </div>
    <a href='' class='blocked btn-link margin-top-zx'><i class='fa fa-spinner fa-spin'></i>&nbsp;Recharger la page</a>

<?php endif; ?>
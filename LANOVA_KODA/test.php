<?php
session_start();
include "pdo-connect2.php";
$stavek = $baza1->prepare("SELECT news FROM users WHERE username=:user");
$stavek->bindparam(":user", $_SESSION['login_user']);
$stavek->execute();

$row = $stavek->fetchall();

foreach ($row as $value) {
        $row1 = $value['news'];
    }
?>
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //set initial state.
        $('#check').mousedown(function() {
            if($('#check').attr("value") == 1)
            {
                $('#check').attr("value",2);
                $('#sub').text("Prijavi me na novice")
                var check= 1;
                    $.ajax({
                    url: 'test_php.php',
                    type: 'POST',
                    data: {check:check},
                    success: function(data){
                        alert(data);
                    }
                });
            }
            else
            {
                $('#check').attr("value",1);
                $('#sub').text("Odjavi me od novic")
                    check= 2;
                    $.ajax({
                    url: 'test_php.php',
                    type: 'POST',
                    data: {check:check},
                    success: function(data){
                        alert(data);
                    }
                });
            }
                

        })});
</script>


<button id="check" value="
    <?php
        if($row1 == 1)
            echo 1;
        else 
            echo 2;
        echo '"><p id="sub">';
        if($row1 == 1)
            echo 'Odjavi me od novic';
        else
            echo 'Prijavi me na novice';
    ?>
        
        </p></button>



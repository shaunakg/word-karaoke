<html>
    <form action="" method="GET">
        Enter: <input type="text" name="inputText"><br>
        <input type="submit" name="submitButton" value="GO!"><br>
    </form>
</html>

<?php

if (isset($_GET["submitButton"])) {
    $full_karaoke_text = $_GET["inputText"];
    $words_array = explode(" ",$full_karaoke_text);

    // for (i=0;i<$words_array.length;i++) {
    //     sleep(1);
    //     echo $words_array[i];
    // }

    // foreach ($words_array as $key => $val) {
    //     sleep(1);
    //     echo "$key => $val <br>";
    // }

    for ($i=0; $i < sizeof($words_array); $i++){
        sleep(1);
        echo $words_array[$i];
    }
}
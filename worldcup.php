<?PHP
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<!-- HEAD STARTS HERE -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script script src="index.js"></script>

    <title>Bolao da Copa</title>
</head>
<!-- HEAD ENDS HERE -->

<!-- PHP STARTS HERE -->
<?PHP
include_once "file_storage.php";

include 'functions.php';
?>
<!-- PHP ENDS HERE -->




<body>
    <!-- NAV STARTS HERE -->
    <nav>
        <div class="symbol">
            <img onclick="build_url('empty');" src="./Images/CatarSymbol.png" alt="">
        </div>
        <div class="title">
            <h1>Bolao da Copa</h1>
        </div>
        <div class="nav_add_user" onclick="main_screen('false','true','false','false');">Add User</div>
        <div class="nav_update_user" onclick="main_screen('false','false','true','false');">Update User</div>
        <div class="nav_delete_user" onclick="main_screen('false','false','false','true');">Delete User</div>
    </nav>

    <!-- NAV ENDS HERE -->

    <!-- MAIN STARTS HERE -->
    <main>

        <!-- MENU LEFT STARTS HERE -->
        <div class="left">
            <?PHP
            foreach ($data as $key => $item) {
                echo ("<div class='menu_user'> <a href=# onclick='build_url(\"" . $item['user_name'] . "\");'>" . $item['user_name'] . "</a></div>");
            }
            ?>
        </div>
        <!-- MENU LEFT ENDS HERE -->

        <!-- MIDDLE STARTS HERE -->
        <div class="middle">
            <!-- MAIN SCREEN STARTS HERE -->
            <div class="middle_main">
                <?PHP
                if ($name == "") {
                    echo ("<div class=\"container\">");
                    foreach ($_SESSION['guess'] as $key) {
                        if (preg_match('#[0-9]#', $key)) {
                            echo ("<div class=\"flag_area space_" . $key . "\">" . $key . "</div>");
                        } else {
                            echo ("<div class=\"flag_area space_" . $key . "\"><img class='main-middle-img' src=./Images/flags/" . $key . ".svg></div>");
                        }
                    }
                    echo ("</div>");
                } else if ($name != "") {
                    foreach ($data as $key => $item) {
                        echo ("<div class=\"container\">");
                        if ($name == $item['user_name']) {
                            echo ("<div class=\"flag_area space_o1\"><img class='main-middle-img' src=./Images/flags/" . $item['o1'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o2\"><img class='main-middle-img' src=./Images/flags/" . $item['o2'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o3\"><img class='main-middle-img' src=./Images/flags/" . $item['o3'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o4\"><img class='main-middle-img' src=./Images/flags/" . $item['o4'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o5\"><img class='main-middle-img' src=./Images/flags/" . $item['o5'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o6\"><img class='main-middle-img' src=./Images/flags/" . $item['o6'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o7\"><img class='main-middle-img' src=./Images/flags/" . $item['o7'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o8\"><img class='main-middle-img' src=./Images/flags/" . $item['o8'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o9\"><img class='main-middle-img' src=./Images/flags/" . $item['o9'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o10\"><img class='main-middle-img' src=./Images/flags/" . $item['o10'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o11\"><img class='main-middle-img' src=./Images/flags/" . $item['o11'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o12\"><img class='main-middle-img' src=./Images/flags/" . $item['o12'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o13\"><img class='main-middle-img' src=./Images/flags/" . $item['o13'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o14\"><img class='main-middle-img' src=./Images/flags/" . $item['o14'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o15\"><img class='main-middle-img' src=./Images/flags/" . $item['o15'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_o16\"><img class='main-middle-img' src=./Images/flags/" . $item['o16'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q1\"><img class='main-middle-img' src=./Images/flags/" . $item['q1'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q2\"><img class='main-middle-img' src=./Images/flags/" . $item['q2'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q3\"><img class='main-middle-img' src=./Images/flags/" . $item['q3'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q4\"><img class='main-middle-img' src=./Images/flags/" . $item['q4'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q5\"><img class='main-middle-img' src=./Images/flags/" . $item['q5'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q6\"><img class='main-middle-img' src=./Images/flags/" . $item['q6'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q7\"><img class='main-middle-img' src=./Images/flags/" . $item['q7'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_q8\"><img class='main-middle-img' src=./Images/flags/" . $item['q8'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_s1\"><img class='main-middle-img' src=./Images/flags/" . $item['s1'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_s2\"><img class='main-middle-img' src=./Images/flags/" . $item['s2'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_s3\"><img class='main-middle-img' src=./Images/flags/" . $item['s3'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_s4\"><img class='main-middle-img' src=./Images/flags/" . $item['s4'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_f1\"><img class='main-middle-img' src=./Images/flags/" . $item['f1'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_f2\"><img class='main-middle-img' src=./Images/flags/" . $item['f2'] . ".svg></div>");
                            echo ("<div class=\"flag_area space_c1\"><img class='main-middle-img' src=./Images/flags/" . $item['c1'] . ".svg></div>");
                            echo ("<div class=\"empty_div\"></div>");
                            echo ("<div class=\"empty_div\"></div>");
                            echo ("<div class=\"empty_div\"></div>");
                            echo ("<div class=\"user_name_style\">" . $item['user_name'] . "</div>");
                            echo ("<div class=\"empty_div\"></div>");
                            echo ("<div class=\"empty_div\"></div>");
                            echo ("<div class=\"empty_div\"></div>");
                        }
                        echo ("</div>");
                    }
                }
                ?>
            </div>
            <!-- MAIN SCREEN ENDS HERE -->
            <!-- UPDATE SCREEN STARTS HERE -->
            <div class="update_section">
                UPDATE USER:
                <form action="worldcup.php" name="update_user" method="post">
                    <input type="hidden" name="update_user" value="update_user">
                    <label for="user_id">User_ID:</label><br>
                    <input type="text" id="user_id" name="user_id" value="0"><br>
                    <input type="submit" value="Submit">
                </form>
                <?php
                echo ("<ul>");
                foreach ($data as $key => $item) {
                    echo ("<li>" . $key . ". " . $item['user_name'] . "</li>");
                }
                echo ("</ul>");

                // TODO: select's with options value
                if (!empty($_POST["update_user"])) {
                    $key_to_update = $_POST;
                    echo ($key_to_update['user_id']);
                    echo ("<h1>EWQUHUIQOEWHUOIEWQHOUEIWQHUOIQWEHOUIEWQIOUHEWIQHUUIHQWE</h1>");
                    echo ("<div class=\"flag_area space_o1 testeSelectss\"></div>");
                    // echo ("<script>country_choice(countries, spots, 'Brasil');</script>)");
                    // echo ("<script>country_choice(countries, spots, ".$data[$key_to_update['user_id']]['o1'].");</script>)");
                    // echo ('dasdasdadas'. $data[$key_to_update['user_id']]['o1']);
                    echo ("<h1>QIUHUIQOEWHUOIEWQHOUEIWQHUOIQWEHOUIEWQIOUHEWIQHUUIHQWE</h1>");
                    echo ("<div class=\"container\">");
                    echo ("<div class=\"flag_area space_o1\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o1'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o2\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o2'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o3\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o3'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o4\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o4'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o5\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o5'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o6\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o6'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o7\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o7'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o8\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o8'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o9\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o9'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o10\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o10'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o11\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o11'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o12\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o12'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o13\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o13'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o14\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o14'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o15\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o15'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_o16\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['o16'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q1\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q1'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q2\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q2'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q3\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q3'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q4\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q4'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q5\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q5'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q6\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q6'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q7\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q7'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_q8\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['q8'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_s1\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['s1'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_s2\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['s2'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_s3\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['s3'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_s4\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['s4'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_f1\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['f1'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_f2\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['f2'] . ".svg></div>");
                    echo ("<div class=\"flag_area space_c1\"><img class='main-middle-img' src=./Images/flags/" . $data[$key_to_update['user_id']]['c1'] . ".svg></div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("<div class=\"user_name_style\">" . $data[$key_to_update['user_id']]['user_name'] . "</div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("<div class=\"empty_div\"></div>");
                    echo ("</div>");
                    print_r($data[$key_to_update['user_id']]);
                }
                ?>
            </div>
            <!-- UPDATE SCREEN ENDS HERE -->

            <!-- ADD SCREEN STARTS HERE -->
            <div class="add_section">
                ADD USER:
                <form action="worldcup.php" name="add_user" method="post">
                    <input type="hidden" name="add_user" value="add_user">
                    <label for="user">Username:</label><br>
                    <input type="text" id="user_name" name="user_name"><br>
                    <div class="add_form">
                        <!-- insert <select> list here from javascript function -->
                    </div>
                    <input type="submit" value="Submit">
                </form>

                <?php
                if (!empty($_POST["add_user"])) {
                    $data_to_add = $_POST;
                    array_push($data, $data_to_add);
                    $jsonData = json_encode($data);
                    file_put_contents('guess.json', $jsonData);
                    echo "<script>build_url('empty');</script>";
                }
                ?>
            </div>
            <!-- ADD SCREEN ENDS HERE -->

            <!-- DELETE SCREEN STARTS HERE -->
            <div class="delete_section">
                DELETE USER:
                <form action="worldcup.php" name="delete_user" method="post">
                    <input type="hidden" name="delete_user" value="delete_user">
                    <label for="user_id">User_ID:</label><br>
                    <input type="text" id="user_id" name="user_id" value="0">
                    <br>
                    <input type="submit" value="Submit">
                </form>

                <?php
                echo ("<ul>");
                foreach ($data as $key => $item) {
                    echo ("<li>" . $key . ". " . $item['user_name'] . "</li>");
                }
                echo ("</ul>");
                if (!empty($_POST["delete_user"])) {
                    $key_to_delete = $_POST;
                    unset($data[$key_to_delete['user_id']]);
                    $jsonData = json_encode($data);
                    file_put_contents('guess.json', $jsonData);
                    echo "<script>build_url('empty');</script>";
                }
                ?>
            </div>
            <!-- DELETE SCREEN ENDS HERE -->
        </div>
        <!-- RIGHT STATS STARTS HERE -->
        <div class="right">stats</div>
        <!-- RIGHT STATS ENDS HERE -->
    </main>
</body>



<!-- JS STARTS HERE -->
<script>
    country_choice(countries, spots);
</script>
<!-- JS ENDS HERE -->



</html>
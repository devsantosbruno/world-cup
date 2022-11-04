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

    <title>Bolao da Copa</title>
</head>
<!-- HEAD ENDS HERE -->


<!-- JS FUNCTIONS STARTS HERE -->
<script>
    function main_screen(main, add, update, del) {
        if (add == 'true') {
            document.getElementsByClassName("add_section")[0].style.display = 'block';
            document.getElementsByClassName("update_section")[0].style.display = 'none';
            document.getElementsByClassName("delete_section")[0].style.display = 'none';
            document.getElementsByClassName("middle_main")[0].style.display = 'none';
        } else if (update == 'true') {
            document.getElementsByClassName("add_section")[0].style.display = 'none';
            document.getElementsByClassName("update_section")[0].style.display = 'block';
            document.getElementsByClassName("delete_section")[0].style.display = 'none';
            document.getElementsByClassName("middle_main")[0].style.display = 'none';
        } else if (del == 'true') {
            document.getElementsByClassName("add_section")[0].style.display = 'none';
            document.getElementsByClassName("update_section")[0].style.display = 'none';
            document.getElementsByClassName("delete_section")[0].style.display = 'block';
            document.getElementsByClassName("middle_main")[0].style.display = 'none';
        } else if (main == 'true') {
            document.getElementsByClassName("add_section")[0].style.display = 'none';
            document.getElementsByClassName("update_section")[0].style.display = 'none';
            document.getElementsByClassName("delete_section")[0].style.display = 'none';
            document.getElementsByClassName("middle_main")[0].style.display = 'block';
        } else {
            console('test');
        }
    }

    function build_url(name) {
        main_screen('true', 'false', 'false', 'false');
        let a = "";
        if (name != "empty") {
            a = a + "name=" + name;
        }
        let url_string = "?" + a;
        window.location = url_string;
    }

    let countries = [
        "Alemanha",
        "Arabia_Saudita",
        "Argentina",
        "Australia",
        "Belgica",
        "Brasil",
        "Camaroes",
        "Canada",
        "Catar",
        "Coreia_do_Sul",
        "Costa_Rica",
        "Croacia",
        "Dinamarca",
        "Equador",
        "Espanha",
        "Estados_Unidos",
        "Franca",
        "Gana",
        "Holanda",
        "Inglaterra",
        "Ira",
        "Japao",
        "Marrocos",
        "Mexico",
        "Pais_de_Gales",
        "Polonia",
        "Portugal",
        "Senegal",
        "Servia",
        "Suica",
        "Tunisia",
        "Uruguai"
    ]

    let spots = ["o1",
        "o2",
        "o3",
        "o4",
        "o5",
        "o6",
        "o7",
        "o8",
        "o9",
        "o10",
        "o11",
        "o12",
        "o13",
        "o14",
        "o15",
        "o16",
        "q1",
        "q2",
        "q3",
        "q4",
        "q5",
        "q6",
        "q7",
        "q8",
        "s1",
        "s2",
        "s3",
        "s4",
        "f1",
        "f2",
        "c1"
    ]


    function remove_user(key) {
        window.location = "?remove_user=" + key;
    }
</script>
<!-- JS FUNCTIONS ENDS HERE -->

<!-- PHP STARTS HERE -->
<?PHP
include_once "file_storage.php";
$data = readDataFile('C:\xampp\htdocs\WorldCup\guess.json');

if (!isset($_SESSION['guess'])) {
    $_SESSION['guess'] = array();
}

if ($_SESSION['guess'] == array()) {
    $_SESSION['guess'] = array(
        "o1" => "o1",
        "o2" => "o2",
        "o3" => "o3",
        "o4" => "o4",
        "o5" => "o5",
        "o6" => "o6",
        "o7" => "o7",
        "o8" => "o8",
        "o9" => "o9",
        "o10" => "o10",
        "o11" => "o11",
        "o12" => "o12",
        "o13" => "o13",
        "o14" => "o14",
        "o15" => "o15",
        "o16" => "o16",
        "q1" => "q1",
        "q2" => "q2",
        "q3" => "q3",
        "q4" => "q4",
        "q5" => "q5",
        "q6" => "q6",
        "q7" => "q7",
        "q8" => "q8",
        "s1" => "s1",
        "s2" => "s2",
        "s3" => "s3",
        "s4" => "s4",
        "f1" => "f1",
        "f2" => "f2",
        "c1" => "c1"
    );
}



if (!empty($_POST["add_user"])) {
    $data_to_add = $_POST;
    array_push($data, $data_to_add);
    $jsonData = json_encode($data);
    file_put_contents('guess.json', $jsonData);
    echo "<script>build_url('empty');</script>";
}

$name = isset($_GET['name']) ? $_GET['name'] : "";
$screen = isset($_GET['screen']) ? $_GET['screen'] : "";
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
                if (!empty($_POST["update_user"])) {
                    $key_to_update = $_POST;
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

<!-- JS FUNCTIONS STARTS HERE -->
<script>
    /**
     * function to create select options for each spot
     */
    function country_choice(list_countries, list_spots) {
        let string_option = "<div class='container'>"
        for (j = 0; j < list_spots.length; j++) {
            string_option += "<div class='flag_area space_" + list_spots[j] + "'><label for='" + list_spots[j] + "'>" + list_spots[j] + ": </label><select class='icon-menu' name='" + list_spots[j] + "' id='" + list_spots[j] + "'>"
            for (i = 0; i < list_countries.length; i++) {
                string_option += "<option value='" + list_countries[i] + "'>" + list_countries[i] + "</option>";
            }
            string_option += "</select></div>";
        }
        "</div>"
        document.getElementsByClassName('add_form')[0].innerHTML = string_option;
    }
    country_choice(countries, spots);
</script>
<!-- JS FUNCTIONS ENDS HERE -->

</html>
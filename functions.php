<?PHP
include_once "file_storage.php";
$data = readDataFile('C:\xampp\htdocs\world-cup\guess.json');

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
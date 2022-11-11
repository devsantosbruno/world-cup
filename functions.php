<?PHP



if (isset($_POST['allGuesses'])) {
    $dsn = 'mysql:dbname=bolao;host=localhost';
    $dbUser = 'Rafael';
    $dbPassword = 'p@ssw0rdR@f@&l';

    $db = new PDO($dsn, $dbUser, $dbPassword);
    $query_string = 'SELECT guess_id,
                            player_name, 
                            o1, 
                            o2, 
                            o3, 
                            o4, 
                            o5, 
                            o6, 
                            o7, 
                            o8, 
                            o9, 
                            o10, 
                            o11, 
                            o12, 
                            o13, 
                            o14, 
                            o15, 
                            o16, 
                            q1, 
                            q2, 
                            q3, 
                            q4, 
                            q5, 
                            q6, 
                            q7, 
                            q8, 
                            s1, 
                            s2, 
                            s3, 
                            s4, 
                            f1, 
                            f2, 
                            c1
                        FROM guess
                        ORDER BY player_name;';
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $cursor = $db->query($query_string);

    $data = $cursor->fetchAll();
    print_r(json_encode($data));
}

if (isset($_POST['add_user'])) {
    $guessid = ($_POST['user_name']) . " id: " . date('ymdhis');
    $user_name = $_POST['user_name'];
    $o1 = (string)($_POST['o1']);
    $o2 = (string)($_POST['o2']);
    $o3 = (string)($_POST['o3']);
    $o4 = (string)($_POST['o4']);
    $o5 = (string)($_POST['o5']);
    $o6 = (string)($_POST['o6']);
    $o7 = (string)($_POST['o7']);
    $o8 = (string)($_POST['o8']);
    $o9 = (string)($_POST['o9']);
    $o10 = (string)($_POST['o10']);
    $o11 = (string)($_POST['o11']);
    $o12 = (string)($_POST['o12']);
    $o13 = (string)($_POST['o13']);
    $o14 = (string)($_POST['o14']);
    $o15 = (string)($_POST['o15']);
    $o16 = (string)($_POST['o16']);
    $q1 = (string)($_POST['q1']);
    $q2 = (string)($_POST['q2']);
    $q3 = (string)($_POST['q3']);
    $q4 = (string)($_POST['q4']);
    $q5 = (string)($_POST['q5']);
    $q6 = (string)($_POST['q6']);
    $q7 = (string)($_POST['q7']);
    $q8 = (string)($_POST['q8']);
    $s1 = (string)($_POST['s1']);
    $s2 = (string)($_POST['s2']);
    $s3 = (string)($_POST['s3']);
    $s4 = (string)($_POST['s4']);
    $f1 = (string)($_POST['f1']);
    $f2 = (string)($_POST['f2']);
    $c1 = (string)($_POST['c1']);


    $pdn = "mysql:database=bolao;host=localhost";
    $username = 'Rafael';
    $password = 'p@ssw0rdR@f@&l';
    try {
        $db = new PDO($pdn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("USE bolao");
        $cursor = $db->prepare("INSERT INTO guess (guess_id,
												player_name, 
												o1, 
												o2, 
												o3, 
												o4, 
												o5, 
												o6, 
												o7, 
												o8, 
												o9, 
												o10, 
												o11, 
												o12, 
												o13, 
												o14, 
												o15, 
												o16, 
												q1, 
												q2, 
												q3, 
												q4, 
												q5, 
												q6, 
												q7, 
												q8, 
												s1, 
												s2, 
												s3, 
												s4, 
												f1, 
												f2, 
												c1
												)
							VALUES ('" . $guessid . "',
									'" . $_POST['user_name'] . "',
									'" . $o1 . "',
									'" . $o2 . "',
									'" . $o3 . "',
									'" . $o4 . "',
									'" . $o5 . "',
									'" . $o6 . "',
									'" . $o7 . "',
									'" . $o8 . "',
									'" . $o9 . "',
									'" . $o10 . "',
									'" . $o11 . "',
									'" . $o12 . "',
									'" . $o13 . "',
									'" . $o14 . "',
									'" . $o15 . "',
									'" . $o16 . "',
									'" . $q1 . "',
									'" . $q2 . "',
									'" . $q3 . "',
									'" . $q4 . "',
									'" . $q5 . "',
									'" . $q6 . "',
									'" . $q7 . "',
									'" . $q8 . "',
									'" . $s1 . "',
									'" . $s2 . "',
									'" . $s3 . "',
									'" . $s4 . "',
									'" . $f1 . "',
									'" . $f2 . "',
                                    '" . $c1 . "'
									);");
        // foreach ($data as $item) {
        $cursor->execute();
        // }
        $url = "bolao.html";
        header("Location: $url");
    } catch (Exception $e) {
        print "fail:" . $e->getMessage();
    }
}

if (isset($_POST['update'])) {
    $guessid = $_POST['guess_id'];
    $user_name = $_POST['user_name'];
    $o1 = (string)($_POST['o1']);
    $o2 = (string)($_POST['o2']);
    $o3 = (string)($_POST['o3']);
    $o4 = (string)($_POST['o4']);
    $o5 = (string)($_POST['o5']);
    $o6 = (string)($_POST['o6']);
    $o7 = (string)($_POST['o7']);
    $o8 = (string)($_POST['o8']);
    $o9 = (string)($_POST['o9']);
    $o10 = (string)($_POST['o10']);
    $o11 = (string)($_POST['o11']);
    $o12 = (string)($_POST['o12']);
    $o13 = (string)($_POST['o13']);
    $o14 = (string)($_POST['o14']);
    $o15 = (string)($_POST['o15']);
    $o16 = (string)($_POST['o16']);
    $q1 = (string)($_POST['q1']);
    $q2 = (string)($_POST['q2']);
    $q3 = (string)($_POST['q3']);
    $q4 = (string)($_POST['q4']);
    $q5 = (string)($_POST['q5']);
    $q6 = (string)($_POST['q6']);
    $q7 = (string)($_POST['q7']);
    $q8 = (string)($_POST['q8']);
    $s1 = (string)($_POST['s1']);
    $s2 = (string)($_POST['s2']);
    $s3 = (string)($_POST['s3']);
    $s4 = (string)($_POST['s4']);
    $f1 = (string)($_POST['f1']);
    $f2 = (string)($_POST['f2']);
    $c1 = (string)($_POST['c1']);
    $dsn = 'mysql:dbname=bolao;host=localhost';
    $dbUser = 'Rafael';
    $dbPassword = 'p@ssw0rdR@f@&l';
    $db = new PDO($dsn, $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("USE bolao");
    $cursor = $db->prepare("UPDATE guess 
                            SET guess_id = '" . $guessid . "', player_name = '" . $user_name . "',
                                                o1 = '" . $o1 . "',
                                                o2 = '" . $o2 . "',
                                                o3 = '" . $o3 . "',
                                                o4 = '" . $o4 . "',
                                                o5 = '" . $o5 . "',
                                                o6 = '" . $o6 . "',
                                                o7 = '" . $o7 . "',
                                                o8 = '" . $o8 . "',
                                                o9 = '" . $o9 . "',
                                                o10 = '" . $o10 . "',
                                                o11 = '" . $o11 . "',
                                                o12 = '" . $o12 . "',
                                                o13 = '" . $o13 . "',
                                                o14 = '" . $o14 . "',
                                                o15 = '" . $o15 . "',
                                                o16 = '" . $o16 . "',
                                                q1 = '" . $q1 . "',
                                                q2 = '" . $q2 . "',
                                                q3 = '" . $q3 . "',
                                                q4 = '" . $q4 . "',
                                                q5 = '" . $q5 . "',
                                                q6 = '" . $q6 . "',
                                                q7 = '" . $q7 . "',
                                                q8 = '" . $q8 . "',
                                                s1 = '" . $s1 . "',
                                                s2 = '" . $s2 . "',
                                                s3 = '" . $s3 . "',
                                                s4 = '" . $s4 . "',
                                                f1 = '" . $f1 . "',
                                                f2 = '" . $f2 . "',
                                                c1 = '" . $c1 . "'
                            WHERE guess_id = '" . $guessid . "';");
    if ($cursor) {
        $cursor->execute();
        $url = "bolao.html";
        header("Location: $url");
    } else {
        echo ("error");
    }
}

if (isset($_POST['filter'], $_POST['player'])) {
    $player = $_POST['player'];
    $dsn = 'mysql:dbname=bolao;host=localhost';
    $dbUser = 'Rafael';
    $dbPassword = 'p@ssw0rdR@f@&l';

    $db = new PDO($dsn, $dbUser, $dbPassword);
    $query_string = "SELECT guess_id,
                            player_name, 
                            o1, 
                            o2, 
                            o3, 
                            o4, 
                            o5, 
                            o6, 
                            o7, 
                            o8, 
                            o9, 
                            o10, 
                            o11, 
                            o12, 
                            o13, 
                            o14, 
                            o15, 
                            o16, 
                            q1, 
                            q2, 
                            q3, 
                            q4, 
                            q5, 
                            q6, 
                            q7, 
                            q8, 
                            s1, 
                            s2, 
                            s3, 
                            s4, 
                            f1, 
                            f2, 
                            c1
                        FROM guess
                        WHERE guess_id LIKE '" . $player . "'";
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $cursor = $db->query($query_string);

    $data = $cursor->fetchAll();
    print_r(json_encode($data));
}

if (isset($_POST['delete'], $_POST['player'])) {
    $guessid = $_POST['player'];

    $dsn = 'mysql:dbname=bolao;host=localhost';
    $dbUser = 'Rafael';
    $dbPassword = 'p@ssw0rdR@f@&l';
    $db = new PDO($dsn, $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("USE bolao");
    $cursor = $db->prepare("DELETE FROM guess                             
                            WHERE guess_id = '" . $guessid . "';");
    if ($cursor) {
        $cursor->execute();
        $url = "bolao.html";
        header("Location: $url");
    } else {
        echo ("error");
    }
}

if (isset($_POST['each_player'])) {
    $id = $_POST['each_player'];
    $dsn = 'mysql:dbname=bolao;host=localhost';
    $dbUser = 'Rafael';
    $dbPassword = 'p@ssw0rdR@f@&l';

    $db = new PDO($dsn, $dbUser, $dbPassword);
    $query_string = "SELECT guess_id,
                            player_name, 
                            o1, 
                            o2, 
                            o3, 
                            o4, 
                            o5, 
                            o6, 
                            o7, 
                            o8, 
                            o9, 
                            o10, 
                            o11, 
                            o12, 
                            o13, 
                            o14, 
                            o15, 
                            o16, 
                            q1, 
                            q2, 
                            q3, 
                            q4, 
                            q5, 
                            q6, 
                            q7, 
                            q8, 
                            s1, 
                            s2, 
                            s3, 
                            s4, 
                            f1, 
                            f2, 
                            c1
                        FROM guess
                        WHERE guess_id = '" . $id . "';";
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $cursor = $db->query($query_string);

    $data = $cursor->fetchAll();
    print_r(json_encode($data));
}

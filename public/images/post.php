<!doctype html>
<html>
    <head>
        <title>Post Method</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>

        <?php
        $names = array("yuva", "shree", "manasa");
        if ($_POST["submit"]) {
            if ($_POST["name"]) {
                foreach ($names as $name) {
                    if ($POST['name'] == $name) {
                        echo " I know you,your name is" . $name;
                        $knowYou = 1;
                    }
                }
                if (!$knowYou)
                    echo "I don't know you," . $_POST['name'];
            }else {
                echo "please enter your name";
            }
        }
        ?>
        <form method="post">
            <label for="name">Name</label>
            <input name="name" type="text" />
            <input type="submit" name="submit" value="Submit Your Name" />
        </form>

    </body>
</html>
<html>
    <head>
        <title>UserList</title>
    </head>
    <body>
        <h1>List of all users</h1>
        <ul>
            <?php
                $jsonData = file_get_contents($_ENV['USERSERVICE_URL']);
                $users = json_decode($jsonData);
                foreach($users as $user) {
                    echo "<li>$user->name</li>";
                }
            ?>
        </ul>
    </body>
</html>
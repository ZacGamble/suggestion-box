<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <img src="https://images.unsplash.com/photo-1516414447565-b14be0adf13e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuJTIwd3JpdGluZyUyMG5vdGV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="header-img">
    </header>
    <main>
        <div class="p-5">
            <?php


            if (isset($_POST['submit'])) {
                $firstName = $_POST['name'];
                $email = $_POST['email'];
                $suggestion = $_POST['suggestion'];
            }
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "suggestions";

            // Create connection hello worlds
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";

            $stmt = $conn->prepare("INSERT INTO suggestions (name, email, suggestion) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $firstName, $email, $suggestion);

            // $firstName = 'Ryan';
            // $email = 'zac@123.com';
            // $suggestion = 'Bike rack';
            if (isset($_POST['submit'])) {
                $stmt->execute();

                $conn->close();
            }
            ?>

            <form method="post">
                <label for="name">name (optional)</label>
                <input type="text" name="name" class="mt-3"><br>
                <label for="email">email (optional)</label>
                <input type="email" name="email" class="mt-3"> <br>
                <label for="suggestion" class="mt-3">Suggestion: </label> <br>
                <textarea name="suggestion" id="suggestion" cols="50" rows="10" placeholder="Enter your suggestion...">

                    </textarea>
                <br>
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
        </div>
        </form>
    </main>

</body>

</html>
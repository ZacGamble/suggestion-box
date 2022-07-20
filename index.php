
<?php
require('header.php');
require('connection.php');

?>

<body>
    <header class="d-flex align-items-center justify-content-center">
        <img src="https://images.unsplash.com/photo-1516414447565-b14be0adf13e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuJTIwd3JpdGluZyUyMG5vdGV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="header-img">
    </header>
    <main>
        <div class="p-5 d-flex align-items-center justify-content-center">

            <?php

            if (isset($_POST['submit'])) {
                $firstName = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $suggestion = htmlspecialchars($_POST['suggestion']);
                $stmt = $conn->prepare("INSERT INTO suggestions (name, email, suggestion) VALUES (?, ?, ?)");
                $stmt->bind_param(
                    "sss",
                    $firstName,
                    $email,
                    $suggestion
                );
                
                
                    $stmt->execute();
                    
                    $conn->close();
                }
                $URI = $_SERVER['REQUEST_URI'];

                    if(!empty($_POST)){
           

                    header("location:$URI");
                    }
                    
            ?>

            <form method="post" action="">
                
                <input type="text" name="name" class="mt-3" placeholder="Name.."><br>
                <input type="email" name="email" class="mt-3" placeholder="Email..."> <br>
                <textarea name="suggestion" id="suggestion" cols="50" rows="10" placeholder="Enter your suggestion..." class="mt-3"></textarea>
                <br>
                <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
        </div>
        </form>
    </main>

</body>

</html>
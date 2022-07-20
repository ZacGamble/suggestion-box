<?php
require('head.php');
require('connection.php');
?>

<body>
    <header class="d-flex align-items-center justify-content-evenly">
        <p class="header-text"> Let your voice be heard!</p>
        <img src="https://images.unsplash.com/photo-1516414447565-b14be0adf13e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFuJTIwd3JpdGluZyUyMG5vdGV8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="" class="header-img">
        <p class="header-text">Submit your thoughts below.</p>
    </header>
    <main>
        <div class="container">
            <div class="p-5 d-flex align-items-center justify-content-center">
                <form method="post" action="submit.php">
                    <input type="text" name="name" class="form-input mt-3" placeholder="Name (optional)"><br>
                    <input type="email" name="email" class="form-input mt-3" placeholder="Email (optional)"> <br>
                    <textarea name="suggestion" id="suggestion" cols="50" rows="10" placeholder="Enter your suggestion..." class="form-input mt-3" required></textarea>
                    <br>
                    <button class="btn btn-success mt-3" type="submit" name="submit">Submit</button>
            </div>
            </form> <br>

            <div class="p-5 d-flex align-items-center justify-content-center text-center">
                <?php
                include 'connection.php';
                ?>

                <?php
                if (isset($_POST['suggestions'])) {
                    header("location: suggestions.php");
                }
                ?>

                <form method="post">
                    <button type="submit" class="btn btn-info" name="suggestions" id="suggestions" value="suggestions">Retrieve Suggestions</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>
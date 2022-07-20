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
            <form method="post" action="submit.php">
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
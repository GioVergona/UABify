<?php if(isset($_GET['message'])){
    $successMessage = urldecode($_GET['message']);
    echo "<div id='success-message'>$successMessage</div>";
    unset($_GET['message']);
} ?>

    <form method="post" action="index.php?action=register_complete"> 
        <label for="nom">Name:</label>
        <input type="text" id="nom" name="name" required pattern="[A-Za-zÀ-ÿ\s]+"> <br><br>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required> <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required pattern="^[A-Za-z0-9]+$"> <br><br>

        <label for="adreca">Address:</label>
        <input type="text" id="adreca" name="address" pattern=".{1,30}"> <br><br>

        <label for="poblacio">City:</label>
        <input type="text" id="poblacio" name="city" pattern=".{1,30}"> <br><br>

        <label for="codi_postal">Postal Code:</label>
        <input type="text" id="codi_postal" name="zip_code" required pattern="^\d{5}$"> <br><br>

        <input type="submit" value="Register"> 
    </form>

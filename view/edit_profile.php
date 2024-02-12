<div class = 'ccontainer'>
    <h1> My Account </h1>
    <form action="index.php?action=edit_profile" method = "post" enctype = "multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="name"> Name </label>
                <input id="name" name="name" type="text" value="<?php echo $user['name'];?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email"> Email </label>
                <input id="email" name="email" type="text" value="<?php echo $user['email'];?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="address"> Address </label>
                <input id="address" name="address" type="text" value="<?php echo $user['address'];?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="city"> City </label>
                <input id="city" name="city" type="text" value="<?php echo $user['city'];?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="zip_code"> Zip-code </label>
                <input id="zip_code" name="zip_code" type="text" value="<?php echo $user['zip_code'];?>"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="profile_picture"> Profile picture </label>
                <input id="profile_picture" name="profile_picture" type="file"/>
            </div>
            <?php if ($user['profile_picture']):?>
                <div class="col">
                    <p class = "content"> Current profile picture </p>
                    <img src="<?php echo $filesPublicPath.$user['profile_picture']?>" alt="<?php echo $user['name']?>"/>
                </div>
            <?php endif;?>
        </div>
        <div class = "row">
            <div class = "col">
                <button> Save </button>
            </div>
        </div>
    </form>
</div>
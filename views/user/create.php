<?php
if ( !empty( $error ) ) {
    if( $error == 'nomatch' ) {
        ?><div class="error">Passwords do not match.</div><?php
    }
    else if ( $error == 'noregister' ) {
        ?><div class="error">Username already exist. Please try another username.</div><?php
    }
}
?>
<form method="post" action="user/create" id='registerForm' class="register">
    <div>
        <label>Username</label>
        <input type="text" name="name" />
    </div>
    <div>
        <input type="submit" value="Register" />
    </div>
</form>

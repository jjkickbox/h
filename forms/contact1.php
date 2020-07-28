<?php
$toEmail = "jj.kickbox@gmail.com";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
print "<p class='success'>Contact Mail Sent.</p>";
} else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>
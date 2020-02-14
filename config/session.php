<?php
// checking if a session named "loggedIn" exists.
// - if not, then create a new one with FALSE as it's base value.
// - otherwise, do nothing.
// bear in mind that the $_SESSION is a super global.
if (!isset($_SESSION["loggedIn"])) {

    $_SESSION["loggedIn"] = false;
}

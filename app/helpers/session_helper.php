<?php

session_start();

function flash($name = "", $message = "", $class = "alert alert-success") {

  if (!empty($_SESSION[$name])) {
    echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . "</div>";
    unset($_SESSION[$name]);
    unset($_SESSION[$name . "_class"]);
  } else {
    $_SESSION[$name] = $message;
    $_SESSION[$name . "_class"] = $class;
  }
}

function isLoggedIn() {
  return (isset($_SESSION["user_id"])) ? true : false;
}

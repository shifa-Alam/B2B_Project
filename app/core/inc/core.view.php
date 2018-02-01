<?php
add_log("core.view.php");

function template_url($relative_path){
  global $APP_LAYOUT;
  echo 'app/view/template/' . $APP_LAYOUT . '/' . $relative_path;
}

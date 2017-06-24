<?php
if (file_exists('dados') == false){
  mkdir('dados');
}
if (isset($_GET['u'])){
  if (file_exists('dados/'.$_GET['u'].'.hash')){
    $hash=file_get_contents('dados/'.$_GET['u'].'.hash');
    if ($hash == $_GET['p']){
      echo "Tok".rand(0,9999999).date('YmdHis');
    } else {
      echo "failed";
    }
  } else {
    file_put_contents('dados/'.$_GET['u'].'.hash',$_GET['p']);
    echo "FTok".rand(0,9999999).date('YmdHis');
  }
    
}
if (isset($_GET['log'])){
  if (file_exists('dados/'.$_GET['log'].'.log')){
    echo file_get_contents('dados/'.$_GET['log'].'.log');
  } else {
    echo '';
  }
}
if (isset($_GET['acts'])){
  if (file_exists('dados/'.$_GET['acts'].'.acts')){
    echo file_get_contents('dados/'.$_GET['acts'].'.acts');
  } else {
    echo 'nada';
  }
}
if (isset($_POST['save'])){
  echo "save is a post too\n";
}
if (isset($_POST['acts'])){
    //echo "a post is acts\n";
    //echo  $_POST['acts'];
  file_put_contents('dados/'.$_POST['save'].'.acts',$_POST['acts']);
  
}
if (isset($_POST['log'])){
    //echo 'a post is log';
    //echo  $_POST['log'];
  file_put_contents('dados/'.$_POST['save'].'.log',$_POST['log']);
}
?>
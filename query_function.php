<?php

function insert_subjects($subject){
    global $db;

$sql = "INSERT INTO japan47 ";
$sql .="(name, email, password) ";
$sql .="VALUES (";
$sql .="'".db_escape($db, $subject['name'])."',";
$sql .="'".db_escape($db, $subject['email'])."',";
$sql .="'".db_escape($db, $subject['password'])."'";
$sql .=")";
$result = mysqli_query($db, $sql);

if($result){
    return true;
}else{
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

}// end of insert_subjects

function find_user_by_name($username){
    global $db;

    $sql = "SELECT * FROM japan47 ";
    $sql .="WHERE name='".db_escape($db, $username)."' ";
    $sql .="LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}

function scoreForCharacters($password){
    global $db;

    $sql = "SELECT a,e,i,o,u,ka,ke,ki,ko,ku,sa,se,si,so,su,ta,te,ti,to_,tu_,na,ne,ni,no,nu,ha,he,hi,ho,hu,ma,me,mi,mo,mu,ya,yu,yo,ra,ri,ru,ro,we,wa,wi FROM japan47 ";
    $sql .="WHERE password='".db_escape($db, $password)."' ";
    $sql .="LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}

function insert_subject_Char($subject){

    global $db;



$sql = "INSERT INTO japan47 ";
$sql .="(name, email, password,a,e,i,o,u,ka,ke,ki,ko,ku,sa,se,si,so,su,ta,te,ti,to_,tu_,na,ne,ni,no,nu,ha,he,hi,ho,hu,ma,me,mi,mo,mu,ya,yu,yo,ra,ri,ru,ro,we,wa,wi,wo,timesPlayed,country) ";
$sql .="VALUES (";
$sql .="'".db_escape($db, $subject['name'])."',";
$sql .="'".db_escape($db, $subject['email'])."',";
$sql .="'".db_escape($db, $subject['password'])."',";
$sql .="'".db_escape($db, $subject['a'])."',";
$sql .="'".db_escape($db, $subject['e'])."',";
$sql .="'".db_escape($db, $subject['i'])."',";
$sql .="'".db_escape($db, $subject['o'])."',";
$sql .="'".db_escape($db, $subject['u'])."',";
$sql .="'".db_escape($db, $subject['ka'])."',";
$sql .="'".db_escape($db, $subject['ke'])."',";
$sql .="'".db_escape($db, $subject['ki'])."',";
$sql .="'".db_escape($db, $subject['ko'])."',";
$sql .="'".db_escape($db, $subject['ku'])."',";
$sql .="'".db_escape($db, $subject['sa'])."',";
$sql .="'".db_escape($db, $subject['se'])."',";
$sql .="'".db_escape($db, $subject['si'])."',";
$sql .="'".db_escape($db, $subject['so'])."',";
$sql .="'".db_escape($db, $subject['su'])."',";
$sql .="'".db_escape($db, $subject['ta'])."',";
$sql .="'".db_escape($db, $subject['te'])."',";
$sql .="'".db_escape($db, $subject['ti'])."',";
$sql .="'".db_escape($db, $subject['to_'])."',";
$sql .="'".db_escape($db, $subject['tu_'])."',";
$sql .="'".db_escape($db, $subject['na'])."',";
$sql .="'".db_escape($db, $subject['ne'])."',";
$sql .="'".db_escape($db, $subject['ni'])."',";
$sql .="'".db_escape($db, $subject['no'])."',";
$sql .="'".db_escape($db, $subject['nu'])."',";
$sql .="'".db_escape($db, $subject['ha'])."',";
$sql .="'".db_escape($db, $subject['he'])."',";
$sql .="'".db_escape($db, $subject['hi'])."',";
$sql .="'".db_escape($db, $subject['ho'])."',";
$sql .="'".db_escape($db, $subject['hu'])."',";
$sql .="'".db_escape($db, $subject['ma'])."',";
$sql .="'".db_escape($db, $subject['me'])."',";
$sql .="'".db_escape($db, $subject['mi'])."',";
$sql .="'".db_escape($db, $subject['mo'])."',";
$sql .="'".db_escape($db, $subject['mu'])."',";
$sql .="'".db_escape($db, $subject['ya'])."',";
$sql .="'".db_escape($db, $subject['yu'])."',";
$sql .="'".db_escape($db, $subject['yo'])."',";
$sql .="'".db_escape($db, $subject['ra'])."',";
$sql .="'".db_escape($db, $subject['ri'])."',";
$sql .="'".db_escape($db, $subject['ru'])."',";
$sql .="'".db_escape($db, $subject['ro'])."',";
$sql .="'".db_escape($db, $subject['we'])."',";
$sql .="'".db_escape($db, $subject['wa'])."',";
$sql .="'".db_escape($db, $subject['wi'])."',";
$sql .="'".db_escape($db, $subject['wo'])."',";
$sql .="1,";
$sql .="'".db_escape($db, $subject['country'])."'";

$sql .=")";
$result = mysqli_query($db, $sql);

if($result){
    return true;
}else{
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

}// end of insert_subjects


function update_subject_Char($subject) {
  global $db;

  // $errors = validate_subject($subject);
  // if(!empty($errors)) {
  //   return $errors;
  // }



  $sql = "UPDATE japan47 SET ";
 // $sql .= "name='" . db_escape($db, $subject['name']) . "', ";

//   a + subject['a'] is like a + (1 or 0) becouse subject['a'] is either true (1) or false (0)

   $sql .= "a= a+'" . db_escape($db, $subject['a']) . "', ";
   $sql .= "e= e+'" . db_escape($db, $subject['e']) . "', ";
   $sql .= "i= i+'" . db_escape($db, $subject['i']) . "', ";
   $sql .= "o=o+'" . db_escape($db, $subject['o']) . "', ";
   $sql .= "u=u+'" . db_escape($db, $subject['u']) . "', ";
   $sql .= "ka=ka+'" . db_escape($db, $subject['ka']) . "', ";
   $sql .= "ke=ke+'" . db_escape($db, $subject['ke']) . "', ";
   $sql .= "ki=ki+'" . db_escape($db, $subject['ki']) . "', ";
   $sql .= "ko=ko+'" . db_escape($db, $subject['ko']) . "', ";
   $sql .= "ku=ku+'" . db_escape($db, $subject['ku']) . "', ";
   $sql .= "sa=sa+'" . db_escape($db, $subject['sa']) . "', ";
   $sql .= "se=se+'" . db_escape($db, $subject['se']) . "', ";
   $sql .= "si=si+'" . db_escape($db, $subject['si']) . "', ";
   $sql .= "so=so+'" . db_escape($db, $subject['so']) . "', ";
   $sql .= "su=su+'" . db_escape($db, $subject['su']) . "', ";
   $sql .= "ta=ta+'" . db_escape($db, $subject['ta']) . "', ";
   $sql .= "te=te+'" . db_escape($db, $subject['te']) . "', ";
   $sql .= "ti=ti+'" . db_escape($db, $subject['ti']) . "', ";
   $sql .= "to_=to_+'" . db_escape($db, $subject['to_']) . "', ";
   $sql .= "tu_=tu_+'" . db_escape($db, $subject['tu_']) . "', ";
   $sql .= "na=na+'" . db_escape($db, $subject['na']) . "', ";
   $sql .= "ne=ne+'" . db_escape($db, $subject['ne']) . "', ";
   $sql .= "ni=ni+'" . db_escape($db, $subject['ni']) . "', ";
   $sql .= "no=no+'" . db_escape($db, $subject['no']) . "', ";
   $sql .= "nu=nu+'" . db_escape($db, $subject['nu']) . "', ";
   $sql .= "ha=ha+'" . db_escape($db, $subject['ha']) . "', ";
   $sql .= "he=he+'" . db_escape($db, $subject['he']) . "', ";
   $sql .= "hi=hi+'" . db_escape($db, $subject['hi']) . "', ";
   $sql .= "ho=ho+'" . db_escape($db, $subject['ho']) . "', ";
   $sql .= "hu=hu+'" . db_escape($db, $subject['hu']) . "', ";
   $sql .= "ma='ma+" . db_escape($db, $subject['ma']) . "', ";
   $sql .= "me=me+'" . db_escape($db, $subject['me']) . "', ";
   $sql .= "mi=mi+'" . db_escape($db, $subject['mi']) . "', ";
   $sql .= "mo=mo+'" . db_escape($db, $subject['mo']) . "', ";
   $sql .= "mu=mu+'" . db_escape($db, $subject['mu']) . "', ";
   $sql .= "ya=ya+'" . db_escape($db, $subject['ya']) . "', ";
   $sql .= "yu=yu+'" . db_escape($db, $subject['yu']) . "', ";
   $sql .= "yo=yo+'" . db_escape($db, $subject['yo']) . "', ";
   $sql .= "ra=ra+'" . db_escape($db, $subject['ra']) . "', ";
   $sql .= "ri=ri+'" . db_escape($db, $subject['ri']) . "', ";
   $sql .= "ru=ru+'" . db_escape($db, $subject['ru']) . "', ";
   $sql .= "ro=ro+'" . db_escape($db, $subject['ro']) . "', ";
   $sql .= "we=we+'" . db_escape($db, $subject['we']) . "', ";
   $sql .= "wa=wa+'" . db_escape($db, $subject['wa']) . "', ";
   $sql .= "wi=wi+'" . db_escape($db, $subject['wi']) . "', ";
   $sql .= "wo=wo+'" . db_escape($db, $subject['wo']) . "', ";
   $sql .= "timesPlayed = timesPlayed+ 1 ";

  $sql .= "WHERE password='" . db_escape($db, $subject['password']) . "' ";
  $sql .= "LIMIT 1";

  $result = mysqli_query($db, $sql);
  // For UPDATE statements, $result is true/false
  if($result) {
    return true;
  } else {
    // UPDATE failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
  }

}

function find_name($password){
    global $db;

    $sql = "SELECT name,a,e,i,o,u,ka,ke,ki,ko,ku,sa,se,si,so,su,ta,te,ti,to_,tu_,na,ne,ni,no,nu,ha,he,hi,ho,hu,ma,me,mi,mo,mu,ya,yu,yo,ra,ri,ru,ro,we,wa,wi FROM japan47 ";
    $sql .="WHERE password='".db_escape($db, $password)."' ";
    $sql .="LIMIT 1";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $admin = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}


function find_all_people() {
  global $db;



  $sql = "SELECT name,country, timesPlayed FROM japan47 ";
  $sql .= "ORDER BY timesPlayed DESC";
  //echo $sql;
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}



 ?>

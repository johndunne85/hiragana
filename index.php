 <?php
 require_once('initalize.php');

 ?>

<?php


if (isset($_GET['var_PHP_data'])) {
  $score =  $_GET['var_PHP_data'];
$answerArray =[];
 $answerArray =  explode(",",$score);
 $xx = $answerArray;




 }

 if(is_post_request() && isset($_POST['logout'])){
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}

  //   SIGN UP FORM  //
 if(is_post_request() && isset($_POST['signin'])){

     // set session name

     $usernameSession = isset($_POST['name']) ? $_POST['name'] : '';
      $passwordSession = isset($_POST['password']) ? $_POST['password'] : '';
     $_SESSION['password']  = $passwordSession;
     $_SESSION['username']  =  $usernameSession;


    $subject=[];
    $subject['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $subject['email']= isset($_POST['email']) ? $_POST['email'] : '';
    $subject['password']= isset($_POST['password']) ? $_POST['password'] : '';
    $subject['a'] = isset($_POST['a']) ? $_POST['a'] : '';
    $subject['e'] = isset($_POST['e']) ? $_POST['e'] : '';
    $subject['i'] = isset($_POST['i']) ? $_POST['i'] : '';
    $subject['o'] = isset($_POST['o']) ? $_POST['o'] : '';
    $subject['u'] = isset($_POST['u']) ? $_POST['u'] : '';
    $subject['ka'] = isset($_POST['ka']) ? $_POST['ka'] : '';
    $subject['ke'] = isset($_POST['ke']) ? $_POST['ke'] : '';
    $subject['ki'] = isset($_POST['ki']) ? $_POST['ki'] : '';
    $subject['ko'] = isset($_POST['ko']) ? $_POST['ko'] : '';
    $subject['ku'] = isset($_POST['ku']) ? $_POST['ku'] : '';
    $subject['sa'] = isset($_POST['sa']) ? $_POST['sa'] : '';
    $subject['se'] = isset($_POST['se']) ? $_POST['se'] : '';
    $subject['si'] = isset($_POST['si']) ? $_POST['si'] : '';
    $subject['so'] = isset($_POST['so']) ? $_POST['so'] : '';
    $subject['su'] = isset($_POST['su']) ? $_POST['su'] : '';
    $subject['ta'] = isset($_POST['ta']) ? $_POST['ta'] : '';
    $subject['te'] = isset($_POST['te']) ? $_POST['te'] : '';
    $subject['ti'] = isset($_POST['ti']) ? $_POST['ti'] : '';
    $subject['to_'] = isset($_POST['to_']) ? $_POST['to_'] : '';
    $subject['tu_'] = isset($_POST['tu_']) ? $_POST['tu_'] : '';
    $subject['na'] = isset($_POST['na']) ? $_POST['na'] : '';
    $subject['ne'] = isset($_POST['ne']) ? $_POST['ne'] : '';
    $subject['ni'] = isset($_POST['ni']) ? $_POST['ni'] : '';
    $subject['no'] = isset($_POST['no']) ? $_POST['no'] : '';
    $subject['nu'] = isset($_POST['nu']) ? $_POST['nu'] : '';
    $subject['ha'] = isset($_POST['ha']) ? $_POST['ha'] : '';
    $subject['he'] = isset($_POST['he']) ? $_POST['he'] : '';
    $subject['hi'] = isset($_POST['hi']) ? $_POST['hi'] : '';
    $subject['ho'] = isset($_POST['ho']) ? $_POST['ho'] : '';
    $subject['hu'] = isset($_POST['hu']) ? $_POST['hu'] : '';
    $subject['ma'] = isset($_POST['ma']) ? $_POST['ma'] : '';
    $subject['me'] = isset($_POST['me']) ? $_POST['me'] : '';
    $subject['mi'] = isset($_POST['mi']) ? $_POST['mi'] : '';
    $subject['mo'] = isset($_POST['mo']) ? $_POST['mo'] : '';
    $subject['mu'] = isset($_POST['mu']) ? $_POST['mu'] : '';
    $subject['ya'] = isset($_POST['ya']) ? $_POST['ya'] : '';
    $subject['yu'] = isset($_POST['yu']) ? $_POST['yu'] : '';
    $subject['yo'] = isset($_POST['yo']) ? $_POST['yo'] : '';
    $subject['ra'] = isset($_POST['ra']) ? $_POST['ra'] : '';
    $subject['ri'] = isset($_POST['ri']) ? $_POST['ri'] : '';
    $subject['ru'] = isset($_POST['ru']) ? $_POST['ru'] : '';
    $subject['ro'] = isset($_POST['ro']) ? $_POST['ro'] : '';
    $subject['we'] = isset($_POST['we']) ? $_POST['we'] : '';
    $subject['wa'] = isset($_POST['wa']) ? $_POST['wa'] : '';
    $subject['wi'] = isset($_POST['wi']) ? $_POST['wi'] : '';
    $subject['wo'] = isset($_POST['wo']) ? $_POST['wo'] : '';
    $subject['country'] = isset($_POST['country']) ? $_POST['country'] : '';



$result = insert_subject_Char($subject);




}// new

    // LOGIN FORM //

if(is_post_request() && (isset($_POST['login']) || isset($_POST['playTrue']))){



    // set session name

    $usernameSession = isset($_POST['name']) ? $_POST['name'] : '';
     $passwordSession = isset($_POST['password']) ? $_POST['password'] : '';
    $_SESSION['password']  = $passwordSession;
    $_SESSION['username']  =  $usernameSession;



    $subject=[];
    $subject['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $subject['password']= isset($_POST['password']) ? $_POST['password'] : '';
    $subject['a'] = isset($_POST['a']) ? $_POST['a'] : '';
    $subject['e'] = isset($_POST['e']) ? $_POST['e'] : '';
    $subject['i'] = isset($_POST['i']) ? $_POST['i'] : '';
    $subject['o'] = isset($_POST['o']) ? $_POST['o'] : '';
    $subject['u'] = isset($_POST['u']) ? $_POST['u'] : '';
    $subject['ka'] = isset($_POST['ka']) ? $_POST['ka'] : '';
    $subject['ke'] = isset($_POST['ke']) ? $_POST['ke'] : '';
    $subject['ki'] = isset($_POST['ki']) ? $_POST['ki'] : '';
    $subject['ko'] = isset($_POST['ko']) ? $_POST['ko'] : '';
    $subject['ku'] = isset($_POST['ku']) ? $_POST['ku'] : '';
    $subject['sa'] = isset($_POST['sa']) ? $_POST['sa'] : '';
    $subject['se'] = isset($_POST['se']) ? $_POST['se'] : '';
    $subject['si'] = isset($_POST['si']) ? $_POST['si'] : '';
    $subject['so'] = isset($_POST['so']) ? $_POST['so'] : '';
    $subject['su'] = isset($_POST['su']) ? $_POST['su'] : '';
    $subject['ta'] = isset($_POST['ta']) ? $_POST['ta'] : '';
    $subject['te'] = isset($_POST['te']) ? $_POST['te'] : '';
    $subject['ti'] = isset($_POST['ti']) ? $_POST['ti'] : '';
    $subject['to_'] = isset($_POST['to_']) ? $_POST['to_'] : '';
    $subject['tu_'] = isset($_POST['tu_']) ? $_POST['tu_'] : '';
    $subject['na'] = isset($_POST['na']) ? $_POST['na'] : '';
    $subject['ne'] = isset($_POST['ne']) ? $_POST['ne'] : '';
    $subject['ni'] = isset($_POST['ni']) ? $_POST['ni'] : '';
    $subject['no'] = isset($_POST['no']) ? $_POST['no'] : '';
    $subject['nu'] = isset($_POST['nu']) ? $_POST['nu'] : '';
    $subject['ha'] = isset($_POST['ha']) ? $_POST['ha'] : '';
    $subject['he'] = isset($_POST['he']) ? $_POST['he'] : '';
    $subject['hi'] = isset($_POST['hi']) ? $_POST['hi'] : '';
    $subject['ho'] = isset($_POST['ho']) ? $_POST['ho'] : '';
    $subject['hu'] = isset($_POST['hu']) ? $_POST['hu'] : '';
    $subject['ma'] = isset($_POST['ma']) ? $_POST['ma'] : '';
    $subject['me'] = isset($_POST['me']) ? $_POST['me'] : '';
    $subject['mi'] = isset($_POST['mi']) ? $_POST['mi'] : '';
    $subject['mo'] = isset($_POST['mo']) ? $_POST['mo'] : '';
    $subject['mu'] = isset($_POST['mu']) ? $_POST['mu'] : '';
    $subject['ya'] = isset($_POST['ya']) ? $_POST['ya'] : '';
    $subject['yu'] = isset($_POST['yu']) ? $_POST['yu'] : '';
    $subject['yo'] = isset($_POST['yo']) ? $_POST['yo'] : '';
    $subject['ra'] = isset($_POST['ra']) ? $_POST['ra'] : '';
    $subject['ri'] = isset($_POST['ri']) ? $_POST['ri'] : '';
    $subject['ru'] = isset($_POST['ru']) ? $_POST['ru'] : '';
    $subject['ro'] = isset($_POST['ro']) ? $_POST['ro'] : '';
    $subject['we'] = isset($_POST['we']) ? $_POST['we'] : '';
    $subject['wa'] = isset($_POST['wa']) ? $_POST['wa'] : '';
    $subject['wi'] = isset($_POST['wi']) ? $_POST['wi'] : '';
    $subject['wo'] = isset($_POST['wo']) ? $_POST['wo'] : '';


    $result2 = update_subject_Char($subject);



    function is_ajax_request(){
        return isset($_SERVER['HTTP_X_REQUESTED_WITH'])&&
        $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';
    }


     $volume = find_name($subject['password']);

        if(is_ajax_request()){

         echo $volume['name'];

    }else{
        exit;
    }


}

 $errors =[];
 $username ='';
 $password='';

  if(is_post_request()){

      $username= isset($_POST['name']) ?  $_POST['name'] : '';
      $password= isset($_POST['password']) ?  $_POST['password'] : '';

      if(is_blank($username)){
          $errors[] = "username cannot be blank.";
      }

      if(is_blank($password)){
          $errors[] = "Password cannot be blank.";
      }

      if(empty($errors)){

          $admin = find_user_by_name($username);
          if($admin){

          }else{
              // no  username found
              $errors[] ="username is wrong";
          }
      }





  }


 ?>




 <!DOCTYPE>
 <html lang="en">
 <head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <script src="jquery-3.2.0.js"></script>
     <link rel="stylesheet" href="styles.css">

 </head>

<?php if( isset($_GET['var_PHP_data']) || isset($_POST['login']) || isset($_POST['signin'])){ }else{?>
 <body>


         <h1 id="title">HIRAGANA STUDY APP</h1>
 <!-- start of 1st columb -->

 <div class="container">

     <div class="row">
 <h4> <?php echo isset($_SESSION['username']) ?"Logged In: ".$_SESSION['username']."" : '';?> </h4>
 <div class="col-md-6">
     <!-- first test table -->

     <div id="result">
             <h3>Progress Table: <span id="volume"></span></h3>
     </div>







     <div id="test_tables" hidden>
        <table class="tg">
  <tr id="firstR">
    <th class="test1"><h2 id= "00"></h2></th>
    <th class="test1"><h2 id="01"></h2></th>
    <th class="test1"><h2 id="02"></h2></th>
    <th class="test1"><h2 id="03"></h2></th>
    <th class="test1"><img id="1e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test2"><h2 id="10"></h2></th>
    <th class="test2"><h2 id="11"></h2></th>
    <th class="test2"><h2 id="12"></h2></th>
    <th class="test2"><h2 id="13"></h2></th>
    <th class="test2"><img id="2e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test3"><h2 id="20"></h2></th>
    <th class="test3"><h2 id="21"></h2></th>
    <th class="test3"><h2 id="22"></h2></th>
    <th class="test3"><h2 id="23"></h2></th>
    <th class="test3"><img id="3e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test4"><h2 id="30"></h2></th>
    <th class="test4"><h2 id="31"></h2></th>
    <th class="test4"><h2 id="32"></h2></th>
    <th class="test4"><h2 id="33"></h2></th>
    <th class="test4"><img id="4e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test5"><h2 id="40"></h2></th>
    <th class="test5"><h2 id="41"></h2></th>
    <th class="test5"><h2 id="42"></h2></th>
    <th class="test5"><h2 id="43"></h2></th>
    <th class="test5"><img id="5e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test6"><h2 id="50"></h2></th>
    <th class="test6"><h2 id="51"></h2></th>
    <th class="test6"><h2 id="52"></h2></th>
    <th class="test6"><h2 id="53"></h2></th>
    <th class="test6"><img id="6e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
</table>
<button class="btn" id="next_test">
Next Test
</button>
    </div>

<!-- second test table -->
    <div id="test_tables2" hidden>
        <table class="tg">
  <tr>
    <th class="test7"><h2 id="60"></h2></th>
    <th class="test7"><h2 id="61"></h2></th>
    <th class="test7"><h2 id="62"></h2></th>
    <th class="test7"><h2 id="63"></h2></th>
    <th class="test7"><img id="7e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test8"><h2 id="70"></h2></th>
    <th class="test8"><h2 id="71"></h2></th>
    <th class="test8"><h2 id="72"></h2></th>
    <th class="test8"><h2 id="73"></h2></th>
    <th class="test8"><img id="8e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test9"><h2 id="80"></h2></th>
    <th class="test9"><h2 id="81"></h2></th>
    <th class="test9"><h2 id="82"></h2></th>
    <th class="test9"><h2 id="83"></h2></th>
    <th class="test9"><img id="9e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>
  <tr>
    <th class="test10"><h2 id="90"></bh2></th>
    <th class="test10"><h2 id="91"></h2></th>
    <th class="test10"><h2 id="92"></h2></th>
    <th class="test10"><h2 id="93"></h2></th>
    <th class="test10"><img id="10e"src="images/A_hiragna.png"style="width:80px;height:80px;"></th>
  </tr>

</table>
<?php if(isset($_SESSION['username'])){?>
    <button class="btn" id="playThrough">
    Results! PT
    </button>
    <?php }else{ ?>
<button class="btn" id="results">
Results!
</button>
<?php }?>
    </div>

    <?php if( isset($_POST['signin'])){ }else{?>
    <p id="main_table">
    <table class="tg">
  <tr>
    <th class="tab" id="a_hir"onClick="imageClick(audio_a);"><img  src="images/A_hiragna.png"  alt="A" style="width:90px;height:90px;">
    <b>a</b></th>
    <th class="tab" id="e_hir"onClick="imageClick(audio_e);"><img src="images/E_hiragna.png" alt="E" style="width:90px;height:90px;">
    <b>e</b></th>
    <th class="tab" id="i_hir"onClick="imageClick(audio_i);"><img src="images/I_hiragna.png" alt="I" style="width:90px;height:90px;">
    <b>i</b></th>
    <th class="tab" id="o_hir"onClick="imageClick(audio_o);"><img src="images/O_hiragna.png" alt="O" style="width:90px;height:90px;">
    <b>o</b></th>
    <th class="tab" id="u_hir"onClick="imageClick(audio_u);"><img src="images/U_hiragna.png" alt="U" style="width:90px;height:90px;">
    <b>u</b></th>

  </tr>
  <tr>
    <td class="tab" id="ka_hir"onClick="imageClick(audio_ka);"><img src="images/KA_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ka</b></td>
    <td class="tab" id="ke_hir"onClick="imageClick(audio_ke);"><img src="images/Ke_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ke</b></th></td>
    <td class="tab" id="ki_hir"onClick="imageClick(audio_ki);"><img src="images/Ki_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ki</b></th></td>
    <td class="tab" id="ko_hir"onClick="imageClick(audio_ko);"><img src="images/Ko_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ko</b></th></td>
    <td class="tab" id="ku_hir"onClick="imageClick(audio_ku);"><img src="images/Ku_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ku</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="sa_hir"onClick="imageClick(audio_sa);"><img src="images/Sa_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Sa</b></th></td>
    <td class="tab" id="se_hir"onClick="imageClick(audio_se);"><img src="images/Si_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Se</b></th></td>
    <td class="tab" id="si_hir"onClick="imageClick(audio_si);"><img src="images/Su_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Si</b></th></td>
    <td class="tab" id="so_hir"onClick="imageClick(audio_so);"><img src="images/Se_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>So</b></th></td>
    <td class="tab" id="su_hir"onClick="imageClick(audio_su);"><img src="images/So_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Su</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="ta_hir"onClick="imageClick(audio_ta);"><img src="images/Ta_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ta</b></th></td>
    <td class="tab" id="te_hir"onClick="imageClick(audio_te);"><img src="images/Te_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Te</b></th></td>
    <td class="tab" id="ti_hir"onClick="imageClick(audio_ti);"><img src="images/Ti_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ti</b></th></td>
    <td class="tab" id="to_hir"onClick="imageClick(audio_to);"><img src="images/To_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>To</b></th></td>
    <td class="tab" id="tu_hir"onClick="imageClick(audio_tu);"><img src="images/Tu_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Tu</b></th></td>
  </tr>
  <tr>
      <td class="tab" id="na_hir"onClick="imageClick(audio_na);"><img src="images/Na_hiragna.png" alt="A" style="width:90px;height:90px;">
      <b>Na</b></th></td>
      <td class="tab" id="ne_hir"onClick="imageClick(audio_ne);"><img src= "images/Ne_hiragna.png"alt="A" style="width:90px;height:90px;">
      <b>Ne</b></th></td>
      <td class="tab" id="ni_hir"onClick="imageClick(audio_ni);"><img src="images/Ni_hiragna.png" alt="A" style="width:90px;height:90px;">
      <b>Ni</b></th></td>
      <td class="tab" id="no_hir"onClick="imageClick(audio_no);"><img src="images/No_hiragna.png" alt="A" style="width:90px;height:90px;">
      <b>No</b></th></td>
      <td class="tab" id="nu_hir"onClick="imageClick(audio_nu);"><img src="images/Nu_hiragna.png" alt="A" style="width:90px;height:90px;">
      <b>Nu</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="ha_hir"onClick="imageClick(audio_ha);"><img src="images/Ha_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ha</b></th></td>
    <td class="tab" id="he_hir"onClick="imageClick(audio_he);"><img src= "images/He_hiragna.png"alt="A" style="width:90px;height:90px;">
    <b>He</b></th></td>
    <td class="tab" id="hi_hir"onClick="imageClick(audio_hi);"><img src="images/Hi_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Hi</b></th></td>
    <td class="tab" id="ho_hir"onClick="imageClick(audio_ho);"><img src="images/Ho_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ho</b></th></td>
    <td class="tab" id="hu_hir"onClick="imageClick(audio_hu);"><img src="images/Hu_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Hu</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="ma_hir"onClick="imageClick(audio_ma);"><img src="images/Ma_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ma</b></th></td>
    <td class="tab" id="me_hir"onClick="imageClick(audio_me);"><img src="images/Me_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Me</b></th></td>
    <td class="tab" id="mi_hir"onClick="imageClick(audio_mi);"><img src="images/Mi_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Mi</b></th></td>
    <td class="tab" id="mo_hir"onClick="imageClick(audio_mo);"><img src="images/Mo_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Mo</b></th></td>
    <td class="tab" id="mu_hir"onClick="imageClick(audio_mu);"><img src="images/Mu_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Mu</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="ya_hir"onClick="imageClick(audio_ya);"><img src="images/Ya_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ya</b></th></td>
    <td class="tab" id="yu_hir"onClick="imageClick(audio_yu);"><img src="images/Yu_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Yu</b></th></td>
    <td class="tab" id="yo_hir"onClick="imageClick(audio_yo);"><img src="images/Yo_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Yo</b></th></td>
    <td class="tab" id="ra_hir"onClick="imageClick(audio_ra);"><img src="images/Ra_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ra</b></th></td>
    <td class="tab" id="ri_hir"onClick="imageClick(audio_ri);"><img src="images/Ri_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ri</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="ru_hir"onClick="imageClick(audio_ru);"><img src="images/Ru_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ru</b></th></td>
    <td class="tab" id="ro_hir"onClick="imageClick(audio_ro);"><img src="images/Ro_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Ro</b></th></td>
    <td class="tab" id="we_hir"onClick="imageClick(audio_we);"><img src="images/We_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>We</b></th></td>
    <td class="tab" id="wa_hir"onClick="imageClick(audio_wa);"><img src="images/Wa_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Wa</b></th></td>
    <td class="tab" id="wi_hir"onClick="imageClick(audio_wi);"><img src="images/Wi_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Wi</b></th></td>
  </tr>
  <tr>
    <td class="tab" id="wo_hir"onClick="imageClick(audio_wo);"><img src="images/Wo_hiragna.png" alt="A" style="width:90px;height:90px;">
    <b>Wo</b></th></td>
  </tr>
</table>
</p>
<?php } ?>
<?php
}
if(! isset($_GET['var_PHP_data']) && !isset($_POST['login'])){

    ?>


        <script>
        //'#results'
        $('#playThrough').click(function(e){
        e.preventDefault();
            var var_data = chain;
            $.ajax({
                url: 'index.php',
                type: 'GET',
                 data: { var_PHP_data: var_data },
                 success: function(data) {

                     // do something;
                    $('#result2').html(data)
                 }

             });
         });

         $('#results').click(function(e){
         e.preventDefault();
             var var_data = chain;
             $.ajax({
                 url: 'index.php',
                 type: 'GET',
                  data: { var_PHP_data: var_data },
                  success: function(data) {

                      // do something;
                     $('#result1').html(data)
                  }

              });
          });



        </script>

        <p id="result2"></p>
        <p id="result1"></p>

<?php } ?>




<?php

 ?>







 <div class="form-style-8" id="frog1" hidden>
<h2 id="title2">Sign Up Form</h2>



<form name="test" id="resultsform2" method="post" action="index.php">
    <p>
        <label for="name" class="rdr">name</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="email" class="rdr">Email</label>
        <input type="email" name="email" id="email">
    </p>
    <p>
        <label for="country" class="rdr">Country</label>
        <input type="text" name="country" id="country">
    </p>
    <p>
        <label for="password" class="rdr">Password</label>
        <input type="text" name="password" id="password">

        <?php  $a="a"; $e="e";$i="i";$o="o";$u="u";$ka="ka";$ke='ke';$ki="ki";$ko="ko";$ku="ku";
        $sa="sa";$se="se";$si="si";$so="so";$su="su";$ta="ta";$te="te";$ti="ti";$to="to";$tu="tu";
        $na="na";$ne="ne";$ni="ni";$no="no";$nu="nu";$ha="ha";$he="he";$hi="hi";$ho="ho";$hu="hu";
        $ma="ma";$me="me";$mi="mi";$mo='mo';$mu="mu";$ya="ya";$yo="yo";$yu="yu";$ra="ra";$ri="ri";
          $ru="ru";$ro="ro";$we="we";$wa="wa";$wi="wi";$wo="wo";       ?>
        <input type="hidden" name="a" value=<?php if(contains($a,$xx)){echo 1;}?>>
        <input type="hidden" name="e" value=<?php if(contains($e,$xx)){echo 1;}?>>
        <input type="hidden" name="i" value=<?php if(contains($i,$xx)){echo 1;}?>>
        <input type="hidden" name="o" value=<?php if(contains($o,$xx)){echo 1;}?>>
        <input type="hidden" name="u" value=<?php if(contains($u,$xx)){echo 1;}?>>
        <input type="hidden" name="ka" value=<?php if(contains($ka,$xx)){echo 1;}?>>
        <input type="hidden" name="ke" value=<?php if(contains($ke,$xx)){echo 1;}?>>
        <input type="hidden" name="ki" value=<?php if(contains($ki,$xx)){echo 1;}?>>
        <input type="hidden" name="ko" value=<?php if(contains($ko,$xx)){echo 1;}?>>
        <input type="hidden" name="ku" value=<?php if(contains($ku,$xx)){echo 1;}?>>
        <input type="hidden" name="sa" value=<?php if(contains($sa,$xx)){echo 1;}?>>
        <input type="hidden" name="se" value=<?php if(contains($se,$xx)){echo 1;}?>>
        <input type="hidden" name="si" value=<?php if(contains($si,$xx)){echo 1;}?>>
        <input type="hidden" name="so" value=<?php if(contains($so,$xx)){echo 1;}?>>
        <input type="hidden" name="su" value=<?php if(contains($su,$xx)){echo 1;}?>>
        <input type="hidden" name="ta" value=<?php if(contains($ta,$xx)){echo 1;}?>>
        <input type="hidden" name="te" value=<?php if(contains($te,$xx)){echo 1;}?>>
        <input type="hidden" name="ti" value=<?php if(contains($ti,$xx)){echo 1;}?>>
        <input type="hidden" name="to_" value=<?php if(contains($to,$xx)){echo 1;}?>>
        <input type="hidden" name="tu_" value=<?php if(contains($tu,$xx)){echo 1;}?>>
        <input type="hidden" name="na" value=<?php if(contains($na,$xx)){echo 1;}?>>
        <input type="hidden" name="ne" value=<?php if(contains($ne,$xx)){echo 1;}?>>
        <input type="hidden" name="ni" value=<?php if(contains($ni,$xx)){echo 1;}?>>
        <input type="hidden" name="no" value=<?php if(contains($no,$xx)){echo 1;}?>>
        <input type="hidden" name="nu" value=<?php if(contains($nu,$xx)){echo 1;}?>>
        <input type="hidden" name="ha" value=<?php if(contains($ha,$xx)){echo 1;}?>>
        <input type="hidden" name="he" value=<?php if(contains($he,$xx)){echo 1;}?>>
        <input type="hidden" name="hi" value=<?php if(contains($hi,$xx)){echo 1;}?>>
        <input type="hidden" name="ho" value=<?php if(contains($ho,$xx)){echo 1;}?>>
        <input type="hidden" name="hu" value=<?php if(contains($hu,$xx)){echo 1;}?>>
        <input type="hidden" name="ma" value=<?php if(contains($ma,$xx)){echo 1;}?>>
        <input type="hidden" name="me" value=<?php if(contains($me,$xx)){echo 1;}?>>
        <input type="hidden" name="mi" value=<?php if(contains($mi,$xx)){echo 1;}?>>
        <input type="hidden" name="mo" value=<?php if(contains($mo,$xx)){echo 1;}?>>
        <input type="hidden" name="mu" value=<?php if(contains($mu,$xx)){echo 1;}?>>
        <input type="hidden" name="ya" value=<?php if(contains($ya,$xx)){echo 1;}?>>
        <input type="hidden" name="yu" value=<?php if(contains($yu,$xx)){echo 1;}?>>
        <input type="hidden" name="yo" value=<?php if(contains($yo,$xx)){echo 1;}?>>
        <input type="hidden" name="ra" value=<?php if(contains($ra,$xx)){echo 1;}?>>
        <input type="hidden" name="ri" value=<?php if(contains($ri,$xx)){echo 1;}?>>
        <input type="hidden" name="ru" value=<?php if(contains($ru,$xx)){echo 1;}?>>
        <input type="hidden" name="ro" value=<?php if(contains($ro,$xx)){echo 1;}?>>
        <input type="hidden" name="we" value=<?php if(contains($we,$xx)){echo 1;}?>>
        <input type="hidden" name="wa" value=<?php if(contains($wa,$xx)){echo 1;}?>>
        <input type="hidden" name="wi" value=<?php if(contains($wi,$xx)){echo 1;}?>>
        <input type="hidden" name="wo" value=<?php if(contains($wo,$xx)){echo 1;}?>>


    </p>

    <input type="button"  id="send" name="signin" value="submit">

</form>
</div>




<div class="form-style-8" id="loginform" hidden>

<h2 id="title2">Login Form</h2>

<form name="test" id="resultsform" method="POST" action="index.php">
<p>
    <label for="name" class="rdr">name</label>
    <input type="text" name="name" id="name">
</p>
<p>
    <label for="password" class="rdr">password</label>
    <input type="text" name="password" id="password">
</p>
<input type="button"   id="sender" name="login" value="submit">

<?php  $a="a"; $e="e";$i="i";$o="o";$u="u";$ka="ka";$ke='ke';$ki="ki";$ko="ko";$ku="ku";
$sa="sa";$se="se";$si="si";$so="so";$su="su";$ta="ta";$te="te";$ti="ti";$to="to";$tu="tu";
$na="na";$ne="ne";$ni="ni";$no="no";$nu="nu";$ha="ha";$he="he";$hi="hi";$ho="ho";$hu="hu";
$ma="ma";$me="me";$mi="mi";$mo='mo';$mu="mu";$ya="ya";$yo="yo";$yu="yu";$ra="ra";$ri="ri";
  $ru="ru";$ro="ro";$we="we";$wa="wa";$wi="wi";$wo="wo";       ?>
<input type="hidden" name="a" value=<?php if(contains($a,$xx)){echo 1;}?>>
<input type="hidden" name="e" value=<?php if(contains($e,$xx)){echo 1;}?>>
<input type="hidden" name="i" value=<?php if(contains($i,$xx)){echo 1;}?>>
<input type="hidden" name="o" value=<?php if(contains($o,$xx)){echo 1;}?>>
<input type="hidden" name="u" value=<?php if(contains($u,$xx)){echo 1;}?>>
<input type="hidden" name="ka" value=<?php if(contains($ka,$xx)){echo 1;}?>>
<input type="hidden" name="ke" value=<?php if(contains($ke,$xx)){echo 1;}?>>
<input type="hidden" name="ki" value=<?php if(contains($ki,$xx)){echo 1;}?>>
<input type="hidden" name="ko" value=<?php if(contains($ko,$xx)){echo 1;}?>>
<input type="hidden" name="ku" value=<?php if(contains($ku,$xx)){echo 1;}?>>
<input type="hidden" name="sa" value=<?php if(contains($sa,$xx)){echo 1;}?>>
<input type="hidden" name="se" value=<?php if(contains($se,$xx)){echo 1;}?>>
<input type="hidden" name="si" value=<?php if(contains($si,$xx)){echo 1;}?>>
<input type="hidden" name="so" value=<?php if(contains($so,$xx)){echo 1;}?>>
<input type="hidden" name="su" value=<?php if(contains($su,$xx)){echo 1;}?>>
<input type="hidden" name="ta" value=<?php if(contains($ta,$xx)){echo 1;}?>>
<input type="hidden" name="te" value=<?php if(contains($te,$xx)){echo 1;}?>>
<input type="hidden" name="ti" value=<?php if(contains($ti,$xx)){echo 1;}?>>
<input type="hidden" name="to_" value=<?php if(contains($to,$xx)){echo 1;}?>>
<input type="hidden" name="tu_" value=<?php if(contains($tu,$xx)){echo 1;}?>>
<input type="hidden" name="na" value=<?php if(contains($na,$xx)){echo 1;}?>>
<input type="hidden" name="ne" value=<?php if(contains($ne,$xx)){echo 1;}?>>
<input type="hidden" name="ni" value=<?php if(contains($ni,$xx)){echo 1;}?>>
<input type="hidden" name="no" value=<?php if(contains($no,$xx)){echo 1;}?>>
<input type="hidden" name="nu" value=<?php if(contains($nu,$xx)){echo 1;}?>>
<input type="hidden" name="ha" value=<?php if(contains($ha,$xx)){echo 1;}?>>
<input type="hidden" name="he" value=<?php if(contains($he,$xx)){echo 1;}?>>
<input type="hidden" name="hi" value=<?php if(contains($hi,$xx)){echo 1;}?>>
<input type="hidden" name="ho" value=<?php if(contains($ho,$xx)){echo 1;}?>>
<input type="hidden" name="hu" value=<?php if(contains($hu,$xx)){echo 1;}?>>
<input type="hidden" name="ma" value=<?php if(contains($ma,$xx)){echo 1;}?>>
<input type="hidden" name="me" value=<?php if(contains($me,$xx)){echo 1;}?>>
<input type="hidden" name="mi" value=<?php if(contains($mi,$xx)){echo 1;}?>>
<input type="hidden" name="mo" value=<?php if(contains($mo,$xx)){echo 1;}?>>
<input type="hidden" name="mu" value=<?php if(contains($mu,$xx)){echo 1;}?>>
<input type="hidden" name="ya" value=<?php if(contains($ya,$xx)){echo 1;}?>>
<input type="hidden" name="yu" value=<?php if(contains($yu,$xx)){echo 1;}?>>
<input type="hidden" name="yo" value=<?php if(contains($yo,$xx)){echo 1;}?>>
<input type="hidden" name="ra" value=<?php if(contains($ra,$xx)){echo 1;}?>>
<input type="hidden" name="ri" value=<?php if(contains($ri,$xx)){echo 1;}?>>
<input type="hidden" name="ru" value=<?php if(contains($ru,$xx)){echo 1;}?>>
<input type="hidden" name="ro" value=<?php if(contains($ro,$xx)){echo 1;}?>>
<input type="hidden" name="we" value=<?php if(contains($we,$xx)){echo 1;}?>>
<input type="hidden" name="wa" value=<?php if(contains($wa,$xx)){echo 1;}?>>
<input type="hidden" name="wi" value=<?php if(contains($wi,$xx)){echo 1;}?>>
<input type="hidden" name="wo" value=<?php if(contains($wo,$xx)){echo 1;}?>>
</form>
</div>






<div class="form-style-8" id="loginformPlay" hidden>
<form name="test" id="playT" method="POST" action="index.php">



    <input type="hidden" name="password" id="password" value=<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''?>>
    <input type="hidden" name="name" id="name" value=<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>>
    <p>
<h3 id="greatJob">Great job, keep going!</h3>
</p>
<input type="button"   id="bipass" name="login" value="GET RESULTS">
<?php $xx = isset($xx) ? $xx : [0]?>
<?php  $a="a"; $e="e";$i="i";$o="o";$u="u";$ka="ka";$ke='ke';$ki="ki";$ko="ko";$ku="ku";
$sa="sa";$se="se";$si="si";$so="so";$su="su";$ta="ta";$te="te";$ti="ti";$to="to";$tu="tu";
$na="na";$ne="ne";$ni="ni";$no="no";$nu="nu";$ha="ha";$he="he";$hi="hi";$ho="ho";$hu="hu";
$ma="ma";$me="me";$mi="mi";$mo='mo';$mu="mu";$ya="ya";$yo="yo";$yu="yu";$ra="ra";$ri="ri";
  $ru="ru";$ro="ro";$we="we";$wa="wa";$wi="wi";$wo="wo";       ?>
<input type="hidden" name="a" value=<?php if(contains($a,$xx)){echo 1;}?>>
<input type="hidden" name="e" value=<?php if(contains($e,$xx)){echo 1;}?>>
<input type="hidden" name="i" value=<?php if(contains($i,$xx)){echo 1;}?>>
<input type="hidden" name="o" value=<?php if(contains($o,$xx)){echo 1;}?>>
<input type="hidden" name="u" value=<?php if(contains($u,$xx)){echo 1;}?>>
<input type="hidden" name="ka" value=<?php if(contains($ka,$xx)){echo 1;}?>>
<input type="hidden" name="ke" value=<?php if(contains($ke,$xx)){echo 1;}?>>
<input type="hidden" name="ki" value=<?php if(contains($ki,$xx)){echo 1;}?>>
<input type="hidden" name="ko" value=<?php if(contains($ko,$xx)){echo 1;}?>>
<input type="hidden" name="ku" value=<?php if(contains($ku,$xx)){echo 1;}?>>
<input type="hidden" name="sa" value=<?php if(contains($sa,$xx)){echo 1;}?>>
<input type="hidden" name="se" value=<?php if(contains($se,$xx)){echo 1;}?>>
<input type="hidden" name="si" value=<?php if(contains($si,$xx)){echo 1;}?>>
<input type="hidden" name="so" value=<?php if(contains($so,$xx)){echo 1;}?>>
<input type="hidden" name="su" value=<?php if(contains($su,$xx)){echo 1;}?>>
<input type="hidden" name="ta" value=<?php if(contains($ta,$xx)){echo 1;}?>>
<input type="hidden" name="te" value=<?php if(contains($te,$xx)){echo 1;}?>>
<input type="hidden" name="ti" value=<?php if(contains($ti,$xx)){echo 1;}?>>
<input type="hidden" name="to_" value=<?php if(contains($to,$xx)){echo 1;}?>>
<input type="hidden" name="tu_" value=<?php if(contains($tu,$xx)){echo 1;}?>>
<input type="hidden" name="na" value=<?php if(contains($na,$xx)){echo 1;}?>>
<input type="hidden" name="ne" value=<?php if(contains($ne,$xx)){echo 1;}?>>
<input type="hidden" name="ni" value=<?php if(contains($ni,$xx)){echo 1;}?>>
<input type="hidden" name="no" value=<?php if(contains($no,$xx)){echo 1;}?>>
<input type="hidden" name="nu" value=<?php if(contains($nu,$xx)){echo 1;}?>>
<input type="hidden" name="ha" value=<?php if(contains($ha,$xx)){echo 1;}?>>
<input type="hidden" name="he" value=<?php if(contains($he,$xx)){echo 1;}?>>
<input type="hidden" name="hi" value=<?php if(contains($hi,$xx)){echo 1;}?>>
<input type="hidden" name="ho" value=<?php if(contains($ho,$xx)){echo 1;}?>>
<input type="hidden" name="hu" value=<?php if(contains($hu,$xx)){echo 1;}?>>
<input type="hidden" name="ma" value=<?php if(contains($ma,$xx)){echo 1;}?>>
<input type="hidden" name="me" value=<?php if(contains($me,$xx)){echo 1;}?>>
<input type="hidden" name="mi" value=<?php if(contains($mi,$xx)){echo 1;}?>>
<input type="hidden" name="mo" value=<?php if(contains($mo,$xx)){echo 1;}?>>
<input type="hidden" name="mu" value=<?php if(contains($mu,$xx)){echo 1;}?>>
<input type="hidden" name="ya" value=<?php if(contains($ya,$xx)){echo 1;}?>>
<input type="hidden" name="yu" value=<?php if(contains($yu,$xx)){echo 1;}?>>
<input type="hidden" name="yo" value=<?php if(contains($yo,$xx)){echo 1;}?>>
<input type="hidden" name="ra" value=<?php if(contains($ra,$xx)){echo 1;}?>>
<input type="hidden" name="ri" value=<?php if(contains($ri,$xx)){echo 1;}?>>
<input type="hidden" name="ru" value=<?php if(contains($ru,$xx)){echo 1;}?>>
<input type="hidden" name="ro" value=<?php if(contains($ro,$xx)){echo 1;}?>>
<input type="hidden" name="we" value=<?php if(contains($we,$xx)){echo 1;}?>>
<input type="hidden" name="wa" value=<?php if(contains($wa,$xx)){echo 1;}?>>
<input type="hidden" name="wi" value=<?php if(contains($wi,$xx)){echo 1;}?>>
<input type="hidden" name="wo" value=<?php if(contains($wo,$xx)){echo 1;}?>>
</form>
</div>




 <!-- ## TABLE THAT SHOWS WHAT YOU GOT RIGHT ## -->
 <?php if(is_post_request() && isset($_POST['login']) || isset($_POST['signin'])){
 $grayScore = scoreForCharacters($subject['password']);

  ?>

 <div id="grayTable" >


    <table class="tg">
 <tr id="firstR">
 <th class="test1"><img  src="images/A_hiragna.png" style="width:80px;height:80px;background-color:<?php   if($grayScore['a'] == 0){echo "#ffffff";}elseif($grayScore['a'] ==1){echo "#e6e7e9";}elseif($grayScore['a'] ==2){echo "#b4b7bd";}elseif($grayScore['a'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/E_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['e'] == 0){echo "#ffffff";}elseif($grayScore['e'] ==1){echo "#e6e7e9";}elseif($grayScore['e'] ==2){echo "#b4b7bd";}elseif($grayScore['e'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/I_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['i'] == 0){echo "#ffffff";}elseif($grayScore['i'] ==1){echo "#e6e7e9";}elseif($grayScore['i'] ==2){echo "#b4b7bd";}elseif($grayScore['i'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/O_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['o'] == 0){echo "#ffffff";}elseif($grayScore['o'] ==1){echo "#e6e7e9";}elseif($grayScore['o'] ==2){echo "#b4b7bd";}elseif($grayScore['o'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/U_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['u'] == 0){echo "#ffffff";}elseif($grayScore['u'] ==1){echo "#e6e7e9";}elseif($grayScore['u'] ==2){echo "#b4b7bd";}elseif($grayScore['u'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/KA_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ka'] == 0){echo "#ffffff";}elseif($grayScore['ka'] ==1){echo "#e6e7e9";}elseif($grayScore['ka'] ==2){echo "#b4b7bd";}elseif($grayScore['ka'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ke_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ke'] == 0){echo "#ffffff";}elseif($grayScore['ke'] ==1){echo "#e6e7e9";}elseif($grayScore['ke'] ==2){echo "#b4b7bd";}elseif($grayScore['ke'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ki_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ki'] == 0){echo "#ffffff";}elseif($grayScore['ki'] ==1){echo "#e6e7e9";}elseif($grayScore['ki'] ==2){echo "#b4b7bd";}elseif($grayScore['ki'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ko_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ko'] == 0){echo "#ffffff";}elseif($grayScore['ko'] ==1){echo "#e6e7e9";}elseif($grayScore['ko'] ==2){echo "#b4b7bd";}elseif($grayScore['ko'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ku_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ku'] == 0){echo "#ffffff";}elseif($grayScore['ku'] ==1){echo "#e6e7e9";}elseif($grayScore['ku'] ==2){echo "#b4b7bd";}elseif($grayScore['ku'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Sa_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['sa'] == 0){echo "#ffffff";}elseif($grayScore['sa'] ==1){echo "#e6e7e9";}elseif($grayScore['sa'] ==2){echo "#b4b7bd";}elseif($grayScore['sa'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Si_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['si'] == 0){echo "#ffffff";}elseif($grayScore['si'] ==1){echo "#e6e7e9";}elseif($grayScore['si'] ==2){echo "#b4b7bd";}elseif($grayScore['si'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Su_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['su'] == 0){echo "#ffffff";}elseif($grayScore['su'] ==1){echo "#e6e7e9";}elseif($grayScore['su'] ==2){echo "#b4b7bd";}elseif($grayScore['su'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Se_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['se'] == 0){echo "#ffffff";}elseif($grayScore['se'] ==1){echo "#e6e7e9";}elseif($grayScore['se'] ==2){echo "#b4b7bd";}elseif($grayScore['se'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/So_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['so'] == 0){echo "#ffffff";}elseif($grayScore['so'] ==1){echo "#e6e7e9";}elseif($grayScore['so'] ==2){echo "#b4b7bd";}elseif($grayScore['so'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Ta_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ta'] == 0){echo "#ffffff";}elseif($grayScore['ta'] ==1){echo "#e6e7e9";}elseif($grayScore['ta'] ==2){echo "#b4b7bd";}elseif($grayScore['ta'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Te_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['te'] == 0){echo "#ffffff";}elseif($grayScore['te'] ==1){echo "#e6e7e9";}elseif($grayScore['te'] ==2){echo "#b4b7bd";}elseif($grayScore['te'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ti_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ti'] == 0){echo "#ffffff";}elseif($grayScore['ti'] ==1){echo "#e6e7e9";}elseif($grayScore['ti'] ==2){echo "#b4b7bd";}elseif($grayScore['ti'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/To_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['to_'] == 0){echo "#ffffff";}elseif($grayScore['to_'] ==1){echo "#e6e7e9";}elseif($grayScore['to_'] ==2){echo "#b4b7bd";}elseif($grayScore['to_'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Tu_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['tu_'] == 0){echo "#ffffff";}elseif($grayScore['tu_'] ==1){echo "#e6e7e9";}elseif($grayScore['tu_'] ==2){echo "#b4b7bd";}elseif($grayScore['tu_'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Na_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['na'] == 0){echo "#ffffff";}elseif($grayScore['na'] ==1){echo "#e6e7e9";}elseif($grayScore['na'] ==2){echo "#b4b7bd";}elseif($grayScore['na'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ne_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ne'] == 0){echo "#ffffff";}elseif($grayScore['ne'] ==1){echo "#e6e7e9";}elseif($grayScore['ne'] ==2){echo "#b4b7bd";}elseif($grayScore['ne'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ni_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ni'] == 0){echo "#ffffff";}elseif($grayScore['ni'] ==1){echo "#e6e7e9";}elseif($grayScore['ni'] ==2){echo "#b4b7bd";}elseif($grayScore['ni'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/No_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['no'] == 0){echo "#ffffff";}elseif($grayScore['no'] ==1){echo "#e6e7e9";}elseif($grayScore['no'] ==2){echo "#b4b7bd";}elseif($grayScore['no'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Nu_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['nu'] == 0){echo "#ffffff";}elseif($grayScore['nu'] ==1){echo "#e6e7e9";}elseif($grayScore['nu'] ==2){echo "#b4b7bd";}elseif($grayScore['nu'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Ha_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ha'] == 0){echo "#ffffff";}elseif($grayScore['ha'] ==1){echo "#e6e7e9";}elseif($grayScore['ha'] ==2){echo "#b4b7bd";}elseif($grayScore['ha'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/He_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['he'] == 0){echo "#ffffff";}elseif($grayScore['he'] ==1){echo "#e6e7e9";}elseif($grayScore['he'] ==2){echo "#b4b7bd";}elseif($grayScore['he'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Hi_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['hi'] == 0){echo "#ffffff";}elseif($grayScore['hi'] ==1){echo "#e6e7e9";}elseif($grayScore['hi'] ==2){echo "#b4b7bd";}elseif($grayScore['hi'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ho_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ho'] == 0){echo "#ffffff";}elseif($grayScore['ho'] ==1){echo "#e6e7e9";}elseif($grayScore['ho'] ==2){echo "#b4b7bd";}elseif($grayScore['ho'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Hu_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['hu'] == 0){echo "#ffffff";}elseif($grayScore['hu'] ==1){echo "#e6e7e9";}elseif($grayScore['hu'] ==2){echo "#b4b7bd";}elseif($grayScore['hu'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Ma_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ma'] == 0){echo "#ffffff";}elseif($grayScore['ma'] ==1){echo "#e6e7e9";}elseif($grayScore['ma'] ==2){echo "#b4b7bd";}elseif($grayScore['ma'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Me_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['me'] == 0){echo "#ffffff";}elseif($grayScore['me'] ==1){echo "#e6e7e9";}elseif($grayScore['me'] ==2){echo "#b4b7bd";}elseif($grayScore['me'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Mi_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['mi'] == 0){echo "#ffffff";}elseif($grayScore['mi'] ==1){echo "#e6e7e9";}elseif($grayScore['mi'] ==2){echo "#b4b7bd";}elseif($grayScore['mi'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Mo_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['mo'] == 0){echo "#ffffff";}elseif($grayScore['mo'] ==1){echo "#e6e7e9";}elseif($grayScore['mo'] ==2){echo "#b4b7bd";}elseif($grayScore['mo'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Mu_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['mu'] == 0){echo "#ffffff";}elseif($grayScore['mu'] ==1){echo "#e6e7e9";}elseif($grayScore['mu'] ==2){echo "#b4b7bd";}elseif($grayScore['mu'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Ya_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ya'] == 0){echo "#ffffff";}elseif($grayScore['ya'] ==1){echo "#e6e7e9";}elseif($grayScore['ya'] ==2){echo "#b4b7bd";}elseif($grayScore['ya'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Yu_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['yu'] == 0){echo "#ffffff";}elseif($grayScore['yu'] ==1){echo "#e6e7e9";}elseif($grayScore['yu'] ==2){echo "#b4b7bd";}elseif($grayScore['yu'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Yo_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['yo'] == 0){echo "#ffffff";}elseif($grayScore['yo'] ==1){echo "#e6e7e9";}elseif($grayScore['yo'] ==2){echo "#b4b7bd";}elseif($grayScore['yo'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ra_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ra'] == 0){echo "#ffffff";}elseif($grayScore['ra'] ==1){echo "#e6e7e9";}elseif($grayScore['ra'] ==2){echo "#b4b7bd";}elseif($grayScore['ra'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ri_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ri'] == 0){echo "#ffffff";}elseif($grayScore['ri'] ==1){echo "#e6e7e9";}elseif($grayScore['ri'] ==2){echo "#b4b7bd";}elseif($grayScore['ri'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 <tr id="firstR">
 <th class="test1"><img  src="images/Ru_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ru'] == 0){echo "#ffffff";}elseif($grayScore['ru'] ==1){echo "#e6e7e9";}elseif($grayScore['ru'] ==2){echo "#b4b7bd";}elseif($grayScore['ru'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Ro_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['ro'] == 0){echo "#ffffff";}elseif($grayScore['ro'] ==1){echo "#e6e7e9";}elseif($grayScore['ro'] ==2){echo "#b4b7bd";}elseif($grayScore['ro'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/We_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['we'] == 0){echo "#ffffff";}elseif($grayScore['we'] ==1){echo "#e6e7e9";}elseif($grayScore['we'] ==2){echo "#b4b7bd";}elseif($grayScore['we'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Wa_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['wa'] == 0){echo "#ffffff";}elseif($grayScore['wa'] ==1){echo "#e6e7e9";}elseif($grayScore['wa'] ==2){echo "#b4b7bd";}elseif($grayScore['wa'] > 2){echo "#8e939c";} ?>"></th>
 <th class="test1"><img  src="images/Wi_hiragna.png" style="width:80px;height:80px;background-color:<?php  if($grayScore['wi'] == 0){echo "#ffffff";}elseif($grayScore['wi'] ==1){echo "#e6e7e9";}elseif($grayScore['wi'] ==2){echo "#b4b7bd";}elseif($grayScore['wi'] > 2){echo "#8e939c";} ?>"></th>
 </tr>
 </table>

</div>
<?php } ?>

</div> <!-- col -->
<!-- start of 2nd columb -->
<div class="col-md-6">




    <?php if( isset($_GET['var_PHP_data']) || isset($_POST['login'])|| isset($_POST['signin'])){}else{?>
        <form name="logout" id="logout" method="post" action="index.php">
        <input type="submit" id="logout" name="logout" value="log out">
        </form>

<h3 id="intro">Press the select training set button and choose 10 Hiragna characters
    from the table. Then press the test button. You will be presented with
    four options and you will have to select the correct one. Good luck! </h3>

<p>
</p>

<button class="btn"  id="training">
Select training set
</button>
<button class="btn" id="test" >
 Test
</button>


<h3 id="yourScore">

</h3>
<p id="options" hidden>
</button>
<button class="btn2" id="login">
 Login
</button>

<button class="btn2" id="signup">
 Sign up
</button>
</p>
<div id="playagainer" hidden>
<form id="playagain" method="POST" action="index.php">
<input type="submit"  id="playAgain" name="playagain" value="Play Again">
</div>

</form>





    </div> <!-- col -->
    </div> <!-- row -->

</div> <!-- container -->

<?php
}// to stop double page showings
db_disconnect($db);
// }

?>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="jscript.js"></script>


</html>

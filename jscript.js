

    $("document").ready(function(){
    $(".tab").css("border", "3px solid black");
    $(".test1").css("border", "3px solid black");
    $(".test2").css("border", "3px solid black");
    $(".test3").css("border", "3px solid black");
    $(".test4").css("border", "3px solid black");
    $(".test5").css("border", "3px solid black");
    $(".test6").css("border", "3px solid black");
    $(".test7").css("border", "3px solid black");
    $(".test8").css("border", "3px solid black");
    $(".test9").css("border", "3px solid black");
    $(".test10").css("border", "3px solid black");
});

// Ajax request

//$("#resultsform").ajaxSubmit({url: 'info.php', type: 'post'})


var array = [];//an array to store the characters for training
var arLetters = ['a','e','i','o','u','ka','ke','ki','ko','ku','sa','se','si','so','su','ta','te','ti','to','tu','na','ne','ni','no','nu','ha','he','hi','ho','hu','ma','me','mi','mo','mu','ya','yu','yo','ra','ri','ru','ro','we','wa','wi','wo'];
var letterScore =[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var count =0; // counts the number of hiragna characters selected
var ramiLetters =[];
var ar =[];
var correctNum = 0;
var correct=[];



$('#training').on('click',function(){

$(function(){
    $("#a_hir").on("click", function(evt){
        array[count]= "A_hir";
        ramiLetters[count]="a";
        count++;
    })
})

$(function(){
    $("#e_hir").on("click", function(evt){
        array[count]= "E_hir";
        ramiLetters[count]="e";
        count++;
    })
})

$(function(){
    $("#i_hir").on("click", function(evt){
        array[count]= "I_hir";
        ramiLetters[count]="i";
        count++;
    })
})
$(function(){
    $("#o_hir").on("click", function(evt){
        array[count]= "O_hir";
        ramiLetters[count]="o";
        count++;
    })
})

$(function(){
    $("#u_hir").on("click", function(evt){
        array[count]= "U_hir";
        ramiLetters[count]="u";
        count++;
    })
})

$(function(){
    $("#ka_hir").on("click", function(evt){
        array[count]= "Ka_hir";
        ramiLetters[count]="ka";
        count++;
    })
})

$(function(){
    $("#ke_hir").on("click", function(evt){
        array[count]= "Ke_hir";
        ramiLetters[count]="ke";
        count++;
    })
})

$(function(){
    $("#ki_hir").on("click", function(evt){
        array[count]= "Ki_hir";
        ramiLetters[count]="ki";
        count++;
    })
})

$(function(){
    $("#ko_hir").on("click", function(evt){
        array[count]= "Ko_hir";
        ramiLetters[count]="ko";
        count++;
    })
})
$(function(){
    $("#ku_hir").on("click", function(evt){
        array[count]= "Ku_hir";
        ramiLetters[count]="ku";
        count++;
    })
})
$(function(){
    $("#sa_hir").on("click", function(evt){
        array[count]= "Sa_hir";
        ramiLetters[count]="sa";
        count++;
    })
})
$(function(){
    $("#se_hir").on("click", function(evt){
        array[count]= "Se_hir";
        ramiLetters[count]="se";
        count++;
    })
})
$(function(){
    $("#si_hir").on("click", function(evt){
        array[count]= "Si_hir";
        ramiLetters[count]="si";
        count++;
    })
})
$(function(){
    $("#so_hir").on("click", function(evt){
        array[count]= "So_hir";
        ramiLetters[count]="so";
        count++;
    })
})
$(function(){
    $("#su_hir").on("click", function(evt){
        array[count]= "Su_hir";
        ramiLetters[count]="su";
        count++;
    })
})
$(function(){
    $("#ta_hir").on("click", function(evt){
        array[count]= "Ta_hir";
        ramiLetters[count]="ta";
        count++;
    })
})
$(function(){
    $("#te_hir").on("click", function(evt){
        array[count]= "Te_hir";
        ramiLetters[count]="te";
        count++;
    })
})
$(function(){
    $("#ti_hir").on("click", function(evt){
        array[count]= "Ti_hir";
        ramiLetters[count]="ti";
        count++;
    })
})
$(function(){
    $("#to_hir").on("click", function(evt){
        array[count]= "To_hir";
        ramiLetters[count]="to";
        count++;
    })
})
$(function(){
    $("#tu_hir").on("click", function(evt){
        array[count]= "Tu_hir";
        ramiLetters[count]="tu";
        count++;
    })
})
$(function(){
    $("#na_hir").on("click", function(evt){
        array[count]= "Na_hir";
        ramiLetters[count]="na";
        count++;
    })
})
$(function(){
    $("#ne_hir").on("click", function(evt){
        array[count]= "Ne_hir";
        ramiLetters[count]="ne";
        count++;
    })
})
$(function(){
    $("#ni_hir").on("click", function(evt){
        array[count]= "Ni_hir";
        ramiLetters[count]="ni";
        count++;
    })
})
$(function(){
    $("#no_hir").on("click", function(evt){
        array[count]= "No_hir";
        ramiLetters[count]="no";
        count++;
    })
})
$(function(){
    $("#nu_hir").on("click", function(evt){
        array[count]= "Nu_hir";
        ramiLetters[count]="nu";
        count++;
    })
})
$(function(){
    $("#hu_hir").on("click", function(evt){
        array[count]= "Hu_hir";
        ramiLetters[count]="hu";
        count++;
    })
})
$(function(){
    $("#ha_hir").on("click", function(evt){
        array[count]= "Ha_hir";
        ramiLetters[count]="ha";
        count++;
    })
})
$(function(){
    $("#he_hir").on("click", function(evt){
        array[count]= "He_hir";
        ramiLetters[count]="he";
        count++;
    })
})
$(function(){
    $("#hi_hir").on("click", function(evt){
        array[count]= "Hi_hir";
        ramiLetters[count]="hi";
        count++;
    })
})
$(function(){
    $("#ho_hir").on("click", function(evt){
        array[count]= "Ho_hir";
        ramiLetters[count]="ho";
        count++;
    })
})
$(function(){
    $("#ma_hir").on("click", function(evt){
        array[count]= "Ma_hir";
        ramiLetters[count]="ma";
        count++;
    })
})
$(function(){
    $("#me_hir").on("click", function(evt){
        array[count]= "Me_hir";
        ramiLetters[count]="me";
        count++;
    })
})
$(function(){
    $("#mi_hir").on("click", function(evt){
        array[count]= "Mi_hir";
        ramiLetters[count]="mi";
        count++;
    })
})
$(function(){
    $("#mo_hir").on("click", function(evt){
        array[count]= "Mo_hir";
        ramiLetters[count]="mo";
        count++;
    })
})
$(function(){
    $("#mu_hir").on("click", function(evt){
        array[count]= "Mu_hir";
        ramiLetters[count]="mu";
        count++;
    })
})
$(function(){
    $("#ya_hir").on("click", function(evt){
        array[count]= "Ya_hir";
        ramiLetters[count]="ya";
        count++;
    })
})
$(function(){
    $("#yu_hir").on("click", function(evt){
        array[count]= "Yu_hir";
        ramiLetters[count]="yu";
        count++;
    })
})
$(function(){
    $("#yo_hir").on("click", function(evt){
        array[count]= "Yo_hir";
        ramiLetters[count]="yo";
        count++;
    })
})
$(function(){
    $("#ra_hir").on("click", function(evt){
        array[count]= "Ra_hir";
        ramiLetters[count]="ra";
        count++;
    })
})
$(function(){
    $("#ri_hir").on("click", function(evt){
        array[count]= "Ri_hir";
        ramiLetters[count]="ri";
        count++;
    })
})
$(function(){
    $("#ru_hir").on("click", function(evt){
        array[count]= "Ru_hir";
        ramiLetters[count]="ru";
        count++;
    })
})
$(function(){
    $("#ro_hir").on("click", function(evt){
        array[count]= "Ro_hir";
        ramiLetters[count]="ro";
        count++;
    })
})
$(function(){
    $("#we_hir").on("click", function(evt){
        array[count]= "We_hir";
        ramiLetters[count]="we";
        count++;
    })
})
$(function(){
    $("#wa_hir").on("click", function(evt){
        array[count]= "Wa_hir";
        ramiLetters[count]="wa";
        count++;
    })
})
$(function(){
    $("#wi_hir").on("click", function(evt){
        array[count]= "Wi_hir";
        ramiLetters[count]="wi";
        count++;
    })
})
$(function(){
    $("#wo_hir").on("click", function(evt){
        array[count]= "Wo_hir";
        ramiLetters[count]="wo";
        count++;
    })
})

$('.tab').on('click',function(){


    $(this).css("background-color", "#b24100");



});

});// end of the click training button

$(function(){
    $("#a_hir").hover(changes, changes);

});
function changes(){
    $("#a_hir").toggleClass("aMov");

}

$(function(){
    $("#i_hir").hover(changesr, changesr);
});
function changesr(){
    $("#i_hir").toggleClass("iMov");
}
$(function(){
    $("#e_hir").hover(ddd, ddd);
});
function ddd(){
    $("#e_hir").toggleClass("eMov");
}
$(function(){
    $("#o_hir").hover(add, add);
});
function add(){
    $("#o_hir").toggleClass("oMov");
}
$(function(){
    $("#u_hir").hover(bdd, bdd);
});
function bdd(){
    $("#u_hir").toggleClass("uMov");
}
$(function(){
    $("#ka_hir").hover(cdd, cdd);
});
function cdd(){
    $("#ka_hir").toggleClass("kaMov");
}
$(function(){
    $("#ko_hir").hover(fdd, fdd);
});
function fdd(){
    $("#ko_hir").toggleClass("koMov");
}
$(function(){
    $("#ki_hir").hover(gdd, gdd);
});
function gdd(){
    $("#ki_hir").toggleClass("kiMov");
}
$(function(){
    $("#ke_hir").hover(hdd, hdd);
});
function hdd(){
    $("#ke_hir").toggleClass("keMov");
}
$(function(){
    $("#ku_hir").hover(idd, idd);
});
function idd(){
    $("#ku_hir").toggleClass("kuMov");
}
<!--   s*           -->
$(function(){
    $("#sa_hir").hover(eid, eid);
});
function eid(){
    $("#sa_hir").toggleClass("saMov");
}
$(function(){
    $("#se_hir").hover(tdd, tdd);
});
function tdd(){
    $("#se_hir").toggleClass("seMov");
}
$(function(){
    $("#si_hir").hover(ird, ird);
});
function ird(){
    $("#si_hir").toggleClass("siMov");
}
$(function(){
    $("#so_hir").hover(iwd, iwd);
});
function iwd(){
    $("#so_hir").toggleClass("soMov");
}
$(function(){
    $("#su_hir").hover(ixd, ixd);
});
function ixd(){
    $("#su_hir").toggleClass("suMov");
}
<!-- t* -->
$(function(){
    $("#ta_hir").hover(izd, izd);
});
function izd(){
    $("#ta_hir").toggleClass("taMov");
}
$(function(){
    $("#te_hir").hover(bxd, bxd);
});
function bxd(){
    $("#te_hir").toggleClass("teMov");
}
$(function(){
    $("#ti_hir").hover(cxd, cxd);
});
function cxd(){
    $("#ti_hir").toggleClass("tiMov");
}
$(function(){
    $("#to_hir").hover(dxd, dxd);
});
function dxd(){
    $("#to_hir").toggleClass("toMov");
}
$(function(){
    $("#tu_hir").hover(exd, exd);
});
function exd(){
    $("#tu_hir").toggleClass("tuMov");
}
<!-- n* -->
$(function(){
    $("#na_hir").hover(qxd, qxd);
});
function qxd(){
    $("#na_hir").toggleClass("naMov");
}
$(function(){
    $("#ne_hir").hover(wxd, wxd);
});
function wxd(){
    $("#ne_hir").toggleClass("neMov");
}
$(function(){
    $("#ni_hir").hover(vxd, vxd);
});
function vxd(){
    $("#ni_hir").toggleClass("niMov");
}
$(function(){
    $("#no_hir").hover(xxd, xxd);
});
function xxd(){
    $("#no_hir").toggleClass("noMov");
}
$(function(){
    $("#nu_hir").hover(fxd, fxd);
});
function fxd(){
    $("#nu_hir").toggleClass("nuMov");
}
$(function(){
    $("#ha_hir").hover(fxx, fxx);
});
function fxx(){
    $("#ha_hir").toggleClass("haMov");
}
$(function(){
    $("#he_hir").hover(fxz, fxz);
});
function fxz(){
    $("#he_hir").toggleClass("heMov");
}
$(function(){
    $("#hi_hir").hover(fxf, fxf);
});
function fxf(){
    $("#hi_hir").toggleClass("hiMov");
}
$(function(){
    $("#ho_hir").hover(fxe, fxe);
});
function fxe(){
    $("#ho_hir").toggleClass("hoMov");
}
$(function(){
    $("#hu_hir").hover(fid, fid);
});
function fid(){
    $("#hu_hir").toggleClass("huMov");
}
$(function(){
    $("#ma_hir").hover(jid, jid);
});
function jid(){
    $("#ma_hir").toggleClass("maMov");
}
$(function(){
    $("#mi_hir").hover(kid, kid);
});
function kid(){
    $("#mi_hir").toggleClass("miMov");
}
$(function(){
    $("#mu_hir").hover(lid, lid);
});
function lid(){
    $("#mu_hir").toggleClass("muMov");
}
$(function(){
    $("#me_hir").hover(uid, uid);
});
function uid(){
    $("#me_hir").toggleClass("meMov");
}
$(function(){
    $("#mo_hir").hover(tid, tid);
});
function tid(){
    $("#mo_hir").toggleClass("moMov");
}
$(function(){
    $("#ya_hir").hover(wed, wed);
});
function wed(){
    $("#ya_hir").toggleClass("yaMov");
}
$(function(){
    $("#yu_hir").hover(tir, tir);
});
function tir(){
    $("#yu_hir").toggleClass("yuMov");
}
$(function(){
    $("#yo_hir").hover(nid, nid);
});
function nid(){
    $("#yo_hir").toggleClass("yoMov");
}
$(function(){
    $("#ra_hir").hover(edd, edd);
});
function edd(){
    $("#ra_hir").toggleClass("raMov");
}
$(function(){
    $("#ri_hir").hover(tyu, tyu);
});
function tyu(){
    $("#ri_hir").toggleClass("riMov");
}
$(function(){
    $("#ru_hir").hover(ayu, ayu);
});
function ayu(){
    $("#ru_hir").toggleClass("ruMov");
}
$(function(){
    $("#ro_hir").hover(tqu, tqu);
});
function tqu(){
    $("#ro_hir").toggleClass("roMov");
}
$(function(){
    $("#wa_hir").hover(iyu, iyu);
});
function iyu(){
    $("#wa_hir").toggleClass("waMov");
}
$(function(){
    $("#wo_hir").hover(xyu, xyu);
});
function xyu(){
    $("#wo_hir").toggleClass("woMov");
}

<!-- hidding functions -->

$("#test").click(function(){
    $("#main_table").hide();
    $("#test_tables").show();
})
$("#next_test").click(function(){
    $("#test_tables").hide();
    $("#test_tables2").show();
})


<!-- array for sorting hiragna -->
var sum =0 ,simF=0, simS=0, mod =0;

$('#test').on('click',function(){

    while(sum<count){
        simS=0;
var rand = Math.floor((Math.random()*4));
$('#'+simF+rand+'').replaceWith(ramiLetters[sum]);
//simS++;
  $('#'+(sum+1)+'e').replaceWith('<img src="images/'+array[sum]+'agna.png" style="width:80px;height:80px;background-color:white">');
        sum++;
var fullup =0;
  //for(var j=0;j<3;j++){
  while(fullup<3){
      if(rand != simS){
     var ran = Math.floor((Math.random()*40));
        $('#'+simF+simS+'').replaceWith(arLetters[ran]);
        simS++;
        fullup++;
    }else{
    simS++;
}
  }//for
  simF++;
   }//while




});// end of function
<!-- audio -->
var chain="";

<!-- recordInfo -->

var scoreTotal =0;
var t1 =0;
$('.test1').on('click',function(){
if(t1 ==0){
    t1++;
if($(this).text() == ramiLetters[0]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[0];
    chain +=","+ramiLetters[0];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");

}
}//if t1
});
var t2 =0;
$('.test2').on('click',function(){
if(t2 ==0){
    t2++;
if($(this).text()== ramiLetters[1]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[1];
    chain +=","+ramiLetters[1];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t3 =0;
$('.test3').on('click',function(){
if(t3 ==0){
    t3++;
if($(this).text()== ramiLetters[2]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[2];
    chain +=","+ramiLetters[2];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t4 =0;
$('.test4').on('click',function(){
if(t4 ==0){
    t4++;
if($(this).text()== ramiLetters[3]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[3];
    chain +=","+ramiLetters[3];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t5 =0;
$('.test5').on('click',function(){
if(t5 ==0){
    t5++;
if($(this).text()== ramiLetters[4]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[4];
    chain +=","+ramiLetters[4];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t6 =0;
$('.test6').on('click',function(){
if(t6 ==0){
        t6++;
if($(this).text()== ramiLetters[5]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[5];
    chain +=","+ramiLetters[5];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t7 =0;
$('.test7').on('click',function(){
if(t7 ==0){
        t7++;
if($(this).text()== ramiLetters[6]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[6];
    chain +=","+ramiLetters[6];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t8 =0;
$('.test8').on('click',function(){
if(t8 ==0){
        t8++;
if($(this).text()== ramiLetters[7]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[7];
    chain +=","+ramiLetters[7];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});
var t9 =0;
$('.test9').on('click',function(){
if(t9 ==0){
        t9++;
if($(this).text()== ramiLetters[8]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[8];
    chain +=","+ramiLetters[8];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//
});
var t10 =0;
$('.test10').on('click',function(){
if(t10 ==0){
    t10++;
if($(this).text()== ramiLetters[9]){
    $(this).css("background-color", "green");
    correct[correctNum]= ramiLetters[9];
    chain +=","+ramiLetters[9];
    correctNum++;
    scoreTotal++;
}else{
    $(this).css("background-color", "red");
}
}//if
});

// if your not logged in
$("#results").click(function(){
    $("#test_tables2").hide();
if(scoreTotal == 0){
    $("#yourScore").append("Congratulations your Score is "+scoreTotal+"%");
}else{
    $("#yourScore").append("Congratulations your Score is "+scoreTotal+"0%");
}
    $("#options").show();
});

$("#playThrough").click(function(){
    $("#test_tables2").hide();

if(scoreTotal == 0){
    $("#yourScore").append("Congratulations your Score is "+scoreTotal+"%");
}else{
    $("#yourScore").append("Congratulations your Score is "+scoreTotal+"0%");
}
$("#loginformPlay").show();
});


// option button for signup
$("#signup").click(function(){
$("#options").hide();
    $("#frog1").show();

});
// option button for login
$("#login").click(function(){
$("#options").hide();
    $("#loginform").show();

});

$("#test").click(function(){
$("#test").hide();
    $("#training").hide();
    $("#intro").hide();


});


$("#sender").click(function(){

    $("#grayTable").show();

});

$("#send").click(function(){

    $("#grayTable").show();

});
$("#sender").click(function(){

    $("#playagainer").show();

});
$("#bipass").click(function(){

    $("#playagainer").show();

});




// playThrough  ajax //


function gatherFormData(form){
    var inputs = form.getElementsByTagName('input');
    var array = [];
    for(i=0; i< inputs.length;i++){
        var inputNameValue = inputs[i].name + '=' + inputs[i].value;
        array.push(inputNameValue);
    }

    return array.join('&');
}


var result_div = document.getElementById("result");
var volume = document.getElementById("volume");

function postResult(value){
    volume.innerHTML = value;
    result_div.style.display = 'block';
}

function clearResult(){
    volume.innerHTML = '';
    result_div.style.display = 'none';
}



function showName(){
clearResult();

var form = document.getElementById("playT");
var action = form.getAttribute("action");

var form_data = gatherFormData(form);

var xhr = new XMLHttpRequest();
xhr.open('POST', action, true);
xhr.setRequestHeader('Content-type',
'application/x-www-form-urlencoded');
xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        var result = xhr.responseText;
        console.log('Result: '+ result);
        postResult(result);
    }
};
xhr.send(form_data);

}

var button = document.getElementById("bipass");
button.addEventListener("click", showName);

$("#bipass").click(function(){

$("#bipass").hide();

});





///////////////////////////////////////////////
var audio_a = new Audio('images/a.mp3');
var audio_e = new Audio('images/e.mp3');
var audio_i = new Audio('images/i.mp3');
var audio_o = new Audio('images/o.mp3');
var audio_u = new Audio('images/u.mp3');
var audio_ka = new Audio('images/ka.mp3');
var audio_ke = new Audio('images/ke.mp3');
var audio_ki = new Audio('images/ki.mp3');
var audio_ko = new Audio('images/ko.mp3');
var audio_ku = new Audio('images/ku.mp3');
var audio_sa = new Audio('images/sa.mp3');
var audio_se = new Audio('images/se.mp3');
var audio_si = new Audio('images/si.mp3');
var audio_so = new Audio('images/so.mp3');
var audio_su = new Audio('images/su.mp3');
var audio_ta = new Audio('images/ta.mp3');
var audio_te = new Audio('images/te.mp3');
var audio_ti = new Audio('images/ti.mp3');
var audio_to = new Audio('images/to.mp3');
var audio_tu = new Audio('images/tu.mp3');
var audio_na = new Audio('images/na.mp3');
var audio_ne = new Audio('images/ne.mp3');
var audio_ni = new Audio('images/ni.mp3');
var audio_no = new Audio('images/no.mp3');
var audio_nu = new Audio('images/nu.mp3');
var audio_ha = new Audio('images/ha.mp3');
var audio_he = new Audio('images/he.mp3');
var audio_hi = new Audio('images/hi.mp3');
var audio_ho = new Audio('images/ho.mp3');
var audio_hu = new Audio('images/hu.mp3');
var audio_ma = new Audio('images/ma.mp3');
var audio_me = new Audio('images/me.mp3');
var audio_mi = new Audio('images/mi.mp3');
var audio_mo = new Audio('images/mo.mp3');
var audio_mu = new Audio('images/mu.mp3');
var audio_ya = new Audio('images/ya.mp3');
var audio_yu = new Audio('images/yu.mp3');
var audio_yo = new Audio('images/yo.mp3');
var audio_ra = new Audio('images/ra.mp3');
var audio_ro = new Audio('images/ro.mp3');
var audio_we = new Audio('images/we.mp3');
var audio_wa = new Audio('images/wa.mp3');
var audio_wi = new Audio('images/wi.mp3');
var audio_wo = new Audio('images/wo.mp3');
var turnOn = 0;
$('#training').on('click',function(){

    turnOn = 1;

});

    function imageClick(x) {
if(turnOn== 0){
        x.play();
}else{
    turnOn++;
}
    };
/*
var button = document.getElementById("send");

button.addEventListener("click", function(event){
    event.preventDefault();
});
*/


function gatherFormData3(form){
    var inputs = form.getElementsByTagName('input');
    var array = [];
    for(i=0; i< inputs.length;i++){
        var inputNameValue = inputs[i].name + '=' + inputs[i].value;
        array.push(inputNameValue);
    }

    return array.join('&');
}

var result_div = document.getElementById("result");
var volume = document.getElementById("volume");

function postResult3(value){
    volume.innerHTML = value;
    result_div.style.display = 'block';
}

function clearResult3(){
    volume.innerHTML = '';
    result_div.style.display = 'none';
}

// ajax for the login form

function showName3(){
clearResult3();

var form = document.getElementById("resultsform");
var action = form.getAttribute("action");

var form_data = gatherFormData3(form);

var xhr = new XMLHttpRequest();
xhr.open('POST', action, true);
xhr.setRequestHeader('Content-type',
'application/x-www-form-urlencoded');
xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        var result = xhr.responseText;
        console.log('Result: '+ result);
        postResult3(result);
    }
};
xhr.send(form_data);

}

var button = document.getElementById("sender");
button.addEventListener("click", showName3);

$("#sender").click(function(){
$("#loginform").hide();



});

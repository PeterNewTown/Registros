# tads-bd2191-registros
Registro de medico e de pacientes 
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 </head>

 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <body>
 

 <div id="cadastrarm" class="cadsm">
 <form method="POST">
 <body>
 <label for="nome">Nome<label class="ast1" >*</label></label>
 
 <input type="text" id="txt11" placeholder="Nome" required >
 
 <label for="nome" class="cpsf">Cpf<label class="ast2">*</label></label>
 
 <input type="number" placeholder="Cpf" id="cpf" class="cpf2" required>
 <br>
 <label>Cargo<label class="ast3" >*</label></label>
 
 <select id="select" size="3" required >
 <option value=""></option>
 <option value="1" id="me">Medico</option>
 <option value="2" id="re">Recepcionista</option>
 </select> 
 <div class="cfff" id="eu">
 <label id="crm">Crm<label class="ast9" >*</label></label>
 <input type="number" id="fd" placeholder="Crm" required >
 </div>

 <br>
 <label for="nome">Idade<label class="ast4" >*</label></label>
 
 <input type="date" id="data" max="2000-01-31" min="1950-01-31" required >
 
 
 <label class="tels" for="nome">Telefone<label class="ast5" >*</label></label>
 
 <input type="number" id="fix" class="fixo" placeholder="(xx)" required><input type="number"placeholder="(xxxx-xxxx)" id="telefone" required >
 <br>
 <label class="cels" for="nome">Celular<label class="ast11" >**</label></label>
 
 <input type="number" id="fixs" class="fixos" placeholder="(xx)" ><input type="number" placeholder="(xxxx-xxxx)" id="Celular">
 <br>
 <label for="nome">Email<label class="ast6" >*</label></label>
 <input type="email" placeholder="Email" id="email" required >
 <br>
 <label>Sexo<label class="ast10" >*</label></label>
 <br>
 <label>Masculino</label>
 <input type="radio" id="sexo2" class="sexo" name="sexo" required>
 
 <label>Feminino</label>
 <input type="radio" id="sexo1" class="sexo" name="sexo" required>
 <br>
<label for="nome">Senha<label class="ast7" >*</label></label>

<input type="password" placeholder="Senha" id="senha" required >

<label class="csn" for="nome">Repetir<label class="ast8" >*</label></label>

<input type="password" class="news" placeholder="Repetir senha" id="csenha" required >
<br>
<p>Campo obrigatório<label class="ast12">*</label></p>
 
<p>Campo não obrigatório<label class="ast13">**</label></p>
<br>
 <button id="cal" type="reset" class="canl">Cancelar</button>
 <button type="submit" id="xs" onclick="save()" class="cnfr">Confirmar</button>
 
 
</body>
 </form>
 </div>

 <div id="rec" class="recc">
 
 <form method="POST">
 <label for="nome">Email</label>
 <br>
 <input type="email" id="txt1" required >
 <br>
 <label for="nome">Senha</label>
 <br>
 <input type="password" required>
 <br>
 <input type="checkbox" id="lembrar" autocomplete="off"><label>Lembrar senha?</label>
 <br>
 <button type="submit" id="cenlar" class="cenlr" >Cancelar</button>
 <button type="submit" class="loss" id="lo">Login</button>
 <br>
 <a href="javascript:void(0)" id="cadastrar1">Cadastrar?</a> 
 <a href="">Esqueceu sua senha?</a>
 </form>

 </div>

</html>
<head>
 <style>
 div.recc{
 font-family: Arial, Helvetica, sans-serif;

 padding-left: 390px;
 padding-top: 90px;
 
 }
 input.cpf2{
 width: 15%;
 }
 button.cnfr{
 -webkit-text-fill-color: white;
 background-color: green;
 }
 button.loss{
 -webkit-text-fill-color: white;
 background-color: green;
 }
 button.canl{
 -webkit-text-fill-color: white;
 background-color: red;
 }
 button.cenlr{
 -webkit-text-fill-color: white;
 background-color: red;
 }
 label.tels{
 padding-left: 4.5%;
 }
 label.cels{
 padding-left: 17.5%;
 }
 label.csn{
 padding-left: 3.5%;
 
 }
 label.cpsf{

 padding-left: 3%;
 }
 input.fixo{
 width: 2%;
 }
 input.fixos{
 width: 2%;
 }
 input.news{
 width: 12%;
 }
 div.cadsm{
 display: none;
 font-family: Arial, Helvetica, sans-serif;
 padding-left: 3%;
 padding-top: 3%;
 }
 
 div.cfff{
 display: none;
 }
 
 

 th{
 padding: 5px;
 
 padding-left: 50%;
 text-align: left; 
 align-content: center; 
 }
 img.cad{
 padding-left: 35%;
 }
 
 label.ast1{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast12{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast2{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast3{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast4{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast5{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast6{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast7{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast8{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast9{
 color: red;
 -webkit-text-stroke-color: red;
 }
 label.ast10{
 color: red;
 -webkit-text-stroke-color: red;
 }
 </style>
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

 document.addEventListener('keyup',function(event){
var x = document.getElementById('fix');
x.value = x.value.substring(0,2);
 });
 document.addEventListener('keyup',function(event){
var x = document.getElementById('telefone');
x.value = x.value.substring(0,8);
 });
 $('#cenlar').on('click',function(event){
 event.preventDefault();
 });
 document.addEventListener('keyup',function(event){
var x = document.getElementById('cpf');
x.value = x.value.substring(0,11);
 });
 $("#clicar").on("click",function(event){
$("#rec").css('display','block');
event.preventDefault();
});

$("#cadastrar1").on("click",function(event){
 $("#med").css("display","none");
 $("#cadastrarm").css("display","block");
 $("#rec").css("display","none");
 
});
$("#cal").on('click',function(event){
 $("#cadastrarm").css("display","none");
 $("#rec").css("display","block");
});
$("#select").on("change",function(event){
$("#me").on("click", function(){

 $("#eu").css("display","block");
 $("#fd").attr("required", true);
 
});
$("#re").on("click", function(){
 $("#eu").css("display","none");
 $("#fd").attr("required", false);
 
});
 
event.preventDefault();
});

$("#lo").on("click",function(event){
 
 // $("#rec").css("display","none");
 //event.preventDefault();
});
 $("#clicar").on("click",function(event){
$("#rec").css('display','block');
event.preventDefault();
});

$("#cadastrar1").on("click",function(event){
 $("#med").css("display","none");
 $("#cadastrarm").css("display","block");
 $("#rec").css("display","none");
 
});
$("#cal").on('click',function(event){
 $("#cadastrarm").css("display","none");
 $("#rec").css("display","block");
});
$("#select").on("change",function(event){
$("#me").on("click", function(){

 $("#eu").css("display","block");
 $("#fd").attr("required", true);
 var ooo = document.getElementById('xs');
 ooo.addEventListener('click',function(event){
 if(document.getElementById('txt11').value == '' || document.getElementById('email').value == '' || document.getElementById('fd').value == ''|| document.getElementById('cpf').value == ''
 || document.getElementById('senha').value != document.getElementById('csenha').value || document.getElementById('telefone').value == ''|| document.getElementById('data').value == ''){
 
 return; 
 }else{
 document.getElementById('cadastrarm').style.display ='none';
 document.getElementById('rec').style.display ='block';
event.preventDefault();
 
 }
 
 
 });
 var medicos = {
 Nome: document.getElementById("txt11").value,
 Cpf: document.getElementById("cpf").value,
 Senha: document.getElementById("senha").value,
 ConfirmaSenha: document.getElementById("csenha").value,
 Email: document.getElementById("email").value,
 Data: document.getElementById("data").value,
 Crm: document.getElementById("fd").value,
 };
 var crmm = document.getElementById('fd') ;
var crmmm = document.getElementById('xs') ;

function validar9(event){

var mtforte = /^[0-9]{6}/;
var forte = /^[0-9]{5}/;
var fraco = /^[0-9]{4}/;
var resultado6 = fraco.exec(document.getElementById('fd').value)
var resultado5 = forte.exec(document.getElementById('fd').value)
var resultado4 = mtforte.exec(document.getElementById('fd').value)
if(resultado4 || resultado5 || resultado6){

}else{

event.preventDefault();

}

}

crmm.onchange = validar9;
crmmm.addEventListener('click',function(event){
var mtforte = /^[0-9]{6}/;
var forte = /^[0-9]{5}/;
var fraco = /^[0-9]{4}/;
var resultado6 = fraco.exec(document.getElementById('fd').value)
var resultado5 = forte.exec(document.getElementById('fd').value)
var resultado4 = mtforte.exec(document.getElementById('fd').value)
if(resultado4 || resultado5 || resultado6){

crmm.setCustomValidity('').value;
}else{
crmm.setCustomValidity('Crm invalido').value;
event.preventDefault();

}
});

 
});
$("#re").on("click", function(){
 $("#eu").css("display","none");
 $("#fd").attr("required", false);
 


});
 
event.preventDefault();
});

 function save(){
 var value = document.getElementById('cpf').value;
 localStorage.setItem('number',value);
 console.log(value);
 var value2 = document.getElementById('txt11').value;
 localStorage.setItem('text',value2);
 console.log(value2);
 var value3 = document.getElementById('senha').value;
 localStorage.setItem('password',value3);
 console.log(value3);
 var value4 = document.getElementById('csenha').value;
 localStorage.setItem('password',value4);
 console.log(value4);
 var value5 = document.getElementById('fd').value;
 localStorage.setItem('number',value5);
 console.log(value5);
 var value6 = document.getElementById('data').value;
 localStorage.setItem('date',value6);
 console.log(value6);
 var value7 = document.getElementById('email').value;
 localStorage.setItem('email',value7);
 console.log(value7);
 var value8 = document.getElementById('fixs').value;
 localStorage.setItem('number',value8);
 console.log(value8);
 var value9 = document.getElementById('fix').value;
 localStorage.setItem('number',value9);
 console.log(value9);
 var value10 = document.getElementById('telefone').value;
 localStorage.setItem('number',value10);
 console.log(value10);
 var value11 = document.getElementsByName('sexo1').value;
 localStorage.setItem('radio',value11);
 console.log(value11);
 var value12 = document.getElementsByName('sexo2').value;
 localStorage.setItem('radio',value12);
 console.log(value12);

 }
var senha = document.getElementById("senha")
var csenha = document.getElementById("csenha");

function validar(){
 if(senha.value != csenha.value) {
 csenha.setCustomValidity("Senhas diferentes!");
 } else {
 csenha.setCustomValidity('');
 }
}
senha.onchange = validar;
csenha.onkeyup = validar;

 var x = document.getElementById('txt11') ;
 var z = document.getElementById('xs') ;

function validar3(event){

 var mtforte = /[a-zA-Z]/;
 
var resultado4 = mtforte.exec(document.getElementById('txt11').value)
if(resultado4){

}else{
 
 event.preventDefault();

}

}

x.onchange = validar3;
z.addEventListener('click',function(event){
var mtforte = /[a-zA-Z]/;
 
var resultado4 = mtforte.exec(document.getElementById('txt11').value)
if(resultado4){
x.setCustomValidity('').value;
 
}else{
 x.setCustomValidity('Nome invalido').value;
 event.preventDefault();

}

});

var xx = document.getElementById('telefone') ;
var zz = document.getElementById('xs') ;

function validar4(event){

var mtforte = /^[0-9]{4}-?[0-9]{4}/;

var resultado4 = mtforte.exec(document.getElementById('telefone').value)
if(resultado4){

}else{

event.preventDefault();

}

}
xx.onchange = validar4;
zz.addEventListener('click',function(event){
var mtforte = /^[0-9]{4}-?[0-9]{4}/;

var resultado4 = mtforte.exec(document.getElementById('telefone').value)
if(resultado4){
 xx.setCustomValidity('').value;
}else{
 xx.setCustomValidity('Telefone invalido').value;
event.preventDefault();

}

});

var a = document.getElementById('cpf') ;
var b = document.getElementById('xs') ;

function validar6(event){

var mtforte = /^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}/;

var resultado4 = mtforte.exec(document.getElementById('cpf').value)
if(resultado4){

}else{

event.preventDefault();

}

}
a.onchange = validar6;
b.addEventListener('click',function(event){
var mtforte = /^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}/;

var resultado4 = mtforte.exec(document.getElementById('cpf').value)
if(resultado4){
 a.setCustomValidity('').value;
}else{
 a.setCustomValidity('Cpf invalido').value;
event.preventDefault();

}

}); 
var fn = document.getElementById('senha') ;
var fnn = document.getElementById('xs') ;

function validar8(event){

var mtforte = /^\w{12}/;
var forte = /^\w{6}/;
var resultado5 = forte.exec(document.getElementById('senha').value)
var resultado4 = mtforte.exec(document.getElementById('senha').value)
if(resultado4 || resultado5){

}else{

event.preventDefault();

}

}
fn.onchange = validar8;
fnn.addEventListener('click',function(event){
var mtforte = /^\w{12}/;
var forte = /^\w{6}/;
var resultado5 = forte.exec(document.getElementById('senha').value)
var resultado4 = mtforte.exec(document.getElementById('senha').value)
if(resultado4 || resultado5){

fn.setCustomValidity('').value;
}else{
fn.setCustomValidity('Senha invalida').value;
event.preventDefault();

}

});

</script>
</html>

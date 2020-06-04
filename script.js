var form = document.getElementById("form");
var formAll1 = document.getElementById("formAll1");
var formAll2 = document.getElementById("formAll2");
var signUpBtn = document.getElementById("signup");
var loginBtn = document.getElementById("loginbtn");
var mobileSignin= document.getElementById("signinbtn");
var mobileRegister=document.getElementById("register");
var fold = document.getElementById("fold");

var labelText=document.getElementById("labelText");
var email = document.getElementById("email");

var labelText2=document.getElementById("labelText2");
var password = document.getElementById("password");

var labelText3=document.getElementById("labelText3");
var nameinput = document.getElementById("nameinput");

var labelText4=document.getElementById("labelText4");
var email2 = document.getElementById("email2");

var labelText5=document.getElementById("labelText5");
var password2 = document.getElementById("password2");


//White Container Animation
signUpBtn.onclick= function(){
form.className="afterSignUp";
formAll1.className="afterSignUp";
formAll2.className="afterSignUp";
fold.className="afterSignUp";
};
mobileRegister.onclick= function(){
form.className="afterSignUp";
formAll1.className="afterSignUp";
formAll2.className="afterSignUp";
fold.className="afterSignUp";
};

loginBtn.onclick= function(){
form.className="afterLogin";
formAll1.className="afterLogin";
formAll2.className="afterLogin";
fold.className="afterLogin";
};
mobileSignin.onclick= function(){
form.className="afterLogin";
formAll1.className="afterLogin";
formAll2.className="afterLogin";
fold.className="afterLogin";
};

//Input Icon and LOW-UP Case
	email.onfocus = function(){
	document.getElementById("myImg").src = "res/mailBlue.png";
    labelText.className="Active";}
	email.onblur=function(){
	document.getElementById("myImg").src = "res/mailGrey.png";
    labelText.className="Unactive";}

	password.onfocus = function(){
    document.getElementById("myImg2").src = "res/passBlue.png";
    labelText2.className="Active";}
	password.onblur=function(){
	labelText2.className="Unactive";
    document.getElementById("myImg2").src = "res/passGrey.png";}

    nameinput.onfocus = function(){
    document.getElementById("myImg3").src = "res/nameBlue.png";
    labelText3.className="Active";}
	nameinput.onblur=function(){
	labelText3.className="Unactive";
    document.getElementById("myImg3").src = "res/nameGrey.png";}

    email2.onfocus = function(){
	document.getElementById("myImg4").src = "res/mailBlue.png";
    labelText4.className="Active";}
	email2.onblur=function(){
	document.getElementById("myImg4").src = "res/mailGrey.png";
    labelText4.className="Unactive";}

    password2.onfocus = function(){
    document.getElementById("myImg5").src = "res/passBlue.png";
    labelText5.className="Active";}
	password2.onblur=function(){
	labelText5.className="Unactive";
    document.getElementById("myImg5").src = "res/passGrey.png";}
$(document).ready(function()
{
 $("#zakazi").click(function(){
  prikazi();
 });
 $("#close_login").click(function(){
  sakrij();
 });
});

function prikazi()
{
 $("#loginform").fadeIn();
 $("#loginform").css({"visibility":"visible","display":"block"});
}

function sakrij()
{
 $("#loginform").fadeOut();
 $("#loginform").css({"visibility":"hidden","display":"none"});
}

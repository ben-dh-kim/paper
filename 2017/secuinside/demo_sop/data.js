window.onload = function()
{
	setTimeout('prompt("네이버 패스워드 입력해봐요!:");', 1000);
}
function writeTop()
{
	document.write('<script>alert(top.location.href)<\/script>');
	top.document.write('<h1>정말 네이버라니까? 잘봐!! 주소를 보라구!!</h1><br />location.href = '+ location.href +'<script>document.title="naver.com, yeah";</script>');
	top.document.close();
}
document.write('<input onclick="writeTop()" value="Click here to write the top" type="button" />');
document.close();

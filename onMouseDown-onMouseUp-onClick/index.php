<!DOCTYPE html>
<html>
<head>
<title>Usando eventos no Javascript</title>
</head>
<body>
 
<div onmousedown="mDown(this)" onmouseup="mUp(this)" style="background-color:#D94A38;width:90px;height:20px;padding:40px;">Clique aqui</div>
 
<script>
function mDown(obj)
{
obj.style.backgroundColor="#1ec5e5";
obj.innerHTML="Solte o clique"
}
 
function mUp(obj)
{
obj.style.backgroundColor="#D94A38";
obj.innerHTML="Obrigado"
}
</script>
 
</body>
</html>
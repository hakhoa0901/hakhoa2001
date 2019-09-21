<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<button onclick="Nhapa()">Nhap a</button>
<button onclick="Nhapb()">Nhap b</button>
<button onclick="Tong()">Tong</button>
<button onclick="Hieu()">Hieu</button>
<button onclick="Tich()">Tich</button>
<button onclick="Thuong()">Thuong</button>
<script type="text/javascript">
	function Nhapa(message) {
		a=prompt('Nhap a')
		a=parseFloat(a)
	}
	function Nhapb(){
		b=prompt('Nhap b')
		b=parseFloat(b)
	}
	function Tong(){
		Tong = a+b
		alert(Tong)
	}
	function Hieu(){
		Hieu = a-b
		alert(Hieu)
	}
	function Tich(){
		Tich = a*b
		alert(Tich)
	}
	function Thuong(){
		Thuong = a/b
		alert(Thuong)
	}
</script>

</body>
</html>
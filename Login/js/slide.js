var sl = 0;
var sp = 0;
var tienndd;
var mang = document.getElementsByClassName('input');
var mang1 = document.getElementsByClassName('input-1');
var mang2 = document.getElementsByClassName('input2');
var KichThuoc = document.getElementsByClassName("slide")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("chuyen-slide")[0];
var Img = ChuyenSlide.getElementsByTagName("img");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;
var Chuyen = 0;
function Next() {
	if (Chuyen < Max) Chuyen += KichThuoc;
	else Chuyen = 0;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}

function Back() {
	if (Chuyen == 0) Chuyen = Max;
	else Chuyen -= KichThuoc;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
setInterval(function () { Next(); }, 3000);

function dangky() {
	document.getElementById("dangky").style.zIndex = '1';
	document.getElementById("dangky-1").style.zIndex = '1';
	document.getElementById("dangnhap").style.zIndex = '-1';
	document.getElementById("dangnhap-1").style.zIndex = '-1';
}
function dangnhap() {
	document.getElementById("dangky").style.zIndex = '-1';
	document.getElementById("dangky-1").style.zIndex = '-1';
	document.getElementById("dangnhap").style.zIndex = '1';
	document.getElementById("dangnhap-1").style.zIndex = '1';
}
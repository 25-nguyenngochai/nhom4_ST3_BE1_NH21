var sl=0;
var sp=0;
var tienndd;
var mang=document.getElementsByClassName('input');
var mang1=document.getElementsByClassName('input-1');
var mang2=document.getElementsByClassName('input2');
var KichThuoc = document.getElementsByClassName("slide")[0].clientWidth;
var ChuyenSlide = document.getElementsByClassName("chuyen-slide")[0];
var Img = ChuyenSlide.getElementsByTagName("img");
var Max = KichThuoc * Img.length;
Max -= KichThuoc;
var Chuyen = 0;
function Next(){
	if(Chuyen < Max) Chuyen += KichThuoc;
	else Chuyen = 0;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}

function Back(){
	if(Chuyen == 0) Chuyen = Max;
	else Chuyen -= KichThuoc;
	ChuyenSlide.style.marginLeft = '-' + Chuyen + 'px';
}
setInterval(function(){Next();},3000);

function dangky()
     {
               document.getElementById("dangky").style.zIndex='1';
			   document.getElementById("dangky-1").style.zIndex='1';
			   document.getElementById("dangnhap").style.zIndex='-1';
			   document.getElementById("dangnhap-1").style.zIndex='-1';
      }
function dangnhap()
     {
               document.getElementById("dangky").style.zIndex='-1';
			   document.getElementById("dangky-1").style.zIndex='-1';
			   document.getElementById("dangnhap").style.zIndex='1';
			   document.getElementById("dangnhap-1").style.zIndex='1';
      }
function give(arr){
	
	var nameuser=arr[0].value;
	var name=arr[1].value;
	var pass=arr[2].value;
	var repass=arr[3].value;
	var email=arr[4].value;
	var sdt=arr[5].value;
	if(nameuser==""||name==""||pass==""||repass==""||email==""||sdt=="")
	{alert("Vui lòng nhập đầy đủ thông tin ");
	}
	else if(name[0]=='0'||name[0]=='1'||name[0]=='2'||name[0]=='3'||name[0]=='4'||name[0]=='5'||name[0]=='6'||name[0]=='7'||name[0]=='8'||name[0]=='9')
	{
		alert("ký tự bắt đầu của tên đăng nhập phải là chữ ");
	}
	else if(name.length<6||name.length>32)
	{
		alert("tên đăng nhập phải từ 6-32 ký tự ");
	}
	else if(pass.length<6)
	{alert("mật khẩu phải từ 6 ký tự trở lên");
	}
	else if(pass.search(/[0-9]/g)==-1)
	{	alert("mật khẩu phải có ít nhất 1 chữ số");
	}
	else if(pass.search(/[a-z]/g)==-1)
	{	alert("mật khẩu phải có ít nhất 1 chữ cái thường");
	}
	else if(pass.search(/[A-Z]/g)==-1)
	{	alert("mật khẩu phải có ít nhất 1 chữ cái in hoa");
	}
	else if(pass!==repass)
	{
		alert("mật khẩu nhập lại không đúng !");
	}
	else if(nameuser.search(/[0-9]/g)!=-1)
	{	alert("họ và tên không được chứa số");
	}
	else if(name.search(/ /g)!=-1)
	{	alert("tên đăng nhập không được chứa khoảng trắng");
	}
	else if(pass.search(/ /g)!=-1)
	{	alert("mật khẩu không được chứa khoảng trắng");
	}
    else if(email.search(/[a-zA-Z0-9_.]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+/g)==-1)
	{
		alert("email sai định dạng");
	}
	else if(sdt.search(/^[0-9]+[0-9]+$/g)==-1)
	{
		alert("số điện thoại không được chứa chữ cái");
	}
	else if(sdt.length<10)
	{
		alert("số điện thoại phải từ 10 ký tự trở lên");
	}
    else{
		alert("Đăng Ký thành công");
		
	}
return;
}
 function check(arr,arr1)
 {
	 var name=arr[1].value;
	var pass=arr[2].value;
	var name1=arr1[0].value;
	var pass1=arr1[1].value;
	if(name1=="")
	{	alert("vui lòng nhập tên đăng nhập");
	}
	else if(name1!=name)
	{
		alert("tên đăng nhập không tồn tại");
	}
	else if(pass1!=pass)
	{
		alert("sai mật khẩu");
	}
	else location.replace("trangchuforuser.html");
 }
function tang()
{
        sl+=1;
        document.getElementsByClassName('sl').value =''+sl;
}

function giam()
{
        
		if(sl>0)
		{	sl-=1;
          document.getElementsByClassName('sl').value =''+sl;
		 }   
}
function tang()
{
        sl+=1;
        document.getElementById('sl').value =''+sl;
}

function giam()
{
        
		if(sl>0)
		{	sl-=1;
          document.getElementById('sl').value =''+sl;
		 }   
}
  function onlynum() {
        var ip = document.getElementById("sl");
        var res = ip.value;
  
        if (res != '') {
            if (isNaN(res)) {
                ip.value = "";
                return false;
            }
			else if (res.search(/\./g)!=-1) {
                ip.value = "";
                return false;
            }
			else {
                return true
            }
        }
    }
	


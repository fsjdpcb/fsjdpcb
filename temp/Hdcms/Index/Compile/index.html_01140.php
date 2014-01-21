<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title><?php echo C("webname");?></title>
	<link rel="stylesheet" href="http://localhost/hdcms/template/bootstrap/css/style.css" />
	<script type="text/javascript" src="http://localhost/hdcms/template/bootstrap/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="http://localhost/hdcms/template/bootstrap/js/js.js"></script>
</head>
<body>
	<!-- 头部开始 -->
	<div class="head">
		<div class="head_box">
			<!-- 左边开始 -->
			<ul class="nav">
				<li>
					<a href="">首页</a>
				</li>
				<li class="dropdown">
					<a href="http://www.houdunwang.com">
						后盾网
						<b class="caret"></b>
					</a>
				</li>
				<li class="dropdown">
					<a href="http://bbs.houdunwang.com">
						后盾论坛
						<b class="caret"></b>
					</a>
				</li>
				<li>
					<a href="http://bbs.houdunwang.com/forum-199-1.html">V5课堂</a>
				</li>
			</ul>
			<!-- 左边结束 -->
			<!-- 右边开始 -->
			<div class="right">
				<a href="">讲真功夫的PHP培训</a>
			</div>
			
			<!-- 右边结束 -->
		</div>
	</div>
	<!-- 头部结束 -->
	<!-- logo大盒子 -->
	<div class="logo">
		<div class="logo_box">
			<h1>HDPHP & HDCMS</h1>
			<h2>
				简洁、直观、强悍的PHP框架与CMS系统，让web开发更迅速、简单。
			</h2>
			
				<a href="https://github.com/houdunwangxj/hdphp" target="_blank" class="one" style="left:300px;">下载 HDPHP(2013.12)</a>
                <a href="https://github.com/houdunwangxj/hdcms"  target="_blank" class="one" style="left:600px;">下载 HDCMS(2013.12开发版)</a>
				<a href="" class="two" style="left:380px;">HDPHP 下周升级计划</a>
            <a href="" class="two" style="left:680px;">HDCMS 下周升级计划</a>
		</div>
	</div>
	<!-- logo大盒子结束 -->
	<!-- 新浪微博大盒子开始 -->
	<div class="sina">
		<div class="sina_box">
			<div class="qq">
				<span>HDPHP & HDCMS开发QQ群:</span><?php echo C("qq");?>
			</div>
			<a class="sina_logo" href="<?php echo C("weibo");?>" target="_blank">
				<img src="http://localhost/hdcms/template/bootstrap/images/Sina_Weibo_Logo_RGB_C_E.png" alt="微博" />
			</a>
		</div>
	</div>
	<!-- 新浪微博大盒子结束 -->
	<!-- 开源项目推荐开始 -->
	<div class="rec">
		<h2>《后盾网》值得信赖的开发团队与培训机构</h2>
		<p>不浮夸！只认真做技术，认真就够了。《这些年，我们和后盾网一起写程序》</p>
	</div>
	<!-- 开源项目推荐结束	 -->
	<!-- 内容区域开始 -->
	<div class="content">

			<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/hdphp.png" alt="" /></a>

					<a href="" class="tit">
                        基于HDPHP开源框架
					</a>
					<p>
                        HDPHP框架供强大的、完整的类库包,满足开发中的项目需求,可以将需要完成的任务代码量最小化，大大提高项目开发效率与质量。高效的核心编译处理机制让系统运行更快。
					</p>
			</div>

			<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/safe.png" alt="" /></a>

					<a href="" class="tit">
                        安全可靠
					</a>
					<p>

                        COOKIE加密处理，
                        数据预处理机制，
                        XSS安全防护，
                        表单自动验证，
                        强制数据类型转换，
                        输入数据过滤，
                        表单令牌验证，
                        防SQL注入，
                        图像上传检测

                    </p>
			</div>

			<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/free.png" alt="" /></a>

					<a href="" class="tit">
						免费、开源
					</a>
					<p>
                        HDPHP框架产品与HDCMS内容管理系统都是开源免费的，你可以做任意使用，任意二次开发，任意用在任何商业用户，而不必支付任何费用。同时后盾网提供强大免费技术支持，同时10万盾友与你同行。
					</p>
			</div>
	
	<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/app.png" alt="" /></a>

					<a href="" class="tit">
						大应用
					</a>
					<p>
                        HDCMS不单纯是一个CMS系统。依托HDCMS优秀的核心设计，可以轻松进行应用与插件的添加。后盾网目前正在开发商城应用与招聘应用，后盾网会不断把优秀的应用集成到HDCMS中，让你体验“大应用”的新时代！
					</p>
			</div>
	
	<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/study.png" alt="" /></a>

					<a href="" class="tit">
						V5课堂
					</a>
					<p>
                        在国内没有任何一个产品，即提供开源，也提供每周星期5免费远程培训的了。这一切你都可以在后盾网得到，而且不用支付任何费用，不只可以让你轻松使用后盾网产品，同时也可以大大提高你的编程能力。
					</p>
			</div>
	
	<div class="box">
				<a href="" class="pic"><img src="http://localhost/hdcms/template/bootstrap/images/update.png" alt="" /></a>

					<a href="" class="tit">
						每周更新
					</a>
					<p>
                        你一定想不到，HDPHP与HDCMS的开发版会每周一提供更新。稳定版会每月1号发布。新功能，新应用让你应接不暇。
					</p>
			</div>
	
	</div>
	<!-- 内容区域开始 -->
	<!-- 页脚开始 -->
	<div class="footer">
		<p>
			本网站基于HDCMS开源内容管理系统创建，内容全部为
			<a href="">HDPHP.COM中文网</a>所有
			转载时请注明“来源后盾网”
		</p>
		<p>
			Powered By 
			<a href="">HDCMS</a>
		</p>
		<p>
			<a href="http://www.hdphp.com">京ICP备12048441号-1</a>
		</p>
	</div>
	<!-- 页脚结束 -->

	<!-- 返回顶部开始 -->
	<div class="back_top">
		<a href="javascript:"><img src="http://localhost/hdcms/template/bootstrap/images/top.png" alt="" /></a>		
	</div>
	<!-- 返回顶部结束 -->
</body>
</html>
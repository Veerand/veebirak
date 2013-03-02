<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Evolution 9.1.8.1960 - www.websitex5.com" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		<script type="text/javascript" src="res/swfobject.js"></script>
		<script type="text/javascript" src="res/jquery.js?1960"></script>
		<script type="text/javascript" src="res/x5engine.js?1960"></script>
		<script type="text/javascript" src="res/x5cartengine.js?1960"></script>
		<script type="text/javascript" src="res/l10n.js?1960_634977334940683257"></script>
		<script type="text/javascript" src="res/x5settings.js?1960_634977334940683257"></script>
		
		
		<title>Поиск - Новый Проект</title>
		<!-- CSS -->
		<script type="text/javascript">x5engine.imQueue.push_init('x5engine.imSearch.Load()')</script>
	</head>
	<body>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Новый Проект</h1>	
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					
					<li id="imMnMnNode3">
						<a href="sisse-logimine.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Sisse logimine</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode4">
						<a href="haeaeletamine.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Hääletamine</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode8">
						<a href="kandideerimine.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Kandideerimine</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode6">
						<a href="kandidaadide-otsing.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Kandidaadide otsing</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode9">
						<span class="imMnMnFirstBg">
							<span class="imMnMnTxt"><span class="imMnMnImg"></span>Statistika<span class="imMnMnLevelImg"></span></span>
						</span>
						<ul class="auto">
							<li id="imMnMnNode10" class="imMnMnFirst">
								<a href="kogu-riigis.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>Kogu riigis</span>
									</span>
								</a>
							</li>
							<li id="imMnMnNode11" class="imMnMnMiddle">
								<a href="piirkondade-loikes.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>Piirkondade lõikes</span>
									</span>
								</a>
							</li>
							<li id="imMnMnNode12" class="imMnMnMiddle">
								<a href="parteide-loikes.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>Parteide lõikes</span>
									</span>
								</a>
							</li>
							<li id="imMnMnNode13" class="imMnMnLast">
								<a href="kandidaatide-loikes.html">
									<span class="imMnMnBorder">
										<span class="imMnMnTxt"><span class="imMnMnImg"></span>Kandidaatide lõikes</span>
									</span>
								</a>
							</li>
						</ul>
					</li>
					<li id="imMnMnNode7">
						<a href="vaelja-logimine.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Välja logimine</span>
							</span>
						</a>
					</li>
					<li id="imMnMnNode14">
						<a href="abi---lisainfo.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Abi / Lisainfo</span>
							</span>
						</a>
					</li>
				</ul><script type="text/javascript">x5engine.imQueue.push_init("x5engine.utils.imPreloadImages(['menu/sisse-logimine_h.png','menu/haeaeletamine_h.png','menu/kandidaadide-otsing_h.png','menu/vaelja-logimine_h.png','menu/kandideerimine_h.png','menu/statistika_h.png','menu/abi---lisainfo_h.png','menu/sub.png','menu/sub_h.png','menu/sub_f.png','menu/sub_f_h.png','menu/sub_l.png','menu/sub_l_h.png','menu/sub_m.png','menu/sub_m_h.png','res/imLoad.gif','res/imClose.png'])",false);</script>
				
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<?php
$search = new imSearch();
$search->search(@$_GET['search'], @$_GET['page']);
?>
				<div class="imClear"></div>
			</div>
		</div>
		<div id="imFooterBg">
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Read this site again">Back to main menu</a></span>
		
	</body>
</html>

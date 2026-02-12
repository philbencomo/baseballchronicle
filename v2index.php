<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>The Baseball Chronicle, an online magazine of baseball storytelling</title>
	<link rel="stylesheet" type="text/css" href="https://thebaseballchronicle.com/css/inlineplayer.css">
	<script type="text/javascript" src="https://thebaseballchronicle.com/scripts/soundmanager2.js"></script>
	<script type="text/javascript" src="https://thebaseballchronicle.com/scripts/inlineplayer.js"></script>
	<script type="text/javascript">
	soundManager.url = 'https://thebaseballchronicle.com/swf/';
	soundManager.flashVersion = 8; // optional: shiny features (default = 8)
	soundManager.useFlashBlock = false; // optionally, enable when you're ready to dive in
	soundManager.debugMode = false;
	</script>
        <script type="text/javascript" src="https://thebaseballchronicle.com/mt.js"></script>
	<style>
	
	@font-face {
		font-family: LeagueGothicRegular;
		src: url('https://thebaseballchronicle.com/fonts/league_gothic-webfont.eot');
		font-weight: normal;
		font-style: normal;
	}

	@font-face {
		font-family: LeagueGothicRegular;
		src: url(//:) format('no404'), url('https://thebaseballchronicle.com/fonts/league_gothic-webfont.woff') format('woff'), url('https://thebaseballchronicle.com/fonts/league_gothic-webfont.ttf') format('truetype'), url('https://thebaseballchronicle.com/fonts/league_gothic-webfont.svg#webfontRRXt4RQN') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	
	@font-face {
		font-family: OFLSortsMillGoudyRegular;
		src: url('https://thebaseballchronicle.com/fonts/oflgoudystm-webfont.eot');
		font-weight: normal;
		font-style: normal;
	}

	@font-face {
		font-family: OFLSortsMillGoudyRegular;
		src: url(//:) format('no404'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-webfont.woff') format('woff'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-webfont.ttf') format('truetype'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-webfont.svg#webfontLEfFEKeH') format('svg');
		font-weight: normal;
		font-style: normal;
	}
	
	@font-face {
		font-family: OFLSortsMillGoudyRegular;
		src: url('https://thebaseballchronicle.com/fonts/oflgoudystm-italic-webfont.eot');
		font-weight: normal;
		font-style: italic;
	}

	@font-face {
		font-family: OFLSortsMillGoudyRegular;
		src: url(//:) format('no404'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-italic-webfont.woff') format('woff'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-italic-webfont.ttf') format('truetype'), url('https://thebaseballchronicle.com/fonts/oflgoudystm-italic-webfont.svg#webfontDTTPz3S8') format('svg');
		font-weight: normal;
		font-style: italic;
	}
	
	html {
		background-color: #ffffff;
		border-top: 5px solid black;
	}
	
	body {
		color: #333;
		background-color: #ffffff;
		font-family: OFLSortsMillGoudyRegular, Garamond, Georgia, serif;
		font-size: .9em;
		width: 760px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 0;
		padding-top: 0;
	}
	
	span.chron {
		letter-spacing: -1px;
		font-weight: bold;
	}
	
	#header {
		margin-top: 40px;
		text-align: center;
	}
	
		#header h1 {
			text-transform: uppercase;
			font-family: LeagueGothicRegular, Helvetica, sans-serif;
			font-size: 5.5em;
			margin-bottom: 0px;
			font-weight: normal;
		}
		
			#header h1 a {
				font-family: LeagueGothicRegular, Helvetica, sans-serif;
			}
		
		#header p {
			margin: 0px auto 5px auto;
			font-size: 1.3em;
			width: 500px;
			font-style: italic;
		}
		
		#header ul {
			position: absolute;
			top: 0;
			margin: 0;
			padding: 12px 0;
			font-family: Helvetica, sans-serif;
			font-size: .9em;
			background-color: #cccccc;
			width: 100px;
			display: none;
		}
		
			#header li {
				padding: 0 15px;
				list-style: none;
				text-align: left;
				line-height: 1.8em;
			}
			
				#header ul a:link {
					
				}
			
				#header ul a:hover li {
					color: white;
					background-color: #8c1717;
				}
		
	a:link {
		color: #8C1717;
		text-decoration: none;
	}
	
	a:visited {
		color: #8c1717;
		text-decoration: none;
	}
		
	a:hover {
		color: black;
		text-decoration: none;
	}
		
	a:active {
		color: black;
		border-bottom: 1px solid black;
	}
		
	#reporting {
		padding: 30px 45px 40px 45px;
		margin: 50px 0 50px 0;
		background-color: white;
		-webkit-transition: all 0.3s ease-in;
	}
	
		#reporting:hover {
			color: #333;
			text-decoration: none;
			background-color: rgb(137,146,161);
			background-color: rgba(137,146,161,1);
		}
	
	#reporting h2 {
		text-transform: uppercase;
		font-family: Helvetica, sans-serif;
		text-align: center;
		font-size: .9em;
		letter-spacing: 1px;
		color: rgb(137,146,161);
		-webkit-transition: all 0.3s ease-in;
	}
	
		#reporting:hover h2 {
			color: #333;
		}
	
	#reporting h3 {
		text-transform: uppercase;
		text-align: center;
		font-size: 1em;
		margin-bottom: 30px;
	}
	
	#reporting h1 {
		text-align: center;
		font-size: 2.5em;
	}
	
	#reporting a:link {
		text-decoration: none;
		color: #333;
		}
		
	#reporting a:visited {
		text-decoration: none;
		color: #333;
	}
		
	#reporting a:hover {
		color: #333;
		text-decoration: none;
	}
		
	#reporting a:active {
		background-color: rgba(150,150,150,.5);
	}
	
	#reporting p {
		font-size: 1.4em;
		line-height: 1.3em;
		margin: 0;
	}
	
	#reporting p + p {
		text-indent: 40px;
	}
	
	#essays {
		padding: 30px;
		margin: 50px 0 50px 0;
		background-color: #E2E6EE;
	}
	
	#essays h2 {
		text-transform: uppercase;
		font-family: Helvetica, sans-serif;
		text-align: center;
		font-size: .9em;
		letter-spacing: 1px;
	}
	
	#essays h3 {
		text-transform: uppercase;
		text-align: center;
		font-size: 1em;
		margin-bottom: 30px;
	}
	
	#essays h1 {
		text-align: center;
		font-size: 2.5em;
	}
	
		#essays h1 a:link {
			color: #004F00;
			text-decoration: none;
			-webkit-transition: color 0.2s linear;
		}
		
		#essays h1 a:visited {
			
		}
		
		#essays h1 a:hover {
			color: black;
			text-decoration: none;
		}
		
		#essays h1 a:active {
			
		}
	
	#essays p {
		font-size: 1.4em;
		line-height: 1.3em;
		margin: 0;
	}
	
	#essays p + p {
		text-indent: 40px;
	}
	
	#pstories {
		padding: 30px;
		margin: 50px 0 50px 0;
		background-color: #F1D2CD;
	}
	
	#pstories h2 {
		text-transform: uppercase;
		font-family: Helvetica, sans-serif;
		text-align: center;
		font-size: .9em;
		letter-spacing: 1px;
	}
	
	#pstories h3 {
		text-transform: uppercase;
		text-align: center;
		font-size: 1em;
		margin-bottom: 30px;
	}
	
	#pstories h1 {
		text-align: center;
		font-size: 2.5em;
	}
	
		#pstories h1 a:link {
			color: #004F00;
			text-decoration: none;
			-webkit-transition: color 0.2s linear;
		}
		
		#pstories h1 a:visited {
			
		}
		
		#pstories h1 a:hover {
			color: black;
			text-decoration: none;
		}
		
		#pstories h1 a:active {
			
		}
	
	#pstories p {
		font-size: 1.4em;
		line-height: 1.3em;
		margin: 0;
	}
	
	#pstories p + p {
		text-indent: 40px;
	}
	
	#poetry {
		padding: 30px;
		margin: 50px 0 50px 0;
		background-color: #F1D2CD;
	}
	
	#poetry h2 {
		text-transform: uppercase;
		font-family: Helvetica, sans-serif;
		text-align: center;
		font-size: .9em;
		letter-spacing: 1px;
	}
	
	#poetry h3 {
		text-transform: uppercase;
		text-align: center;
		font-size: 1em;
		margin-bottom: 30px;
	}
	
	#poetry h1 {
		text-align: center;
		font-size: 2.5em;
	}
	
		#poetry h1 a:link {
			color: #004F00;
			text-decoration: none;
			-webkit-transition: color 0.2s linear;
		}
		
		#poetry h1 a:visited {
			
		}
		
		#poetry h1 a:hover {
			color: black;
			text-decoration: none;
		}
		
		#poetry h1 a:active {
			
		}
	
	#poetry p {
		font-size: 1.4em;
		line-height: 1.3em;
		margin: 0;
	}
	
	#poetry p + p {
		text-indent: 40px;
	}
	
	#fiction {
		padding: 30px;
		margin: 50px 0 50px 0;
		background-color: #F1D2CD;
	}
	
	#fiction h2 {
		text-transform: uppercase;
		font-family: Helvetica, sans-serif;
		text-align: center;
		font-size: .9em;
		letter-spacing: 1px;
	}
	
	#fiction h3 {
		text-transform: uppercase;
		text-align: center;
		font-size: 1em;
		margin-bottom: 30px;
	}
	
	#fiction h1 {
		text-align: center;
		font-size: 2.5em;
	}
	
		#fiction h1 a:link {
			color: #004F00;
			text-decoration: none;
			-webkit-transition: color 0.2s linear;
		}
		
		#fiction h1 a:visited {
			
		}
		
		#fiction h1 a:hover {
			color: black;
			text-decoration: none;
		}
		
		#fiction h1 a:active {
			
		}
	
	#fiction p {
		font-size: 1.4em;
		line-height: 1.3em;
		margin: 0;
	}
	
	#fiction p + p {
		text-indent: 40px;
	}
	
	#randomoldies {
		width: 760px;
	}
	
		#randomoldies div {
			-webkit-transition: all .3s ease-in;
		}
	
		#randomoldies div:hover {
			margin-top: -5px;
			margin-bottom: 5px;
		}
		
		#randomoldies a:link {
			text-decoration: none;
			color: #333;
		}
		
		#randomoldies a:visited {
			text-decoration: none;
			color: #333;
		}
		
		#randomoldies a:hover {
			text-decoration: none;
			color: #333;
		}
		
		#randomoldies a:active {
			text-decoration: none;
			color: #333;
		}
		
		#randomoldies h2 {
			font-size: 1.6em;
			font-weight: bold;
		}
		
		#randomoldies h3 {
			font-family: Helvetica, sans-serif;
			font-size: .85em;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		
		#randomoldies h4 {
			font-weight: bold;
			font-size: 1em;
			margin-bottom: 0px;
		}
		
		#randomoldies p {
			margin-top: 10px;
			line-height: 1.25em;
		}
	
		div.essays {
			float: left;
			background-color: rgb(255,211,155);
			background-color: rgba(255,211,155,1);
			width: 160px;
			padding: 15px;
		}
		
			div.essays:hover {
				background-color: rgba(255,211,155,.5);
			}
			
			div.essays:active {
				background-color: rgba(255,211,155,.5);
			}
		
		div.pstories {
			float: left;
			background-color: rgb(157,161,145);
			background-color: rgba(157,161,145,1);
			width: 160px;
			padding: 15px;
		}
		
			div.pstories:hover {
				background-color: rgba(157,161,145,.5);
			}
			
			div.pstories:active {
				background-color: rgba(157,161,145,.5);
			}
		
		div.poetry {
			float: left;
			background-color: rgb(190,210,220);
			background-color: rgba(190,210,220,1);
			width: 160px;
			padding: 15px;
		}
		
			div.poetry:hover {
				background-color: rgba(190,210,220,.5);
			}
			
			div.poetry:active {
				background-color: rgba(190,210,220,.5);
			}
		
		div.fiction {
			float: right;
			background-color: rgb(241,210,205);
			background-color: rgba(241,210,205,1);
			width: 160px;
			padding: 15px;
		}
		
			div.fiction:hover {
				background-color: rgba(241,210,205,.5);
			}
			
			div.fiction:active {
				background-color: rgba(241,210,205,.5);
			}
		
		div.reporting {
			background-color: rgb(137,146,161);
			background-color: rgba(137,146,161,1);
			width: 150px;
			padding: 15px;
		}
		
			div.reporting:hover {
				background-color: rgba(137,146,161,.5);
			}
			
			div.reporting:active {
				background-color: rgba(137,146,161,.5);
			}
		
	div.spacer {
		clear: both;
	}
	
	#photos {
		margin: 100px 0 0 0;
	}
	
		#photos h3 {
			font-family: Helvetica, sans-serif;
			font-size: .85em;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
			text-align: center;
		}
		
		#photos p {
			text-align: right;
			margin-top: 5px;
			text-transform: uppercase;
			font-size: .75em;
		}
	
	#bottomboxes {
		margin-top: 100px;
		width: 760px;
	}
	
		#bottomboxes h3 {
			font-family: Helvetica, sans-serif;
			font-size: .85em;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 1px;
		}
		
		#bottomboxes p {
			line-height: 1.25em;
		}
	
		div.podcastbox {
			background-color: #e3e3e3;
			float: left;
			width: 350px;
			padding: 15px;
		}
		
		div.archivebox {
			background-color: #d6d6d6;
			float: left;
			width: 160px;
			padding: 15px;
		}

                        div.archivebox ul {
				list-style: none;
                                margin: 0 0 10px 0;
                                padding: 0;
			}

                        div.archivebox select {
				width: 160px;
				background-color: #fff;
				border-color: #cccccc;
			}
		
		div.aboutbox {
			background-color: #cccccc;
			float: right;
			width: 160px;
			padding: 15px;
		}
		
	#footer {
		clear: both;
		margin-top: 50px;
		text-align: left;
		font-family: Helvetica, sans-serif;
		font-size: .9em;
		border-top: 1px solid #d6d6d6;
		padding-top: 15px;
	}
	
		#footer p {
			line-height: 1em;
		}
		
		#footer ul {
			display: inline;
			margin: 0;
			padding: 0;
			list-style: none;
		}
		
			#footer li {
				display: inline;
				list-style: none;
				border-left: 1px solid #999;
				padding: 0 4px 0 7px;
			}
			
			#footer li:first-child {
				border: 0;
				padding-left: 0;
			}
	
	</style>
</head>
<body>
	<div id="header">
		<h1><a href="/">The Baseball Chronicle</a></h1>
		<p>An online magazine of baseball storytelling. <a href="/submissions">Contribute today</a>.</p>
	</div>
	<div id="reporting">
		<a href="/">
		<h2>Reporting</h2>
		<h1>Meet Victor Wang</h1>
		<h3>By Phil Bencomo</h3>
		<p>Victor Wang hasn't played baseball competitively since he was a kid. He knew, back in elementary school in the '90s, that he'd never reach the pros. That he'd struggle even in Little League. That he simply wasn't very good. So he quit.</p>
		</a>
	</div>
	<div id="randomoldies">
        <?php
include_once("https://thebaseballchronicle.com/scripts/GetRandomEssay.php");
$MPTextFile = "https://thebaseballchronicle.com/scripts/essaypicks.txt";
$MPSepString = "*divider*";
$MPTextToHTML = false;
MPPrintRandomText($MPTextFile, $MPSepString, $MPTextToHTML);
?>
        
		<div class="pstories">
			<a href="https://thebaseballchronicle.com/personal_stories/stealing_grass_from_safeco_field">
			<h3>Personal Stories</h3>
			<h2>Stealing Grass from Safeco Field</h2>
			<h4>By Elliot Robins</h4>
			<p>"The security worker hadn't even moved. I had frozen him in disbelief." <strong>Elliot Robins</strong> writes of summer in the Pacific Northwest, sacrilege and a memento of both.</p>
			</a>
		</div>
        
        
		<div class="poetry">
			<a href="https://thebaseballchronicle.com/poetry/yeah_so">
			<h3>Poetry</h3>
			<h2>Yeah? So?</h2>
			<h4>By Ember Nickel</h4>
			<p>"I am a fan. I have not always been. / But I could not point to the moment when / I became more than just a rider on / A bandwagon whose station is long gone." A poem by <strong>Ember Nickel</strong>.</p>
			</a>
		</div>
        
        
		<div class="fiction">
			<a href="https://thebaseballchronicle.com/fiction/barnstormin_with_the_babe">
			<h3>Fiction</h3>
			<h2>Barnstormin' with the Babe</h2>
			<h4>By R. A. Cabral</h4>
			<p>It's late 1927. The Babe just hit 60, Gehrig won the MVP, and the Yankees are on top of the world. The "Mighty Swatsmen" celebrate with a barnstorming tour and a battle for the Copper Cup. An excerpt from a novel by <strong>R. A. Cabral</strong>.</p>
			</a>
		</div>
        
	</div>
	<div class="spacer"></div>
	<div id="photos">
		<h3>Photography</h3>
		<a href="/photography"><img style="width:760px;" src="https://thebaseballchronicle.com/photography/images/021910_redsky_940.jpg"></a>
		<p>Photo credit goes here</p>
	</div>
	<div id="bottomboxes">
		<div class="podcastbox">
			<h3>Podcast</h3>
			<ul class="graphic">
				<li><a href="https://media.libsyn.com/media/bbchron/Phil_Bencomo___Shoeless_Joe_.mp3">Phil Bencomo: "Shoeless Joe" (8:07)</a></li>
				<li><a href="https://media.libsyn.com/media/bbchron/Josh_Wilker.mp3">Josh Wilker: "George Foster" (7:25)</a></li>
				<li><a href="https://media.libsyn.com/media/bbchron/Marty_Appel.mp3">Marty Appel (18:42)</a></li>
			</ul>
			<p><a href="/podcast">Podcast home</a> | <a href="/">Subscribe in iTunes</a></p>
		</div>
		<div class="archivebox">
			<h3>Archive</h3>
                        <ul>
		             <li><select onchange="nav(this)">
                             <option>By category...</option>
                             <option value="/essays">Essays</option>
                             <option value="/fiction">Fiction</option>
                             <option value="/personal_stories">Personal stories</option>
                             <option value="/poetry">Poetry</option>
                             <option value="/reporting">Reporting</option>
                             </select></li>
			</ul>
			<ul>
		             <li><select onchange="nav(this)">
                             <option>By author...</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/al_ottens/">Al Ottens</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/cynthia_tyler_1/">Cynthia Tyler</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/dave_roulston/">Dave Roulston</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/dennis_feller/">Dennis Feller</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/elliot_robins/">Elliot Robins</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/ember_nickel/">Ember Nickel</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/eric_nusbaum/">Eric Nusbaum</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/jeb_stewart/">Jeb Stewart</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/joe_benardello/">Joe Benardello</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/john_bartleby/">John Bartleby</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/lincoln_mitchell/">Lincoln Mitchell</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/melody_blass_fisher/">Melody Blass Fisher</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/michael_webb/">Michael Webb</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/r_a_cabral/">R. A. Cabral</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/rick_soisson/">Rick Soisson</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/steve_vivona/">Steve Vivona</option>
                             
                             <option value="https://thebaseballchronicle.com/authors/walter_biggins/">Walter Biggins</option>
                             
                             </select></li>
			</ul>
                        <ul>
		             <li><select onchange="nav(this)">
                             <option>By month...</option>
                             
                             <option value="https://thebaseballchronicle.com/2010/03/">March 2010</option>
                             
                             <option value="https://thebaseballchronicle.com/2010/02/">February 2010</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/12/">December 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/09/">September 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/08/">August 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/07/">July 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/06/">June 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/05/">May 2009</option>
                             
                             <option value="https://thebaseballchronicle.com/2009/04/">April 2009</option>
                             
                             </select></li>
			</ul>
                        <p><a href="/archive">Or browse the whole thing, on a single page.</a></p>
		</div>
		<div class="aboutbox">
			<h3>About</h3>
			<p><span class="chron">The Baseball Chronicle</span> is an online magazine that celebrates the narrative. We publish personal stories, essays, journalism and more&mdash;great stories, of all varieties, about our favorite game.</p>
                        <p><a href="/submissions">Tell your story today.</a></p>
		</div>
	</div>
        <div class="spacer"></div>
	<div id="footer">
		<ul>
			<li><a href="/about">About</a></li>
			<li><a href="/submissions">Submissions</a></li>
			<li><a href="/archive">Archive</a></li>
			<li><a href="/notes">Editor's Notes</a></li>
			<li><a href="https://feeds2.feedburner.com/TheBaseballChronicle">RSS Feed</a></li>
		</ul>
		<p>All content is copyrighted by The Baseball Chronicle or its contributors.</p>
	</div>
</body>
</html>

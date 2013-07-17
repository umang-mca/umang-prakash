<!DOCTYPE html>
<html>

	<head>
		<title>day2</title>
		<link href="css/style.css" rel="stylesheet"/>
	</head>
	<body>
		<div  id="container"></div>
		<div id="header">
			<h1>day2php page</h1>
		</div>
		<div id="nav-bar">
			<a href="home.php">Home</a>
			<a href="day1.php">Day1</a>
			<a href="day2.php">Day2</a>
		</div>
		<div id="content">

			<h1>Basics</h1>
			<br />

			<h2>What is "WebSite" and "WebApplication"?</h2>
			<p class="pg">
				<b>WebSite : </b> A "Website" consists static pages, resources (images, video etc),
				css, JavaScript files and content ofwebsite cannot be changed automatically.
				<br />
				The developer who is the author can change the content by editing pages/resources.
				<br />

				<b>WebApplication :</b>   On other hand, a webapp is a "WebSite" in addition,
				we've programs which produce the dynamic content of html/css/javascript.
				<br />
			</p>
			<h2>What is CSS?</h2>
			<br />
			<p class="pg">
				The Cascade Style Sheet, is a way to specify the style attributes to the "html" tags.
				<br />

				These "style" attributes includes : font, color, image, background, opacity, padding, margin, display, visibility, animation and many more.
				<br />

				<h2> CSS attributes can be applied by :</h2>
			<p class="pg">

				<br />
				<b>1. inline method --</b>   set style to each html tag
				seperately.
				<br />
				<bExample>
					</b>
					<br />
					<input type="text"
					style="background:red;color:white"/>

					<b> 2. Creating & applying CSS classes via classattribute of html tag.</b>

					<br />
					<b><u>Example</u></b>
					<br />
					.box
					<br />
					{
					<br />
					border:1px solid black;
					<br />
					color:red;
					<br />
					height:100px;
					<br />
					width:100px;
					<br />
					}
					<br />

					<b> and to apply "box" class,</b>
					<br />
					<p class="box">
						Hello
					</p>
					<input type="submit" class="box"/>

					<h2>What is JavaScript?</h2>
					<br />
					<p class="pg">
						JavaScript is pure object-oriented client-side programming language and it is installed & available with any version of Web-browser.
						<br />

						The JavaScript programming language is world's most misunderstood programming language because of its contrubtion in developing webapps/websites.
						<br />
						80% of your webapp code is managed/handled by the   JavaScript language.
						<br />
						<b> Following are cases when we'll use JavaScript:</b>
						<br />

						1. To create tags progrmatically
						<br />
						2. To remove tag or update its content
						<br />
						3. To validate the user-input
						<br />
						4. To request webpages, webservices backgroundly          (threaded way).
						<br />
						and many more ...
						<br />

						<b> What about Web-browser?</b>

						The "most" complex software/tool in our operating system is web-browser.

						The Web-browser is composed of number of "Tools", "APIs - Application Programming Interface" and runtime (engines).

						<h2>These tools/APIs/engines are:</h2>
						<br />
					<p class="pg">
						<h3 class="hbody">1. Graphics Kit - (e.g webkit)</h3>
					<p class="pg">
						It is responsible to
						draw anything on your brower's screen.
						<br />

						<h3 class="hbody"> 2. Html DOM engine</h3>
					<p class="pg">
					<p class="pg">Document Object Model

					When we launch a web-page to view the content, the         DOM system create object of each and every HTML tag
					and place them into "tree" called - DOM Hierarchy.<br />

					<b<u>Example</u></b>

					<br />Tag DOM object<br />

					<p>Hello</p>  <p class="pg">  Two objects will be created:
					One that represent HTMLParagraph
					and second HTMLText which                          represents - Hello.

					And each Html object has                          enoromous (plenty) amount of
					properties & methods (functions).

					<h3 class="hbody">3. JavaScript engine -</h3><br />   <p class="pg">
					JavaScript language and JavaScript runtime environment is a part of JavaScript
					engine.<br />

					Different web-browsers (IE, Mozilla, Chrome, Safari etc) have different implementation of JavaScript runtime.
					<br />
					<b> For example</b> with IE, the "Chakra" JavaScript engineavailable.

					Where as "Chrome" and Mozilla have opensource implementation of "JavaScript" engine(version 1.8).

					In webapp/site, we "must" have to test the JavaScript code with different version of web-browsers due to their differences in versions and implementations.

					To overcome this limitation, 90% developers uses
					jQuery ----- Browser Compatible JavaScript Library.

					The JavaScript engine also create or manage DOM.         ie. we can access Html DOM via JavaScript and
					Web-browser easily interect with JavaScript             DOM.

					<h3 class="hbody">4. Cascade Style Sheet modules</h3> <br />
					<p class="pg">
						There are number of CSS modules (small & independent implementation of CSS standard) including -- media query, font,module, animation module and so on.

						<h3> 5. Plug-ins </h3>
						<br />
					<p class="pg">
						are specialized program which are developed via Web-browser SDK (we've to download from google (chrome), or mozilla or microsoft) and executed by
						web-browsers.
						<br />

						Plug-ins are also known as Add-ons and these programs are managed by web-browser itself.
						<br />

						YouTube downloaded in Mozilla is an <u>example of plug-in.</u>
						<br />

						<h2>Web Application Framework</h2>
						<br />

						<h3 class="hbody">What is Framework?</h3>
						<br />

					<p class="pg">
						The "Framework" is software tool for the developers
						to perform various tasks within the "defined" domain or
						"outline".
						<br />

						<b> <u> For example</b></u>

						ASP.NET framework define an application domain/architecture and this architecture must be
						strictly followed by the developer community.
						<br />

						PHP framework is another example which define an outline for developers  and developers perform tasks as per framework's outline/domain.
						<br />

						In other words, the framework teaches us - How to use the system? What to do in order to solve the issues? and What software requirement to deploy/execute the app?
						<br />

						<h2>PHP Platform or Framework</h2>
						<br />

					<p class="pg">
						PHP is reverse acronym of<b><u> "Pre-processor HyperText".</b></u> The "PHP" is first-class programming language and "runtime" environment.
						<br />
						<b>So the PHP is :
						<br />
						1. Programming language
						<br />
						2. Runtime environment to execute
						PHP programs.
						<br />
						PHP "language" specifically used to write code for   web-applications and it is commonly referred as   "server-side" scripting language.
						<br />
						<b> What is the difference betweem "programming language" and   "scripting programming language"?</b>
						<br />
						-scripting language programs have strict "program   structure" and pattern where as "scripting" language
						don't have formal program structure.
					</p>
		</div>
		<div id="footer">
			<p>
				&copy; SiteName - 2013
			</p>

			<p>
				<a href="home.php">Home</a>
				<a href="#">About us</a>
				<a href="#">Contact us</a>
				<a href="#">Policy</a>
				<a href="#">FAQ</a>

			</p>
		</div>
	</body>
</html>


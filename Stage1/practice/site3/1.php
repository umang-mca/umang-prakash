<!DOCTYPE html>
<html>
	<head>
		<title>Basic Tags</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div id="con">
			<div id="header">
				<h1>php thearical details</h1>
			</div>
			<div id="menu">
			<a href="1.php">Basic Tags</a>
			<a href="2.php">Css Detail</a>
			<a href="3.php">Basic</a>
		</div>
		<div id="details1">
				
	<p class="text">
 	Styling the Html tags---->
To define color, font, width ,height, padding, margin and other so many design styles of HTML tags, we must have to use Cascade StyleSheet classes.


Stylesheet is a text document that contains "classes" called Stylesheet "Class". 

Basically the stylesheet is collection of instructions to the web-browser -- How to rendered that HTML Tags? -- What background colour, what margin and so on is to be used while displaying HTML tags & data.


Steps to create .css file and link it to web-document (.html,.php or any other page)


1. Create a folder under the root named "css" (you can                               choose any name you wish).

pageName.php
and other pages
         

2. create a "style.css" (you can choose your name) under
   the "css" folder. 

3. Add  tag in your web-pages (.php/.html) under the
    tag.


 tag--->
The  tag can appear any where within the document but it will be good practice to add it to <head> tag.

The "rel" attribute called "relative to"
   
      rel="stylesheet" ( means relative to stylesheet)

The "href" attribute describe the location of ".css" file and never use absolute file location.
   
   This is improper:
         href="c:\abc\style.css"
 
</p>
<p class="text1">
CSS file content---->
.css file contains three major types of classes:

1. Default CSS class

   Default CSS class name is the name of HTML tag and all
   css-attributes are automatically assigned to that    particualr HTML Tag.

   

    In this case all  tags are render "red" background.


2. Custom CSS class

   Custom or user-defined CSS class name begins with .    (dot) followed by user-defined unique name.


    Custom CSS classes are apply via "class" attribute of
    any html tag.Apply Multiple classes The value of class attribute can be name of one or more css custom classes.
</p>
      
   
     
        </div>
         <div id="footer">
				<h1>php</h1>
				<p class="ftr">
					Welcome the to learn basic php theari details in
					the php theari details and so many many link.
				</p>
			</div>
     </div>
	</body>
</html>
# Project title
Conda Crowdinvesting test website.

## Motivation
Purpose of this website test version is learning web development basics. To be more precise, this is a copy of currently existing website that you can check out by clicking at this link [conda dev](https://dev.conda.online/)


## Installation
I will provide you step by step explanations about howt to get deveolpment environment running on your machine. <br>

### Step 1: Open project with CLI(any kind of terminal window), then type next command:
```npm install``` <br>

This command will install all of dependencies that are stored in packcage-lock.json file, and that will be cruical to run project correctly, editing and rendering website content. If you want to see list of those dependencies, you can just open package-lock.json file with your text editor, and you will see all of modules under the "dependencies" and under "dev-dependencies". In order to run this command you must have installed npm package manager, if you don't have it, click here and go get it [npm](https://www.npmjs.com/get-npm)
***


### Step 2: After installing all modules that we are gonna need, go back at your command line and type next command:
```gulp serve``` <br>

This command will get in action our gulpfile.js file. This file was written in javascript programming language and his purpose is to watch and compile scss files into css files. If you want to make some changes in gulpfile.js, please do this only if you understand principles of gulp and how it works, otherwise it can be destructive and cause problems with compiling.
***

### Step 3: <br>
Please, make sure you are running this project on local or remote server, in order to render website pages that were written in PHP. In order to do this you will probably need web server software, in our case we used Laragon [click here to check](https://laragon.org/). One of alternatives is XAMMP.

## Contributors
Milos Pavlovic - [Milos's gitHub profile](https://github.com/milospav7)
***
Nebojsa Nikolic - [Nebojsa's gitHub profile](https://github.com/QaWaR)

## Additional details about website and development tools
This is a test web page which puropse is, as we mentioned it before, learning HTML,CSS and a bit of JS. Pages are hardcoded in HTML5, and a bit modified with PHP in order to make it more simple. We were using CSS framework Bootstrap version 4 for styling our HTML, and SASS for additional content styling.
Because most of website is created with Bootstrap, we suggest you, if you are not familiar with, to get it know better and understand at least principles in order to figure out how project was made. For more info about Bootstrap 4 check this out [Bootstrap documentation for begginers](https://getbootstrap.com/docs/3.3/getting-started/)

All of the modules were installed with npm package manager. For styline we were using sass, and with gulp-sass module we manage compiling scss files into css readable files. In order to style pages you must write scss files. In project folder there is folder named scss, and here you can find properly splited stylesheets that we were using for specific parts of website pages. At the beggining of yor editing, we recommend that you write sass in file custom.scss, and whenever you decide that you want to apply code written in this file, you simply cut code and paste into appropirate scss file.

If you want to check out our site on server, click at the link below and go see it. We put our project on completely free web hosting and domain :)
[http://conda-test.ml/](http://conda-test.ml/)
<div class="hbox hbox-auto-xs hbox-auto-sm">
	<!-- .aside -->
	<div class="col w w-auto-xs bg-light inherit dk b-r">
		<div class="wrapper-md b-b">
			<a class="btn btn-link pull-right m-t-n-xs m-r-n-sm visible-sm visible-xs" ui-toggle-class="show" data-target="#nav-docs">
				<i class="fa fa-bars"></i>
			</a>
			<span class="h4">Documents</span>
		</div>
		<div class="hidden-sm hidden-xs" id="nav-docs">
			<ul class="nav">
				<li class="padder b-b l-h-2x bg text-info"><em>Build</em></li>
				<li><a ui-scroll="node-req">Requirements</a></li>
				<li><a ui-scroll="bower">Bower</a></li>
				<li><a ui-scroll="grunt">Grunt</a></li>
				<li><a ui-scroll="dev-server">Local Server</a></li>

				<li class="padder b-b l-h-2x bg text-success"><em>CSS</em></li>
				<li><a ui-scroll="bootstrap">Bootstrap</a></li>
				<li><a ui-scroll="icons">Icons</a></li>
				<li><a ui-scroll="animate">Animate</a></li>
				<li><a ui-scroll="colors">Colors</a></li>
				<li><a ui-scroll="layout">Layout</a></li>
				<li><a ui-scroll="utilities">Utilities</a></li>

				<li ui-scroll="core" class="padder b-b b-t l-h-2x bg text-danger"><em>Core</em></li>
				<li><a ui-scroll="ui-router">ui-router</a></li>
				<li><a ui-scroll="ui-load">ui-load</a></li>
				<li><a ui-scroll="ui-jq">ui-jq</a></li>
				<li><a ui-scroll="ui-module">ui-module</a></li>
				<li><a ui-scroll="ui-validate">ui-validate</a></li>

				<li ui-scroll="directives" class="padder b-b b-t l-h-2x bg text-primary"><em>Directives</em></li>
				<li><a ui-scroll="ui-toggle-class">ui-toggle-class</a></li>
				<li><a ui-scroll="ui-shift">ui-shift</a></li>
				<li><a ui-scroll="ui-scroll">ui-scroll</a></li>
				<li><a ui-scroll="ui-fullscreen">ui-fullscreen</a></li>

				<li ui-scroll="plugins" class="padder b-b b-t l-h-2x bg text-info"><em>Plugins</em></li>
				<li><a ui-scroll="plugins">Plugins docs</a></li>
			</ul>
		</div>
	</div>
	<!-- /.aside -->
	<div class="col">
		<div class="clearfix padder-md">
			<h3 class="text-info m-t-xl font-thin m-b-none">Build </h3>
			<div>Build your project with grunt and manage dependencies with bower.</div>

			<div id="node-req" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Requirements</h4>
			<p>
				In order to utilize <a href="http://gruntjs.com" class="text-info font-bold">Grunt</a> you will need to have installed <a href="http://nodejs.org" class="text-info font-bold">Node.js</a> on your computer. Also
				insure that you have <a href="https://www.npmjs.org/" class="text-info font-bold">NPM</a> installed. <br />
				You can check if these are installed properly by opening up a Terminal (Linux or Mac) or Command Prompt (Windows) <br />
				and entering the command: <code>node --version</code> and <code>npm --version</code>
				These commands should output something similar to "v0.10.31" and "1.4.23" respectively.
			</p>
			<p>
				Once you have installed these programs, you'll need to get grunt and bower. You can achieve this by running the following command:
				<code>npm install -g bower grunt-cli</code> <br />
				Now you should be able to exectue the commands "grunt" and "bower".
			</p>
			<p class="well b bg-light lt wrapper-sm m-t text-danger font-bold">
				Please note that any commands we tell you to run must be ran from the project's root folder.
			</p>

			<div id="bower" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Bower Dependency Management</h4>
			<p>
				To ensure you have all updated the Javascript libraries managed by bower, run the command <code>bower install</code> in a terminal or command prompt
				while you are in the current working directory of the project.
			</p>

			<div id="grunt" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Grunt Build Tool</h4>
			<p>
				This project supports build steps with Grunt. The supported Grunt tasks that this project ships with is:
			</p>
			<ul>
				<li>Less Compilation</li>
				<li>Bower Depenecy Inclusion</li>
				<li>Release Tagging (requires project to be a <a href="http://git-scm.com/" class="text-info font-bold">GIT repository</a>)</li>
			</ul>
			<p>
				To build your project, just run the command <code>grunt build:dev</code>. This will compile your less files and
				copy over your bower dependencies.
			</p>
			<p>
				Release tagging allows you to bump your current project's version and tag it with git. It also creates a changelog based on your
				prevoius commit history. Checkout <a href="https://github.com/ericmatthys/grunt-changelog" class="text-info font-bold">the grunt-changelog module</a> for more
				details and how to customize.
			</p>

			<div id="dev-server" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Local Server Development</h4>
			<p>
				We've made it easy to develop and test on your local machine. Once you've installed the bower dependencies and built your project,
				you can start a local server by running the command <code>npm start</code>. This will start a local server and open up your browser.
			</p>

			<div id="css" class="wrapper"></div>
			<div class="line b-b"></div>
			<h3 class="text-success m-t-xl font-thin m-b-none">CSS </h3>
			<div>Extensible classes</div>

			<div id="bootstrap" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Bootstrap CSS</h4>
			<p>
				For the bootstrap css and components, please check the <a href="http://getbootstrap.com" class="text-info font-bold">Bootstrap 3</a>
			</p>
			<p><strong>Angular UI Bootstrap</strong>, This project does not use bootstrap.js, but use Angular UI Bootstrap written in pure AngularJS, check <a ui-sref="app.ui.bootstrap" class="text-info font-bold">UI Boostrap</a> and <a href="http://angular-ui.github.io/bootstrap" class="text-info font-bold">Official Documents</a></p>


			<div id="less" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">LESS</h4>
			<p>This file's css is generated by LESS files. There are many Variables, Mixins you can use.</p>
			<p><strong>Compile</strong>, you can use the less.php to output the css. </p>


			<div id="icons" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4 class="m-t-xl">Icons</h4>
			<ul>
				<li>FontAwesome icons <label class="label bg-info">4.1</label>  <p>Check <strong><a href="http://fortawesome.github.io/Font-Awesome/">FontAwesome</a></strong> for more details to see how to use and examples</p></li>
				<li>Glyphicons <p>Bootstrap default icons</p></li>
				<li>Simple Line Icons</li>
			</ul>


			<div id="animate" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4  class="m-t-xl">Animate</h4>
			<p><a href="http://daneden.me/animate/"><strong>animate.css</strong></a> is a bunch of cool, fun, and cross-browser animations for you to use in your projects. Great for emphasis, home pages, sliders, and general just-add-water-awesomeness. </p>
			<p><strong>Page view transition</strong>, This project also used Animate css for <strong>ui-view animation</strong>, you can use <code>.fade-in, .fade-in-left, .fade-in-right, .fade-in-up, .fade-in-down, .fade-in-right-big, .fade-in-left-big, .fade-in-up-big, .fade-in-down-big</code>, if you want to use the big animation, you can use a <code>.smooth</code> class for smoothing animation.</p>


			<div id="colors" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4  class="m-t-xl">Colors</h4>

			<p><strong>8 default color palettes</strong>, build colorful widgets. you can open the less/app.variables.less to config your own colors(<code>@brand-primary, @brand-success, @brand-warning, @brand-danger, @brand-info, @brand-black, @brand-dark, @brand-light</code>).
			</p>
			<p><strong>Use less file to build your colors</strong>, You can use the mixin wariant. use <code>.color-variant</code> and <code>.font-variant</code> to build the color scheme, check more details in the css/less/app.colors.less.</p>

			<div class="row">
				<div class="col-sm-6">
					<p>.bg-light</p>
					<div class="m-b">
            <span class="bg-light hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-dark</p>
					<div class="m-b">
            <span class="bg-dark hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-black</p>
					<div class="m-b">
            <span class="bg-black hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-primary</p>
					<div class="m-b">
            <span class="bg-primary hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
				</div>
				<div class="col-sm-6">
					<p>.bg-info</p>
					<div class="m-b">
            <span class="bg-info hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-success</p>
					<div class="m-b">
            <span class="bg-success hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-warning</p>
					<div class="m-b">
            <span class="bg-warning hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
					<p>.bg-danger</p>
					<div class="m-b">
            <span class="bg-danger hbox">
              <span class="col padder-v text-center dker">.dker</span><span class="col padder-v text-center dk">.dk</span><span class="col padder-v text-center bg">.bg</span><span class="col padder-v text-center lt">.lt</span><span class="col padder-v text-center lter">.lter</span>
            </span>
					</div>
				</div>
			</div>


			<div id="layout" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4  class="m-t-xl">Layout</h4>
			<p>
				<strong>Fix header</strong>, use <code>.app-header-fixed</code> class on ".app" to fixed header.position
			</p>
			<p>
				<strong>Fix aside</strong>, use <code>.app-aside-fixed</code> class on ".app" to fixed aside position.
			</p>
			<p>
				<strong>Fold aside</strong>, use <code>.app-aside-folded</code> class on ".app" to fold aside.
			</p>
			<p><strong>Hbox</strong>, use <code>.hbox</code> and <code>.col</code> to build column layout. and you can use the <code>.w-lg, .w-md, .w, .w-sm, .w-xs</code> to fix column width. and use <code>.hbox-auto-sm, .hbox-auto-xs</code> to disable hbox on small screen.</p>

			<div id="utilities" class="wrapper"></div>
			<div class="line b-b"></div>
			<h4  class="m-t-xl">CSS Utilities</h3>
				<table class="table table-border bg-white-only b-a">
					<tbody>
					<tr class="bg-light lt">
						<td colspan="2">Margin</td>
					</tr>
					<tr>
						<td>.m</td>
						<td>margin: 15px</td>
					</tr>
					<tr>
						<td>.m-xs</td>
						<td>margin: 5px</td>
					</tr>
					<tr>
						<td>.m-sm</td>
						<td>margin: 10px</td>
					</tr>
					<tr>
						<td>.m-md</td>
						<td>margin: 20px</td>
					</tr>
					<tr>
						<td>.m-lg</td>
						<td>margin: 30px</td>
					</tr>
					<tr>
						<td>.m-n</td>
						<td>margin: 0px</td>
					</tr>
					<tr>
						<td>.m-l</td>
						<td>margin-left: 15px</td>
					</tr>
					<tr>
						<td>.m-l-xs</td>
						<td>margin-left: 5px</td>
					</tr>
					<tr>
						<td>.m-l-sm</td>
						<td>margin-left: 10px</td>
					</tr>
					<tr>
						<td>.m-l-md</td>
						<td>margin-left: 20px</td>
					</tr>
					<tr>
						<td>.m-l-lg</td>
						<td>margin-left: 30px</td>
					</tr>
					<tr>
						<td>.m-l-xl</td>
						<td>margin-left: 40px</td>
					</tr>
					<tr>
						<td>.m-l-xxl</td>
						<td>margin-left: 50px</td>
					</tr>
					<tr>
						<td>.m-l-none</td>
						<td>margin-left: 0px</td>
					</tr>
					<tr>
						<td>.m-l-n</td>
						<td>margin-left: -15px</td>
					</tr>
					<tr>
						<td>.m-l-n-xxs</td>
						<td>margin-left: -1px</td>
					</tr>
					<tr>
						<td>.m-l-n-xs</td>
						<td>margin-left: -5px</td>
					</tr>
					<tr>
						<td>.m-l-n-sm</td>
						<td>margin-left: -10px</td>
					</tr>
					<tr>
						<td>.m-l-n-md</td>
						<td>margin-left: -20px</td>
					</tr>
					<tr>
						<td>.m-l-n-lg</td>
						<td>margin-left: -30px</td>
					</tr>
					<tr>
						<td>.m-l-n-xl</td>
						<td>margin-left: -40px</td>
					</tr>
					<tr>
						<td>.m-l-n-xxl</td>
						<td>margin-left: -50px</td>
					</tr>
					<tr>
						<td colspan="2">.m-r <em>(margin right)</em> , m-t <em>(margin top)</em> , m-b <em>(margin bottom)</em> have the same classes as the .m-l.</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Border</td>
					</tr>
					<tr>
						<td>.b-a</td>
						<td>border:1px solid @border-color(see app.variables.less)</td>
					</tr>
					<tr>
						<td>.b-l</td>
						<td>border left</td>
					</tr>
					<tr>
						<td>.b-t</td>
						<td>border top</td>
					</tr>
					<tr>
						<td>.b-r</td>
						<td>border right</td>
					</tr>
					<tr>
						<td>.b-b</td>
						<td>border bottom</td>
					</tr>
					<tr>
						<td>.b-light, .b-dark, .b-primary, .b-success, .b-info, .b-warning, .b-danger, .b-black, .b-white</td>
						<td>border with specific color.</td>
					</tr>
					<tr>
						<td>.b-2x</td>
						<td>border width with 2px</td>
					</tr>
					<tr>
						<td>.b-3x</td>
						<td>border width with 3px</td>
					</tr>
					<tr>
						<td>.no-border</td>
						<td>border width: 0</td>
					</tr>
					<tr>
						<td>.no-border-xs</td>
						<td>border width: 0 on etremely small screen.</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Radius</td>
					</tr>
					<tr>
						<td>.r</td>
						<td>border-radius: @border-radius-base</td>
					</tr>
					<tr>
						<td>.r-l</td>
						<td>border-radius: @border-radius-base 0 0 @border-radius-base</td>
					</tr>
					<tr>
						<td>.r-r</td>
						<td>border-radius: 0 @border-radius-base @border-radius-base 0</td>
					</tr>
					<tr>
						<td>.r-t</td>
						<td>border-radius: @border-radius-base @border-radius-base 0 0</td>
					</tr>
					<tr>
						<td>.r-b</td>
						<td>border-radius: 0 0 @border-radius-base @border-radius-base</td>
					</tr>
					<tr>
						<td>.r-2x</td>
						<td>radius size: 2 x @border-radius-base</td>
					</tr>
					<tr>
						<td>.r-3x</td>
						<td>radius size: 3 x @border-radius-base</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Padder and Wrapper</td>
					</tr>
					<tr>
						<td>.padder</td>
						<td>padding-left: 15px; padding-right: 15px</td>
					</tr>
					<tr>
						<td>.padder-md</td>
						<td>padding-left: 20px; padding-right: 20px</td>
					</tr>
					<tr>
						<td>.padder-lg</td>
						<td>padding-left: 30px; padding-right: 30px</td>
					</tr>
					<tr>
						<td>.no-padder</td>
						<td>padding: 0</td>
					</tr>
					<tr>
						<td>.wrapper</td>
						<td>padding: 15px</td>
					</tr>
					<tr>
						<td>.wrapper-sm</td>
						<td>padding: 10px</td>
					</tr>
					<tr>
						<td>.wrapper-xs</td>
						<td>padding: 5px</td>
					</tr>
					<tr>
						<td>.wrapper-md</td>
						<td>padding: 20px</td>
					</tr>
					<tr>
						<td>.wrapper-lg</td>
						<td>padding: 30px</td>
					</tr>
					<tr>
						<td>.wrapper-xl</td>
						<td>padding: 50px</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Text</td>
					</tr>
					<tr>
						<td>.text-u-c</td>
						<td>text uppercase</td>
					</tr>
					<tr>
						<td>.text-l-t</td>
						<td>text line through</td>
					</tr>
					<tr>
						<td>.text-u-l</td>
						<td>text under line</td>
					</tr>
					<tr>
						<td>.text-ellipsis</td>
						<td>display text in one line with ellipsis</td>
					</tr>
					<tr>
						<td>.text-center-xs</td>
						<td>center text only on extremely small devices</td>
					</tr>
					<tr>
						<td>.text-left-xs</td>
						<td>align text left only on extremely small devices</td>
					</tr>
					<tr>
						<td>.text-right-xs</td>
						<td>align text right only on extremely small devices</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Width and Height</td>
					</tr>
					<tr>
						<td>.w-xxl</td>
						<td>width: 360px</td>
					</tr>
					<tr>
						<td>.w-xl</td>
						<td>width: 320px</td>
					</tr>
					<tr>
						<td>.w-lg</td>
						<td>width: 280px</td>
					</tr>
					<tr>
						<td>.w-md</td>
						<td>width: 240px</td>
					</tr>
					<tr>
						<td>.w</td>
						<td>width: 200px</td>
					</tr>
					<tr>
						<td>.w-sm</td>
						<td>width: 158px</td>
					</tr>
					<tr>
						<td>.w-xs</td>
						<td>width: 90px</td>
					</tr>
					<tr>
						<td>.w-xxs</td>
						<td>width: 60px</td>
					</tr>
					<tr>
						<td>.w-full</td>
						<td>width: 100%</td>
					</tr>
					<tr>
						<td>.w-auto-xs</td>
						<td>width: auto on extremely small screen.</td>
					</tr>
					<tr>
						<td>.h-full</td>
						<td>height: 100%</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Thumb</td>
					</tr>
					<tr>
						<td>.thumb-xl</td>
						<td>width: 128px</td>
					</tr>
					<tr>
						<td>.thumb-lg</td>
						<td>width: 96px</td>
					</tr>
					<tr>
						<td>.thumb-md</td>
						<td>width: 64px</td>
					</tr>
					<tr>
						<td>.thumb</td>
						<td>width: 50px</td>
					</tr>
					<tr>
						<td>.thumb-sm</td>
						<td>width: 48px</td>
					</tr>
					<tr>
						<td>.thumb-xs</td>
						<td>width: 34px</td>
					</tr>
					<tr>
						<td>.thumb-xxs</td>
						<td>width: 30px</td>
					</tr>
					<tr>
						<td>.img-full</td>
						<td>width: 100%</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Avatar</td>
					</tr>
					<tr>
						<td>.avatar</td>
						<td>circle photo</td>
					</tr>
					<tr>
						<td>status</td>
						<td>status, '.on', '.off', '.busy', '.away'</td>
					</tr>
					<tr>
						<td>status position</td>
						<td>status position, '.left', '.right', '.bottom'</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Arrow</td>
					</tr>
					<tr>
						<td>.arrow</td>
						<td>base class</td>
					</tr>
					<tr>
						<td>.left</td>
						<td>left arrow, position:middle</td>
					</tr>
					<tr>
						<td>.right</td>
						<td>right arrow, position:middle</td>
					</tr>
					<tr>
						<td>.top</td>
						<td>top arrow, position:center</td>
					</tr>
					<tr>
						<td>.bottom</td>
						<td>bottom arrow, position:center</td>
					</tr>
					<tr>
						<td>.pull-left</td>
						<td>.top and .bottom arrow with left position</td>
					</tr>
					<tr>
						<td>.pull-right</td>
						<td>.top and .bottom arrow with right position</td>
					</tr>
					<tr>
						<td>.pull-up</td>
						<td>.left and .right arrow with up position</td>
					</tr>
					<tr>
						<td>.pull-down</td>
						<td>.left and .right arrow with down position</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Item</td>
					</tr>
					<tr>
						<td>.item-overlay</td>
						<td>overlay the element on an item, default display:none, with '.active' class will show</td>
					</tr>
					<tr>
						<td>.top</td>
						<td>top element on a item element</td>
					</tr>
					<tr>
						<td>.bottom</td>
						<td>bottom element on a item element</td>
					</tr>
					<tr>
						<td>.center</td>
						<td>center element on a item element</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Button</td>
					</tr>
					<tr>
						<td class="w">.btn-rounded</td>
						<td>rounded button</td>
					</tr>
					<tr>
						<td>.btn-icon</td>
						<td>icon only button</td>
					</tr>
					<tr>
						<td>.btn-addon</td>
						<td>icon addon, must have a i tag, and can use .pull-left and .pull-right</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Timeline</td>
					</tr>
					<tr>
						<td class="w">.timeline</td>
						<td>timeline wrapper class</td>
					</tr>
					<tr>
						<td class="w">.timeline-center</td>
						<td>timeline with center position</td>
					</tr>
					<tr>
						<td class="w">.tl-item</td>
						<td>timeline item</td>
					</tr>
					<tr>
						<td class="w">.tl-wrap</td>
						<td>timeline item wrap</td>
					</tr>
					<tr>
						<td class="w">.tl-date</td>
						<td>timeline date</td>
					</tr>
					<tr>
						<td class="w">.tl-content</td>
						<td>timeline content</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Streamline</td>
					</tr>
					<tr>
						<td class="w">.streamline</td>
						<td>streamline class</td>
					</tr>
					<tr>
						<td class="w">.sl-item</td>
						<td>streamline item, you can use .b-l and .b-info, b-danger... class to make it colorful.</td>
					</tr>
					<tr class="bg-light lt">
						<td colspan="2">Hbox</td>
					</tr>
					<tr>
						<td>.hbox</td>
						<td>display: table</td>
					</tr>
					<tr>
						<td>.col</td>
						<td>display: table-cell</td>
					</tr>
					<tr>
						<td>.v-middle</td>
						<td>vertical align: middle</td>
					</tr>
					<tr>
						<td>.v-top</td>
						<td>vertical align: top</td>
					</tr>
					<tr>
						<td>.v-bottom</td>
						<td>vertical align: bottom</td>
					</tr>
					</tbody>
				</table>

				<div id="core" class="wrapper"></div>
				<div class="line b-b"></div>
				<h3 class="text-danger font-thin m-t-xl m-b-none">Core</h3>
				<div>You must know AngularJS, "ui-router" and "ui-jq" to get started your project.</div>

				<div id="ui-router" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-router</h4>
				<p>
					ui-router for <strong>Nested Routing</strong> and <strong>Nested View</strong>, check the <a href="http://angular-ui.github.io/ui-router/" class="text-info">official documents</a>
				</p>

				<div id="ui-load" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-load</h4>
				<p>ui-load for <strong>lazy loading</strong> the js and css files. </p>
				<p class="well text-black bg-light lter">
					angular.module('myModule', ['ui.load']);<br><br>
					uiLoad.load(
					['path/style.css', 'path/script.js']
					).then(function() {<br>
					<span class="text-muted m-l">// loaded succesfully.</span><br>
					}).catch(function() {<br>
					<span class="text-muted m-l">// There was some error loading the files.</span><br>
					});<br>
				</p>
				<p>ui-load also used in the ui-router <code>resolve:{}</code> for lazy loading Angular Directives, Controllers and Services.</p>

				<div id="ui-jq" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-jq</h4>
				<p>
					<code>ui-jq</code> Call the jQuery function or plugin specified on the element. check the <a href="http://angular-ui.github.io/ui-utils/#/jq" class="text-info">official documents</a>
				</p>

				<div id="ui-module" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-module</h4>
				<p>
					<code>ui-module</code> Load other dependences for child directive.
					you need config the dependences in "js/app.js" constant "MODULE_CONFIG".
					<br>example: check the "ui-select2" directive on "form/element"
				</p>

				<div id="ui-validate" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-validate</h4>
				<p>
					The <code>ui-validate</code> directive makes it very easy to create custom validator expressions. check the <a href="http://angular-ui.github.io/ui-utils/#/validate" class="text-info">official documents</a>
				</p>

				<div id="directives" class="wrapper"></div>
				<div class="line b-b"></div>
				<h3 class="text-primary font-thin m-t-xl m-b-none">Directives</h3>

				<div id="ui-toggle-class" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-toggle-class</h4>
				<p>
					Toggle class when click on the element, attr <code>target</code> for target element.
					<code>&lt;div ui-toggle-class="show" target="#nav">&lt;/div></code>
				</p>

				<div id="ui-shift" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-shift</h4>
				<p>
					Shift element on xs screen, attr <code>target</code> for target element.
					<code>&lt;div ui-shift="append" target="#nav">&lt;/div></code>
				</p>

				<div id="ui-scroll" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-scroll</h4>
				<p>
					Scroll to element when click, attr value for target element.
					<code>&lt;a ui-scroll="target">&lt;/a></code>
				</p>

				<div id="ui-fullscreen" class="wrapper"></div>
				<div class="line b-b"></div>
				<h4 class="m-t-xl">ui-fullscreen</h4>
				<p>
					Request fullscreen mode for element.
					<code>&lt;a ui-fullscreen>&lt;/a></code> or <code>&lt;a ui-fullscreen target="#target">&lt;/a></code>
				</p>

				<div id="plugins" class="wrapper"></div>
				<div class="line b-b"></div>
				<h3 class="text-info font-thin m-t-xl m-b-lg">Plugins</h3>
				<p>All jQuery plugins are depended on <code>ui-jq</code>, do not need create the Angular Directive for each of the plugin. you can config in the js/app.js Angular Constant <code>JQ_CONFIG</code>, <code>functionName => pluginPath</code>, the js and css files are lazy loaded.</p>
				<div class="row m-b-xl">
					<div class="col-md-6">
						<h4 class="m-t-md">FullCalendar</h4>
						<p>Check the online <a href="http://arshaw.com/fullcalendar/"><strong>document</strong></a> and <a href="http://angular-ui.github.io/ui-calendar/"><strong>Angular Fullcalendar Wrapper</strong></a></p>

						<h4 class="m-t-md">Datatables</h4>
						<p>Check the online <a href="http://datatables.net/"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Chosen</h4>
						<p>Check the online <a href="http://github.com/harvesthq/chosen"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">File-input</h4>
						<p>Check the online <a href="http://dev.tudosobreweb.com.br/bootstrap-filestyle/"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Slider</h4>
						<p>Check the online <a href="http://www.eyecon.ro/bootstrap-slider"><strong>document</strong></a>.</p>

						<h4 class="m-t-md">TouchSpin</h4>
						<p>Check the online <a href="http://www.virtuosoft.eu/code/bootstrap-touchspin/"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">WYSISYG</h4>
						<p>Check the online <a href="http://github.com/mindmup/bootstrap-wysiwyg"><strong>document</strong></a>. </p>
					</div>
					<div class="col-md-6">

						<h4 class="m-t-md">Flotchart</h4>
						<p>Check the online <a href="http://www.flotcharts.org/"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Sparklines</h4>
						<p>Check the online <a href="http://omnipotent.net/jquery.sparkline"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Easy pie chart</h4>
						<p>Check the online <a href="http://rendro.github.io/easy-pie-chart"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Sortable</h4>
						<p>Check the online <a href="http://farhadi.ir/projects/html5sortable"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">Nestable</h4>
						<p>Check the online <a href="http://dbushell.github.io/Nestable/"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">SlimScroll</h4>
						<p>Check the online <a href="http://rocha.la"><strong>document</strong></a>. </p>

						<h4 class="m-t-md">JvectorMap</h4>
						<p>Check the online <a href="http://jvectormap.com/"><strong>document</strong></a>. </p>
					</div>
				</div>

		</div>
	</div>
</div>
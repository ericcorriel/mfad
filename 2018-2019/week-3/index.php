<?php
include($_SERVER['DOCUMENT_ROOT'] .  "/config.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/includes/formattop.php"); ?>

	<div class="page">
		<div class="pagename"><a href='/'>DSG-6051</a><br /><span class='subpagename'>Week 3</span></div>
		<div class="pagecontent">
			
			<h3 class="unstack">Assignment Submissions</h3>
			<ul>
				<li>None!  ¯\_(ツ)_/¯</li>
			</ul>

			<h3 class="unstack">Let's talk about the Internet II</h3>
			<ul>
				<li><a href='https://docs.google.com/presentation/d/192VbzLbHSPRAPS4WtiITQqXhbz8Nii1HQFccgG8qVZM/edit?usp=sharing' target='_blank' >Here we go again</a>!</li>
			</ul>

			<h3 class="unstack">Web technology stack</h3>
			<ul>
				<li>UI Designer ($)
					<ul>
						<li>Interface designer, works in Sketch, Photoshop, Illustrator, etc</li>
					</ul>
				</li>
				<li>UX Designer ($$)<ul>
					<li>Thinks about user journeys, how to guide users through funnels, creates documents like <a href='https://www.google.com/search?q=ux+user+flow&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjm7f-KzqfeAhUPzlkKHdDGCI0Q_AUIDigB&biw=1869&bih=1216#imgrc=GSDtpnkZ_LxwIM:' target='_blank' >this</a> or <a href='https://www.google.com/search?q=ux+user+flow&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjm7f-KzqfeAhUPzlkKHdDGCI0Q_AUIDigB&biw=1869&bih=1216#imgrc=Vd6pnwGgArT-VM:' target='_blank' >this</a></li>
					<li>Will often create wireframes to reinforce ideas</li>
					<li>Does not get into the nitty gritty of design work</li>
				</ul>
				<li>Frontend developer ($$$)<ul>
						<li>Layout: HTML</li>
						<li>Look and feel: CSS</li>
						<li>Interactivity: Javascript</li>
						<li>Frameworks: Bootstrap (for HTML and CSS), jQuery (for Javascript)</li> 
					</ul>
				<li>Backend developer ($$$$)<ul>
					<li>Web servers: Apache/Nginx/Node</li>
					<li>Scripting languages: PHP/Python/Ruby/ASP/JavaScript (NodeJS)</li>
					<li>Databases: MySQL/MSSQL/Oracle/MongoDb</li>
					<li>Frameworks: <ul>
						<li><a href='https://nodejs.org/ target='_blank' '>Node JS</a>, <a href='https://angular.io' target='_blank' >Angular</a>, <a href='https://reactjs.org' target='_blank' >React</a> (written in JavaScript)</li>
						<li><a href='https://symfony.com/' target='_blank' >Symfony</a>, <a href='https://laravel.org' target='_blank' >, or <a href='https://drupal.org' target='_blank' >Drupal</a> (written in PHP)</li>
						<li><a href='http://rubyonrails.org/' target='_blank' >Ruby on Rails</a> (written in Ruby)</li>
						<li><a href='https://www.djangoproject.com/' target='_blank' >Django</a> (written in Python)</li>
						<li><a href='https://www.microsoft.com/net/default.aspx' target='_blank' >.Net</a> (written in ASP)</li>
					</ul>
				</li>
				<li>Information architect ($$$$)
					<ul>
						<li>Organizes and optimizes databases and data relationships for maximum efficiency</li>
						<li>Creates schematics that look like <a href='https://www.google.com/search?tbm=isch&q=database+schematic#imgrc=_ZSJuqTOwRkQ-M:' target='_blank' >this</a> or <a href='https://www.google.com/search?tbm=isch&q=database+schematic#imgrc=z7WtqB2ZPlVA0M:' target='_blank' >this</a>.</li>
					</ul>
				</li>
				<li>Full stack developer ($$$$$): works across the development stack</li>
				<li>Full stack designer/developer ($$$$$$): can do it all. Due to increasing complexity of the technology, these people are more and more rare these days...</li>
				<li>Using a car analogy, client-side functionality determines how the car looks on the outside and feels on the inside. Server-side technology is commonly referred to as what happens "under the hood" and even though it's unseen, it's what responsible for making the car go.</li> 
			</ul>

			<h3 class="unstack">Prototyping landscape</h3>
			<ul>
				<li>Easy: Keynote (yes, keynote), Sketch</li>
				<li>Medium: <a href='https://www.invisionapp.com' target='_blank' >Invision</a>, <a href='https://marvelapp.com/' target='_blank' >MarvelApp</a>, <a href='https://proto.io/' target='_blank' >Proto.io</a></li>
				<li>Hard: <a href='http://principleformac.com/' target='_blank' >Principle</a>, <a href='https://www.adobe.com/products/xd.html' target='_blank' >Adobe XD</a>(?), <a href='https://www.figma.com/' target='_blank' >Figma</a>, <a href='https://framer.com' target='_blank' >Framer</a></li>
			</ul>

			<h3 class="unstack">Invision</h3>
			<ul>
				<li><strong>Pros</strong>
					<ul>
						<li>Super easy to use</li>
						<li>Integrates well with Sketch</li>
						<li>Easy to share with collaborators</li>
					</ul>
				</li>
				<li><strong>Cons</strong>
					<ul>
						<li>Cannot do complex/custom animations</li>
						<li>Limited to "flat image" prototyping</li>
					</ul>
				</li>
			</ul>

			<h3 class="unstack">Principle</h3>
			<ul>
				<li><strong>Pros</strong>
					<ul>
						<li>Powerful, can create very custom animations relatively easily</li>
						<li>Imports well from Sketch</li>
						<li>Easy to share prototypes, especially with people on Mac</li>
						<li>Can create interactive components</li>
					</ul>
				</li>
				<li><strong>Cons</strong>
					<ul>
						<li>Medium difficulty learning curve</li>
						<li>Cannot share interactive prototypes with people Windows/Linux</li>
						<li>Re-importing updated designs from Sketch is limited</li>
						<li>No web-based display option</li>
					</ul>
				</li>
				<li><strong>Tips</strong>
					<ul>
						<li>Think of Principle as a state machine, where artboards are states. Most of the animation happens in animating from one artboard to another</li>
						<li>Only animates layers that have the <em>same exact name</em>, so make sure that layer names stay the same from artboard to artboard</li>
						<li>Best to either animate wireframes or final designs. You do not want to get stuck in a design/animation iteration cycle as re-importing from Sketch can be problematic</li>
						<li>To the extent that you can, think in terms of components. One Principle file per component. Drag those components into larger design (Principle) files</li>
						<li>Unfortunately sometimes components do not update across all instances after editing. You may need to manually copy and paste the one you edited from artboard to artboard</li>
					</ul>
				</li>
				<li><strong>Basics</strong>
					<ul>
						<li>Scrolling, paging and dragging content</li>
						<li>Components (accordion menus)</li>
						<li>Hover states in navigation</li>
						<li>Parallax scrolling</li>
						<li>Some basic tutorials <a href='http://principleformac.com/tutorial.html' target='_blank' >here</a></li>
					</ul>
				</li>
			</ul>
			
			<h3 class="unstack">Prototyping assignment</h3>
			<h4>Deliverable: Mac app or Invision url</h4>
			<ul>
				<li>Take a small(ish) component of your project and make an interactive prototype of it. This can be making your site/app scrollable with navigation, adding parallax scrolling, accordion menus, or a custom element.</li>
				<li>If you are doing this in Principle, start small. Start by trying to animate the easiest version of your idea as possible, and gradually add design elements</li>
			</ul>

			<h3 class="unstack">Submit your work</h3>
			<h4 class='alert'>Due Tuesday, 11/6 @ 11:59PM</h4>
			<p>Submit a Mac app or Invision URL to <a href='https://docs.google.com/forms/d/e/1FAIpQLSftrP8v3QcxulCOR2oKjAqY39TB5oR4BSjRO8PmA9V-yIcLIg/viewform' target='_blank'>this Google Form</a>. </p>
	
			
		</div>

	</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/' . "includes/formatbottom.php"); ?>
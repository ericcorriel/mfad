<?php
include($_SERVER['DOCUMENT_ROOT'] .  "/config.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/includes/formattop.php"); ?>

	<div class="page">
		<div class="pagename"><a href='/'>DSG-6051</a><br /><span class='subpagename'>Week 2</span></div>
		<div class="pagecontent">
			<h3 class="unstack">Questions from last week</h3>
			<ul>
				<li>GDPR, the Right to be Forgotten, and Backups...it's complicated, but <a href='https://www.theregister.co.uk/2018/05/31/backup_gdpr_analysis/' target='_blank' >here's a good article</a> that explains the issue</li>
				<li>I was wondering how often this tool is used in the industry: <a href='https://marvelapp.com/' target='_blank' >Marvel App</a></li>
			</ul>

			<h3 class="unstack">Assignment Submittals</h3>
			<ul>
				<li>Tomoka Murakami :: <a href='https://sketch.cloud/s/lAr0v' target='_blank'>Sketch cloud link</a></li>
				<li>Michael Enten :: <a href='https://sketch.cloud/s/0GGxe' target='_blank'>Sketch cloud link</a></li>
			</ul>

			<h3 class="unstack">Let's talk about the Internet II</h3>
			<ul>
				<li><a href='https://docs.google.com/presentation/d/192VbzLbHSPRAPS4WtiITQqXhbz8Nii1HQFccgG8qVZM/edit?usp=sharing' target='_blank' >Here we go again</a>!</li>
			</ul>

			<h3 class="unstack">(Non obvious) UI/UX Do's and Don'ts</h3>
			<ul>
				<li><strong>Do's</strong>
					<ul>
						<li>If you're not sure, check to make sure that UI/UX element you're thinking of using is an established <a href='https://bradfrost.github.io/this-is-responsive/patterns.html' target='_blank'>responsive design pattern</a></li>
						<li>For product websites, leading with a video or "XXX is..." is great for users and SEO. Examples: 
							<ul>
								<li><a href='https://www.alfredapp.com/'>Alfred app</a></li>
								<li><a href='https://github.com/' target='_blank' >Github.com</a></li>
								<li><a href='http://principleformac.com/' target='_blank' >Principle</a></li>
							</ul>
						<li>Make sure each of your page titles is unique and the description field is filled out.</li>
						<li>Make sure your search keywords are in your text, and the more prominently they're featured, the better. Take great care in how you word headlines. Text content at the top of the page is weighted more than text content at the bottom.</li>
						<li>Logos almost always belong in the top left corner</li>
						<li>Mobile hamburger menus are typically in the top right corner</li>
						<li>Think about animation as a way to add grace and fun to your UI. Examples:
							<ul>
								<li><a href='http://www.gsd.harvard.edu/' target='_blank' >Harvard GSD</a></li>
								<li><a href='http://2017.risdweekend.com/students/' target='_blank' >RISD Student Weekend</a></li>
								<li><a href='http://www.beyondprison.us/' target='_blank' >Beyond Prison</a></li>
							</ul>
						<li>Test your site with people wholly unfamiliar with your product/service. Here's a sample <a href='https://docs.google.com/document/d/10W085RLPfqg3cCzif-lP2NhodpdaCRvA3oU1kTZYWJo/edit?usp=sharing' target='_blank' >UI/UX usability test</a>.</li>
					</ul>
				</li>

				<li><strong>Don'ts</strong>
					<ul>
						<li>Don't always assume mobile-first is the way to go</li>
						<li>Don't show/hide/rearrange content based on whether the user is on a mobile device or desktop</li>
						<li>Don't have all buttons available if they're not immediately relevant. See Twitter's "<a href='https://twitter.com' target='_blank' >What's happening input box</a>"</li>
						<li>Don't forget about your email/newsletter strategy</li>
						<li>Don't use jargon or abbreviations. On the web, your audience is everyone.</li>
						<li>Don't ask users to sign up for something right away: <a href='https://hyperallergic.com/' target='_blank' >hyperallergic.com</a></li>
					</ul>
				</li>
			</ul>

			<h3 class="unstack">Introduction to Sketch II</h3>
			<ul>
				<li>Note this requires <a href='https://www.sketchapp.com/updates/' target='_blank' >Sketch 52</a>, which requires Mac OS X 10.13 High Sierra</li>
				<li>We're going to be looking at the following concepts in Sketch:
					<ul>
						<li>Type and layer style overrides</li>
						<li>Nested symbols</li>
						<li>Device specific artboards</li>
						<li>Libraries</li>
						<li>Working with data</li>
						<li>Plugins</li>
					</ul>
				</li>
				<li>Before we get started, let's explore typographical systems in Sketch by dowloading <a href='https://developer.apple.com/design/resources/' target='_blank' >Apple's iOS Sketch Library</a></li>
				<li>In order for these libraries to work you'll need Apple's <a href='https://developer.apple.com/fonts/' target='_blank' >SF fonts</a></li>
				<li>Let's also install some of these plugins:
					<ul>
						<li><a href='https://sketchrunner.com/' target='_blank' >Runner</a></li>
						<li><a href='https://github.com/DWilliames/paddy-sketch-plugin' target='_blank'>Paddy</a></li>
						<li><a href='https://github.com/sonburn/symbol-organizer' target='_blank' >Symbol organizer</a></li>
						<li><a href='https://github.com/lucaorio/sketch-styles-generator' target='_blank' >Styles Generator</a></li>
						<li><a href='https://rodi01.github.io/RenameIt/' target='_blank' >RenameIt</a></li>
						<li><a href='https://github.com/aparajita/sketch-style-master/' target='_blank' >Style Master</a></li>
						<li><a href='https://github.com/Iconscout/icondrop' target='_blank' >Icondrop</a></li>
						<li><a href='https://animaapp.github.io/' target='_blank' >Launchpad (auto layout)</a></li>
						<li><a href='https://github.com/romannurik/Sketch-Contrast#readme' target='_blank' >Contrast</a></li>
						<li><del><a href='https://github.com/keremciu/sketch-iconfont' target='_blank' >Icon font</a></del></li>
						<li><a href='https://sketchapp.com/extensions/plugins/' target='_blank' >And so many more...</a></li>
					</ul>
				</li>
				<li>Let's take a look at the <a href='../week-1/apple.com.sketch.zip'>Apple Sketch file</a> from last week</li>
				<li>Here's the <a href='https://drive.google.com/open?id=1GBN7uZC_zNNQsqnOULmyG5eX2gBrFDAA' target='_blank' >updated Apple Library</a></li>
			</ul>

			
			<h3 class="unstack">Sketch assignment</h3>
			<h4>Deliverable: Publicly accessible Sketch Cloud URL</h4>
			<ul>
				<li>Define type and layer styles for your website and implement those styles throughout your artboards</li>
				<li>Install <a href='https://sketchrunner.com/' target='_blank' >Runner</a> and start integrating it into your workflow</li>
				<li>Experiment with creating a library for your type and layer styles and importing it into a new Sketch document</li>
			</ul>

			<h3 class="unstack">Submit your work</h3>
			<h4 class='alert'>Due Tuesday, 10/30 @ 11:59PM</h4>
			<p>Submit a Sketch cloud URL to <a href='https://docs.google.com/forms/d/e/1FAIpQLSewZhl0tw7gifFKxlFmaJvmLHvaki8zMcxpyJwFGX52wm-wEg/viewform' target='_blank'>this Google Form</a>. </p>
	
			<h3 class="unstack">Cool Links</h3>
			<ul>
				<li><a href='https://classic.qz.com/map-of-the-internet/' target='_blank' >Quartz: A map of the internet</a></li>
				<li><a href='http://spacetypegenerator.com/' target='_blank'>http://spacetypegenerator.com/</a></li>
			</ul>
		</div>

	</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/' . "includes/formatbottom.php"); ?>
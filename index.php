<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include('fronts/meta.php'); ?>
		<title>Browse UP Theses | UP Cebu's Online Theses Archive</title>
	</head>

	<body>
		<?php include('fronts/header.php'); ?>
		
		<div id="wrap">
			<div id="jumbotron">
				<div class="row" style="text-align: center">
					<div style="font: 100px normal 'Magistral C'; text-shadow: 0 0 10px;">
						<span style="color: #008000">browse</span><span style="color: #800000">up</span><span style="color: #007095">theses</span><br/>
					</div>
					<div>
						<span style="font: 30px normal 'Magistral C'; color: #fff">UP Cebu's Online Theses Archive</span>
					</div>
				</div>
				<div class="row collapse" style="margin-top: 40px; width: 70%;">
					<div class="small-2 columns">
						<select id="jumbo-opt" class="prefix">
							<option value="0">Any Field</option>
							<option value="1">Title</option>
							<option value="2">Subject</option>
							<option value="3">Author</option>
							<option value="4">Date of Publication</option>
						</select>
					</div>
					<div class="small-8 columns">
						<input id="jumbo-query" type="text" data-provide="typeahead" autocomplete="off" placeholder="Search for keywords or scopes" autofocus data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'/>
						<div id="jumbo-query-response">
							<a id="response-0" onclick="responseClick('jumbo-query', 'science')">science</a>
							<a id="response-1" onclick="responseClick('jumbo-query', 'technology')">technology</a>
							<a id="response-2" onclick="responseClick('jumbo-query', 'biometrics')">biometrics</a>
						</div>
					</div>
					<div class="small-2 columns">
						<input type="hidden" />
						<input id="jumbo-browse" type="submit" class="postfix small button" value="browse" />
					</div>
				</div>
			</div>
			<div id="main">
				<?php include('fronts/querybox.php'); ?>

				<div class="row">
					<?php include('fronts/aside.php'); ?>

					<div class="browsed-infobits large-9 medium-9 small-9 columns">
						<div id="results-count" class="">Found 143,000,000 results</div>
						<article class="">
							<a class="title-bit" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							<div class="author-bit">By William Shakespeare</div>
							<div>Archived on January 26, 2014 12:37pm</div>
							<blockquote class="abstract-bit">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</blockquote>
						</article>
						<article class="">
							<a class="title-bit" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
							<div class="author-bit">By William Shakespeare</div>
							<div>Archived on January 26, 2014 12:37pm</div>
							<blockquote class="abstract-bit">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum...</blockquote>
						</article>
					</div>
				</div>
				<div class="row" style="margin-top: 20px">
					<ul class="pagination">
						<li class="arrow unavailable"><a href="">&laquo;</a></li>
						<li class="current"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">4</a></li>
						<li class="unavailable"><a href="">&hellip;</a></li>
						<li><a href="">12</a></li>
						<li><a href="">13</a></li>
						<li class="arrow"><a href="">&raquo;</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>	
		</div>
		
		<?php include('fronts/footer.php'); ?>

		<script type="text/javascript" src="js/vendor/jquery.js"></script>
		<script type="text/javascript" src="js/doc.js"></script>
		<script type="text/javascript" src="js/foundation.min.js"></script>
	</body>
</html>
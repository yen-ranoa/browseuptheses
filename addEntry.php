<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Browse UP Theses | UP Cebu's Online Theses Archive</title>
		<?php include('fronts/meta.php'); ?>
	</head>

	<body>
		<?php include('fronts/header.php'); ?>

		<div id="wrap">
			<div id="main" style="margin-bottom: 20px">
				<div class="row">
					<aside class="large-2 medium-2 small-2 columns">
						<button class="small button">Add Entry</button>
						<button class="small button">Delete Entry</button>
						<button class="small button">Update Entry</button>
					</aside>

					<div class="browsed-infobits large-10 medium-10 small-10 columns">
						<fieldset style="margin-top: 0">
							<legend>
								<h5>[ Enter Thesis Details ]</h5>
							</legend>
							<form>
								<div class="row">
									<div class="small-2 columns">
										<label for="title" class="right inline">Title</label>
									</div>
									<div class="small-10 columns">
							        	<input type="text" id="title" placeholder="Title of the Thesis">
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							          	<label for="abstract" class="right inline">Abstract</label>
							        </div>
							        <div class="small-10 columns">
									    <textarea id="abstract" placeholder="Abstract" style="height: 10em"></textarea>
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							        	<label for="author" class="right inline">Author</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="text" id="author" placeholder="Author of the Thesis">
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							        	<label for="date-issued" class="right inline">Date Issued</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="date" id="date-issued" placeholder="Date of Publication">
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							        	<label for="program" class="right inline">Program</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="text" id="program" placeholder="Program Course">
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							        	<label for="categories" class="right inline">Categories</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="text" id="categories" placeholder="Categories">
							        </div>
								</div>
							  	<div class="row">
									<div class="small-2 columns">
							       		<label for="date-accessioned" class="right inline">Date Accesioned</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="date" id="date-accessioned" placeholder="Date">
							        </div>
								</div>
								<div class="row">
									<div class="small-2 columns">
							        	<label for="adviser" class="right inline">Adviser</label>
							        </div>
							        <div class="small-10 columns">
							        	<input type="text" id="adviser" placeholder="Thesis Adviser">
							        </div>
								</div>
							  	<input type="submit" class="small button right" value="Add Entry">
							</form>
						</fieldset>
					</div>
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
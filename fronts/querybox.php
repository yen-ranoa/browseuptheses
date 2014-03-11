<div class="row">
	<div class="large-12 medium-12 small-12 columns">
		<form>
			<fieldset>
				<legend>[ Basic Search | <a href="#">Advanced Search</a> ]</legend>
				<div class="row collapse">
					<div class="small-2 columns">
						<select class="prefix">
							<option id="field-opt0" name="field_opt" value="0">Any Field</option>
							<option id="field-opt1" name="field_opt" value="1">Title</option>
							<option id="field-opt2" name="field_opt" value="2">Subject</option>
							<option id="field-opt3" name="field_opt" value="3">Author</option>
							<option id="field-opt4" name="field_opt" value="4">Date of Publication</option>
						</select>
					</div>
					<div class="small-8 columns">
						<input id="main-query" type="text" data-provide="typeahead" autocomplete="off" placeholder="Search for keywords or scopes"/>
						<div id="query-response">
							<a onclick="document.getElementById('main-query').value = 'science'">science</a>
							<a onclick="console.log('technology')">technology</a>
							<a onclick="document.getElementById('main-query').value = 'biometrics'">biometrics</a>
						</div>
					</div>
					<div class="small-2 columns">
						<input type="submit" class="postfix small button" value="browse" />
					</div>
					<!-- <div class="row">
						<a href="#" class="right">&laquo Advanced Search</a>
					</div> -->
				</div>
			</fieldset>
		</form>
	</div>
</div>
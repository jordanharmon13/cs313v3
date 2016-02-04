<?php require('database/database.php') ?>
<?php require 'dynamic/header.php'; ?>

<h1>Polls Application</h1>
<div><p>This is where the polls application will be located. For the moment, we will have this application below to illustrate what I will be creating, but I will be connecting it to my own database.</p></div>

<form method="post" action="http://poll.pollcode.com/44699867">
	<div class="more-outer-form-div">
	<div class="outer-form-div">
		<strong>Who will you vote for in 2016?</strong>
		</div>
			<input type="radio" name="answer" value="1" id="answer446998671" class="form-style" /><label for="answer446998671" style="float:left;width:150px;">Rand Paul</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="2" id="answer446998672" class="form-style" /><label for="answer446998672" class="form-label">Jeb Bush</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="3" id="answer446998673" class="form-style" /><label for="answer446998673" class="form-label">HIlary Clinton</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="4" id="answer446998674" class="form-style" /><label for="answer446998674" class="form-label">Donald Trump</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="5" id="answer446998675" class="form-style" /><label for="answer446998675" class="form-label">Marco Rubio</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="6" id="answer446998676" class="form-style" /><label for="answer446998676" class="form-label">Ted Cruz</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="7" id="answer446998677" class="form-style" /><label for="answer446998677" class="form-label">Ben Carson</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="8" id="answer446998678" class="form-style" /><label for="answer446998678" class="form-label">Bernie Sanders</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="9" id="answer446998679" class="form-style" /><label for="answer446998679" class="form-label">Chris Christie</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="10" id="answer4469986710" class="form-style" /><label for="answer4469986710" class="form-label">Carly Fiorina</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="11" id="answer4469986711" class="form-style" /><label for="answer4469986711" class="form-label">Jim Gilmore</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="12" id="answer4469986712" class="form-style" /><label for="answer4469986712" class="form-label">Mike Huckabee</label>
			<div class="inner-form-div"></div>
			<input type="radio" name="answer" value="13" id="answer4469986713" class="form-style" /><label for="answer4469986713" class="form-label">John Kasich</label>
			<div class="inner-form-div"></div>
			<div align="center" style="padding:3px;">
			<input type="submit" value=" Vote ">&nbsp;<input type="submit" name="view" value=" View "></div><div align="right" class="last-form-div">pollcode.com <a href="http://pollcode.com/">free polls</a>
		</div>
	</div>
</form>

<?php require 'dynamic/footer.php'; ?>
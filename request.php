<?php
include 'function.php';
printHeader("Request");
?>

    <h1>Electronics Pick Up Request Form</h1>
	<p>Fill out this form to schedule an e-waste pick up for your business. Our pick up service is free in the Vancouver/Burnaby/Richmond area. Customers outside this area should call or e-mail us to inquire about pickup rates.</p>
	<p>Standard pick ups are performed on <u>Wednesdays</u>. Please indicate below if you require a pick up on an alternate day.</p>

	<p>After completing the form, you will receive an email in 1 to 2 business days confirming your request.<p>Thank you.</p></p><br></br>
    <!--
    -->
    <div id="wufoo-z1rwngaj0bc9hmv"> Fill out my <a href="https://hackery.wufoo.com/forms/z1rwngaj0bc9hmv">online form</a>. </div> <script type="text/javascript"> var z1rwngaj0bc9hmv; (function(d, t) { var s = d.createElement(t), options = { 'userName':'hackery', 'formHash':'z1rwngaj0bc9hmv', 'autoResize':true, 'height':'1035', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { z1rwngaj0bc9hmv = new WufooForm(); z1rwngaj0bc9hmv.initialize(options); z1rwngaj0bc9hmv.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
   </div>

<?php printFooter() ?>

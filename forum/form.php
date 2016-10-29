<script type="text/javascript" >
	// datepicker example
 	$("#date").datepicker({
		dateFormat: 'dd.mm.yy',
	 			minDate: "-60Y",
		maxDate: "+10D",
		showWeek: true,
		changeYear: true,
		changeMonth:false,	    	
 	});
 	
 	// send form with ajax
 	$("#myform").on('submit', function () {
 		form = $(this);
 		$.post(form.attr("action"), form.serialize())
 						.done(function (data) {
				 			form.parent().replace(data);	
				 			$(".message").dialog();
				 		});
 		
 		return false;
 	});
</script>
<?php
	if(isset($_POST)) {
		echo "<div class='message'>Speichern erfolgreich</div>";
	}
?>


<form id="myform" method="post" action="form.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile" name="file">
    <p class="help-block">Example block-level help text here.</p>
  </div>
   <div class="form-group">
   
    <label for="date">Date</label>
    <input type="date" id="date" required name="date">
    
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>    
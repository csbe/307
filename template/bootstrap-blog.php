<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Enrico Buchs" >
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $jumbo['title']; ?></title>

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>	
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    


	<!-- include summernote css/js-->
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    
    <?php if(isset($js) && $js != null){ ?>  	
    <script type="text/javascript" >
    	<?php echo $js; ?>
    </script>
    <?php } ?>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">LB2</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title"><?php echo $jumbo['title']; ?></h1>
        <p class="lead blog-description"><?php echo $jumbo['lead']; ?></p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
				<div class="blog-post">
				          <h2 class="blog-post-title">Formular</h2>
				          <div class="blog-post-meta">Bitte füllen Sie das Formular aus!</div>
				          <form>
								
								
								<div class="form-group">
								    <label for="exampleInputEmail1">Email*</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required name="email">
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
								  </div>
								 <div class="form-group">
								 	<label for="exampleInputEmail1">File*</label>
								 	<div class="radio">
								    <label>
								      <input type="radio" name="with" onclick="javascript:showfile(true);"> With File
								    </label>
								     <label>
								      <input type="radio" name="with" checked="" onclick="javascript:showfile(false);"> Without File
								    </label>
								    </div>
								  </div>								  
								  
								  <div class="form-group file" style="display:none">
								    <label for="exampleInputEmail1">New Filename*</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Filename" required name="filename">
								  
								    <label for="exampleInputFile">File input*</label>
								    <input type="file" id="exampleInputFile" name="file">
								    <p class="help-block">Upload your txt File here.</p>
								  </div>
								   <div class="form-group">
								    <label for="date">Date</label>
								    <input type="date" id="date" required name="date">
								  </div>
								  <div class="checkbox">
								    <label>
								      <input type="checkbox"> AGB, i will accept the AGB
								    </label>
								  </div>
								  <button type="submit" class="btn btn-default">Save</button>								
								
								
								
								        
				          </form>
				</div>            
        
			
				<?php foreach($blocks as $block){
	      		?>
	      			<div class="blog-post">
				          <h2 class="blog-post-title"><?php echo $block['title']; ?></h2>
				          <?php if(isset($block['lead'])) { ?>
				          <div class="blog-post-meta"><?php echo $block['lead']; ?></div>
				          <?php } ?>
				          <p><?php echo $block['lead']; ?></p>
				        </div>
	      		
	      		<?php
	      	}
	      	?>        
	      	
	      	

          <!--<nav>
            <ul class="pager">
              <li><a href="#">Zurück</a></li>
              <li><a href="#">Weiter</a></li>
            </ul>
          </nav>-->

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Exam</h4>
            <p>Erstellen Sie für die LB2 <em>ein Formular</em> welches Visuell aussieht wie das Formular links!</p>
          </div>
          <div class="sidebar-module">
            <h4>Aufgaben</h4>
            <ol class="list-styled-number">
              <li><a href="#">Formular erstellen als [ihrname]_lb2.php (5)</a></li>
              <li><a href="#">Formular muss via Post übermittelt werden (1)</a></li>
              <li><a href="#">Javascript erstellen: für Datumsfeld mit JQuery UI (2)</a></li>
              <li><a href="#">Javascript erstellen: falls File "with File" gewählt wird soll der Fileupload angezeigt werden (3)</a></li>
              <li><a href="#">Wird speichern gewählt: soll das File mit dem neuen Namen als Dateinamen gespeichert werden (4)</a></li>
              <li><a href="#">Wird speichern gewählt: ohne File dann wird eine leere Textdatei erstellt mit dem Email als Namen (3)</a></li>
              <li><a href="#">Ist AGB nicht gewählt: kann das Formular nicht abgesendet werden (1)</a></li>
              <li><a href="#">Css erstellen als style.css (1)</a></li>
            </ol>
          </div>
         
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>LB2 Modul 307 with Bootstrap Template <a href="http://getbootstrap.com">Bootstrap</a> in &copy; 2016.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
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
												 			form.parent().html(data);	
												 			$(".message").dialog();
												 		});
								 		
								 		return false;
								 	});
								 	
								 	function showfile(on){
										if(on){
											$(".file").show();										
										}else{
											$(".file").hide();	
										}								 	
								 	}
								</script>				  
  </body>
</html>

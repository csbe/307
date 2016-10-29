<form method="post" action="">
	<!-- ToDo: Kategorie id oder Frage id als value übergeben -->
	<input type="hidden" name="parent" value="">
	<!-- ToDo: BenutzerID aus der Session als value übergeben -->
	<input type="hidden" name="benutzer" value="">
	<div class="form-group">
   	<label for="name">Name</label>
   	<!-- ToDo: Name aus der Session als value übergeben -->
    	<input type="name" name="name" id="name" value="">
  	</div>	
	<div class="form-group">
   	<label for="text">Text</label>
    	<textarea name="text" id="text" required></textarea>
  	</div>
	
	<button type="submit" class="btn btn-default">Speichern</button>
</form>
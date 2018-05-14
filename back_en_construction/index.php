<?php include 'includes/links.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>Test ckeditorfull</title>
</head>
<body>
	<form action="assets/php/action_formulaire.php" method="POST">
	<textarea name="editor1" id="editor1" cols="30" rows="10"></textarea>
	<button type="submit">Confirmer</button>
	</form>
	<script>
		CKEDITOR.replace( 'editor1' );
	</script>
</body>
</html>
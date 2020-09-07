<!--
Input field voor:

Voornaam (verplicht)

Tussenvoegsel (optioneel)

Achternaam (verplicht)

E-mail (verplicht)

gebruikersnaam(verplicht)

wachtwoord (verplicht)

Herhaal wachtwoord (verplicht)

een knop om een gebruiker te worden, zodat je later naar de database geschreven kunt worden.
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="" name="signup-form">
    	<div class="form-element">
        	<label>Voornaam (verplicht)</label>
        	<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    	</div>
    	<div class="form-element">
        	<label>Tussenvoegsel (optioneel)</label>
        	<input type="text" name="Tussenvoegsel" required />
    	</div>
    	<div class="form-element">
        	<label>Achternaam (verplicht)</label>
        	<input type="text" name="Achternaam" required />
    	</div>
    	<div class="form-element">
        	<label>E-mail (verplicht)</label>
        	<input type="email" name="E-mail" required />
    	</div>
    	<div class="form-element">
        	<label>gebruikersnaam(verplicht)</label>
        	<input type="text" name="gebruikersnaam" required />
    	</div>
    	<div class="form-element">
        	<label>wachtwoord (verplicht)</label>
        	<input type="password" name="wachtwoord" required />
    	</div>
    	<div class="form-element">
        	<label>Herhaal wachtwoord (verplicht)</label>
        	<input type="repeat password" name="Herhaal wachtwoord" required />
    	</div>
    	<button type="submit" name="register" value="register">Aanmelden</button>
</form>
</body>
</html>

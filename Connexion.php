<html>
<head>
    <meta charset="utf-8" />

<!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>


    <!-- Add additional services you want to use -->
    <!--<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-functions.js"></script>-->
	<script type = 'text/javascript'>


      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAEJZ0stYpuv6jwtYfv4t9T7X5p3yzPirA",
        authDomain: "teniscroustillant.firebaseapp.com",
        databaseURL: "https://teniscroustillant.firebaseio.com",
        projectId: "teniscroustillant",
        storageBucket: "teniscroustillant.appspot.com",
        messagingSenderId: "272741883274"
      };
      firebase.initializeApp(config);
      
      var ref = firebase.database().ref();
      var utilisateur = ref.child('utilisateur');
      
      utilisateur.on("value", function(snapshot) {
        console.log(snapshot.val());
     }, function (error) {
        console.log("Error: " + error.code);
     });
	 
	 if(utilisateur.key ==0){
	 </script>
      
</head>
	<body>

<form method="post" action="connexion.php" onsubmit="">
	<fieldset>
	<legend>Connexion</legend>
	<p>
	<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
	<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
	</p>
	</fieldset>
	<input type="button" name="bouton" value="Se connecter" onclick="Connexion(this.form)">
	<a href="./register.php">Pas encore inscrit ?</a>
	 
	</div>
	</body>
	<script type = 'text/javascript'>
	}
	else{	
			</script>
			</head>
			Vous êtes déjà connecté.
			<script>
	}
</script>
</html>

<script type = 'text/javascript'>
function Connexion(formulaire){
	var pseudo = formulaire.pseudo;
	var password = formulaire.password;
	
	
}
</script>


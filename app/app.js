const $main = document.querySelector('main');
const $form = document.querySelector('form');
const $username = document.querySelector('input[name="username"]');
const $password = document.querySelector('input[name="password"]');

$form.addEventListener('submit', (evt) => {
  evt.preventDefault();
  // Récupérer les valeurs du formulaire
  const data = {
    username: $username.value,
    password: $password.value
  };

  // Envoi de la requete de connexion au serveur
  fetch('http://localhost/php-start12/api/login.php', {
      method: "POST",
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(data => {
      // Lecture de la réponse
      if(data && data.success){
        $main.innerHTML = `
        <p>Hello ${data.username}</p>
        `; 
      }else{
        // Mauvais login
        alert("Bad login");
        $username.value = ""
        $password.value = ""
      }
    })
})
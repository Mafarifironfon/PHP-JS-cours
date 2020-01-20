const $main = document.querySelector('main');
const $form = document.querySelector('form');
const $divKarine =document.querySelector('.karine');
const $username = document.querySelector('input[name="username"]');
const $password = document.querySelector('input[name="password"]');
let data_post = [];
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
        // fetch les posts
        fetchPost();
        
      }else{
        // Mauvais login
        alert("Bad login");
        $username.value = ""
        $password.value = ""
      }
    })
})

function fetchPost (){
  fetch('http://localhost/php-start12/api/posts.php',{
          method: "POST"
        })
        .then(res => res.json())
        .then(datapost => {
          data_post = datapost;
          $main.innerHTML = datapost.map((element, idx) =>
          buttonTitle(element, idx)).join ('');
        });
}

function buttonTitle (element, idx){
 return `<button type="button" class="btn btn-outline-secondary" data-post-id="${idx}">${element.title}</button>`
}

document.addEventListener ("click", function(e){
 const $target = e.target;
    if ($target.hasAttribute("data-post-id")){
      const $idPost = Number($target.getAttribute("data-post-id"));
      
      $divKarine.innerHTML = `<h1> ${data_post[$idPost]['title']} </h1><p> ${data_post[$idPost]['body']}</p>`
      
    }
})
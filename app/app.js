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

  // Envoi les information du formulaire au serveur
  fetch('./../api/login.php', {
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
          $main.innerHTML = datapost.map((element, idx) =>
          modal(element, idx)).join ('');
        });

}

function modal(element, idx){
return `<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-${idx}">
${element.title}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-${idx}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">${element.title}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      ${element.body}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>`
}
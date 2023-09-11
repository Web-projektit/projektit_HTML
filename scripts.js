/* Esimerkki virheilmoituksen näyttämisestä */
const menutoggle = () => {
try {
    console.log("menutoggle");
    //alert("menutoggle");
    let x = document.querySelector("nav");
    x.className = x.className === "" ? "responsive" : "";
    throw new Error("menutoggle toimii.");
    } 
  catch (error) {
    console.error("Virhe,menutoggle:", error.message);
    let x = document.querySelector("#ilmoitukset");
    let p = document.querySelector("#ilmoitukset p");
    x.classList.remove("alert-success", "d-none");
    x.classList.add("alert-danger");
    p.innerHTML = error.message;
    }
};


//document.querySelector("#tallenna").addEventListener("click", menutoggle)
document.querySelector("#tallenna").onclick = menutoggle;

/* Bootstrap-muotoiltujen ilmoitusten poisto */
const ilmoitukset = document.querySelector("#ilmoitukset");
document.querySelectorAll("input,select,textarea").forEach( el => {
  el.addEventListener("click", e => {
    if (!ilmoitukset.classList.contains("d-none")) {
        ilmoitukset.classList.add("d-none");
      }
  });
});

document.querySelector("input").onchange = () => {
  if (!document.querySelector("#ilmoitukset").classList.contains("d-none")) {
    document.querySelector("#ilmoitukset").classList.add("d-none");
  }
};

/*  Lomakkeiden validointi Bootstrap-muotoilulla */
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener("submit", event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
          }
        form.classList.add("was-validated");
        },false);
    });
})();


/*  Jatkuva vieritys */
window.onscroll = () => {
  console.log(window.innerHeight + window.scrollY)
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight-1) {
    load();
    } 
  };


let url = "./posts.php";
let counter = 1;
const quantity = 25;
/* Ensimmäinen erä postauksia */
document.addEventListener('DOMContentLoaded', load);

/* Lisää postauksia */
function load() {
    const start = counter;
    const end = start + quantity - 1;
    counter = end + 1;
    fetch(`${url}?start=${start}&end=${end}`)
    .then(response => response.json())
    .then(data => {
        data.posts.forEach(add_post);
        console.log(document.body.offsetHeight);
    })
};

const add_post = contents => {
    const post = document.createElement('div');
    post.innerHTML = contents;
    document.querySelector('#posts').append(post);
};


const menutoggle = () => {

  try {
    console.log("menutoggle");
    //alert("menutoggle");
    let x = document.querySelector("nav");
    x.className = x.className === "" ? "responsive" : "";
    throw new Error("Jokin meni pieleen!");
  } catch (error) {
    console.error("Virhe,menutoggle:", error.message);
    let x = document.querySelector("#ilmoitukset");
    let p = document.querySelector("#ilmoitukset p");
    x.classList.remove("alert-success", "d-none");
    x.classList.add("alert-danger");
    p.innerHTML = error.message;
  }
};

/*try {
document.querySelector("#tallenna").addEventListener("click", menutoggle)
} catch (error) {
console.error("Virhe,scripts:",error)
}*/

//document.querySelector("#tallenna").addEventListener("click", menutoggle)
document.querySelector("#tallenna").onclick = menutoggle;

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
//alert(document.querySelector("#tallenna").id)

// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

    var x = document.querySelector("nav")
    x.className = (x.className === "") ? "responsive" : ""
    }


// Event listener for scrolling
window.onscroll = () => {
// Check if we're at the bottom
console.log(window.innerHeight + window.scrollY)
if (window.innerHeight + window.scrollY >= document.body.offsetHeight-1) {
   // Change color to green
   //document.querySelector('body').style.background = 'green';
    load();
    } 
//else {
    // Change color to white
    //document.querySelector('body').style.background = 'white';
//}
};


let url = "./posts.php";
let counter = 1;
const quantity = 25;
document.addEventListener('DOMContentLoaded', load);

// Load next set of posts
function load() {
    // Set start and end post numbers, and update counter
    const start = counter;
    const end = start + quantity - 1;
    counter = end + 1;
    // Get new posts and add posts
    fetch(`${url}?start=${start}&end=${end}`)
    .then(response => response.json())
    .then(data => {
        data.posts.forEach(add_post);
        console.log(document.body.offsetHeight);
    })
    
};

// Add a new post with given contents to DOM
const add_post = contents => {
    // Create new post
    const post = document.createElement('div');
    // post.className = 'post';
    post.innerHTML = contents;
    // Add post to DOM
    document.querySelector('#posts').append(post);
};


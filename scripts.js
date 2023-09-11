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

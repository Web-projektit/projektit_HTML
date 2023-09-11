
/*

const muokkaus = () => {
    let x = document.querySelector("#demo")
    x.innerHTML = "Hello World"
}    


if (x === 4) {
    console.log("x on 4")
} else if (x === 5) {   
    console.log("x ei ole 4")
} else {
    console.log("x ei ole 4 eikä 5")
}


let x = 0
var y = 5

let taulukko = []

taulukko.push(x)
taulukko.push(y)
console.log("taulukko:", taulukko)

for (var i = 0; i < taulukko.length; i++) {
    console.log(taulukko[i])
}

console.log("i:",i)

taulukko.forEach( (alkio, indeksi) => console.log(indeksi, alkio))          

taulukko.map ( (alkio, indeksi) => console.log(indeksi, alkio) )

while (taulukko.length > 0) {
    console.log(taulukko.pop())
}


javascript object notation, example of json
const json_taulukko = {'x': 4, 'y': 5 }
console.log(json_taulukko)      

const json_taulukko2 = [{'x': 4, 'y': 5 }, {'x': 6, 'y': 7 }]
console.log(json_taulukko2)

javascript object vs javascript object notation


fetch('https://jsonplaceholder.typicode.com/todos/1')
    .then(response => response.json())
    .then(json => console.log(json))
    .catch(error => console.log(error))


try {
alert("Hello World")
} catch (error) {
console.log(error)    
}


spread operator
const arr1 = [1,2,3]
const arr2 = [...arr1, 4, 5, 6]
console.log(arr2)

const obj1 = {'x': 1, 'y': 2}  
const obj2 = {...obj1, 'z': 3}
console.log(obj2)

rest operator
const {x, ...rest} = obj2
console.log(x)
console.log(rest)

const [a, b, ...rest] = arr2
console.log(a)
console.log(b)
console.log(rest)

session storage vs local storage
session storage is cleared when the browser is closed
local storage is not cleared when the browser is closed

// Oletetaan, että meillä on seuraava taulukko
const fruits = ['Apple', 'Banana', 'Cherry', 'Date'];

// Luo <ul> elementti
const ulElement = document.createElement('ul');

// Käy läpi jokainen taulukon elementti
fruits.forEach(fruit => {
  // Luo <li> elementti jokaiselle taulukon elementille
  const liElement = document.createElement('li');
  
  // Aseta <li>:n tekstisisältö taulukon elementin arvoksi
  liElement.textContent = fruit;
  
  // Lisää <li> elementti <ul>:n sisälle
  ulElement.appendChild(liElement);
});

// Lisää luotu <ul> elementti HTML-dokumenttiin, esimerkiksi <body>:n sisälle
document.body.appendChild(ulElement);


// Jäsennä JSON-teksti JavaScript-taulukoksi
const fruits = JSON.parse('["Apple", "Banana", "Cherry", "Date"]');

// Luo <ul> elementti
const ulElement = document.createElement('ul');

// Käy läpi jokainen taulukon elementti
fruits.forEach(fruit => {
  // Luo <li> elementti jokaiselle taulukon elementille
  const liElement = document.createElement('li');
  
  // Aseta <li>:n tekstisisältö taulukon elementin arvoksi
  liElement.textContent = fruit;
  
  // Lisää <li> elementti <ul>:n sisälle
  ulElement.appendChild(liElement);
});

// Lisää luotu <ul> elementti HTML-dokumenttiin, esimerkiksi <body>:n sisälle
document.body.appendChild(ulElement);

document.addEventListener('DOMContentLoaded', () => 
    document.querySelectorAll('button').forEach( button => 
        button.onclick = () => document.querySelector("#hello").style.color = button.dataset.color
    )
)


<!DOCTYPE html>
<html>
<head>
  <title>Fruits List from JSON</title>
</head>
<body>

  <!-- JavaScript-koodi lisää <ul> tänne -->

  <script>
    // Yllä oleva JavaScript-koodi tulee tähän
  </script>

</body>
</html>

*/
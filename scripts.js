const menutoggle = () => {
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

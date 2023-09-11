// Select the submit button and input to be used later
const submit = document.querySelector('#submit');
const newTask = document.querySelector('#task');
const edellinen = document.querySelector('#edellinen');
//let vanhatTehtavat = []
let vanhatTehtavat_str = localStorage.getItem('edellinen');
let vanhatTehtavat_arr = vanhatTehtavat_str.split(', ');        
vanhatTehtavat_arr.forEach((item, index) => {
    const li = document.createElement('li');
    li.innerHTML = item;
    document.querySelector('#edellinen').append(li);
    })    

// Disable submit button by default:
submit.disabled = true;

// Listen for input to be typed into the input field
newTask.onkeyup = () => {
    if (newTask.value.length > 0) {
        submit.disabled = false;
    }
    else {
        submit.disabled = true;
    }
}

// Listen for submission of form
document.querySelector('form').onsubmit = () => {

    // Find the task the user just submitted
    const task = newTask.value;

    // Create a list item for the new task and add the task to it
    const li = document.createElement('li');
    li.innerHTML = task;
    vanhatTehtavat_arr.push(task)
    localStorage.setItem('edellinen', vanhatTehtavat_arr.join(', '));

    // Add new element to our unordered list:
    document.querySelector('#tasks').append(li);

    // Clear out input field:
    newTask.value = '';

    // Disable the submit button again:
    submit.disabled = true;

    // Stop form from submitting
    return false;
}
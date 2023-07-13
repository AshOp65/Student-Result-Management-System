function add(){
    window.location.href='addmarks.php';
}

function view(){
    window.location.href='usermsg.php';
}
function update(){
    window.location.href='update.php';
}
var loadFile = function(event) {
    frame.src=URL.createObjectURL(event.target.files[0]);
}
const handlePrint = () => {   
    window.print();
 }
 function viewdata(){
    window.location.href='viewmarks.php';
}
function deletedata(){
    window.location.href="delete.php";
}
function toggleMode() {
    const container = document.querySelector('.container');
    container.classList.toggle('dark-mode');
  
    const buttons = document.querySelectorAll('.button');
    buttons.forEach(button => button.classList.toggle('dark-mode'));
}
document.querySelector('.button').addEventListener('click', toggleMode);

function validateForm() {
  let x = document.forms["myForm"]["name"].value;
  let y = document.forms["myForm"]["email"].value;

  var letters = /^[A-Za-z]+$/;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


  if (x.match(letters)) {
    console.log("done....")
  }
  else {
    alert("Name must be filled out properly");
    return false;
  }

  if (y.match(mailformat)) {
    console.log("done....")


  }
  else {
    alert("You have entered an invalid email address!");

  }
}

var i = 0;
var txt = 'Welcome to the Juice world!';
var speed = 50;


const demo1 = document.getElementById("demo1")
const demo2 = document.getElementById("demo2")
const cool1 = document.getElementById("cool1")
const cool2 = document.getElementById("cool2")
const cool3 = document.getElementById("cool3")


function typeWriter() {

  demo2.style.display = 'block';
  if (i < txt.length) {
    demo2.innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

demo1.addEventListener("click", () => {
  demo1.style.display = 'none';
  
  demo2.style.display = 'block';
  typeWriter();
  
});



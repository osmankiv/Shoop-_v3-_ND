const todoInput = document.querySelector('.todo-input');



const myObj = { name: "osman", age: 24, city: "kanda" };
const myJSON = JSON.stringify(myObj);

localStorage.setItem("OsmanDataAsJSON", myJSON);
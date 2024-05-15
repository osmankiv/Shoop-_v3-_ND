//DOM Elements
const todoInput = document.querySelector('.todo-input');
const heading1 = document.querySelector('.heading1').textContent;
const todoBtn = document.querySelector('.todo-btn');
const todoList = document.querySelector('.todo-list');

//Event Listeners
todoBtn.addEventListener('click', additem);
todoList.addEventListener('click', deleteTodo);
function additem(event) {
    event.preventDefault();


    const main = document.createElement('div');
    main.className = 'todo';
    const main2 = document.createElement('p');
    main2.innerText = heading1;
    const card = document.createElement('div');
    card.className = 'card';
    const heading = document.createElement('div');
    heading.className = 'heading';
    const details = document.createElement('div');
    details.className = 'details';
    const price = document.createElement('div');
    price.className = 'price';








    //create complete task button
    const completedBtn = document.createElement('button');
    completedBtn.innerText = `✔️`;
    completedBtn.classList.add('todoInput');
    main.appendChild(completedBtn);

    //create trash button
    const trashBtn = document.createElement('button');
    trashBtn.innerText = `❌`;
    trashBtn.classList.add('trash-btn');
    main.appendChild(trashBtn);

    //Add wrapper div to ul
    todoList.appendChild(main);
    todoList.appendChild(main);

}
/*
function additem(event) {
    //prevent the form from submitting
    event.preventDefault();

    //add todo only when user enters something
    if (todoInput.value !== '') {
        /*                          <div class="main">
                                    <div class="card">
                                        <div class="heading">UltraFlex</div>
                                        <div class="details">Beste Design till date.<br>Flex it up as you wish,<br> but you
                                            can't break it.</div>
                                        <div class="price">$99</div>
                                        <button class="btn1">Buy</button>
                                        <button class="btn2">Add to Cart</button>
                                    </div>
                                    
        //create wrapper div
        const main = document.createElement('div');
        main.className = 'todo';
        const card = document.createElement('div');
        card.className = 'card';
        const heading = document.createElement('div');
        heading.className = 'heading';
        const details = document.createElement('div');
        details.className = 'details';
        const price = document.createElement('div');
        price.className = 'price';

        //create list element
        const mainli = document.createElement('li');
        mainli.className = 'todo-item';
        mainli.innerText = todoInput.value;

        //add that list element inside of wrapper div
        mainli.appendChild(main);
        todoInput.value = '';

        //create complete task button
        const completedBtn = document.createElement('button');
        completedBtn.innerText = `✔️`;
        completedBtn.classList.add('complete-btn');
        main.appendChild(completedBtn);

        //create trash button
        const trashBtn = document.createElement('button');
        trashBtn.innerText = `❌`;
        trashBtn.classList.add('trash-btn');
        main.appendChild(trashBtn);

        //Add wrapper div to ul
        todoList.appendChild(main);
    }
}*/

function deleteTodo(e) {
    const item = e.target;

    if (item.classList[0] === 'trash-btn') {
        const todo = item.parentElement;
        todo.classList.add('fade-away');

        todo.addEventListener('transitionend', e => {
            todo.remove();
        });
    }

    if (item.classList[0] === 'complete-btn') {
        const todo = item.parentElement;
        const todoItem = todo.querySelector('.todo-item');
        todoItem.classList.toggle('completed');

    }
}
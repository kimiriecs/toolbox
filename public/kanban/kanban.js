const newTasksList = document.querySelector('.kanban-new')
const processedTasksList = document.querySelector('.kanban-processed')
const finishedTasksList = document.querySelector('.kanban-finished')
const createForm = document.querySelector('.kanban-form-group')
const createButton = document.querySelector('.kanban-form-group-button')
const createFormInput = document.querySelector('.kanban-form-group-input')
const isEmpty = new CustomEvent('isEmpty')


let taskLists = document.querySelectorAll('.kanban-task-list')
let tasks = document.querySelectorAll('.kanban-task')
let taskCounter = 0

isEmptyStart()
addEventListeners()

// createForm.addEventListener('submit', addNewTaskHandler)
createForm.addEventListener('submit', addNewTaskHandler)

//* Create events Handlers

function addNewTaskHandler (e) {
  e.preventDefault()
  let taskName = createFormInput.value
  console.log(taskName);
  addNewTask(taskCounter, taskName, newTasksList)
}

function addNewTask (taskCounter, taskName, targetTasksList) {
  isEmptyTarget (targetTasksList)
  let newTask = document.createElement('li')
  newTask.classList.add('kanban-task')
  // newTask.setAttribute('draggable', true)
  newTask.setAttribute('id', ++taskCounter)
  newTask.innerText = taskName
  newTasksList.appendChild(newTask)
  addEventListeners()
  clearInput('')
  console.log(newTask);
}


function clearInput (formInput) {
  createFormInput.value = formInput
}

// createForm.addEventListener('onclic', addNewTask)

function addEventListeners () {
  taskLists = document.querySelectorAll('.kanban-task-list')

  for (let list of taskLists) {
    list.addEventListener('dragover', dragOverHandler)
    list.addEventListener('dragenter', dragEnterHandler)
    list.addEventListener('dragleave', dragLeaveHandler)
    list.addEventListener('drop', dropHandler)
    // list.addEventListener('isEmpty', isEmptyHandler)
  }
  tasks = document.querySelectorAll('.kanban-task')
  for (let task of tasks) {
    task.setAttribute('draggable', true)
    task.addEventListener('dragstart', dragStartHandler, false)
    task.addEventListener('dragend', dragEndHandler, false)
  }
}

//* Drag Event Handlers
let dragged
let dragStartParent
function dragStartHandler(e) {
  console.log('start');
  this.style.opacity = '0.1'
  dragged = this
  console.log(dragged + ' from start');
  dragStartParent = this.parentElement
}
function dragEndHandler(e) {
  this.style.opacity = '1'
  this.parentElement.classList.remove('kanban-over')
}

function dragOverHandler(e) {
  e.preventDefault()
  this.classList.add('kanban-over')
}
function dragEnterHandler(e) {
  this.classList.add('kanban-over')
  isEmptyTarget (this)
  console.log(dragged + 'from enter');
  this.appendChild(dragged)
}
function dragLeaveHandler(e) {
  this.classList.remove('kanban-over')
  isEmptySource (dragStartParent)
  console.log('leave');
  // dragged.parentElement.removeChild( dragged )
  // dragStartParent.removeChild(dragged)
  // this.dispatchEvent(isEmpty)
}
function dropHandler(e) {
  e.preventDefault();
  // isEmptyTarget (this)
  // isEmptySource (dragStartParent)
}





//* Check for any taskList is empty

function isEmptyTarget (el) {
  if (el.classList.contains('kanban-emptyList')) {
    el.classList.add('kanban-clear')
    let emptyChild = document.querySelector('.kanban-clear li')
    el.removeChild(emptyChild)
    el.classList.remove('kanban-emptyList')
    el.classList.remove('kanban-clear')
  }
}
function isEmptySource (el) {
  if (!el.children.length) {
    let noTaskElement = document.createElement('li')
    noTaskElement.classList.add('kanban-empty')
    noTaskElement.innerText = 'No Tasks'
    el.appendChild(noTaskElement)
    el.classList.add('kanban-emptyList')
  }
}
function isEmptyStart () {
  for (let list of taskLists) {
    if (!list.children.length) {
      let noTaskElement = document.createElement('li')
      noTaskElement.classList.add('kanban-empty')
      noTaskElement.innerText = 'No Tasks'
      list.appendChild(noTaskElement)
      list.classList.add('kanban-emptyList')
    }
  }
}

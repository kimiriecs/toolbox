<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Task-board</title>
</head>
<body>

  <div class="container">
    <div class="header">
      <h1 class="title">Drag -&- Drop Task-board</h1>
    </div>
    <div class="main">
      <form action="" method="" class="form-group">
        <input type="text" placeholder="New Task" class="form-group-input" id="input">
        <button type = "submit" class="form-group-button">Add New Task</button>
        <!-- <button type="submit" class="form-group-button">Add New Task</button> -->
        <!-- <button type="button" class="form-group-button">Add New Task</button> -->
      </form>
      <div class="task-board">
        <div class="task-list-wrapper">
          <span class="task-list-title">Curent Tasks</span>
          <ul class="task-list new">
            <!-- <li class="task" id="6">Task #6</li>
            <li class="task" id="5">Task #5</li> -->
          </ul>
        </div>
        <div class="task-list-wrapper">
          <span class="task-list-title">Recent Tasks</span>
          <ul class="task-list processed">
            <!-- <li class="task" id="4">Task #4</li>
            <li class="task" id="3">Task #3</li>
            <li class="task" id="2">Task #2</li> -->
          </ul>
        </div>
        <div class="task-list-wrapper">
          <span class="task-list-title">Finished Tasks</span>
          <ul class="task-list finished">
            <!-- <li class="task" id="1">Task #1</li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>
</html>
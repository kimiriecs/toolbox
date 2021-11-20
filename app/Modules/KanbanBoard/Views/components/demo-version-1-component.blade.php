
@section('title')
  <title>Task-board</title>  
@endsection


@once
  @push('kanban-styles')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('kanban/kanban.css') }}">
  @endpush
@endonce



<div class="kanban-container">
  <div class="kanban-header">
    <h1 class="kanban-title">Drag -&- Drop Task-board</h1>
  </div>
  <div class="kanban-main">
    <form action="" method="" class="kanban-form-group">
      <input type="text" placeholder="New Task" class="kanban-form-group-input" id="input">
      <button type = "submit" class="kanban-form-group-button">Add New Task</button>
      <!-- <button type="submit" class="kanban-form-group-button">Add New Task</button> -->
      <!-- <button type="button" class="kanban-form-group-button">Add New Task</button> -->
    </form>
    <div class="kanban-task-board">
      <div class="kanban-task-list-wrapper">
        <span class="kanban-task-list-title">Curent Tasks</span>
        <ul class="kanban-task-list kanban-new">
          <!-- <li class="kanban-task" id="6">Task #6</li>
          <li class="kanban-task" id="5">Task #5</li> -->
        </ul>
      </div>
      <div class="kanban-task-list-wrapper">
        <span class="kanban-task-list-title">Recent Tasks</span>
        <ul class="kanban-task-list kanban-processed">
          <!-- <li class="kanban-task" id="4">Task #4</li>
          <li class="kanban-task" id="3">Task #3</li>
          <li class="kanban-task" id="2">Task #2</li> -->
        </ul>
      </div>
      <div class="kanban-task-list-wrapper">
        <span class="kanban-task-list-title">Finished Tasks</span>
        <ul class="kanban-task-list kanban-finished">
          <!-- <li class="kanban-task" id="1">Task #1</li> -->
        </ul>
      </div>
    </div>
  </div>
  
</div>


@once
  @push('kanban-scripts')
    <script src="{{ asset('kanban/kanban.js') }}"></script>
  @endpush
@endonce
@extends('layout.master')
@section('todolist')
    Update Task
@endsection
@section('content')
<form action="{{ route('tasks.update', $tasks->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="btn btn-light text-black col-md-6 offset-md-3" style="height:3rem">
      <center>
        <h2>
          Update Task
      </h2>
      </center>
    </div>
    <div class="card container col-md-12 mt-5">
       <div class="card-body">
        <form>
            <div class="row">
                <div class="form-group mt-2 col-md-6">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" name="company_name" value="{{$tasks->company_name}}" id="companyName">
                  </div>
                  <div class="form-group mt-2 col-md-6">
                      <label for="module">Module</label>
                      <input type="text" class="form-control" name="module" value="{{$tasks->module}}" id="module">
                    </div>
                    <div class="form-group mt-2 col-md-8">
                      <label for="task">Task</label>
                      <textarea class="form-control" name="task" id="task" rows="13">{{$tasks->task}}</textarea>
                    </div>
                    <div class="form-group mt-2 col-md-4">
                      <label for="image">Upload Image</label>
                        <input type="file" class="form-control" name="image">
                        <div class="card-body bg-light">
                          @if ($tasks->image)
                        <img src="{{  asset('assets/uploads/'.$tasks->image)  }}" class="image-new">
                        @endif
                        </div>
                      <div class="card-body mt-2 btn btn-light">
                          <div class="row">
                            <div class="form-group  mt-2 col-md-4">
                              <label for="done">Done</label>
                              <input type="checkbox" {{ $tasks->done == "1" ? 'checked':''}} name="done">
                          </div>
                          <div class="form-group  mt-2 col-md-4">
                              <label for="published">Published</label>
                              <input type="checkbox" {{ $tasks->published == "1" ? 'checked':''}} name="published">
                          </div>
                          </div>
                          </div>
                      </div>
                    <div class="form-group mt-2 col-md-4">
                      <label for="assigned">Assigned To</label>
                      <input type="text" class="form-control" name="assigned_to"  value="{{$tasks->assigned_to}}" id="assigned">
                    </div>
                    <div class="form-group mt-2 col-md-4">
                        <label for="progress col md-6">Progress</label>
                    <select class="form-select form-select-lg mb-3" name="progress" aria-label=".form-select-lg example">
                      <option selected>{{$tasks->progress}}</option>
                      <option value="Not Started">Not Started</option>
                      <option value="In Progress">In Progress</option>
                      <option value="Complete">Complete</option>
                      <option value="On Hold">On Hold</option>
                      <option value="Overdue">Overdue</option>
                    </select>
                    </div>
                    <div class="form-group mt-2 col-md-4">
                      <label for="quality">QA</label>
                      <input type="text" class="form-control" name="q_a" value="{{$tasks->q_a}}" id="quality">
                    </div>
                    <div class="form-group col-md-4 offset-md-2 mt-2">
                      <label for="startDate">Start Date</label>
                      <input type="date" class="form-control" name="start_date" value="{{$tasks->start_date}}" id="startDate">
                    </div>
                    <div class="form-group col-md-4 mt-2 ">
                      <label for="EndDate">**End Date</label>
                      <input type="date" class="form-control" name="end_date" value="{{$tasks->end_date}}" id="EndDate">
                    </div>
                </form>
          </div>
          <div class="modal-footer">
            <a href="{{ route('tasks.index') }}" id="cancel" name="cancel"
            class="btn btn-danger col-md-1 offset-md-5">Cancel</a>
              <button type="submit" class=" btn btn-success col-md-1 offset-md-1">Submit</button>
          </div>
        </div>
      </div>
    </div>
@endsection
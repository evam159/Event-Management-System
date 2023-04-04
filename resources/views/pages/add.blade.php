@extends('layout.master')
@section('todolist')
    Add Task
@endsection
@section('content')
<form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" id="form">
    @csrf
    @method('POST')
    <div class="btn btn-light text-black col-md-6 offset-md-3" style="height:3rem">
        <center>
          <h2>
           Add Task
        </h2>
        </center>
    </div>
      <div class="card container col-md-12 mt-5  ">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="form-group mt-2 col-md-6">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="companyName" placeholder="company name">
                      </div>
                      <div class="form-group mt-2 col-md-6">
                          <label for="module">Module</label>
                          <input type="text" class="form-control" name="module" id="module" placeholder="module">
                        </div>
                        <div class="form-group mt-2 col-md-8">
                          <label for="task" class="form-label">Task</label>
                          <textarea class="form-control" name="task" id="task" rows="5"></textarea>
                        </div>
                        <div class="form-group mt-2 col-md-4">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" name="image" class="form-control" multiple>
                          <div class="card-body mt-3 btn btn-light">
                            <div class="row">
                              <div class="form-group  mt-2 col-md-4" >
                                <label for="done">Done</label>
                                <input type="checkbox" name="done">
                            </div>
                            <div class="form-group  mt-2 col-md-4" >
                                <label for="published">Published</label>
                                <input type="checkbox" name="published">
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mt-2 col-md-4">
                          <label for="assigned">Assigned To</label>
                          <input type="text" class="form-control" name="assigned_to" id="assigned" placeholder="assigned to">
                        </div>
                        <div class="form-group  mt-2 col-md-4">
                            <label for="progress col md-6">Progress</label>
                        <select class="form-select form-select-lg mb-3" name="progress" aria-label=".form-select-lg example">
                          <option selected>--Select--</option>
                          <option value="Not Started" class="btn btn-info">Not Started</option>
                          <option value="In Progress" class="btn btn-warning">In Progress</option>
                          <option value="Complete" class="btn btn-success">Complete</option>
                          <option value="On Hold" class="btn btn-secondary">On Hold</option>
                          <option value="Overdue" class="btn btn-danger">Overdue</option>
                        </select>
                        </div>
                        <div class="form-group  mt-2 col-md-4">
                          <label for="quality">QA</label>
                          <input type="text" class="form-control" name="q_a" id="quality" placeholder="quality analyst">
                        </div>
                      
                        <div class="form-group mt-2 col-md-3 offset-md-3">
                          <label for="startDate">Start Date</label>
                          <input type="date" class="form-control" name="start_date" id="startDate">
                        </div>
                        <div class="form-group mt-2 col-md-3">
                          <label for="EndDate">**End Date</label>
                          <input type="date" class="form-control" name="end_date" id="EndDate">
                        </div>
                </div>
            </form>
            <div class="modal-footer">
                <a href="{{ route('tasks.index') }}" id="cancel" name="cancel"
                class="btn btn-danger col-md-1 offset-md-5">Cancel</a>
                  <button type="submit" class=" btn btn-success col-md-1 offset-md-1">Submit</button>
              </div>
        </div>
    </div>
@endsection
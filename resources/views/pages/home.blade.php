@extends('layout.master')

@section('todolist')

@section('content')

<div>
  <a href="{{route('tasks.create')}}" class="btn btn-primary col-sm-2">Add Task</a>
</div>
{{-- Table --}}
  <div class="card-body">
    <table id="table" class="table-bordered table-sm table-hover table-responsive-sm nowrap" id="table">

        <thead class="table ">
            <tr>
                <th>ID</th>
                <th>Done</th>
                <th>Published</th>
                <th>COMPANY NAME</th>
                <th>MODULE</th>
                <th>TASK</th>
                <th>ASSIGNED TO</th>
                <th>View More</th>
                {{-- <th>START DATE</th>
                <th>**END DATE</th> --}}
                {{-- <th>PROGRESS</th> --}}
                {{-- <th>QA</th>
                <th>Images</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
         @foreach($tasks as $task)
         <tr class="task{{ $task->id }}">
                <td>{{$task->id}}</td>
                <td>
                  <input type="checkbox"  name="done" id="done"
                  @if ($task->done)
                      checked
                  @endif value={{old('done', $task->done)}}>
                </td>
                <td>
                  <input type="checkbox"  name="published" id="published"
                  @if ($task->published)
                      checked
                  @endif value={{old('published', $task->published)}}>
                </td>
                <td>{{$task->company_name}}</td>
                <td>{{$task->module}}</td>
                <td>
                  <p class="col-sm-3 ">
                    <a data-bs-toggle="collapse" href="#CollapseExample1" role="button" aria-expanded="false" aria-controls="CollapseExample1">Description</a>
                  </p>
                      <div class="collapse" id="CollapseExample1">
                        <div class="card card-body" style="width: 23rem">
                          <textarea rows="10">{{$task->task}}</textarea>
                        </div>
                    </div>
                </td>
                <td>{{$task->assigned_to}}</td>
                {{-- <td>
                  <div class="col-sm-3 offset-sm-4">
                    <a href=""><i class="fa-solid fa-image" style="color: #0b53d0;"></i></a>
                  </div>
                </td> --}}
                <td>
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-white offset-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa-solid fa-eye" style="color: #1060ea;"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{$task->company_name}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="offset-sm-2 mt-3">
                        <h5><b>Quality Analyst:</b> {{$task->q_a}}</h5>
                      </div>
                      <div class="modal-body">
                        <div class="row">
                               <div class="card">
                                <div class="card-body">
                                  <div>
                                    <h3 class=""><b>Start Date:</b> {{$task->start_date}}</h3>
                                  </div>
                                  <div>
                                    <h3 class=""><b>End Date:</b>  {{$task->end_date}}</h3>
                                  </div>
                                  <div>
                                </div>
                               </div>
                                  <h4 class="btn btn-success"><b>Progress:</b>  {{$task->progress}}</h4>
                                </div>
                              </div>
                            </div>
                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-sm-3">
                        <a type="button" class="btn btn-white" href="{{ route('tasks.edit', $task->id) }}"><i class="fa-solid fa-pen-to-square" style="color: #0b53d0;"></i></a>
                    </div>
                  <div class="col-sm-3 offset-sm-1">
                    <a href="#" onclick="return confirm('Delete {{$task->company_name}}?');">
                      <form action="{{route('tasks.destroy', $task->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type=submit class="btn btn-white" style="width: "><i class="fa-solid fa-trash" style="color: #e70814;"></i></button>
                    </form>
                    </a>
                  </div>
                </div>
                </td>
            </tr>
         @endforeach
        </tbody>
    </table>
    
</div>
  </div>
  {{-- End Table --}}

  {{-- Submit Form Script --}}
  <script>
    function handleSubmit () {
        document.getElementById('form').submit();
    }
    </script>
  {{-- End  --}}
  <script>
    $(document).ready(function() {
    $('#table').DataTable();
} );
  </script>
   
  
@endsection
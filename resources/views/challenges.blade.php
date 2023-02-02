 @extends('layouts.plateformlayout')
@section('challenges')
<p class="register ">Challenges</p>
@foreach($challengeslist->groupBy('category') as $category => $challengeGroup)

<p class="category "> {{$category}}</p>
@foreach($challengeGroup as $task)

<button type="button" class="taskname" data-bs-toggle="modal" data-bs-target="#challengeModal{{$task->id}}">
 {{$task->taskname}}<br>
 {{$task->score}}
</button>
<!-- Modal -->
<div class="modal fade" id="challengeModal{{$task->id}}" tabindex="-1" role="dialog" aria-labelledby="challengeModalLabel{{ $task->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title task" id="challengeModalLabel{{$task->id}}">{{$task->taskname}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{$task->description}}
        
       
      </div>
      <div class="modal-footer">
      <form action="{{ route('answer.submit',$task->id) }}" method="post">
  @csrf
  <div class="form-group">
    <input type="text" name="answer" class="form-control" id="answer" placeholder="Submit your answer">
  </div>
  <button type="submit" class="submitbtn">Submit</button>
</form>
      </div>
      
    </div>
  </div>
</div>
@endforeach
@endforeach

@endsection
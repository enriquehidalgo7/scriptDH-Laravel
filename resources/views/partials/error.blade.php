<div class="alert alert-danger">
  @if (count($errors))
    @foreach ($errors->all() as $error)
    <ul>
      <li>{{$error}}</li>
    </ul>
    @endforeach
  @endif
</div>

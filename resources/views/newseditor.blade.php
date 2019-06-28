@extends('layouts.admin')
@section('title', 'News Editor')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">

<div class="row">
  <form>

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sub Title</label>
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Content</label>
      <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="file-upload-wrapper">
            <label for="exampleInputPassword1">Thumbnail</label>
      <input type="file"  id="input-file-now" class="file-upload" />
    </div>
          <div class="file-upload-wrapper">
                  <label for="exampleInputPassword1">Video</label>
            <input type="file"  id="input-file-now" class="file-upload" />
          </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</div>
</div>
























@stop

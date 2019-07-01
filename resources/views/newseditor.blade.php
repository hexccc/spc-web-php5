@extends('layouts.admin')
@section('title', 'News Editor')

@section('admincontent')


<div class="container-fluid">
<div class="container p-5">
<div class="row">
  <form id="addNews" enctype="multipart/form-data">

    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Sub Title</label>
      <input type="text" class="form-control" name="sub_title" id="exampleInputPassword1" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Content</label>
      <textarea class="form-control" name="content"  rows="8" cols="80"></textarea>
    </div>
    <div class="file-upload-wrapper">
      <label for="exampleInputPassword1">Thumbnail</label>
      <input type="file"  name="thumbnail" id="input-file-now" class="file-upload" />
    </div>
    <div class="file-upload-wrapper">
      <label for="exampleInputPassword1">Video</label>
      <input type="file" name="video"  id="input-file-now" class="file-upload" />
    </div>
          <input type="hidden" name="created_by" value="sampleID_created_by">
          <input type="hidden" name="updated_by" value="sampleID_updated_by">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<!-- <button type="button" id="test_load" name="button">Load to Response</button> -->

</div>
</div>




@stop

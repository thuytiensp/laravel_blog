@extends('layouts.admin')

@section('content')
@if(count($errors->all()))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

    <div class="row">
        <div class="col-md-12">
            <form action="{{route('admin.update')}}" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="title" 
                        name="title" 
                        value ="{{$post['title']}}">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="content" 
                        name="content"
                        value="{{$post['content']}}">
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('title','All Posts')
@section('content') 
<style>
    .location.posts {
  padding: 18% 10%;
}
.create-post {
  position: absolute;
  right: 86px;
  padding: 7px 20px;
  margin: 0px 81px 0px 0px;
  background: #0e1927;
  color: #fff;
  top: 14%;
}
</style>
<div class="container"> 
    <a href="{{url('create-post')}}" class="create-post">New Post</a> 
        <section class="location posts"> 
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>User Name</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($allposts->count() > 0)
                            @foreach($allposts as $data)
                            <tr>
                                <td scope="row">{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->title}}</td>
                                <td>{{$data->body}}</td>
                                <td>
                                  <a class="forget_password" href="{{url('edit-post', $data->id)}}">Edit</a> /
                                  <a class="forget_password" href="{{url('delete-post',$data->id)}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                             <tr>
                                <td colspan="6" style="text-align: center;">No Post Created</td>
                            </tr>
                            @endif
                        </tbody>
                      </table>
        </section>
    </div>
@endsection 
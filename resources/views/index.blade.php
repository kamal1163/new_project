<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <table class="table">
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- <pre>
                {{print_r($user_data->all())}}
            </pre> -->
            <!-- @if($user_data->count() > 0) -->
            @foreach($user_data as $users_data)
            <tr>
                <td scope="row">{{$users_data->user_id}}</td>
                <td>{{$users_data->name}}</td>
                <td>{{$users_data->phone_no}}</td>
                <td>{{$users_data->address}}</td>
                <td>{{$users_data->message}}</td>
                <td>
                  {{-- <a href="{{url('edit', $users_data->user_id)}}">Edit</a> / --}}
                  {{-- <a href="{{route('user.delete',['id' => $users_data->user_id])}}">Delete</a> --}}
                </td>
            </tr>
            @endforeach
            @else
            <!-- <tr>
        <td colspan="6" style="text-align: center;">hi</td>
    </tr> -->
            @endif
        </tbody>
      </table>
  </body>
</html>
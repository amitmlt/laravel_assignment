@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
              <h2>All Users</h2>
              <p>Click on the user name to view user:</p>  
                       
                  <table class="table table-bordered sortable" id="users_table">
                    <thead>
                      <tr>
                        <th>Sr No</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Rating</th>
                        <th>Last Login</th>
                        <th>Picture</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $i = 1; @endphp
                      @foreach($users as $user)
                        <tr>
                         <td>{{ $i }}</td>
                          <td><a href='{{ url("view_user/$user->id") }}''>{{ $user->name }}</a></td>
                          <td>{{ $user->surname }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->rating }}</td>
                          <td>{{ $user->last_login }}</td>
                          <td><img src='{{ url("/thumbnail/$user->picture")}}' alt="" class="img-rounded img-responsive" /></td>
                          @php 
                            $text = $user->active==1?'Enabled':'Disabled';
                            $class = $user->active==1?'label label-success':'label label-danger';
                          @endphp
                          <td><span class="{{ $class }}">{{ $text }}</span></td>
                          </tr> 
                        @php $i++; @endphp
                       @endforeach 
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
      $(document).ready(function() {
        $('#users_table').DataTable();
      });
</script>
@endsection

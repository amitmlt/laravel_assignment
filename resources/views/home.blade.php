@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
              <h2>All Users</h2>
              <p>Click on the user name to view user:</p>            
                  <table class="table table-bordered">
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
                      <tr>
                       <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td>1.2</td>
                        <td>2/12/19 04:02:53</td>
                        <td>john@example.com</td>
                        <td>Inactive</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td>4.5</td>
                        <td>2/12/19 04:02:53</td>
                        <td>mary@example.com</td>
                        <td>Active</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td>3.4</td>
                        <td>2/12/19 04:02:53</td>
                        <td>july@example.com</td>
                        <td>Active</td>
                      </tr>
                    </tbody>
                  </table>
        </div>
    </div>
</div>
@endsection

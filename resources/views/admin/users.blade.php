<div class="row">
    <a href="{{route('export.excel',['user'=>'user'])}}" class="btn btn-success">Export Users to Excel</a>
   <table class="table table-striped">
       <tr>
           <th>Username</th>
           <th>Email</th>
           <th>Verify Status</th>
           <th>Bid Limit</th>
           <th>Transaction Count</th>
           <th>Rating</th>
       </tr>
       @foreach($users as $user)
       <tr>

               <td>{{$user->username}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->verify_status}}</td>
               <td>{{$user->bid_count}}</td>
               <td>{{$user->transaction_count}}</td>
               <td>{{$user->rating}}</td>

       </tr>
           @endforeach
   </table>

</div>

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
            <th>ID</th>
            <th>ID Status</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
            <tr>

                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->verify_status}}</td>
                <td>{{$user->bid_count}}</td>
                <td>{{$user->transaction_count}}</td>
                <td>{{$user->rating}}</td>
                <td><a href="{{asset('valid_ids/'.$user->valid_id)}}" target="_blank">{{$user->valid_id}}</a>

                </td>
                <td>
                 @if($user->valid_id)
                     @if($user->valid_id_status == 1)
                         Accepted
                         @else
                            <a href="{{route('admin.user.valid_id',['id'=>$user->id,'accept'=>1])}}" class="btn btn-success" style="padding: 0 5px;">Accept</a>
                            <a href="{{route('admin.user.valid_id',['id'=>$user->id,'accept'=>2])}}" class="btn btn-danger" style="padding: 0 5px;">Decline</a>
                        @endif
                    @else
                    Wating to upload
                     @endif
                </td>
                <td><a href="{{route('admin.user.edit',['id'=>$user->id])}}" class="btn btn-success" style="padding: 0 5px;">Edit</a>
                    <a href="{{route('admin.user.delete',['id'=>$user->id])}}" class="btn btn-danger" style="padding: 0 5px;">Delete</a></td>

            </tr>
        @endforeach
    </table>

</div>

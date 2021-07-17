@extends('layouts.app')
@section('content')
<!--<li class="dropdown">
    <a class="dropdown-toggle" id="notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
       <span class="glyphicon glyphicon-user"></span>
    </a>
   <ul class="dropdown-menu" aria-labelledby="notificationsMenu" id="notificationsMenu">
   <li class="dropdown-header">No notifications</li>
   </ul>
 </li>
 <diV >
    <diV id="data"></div>
 </div>
 <div id="mydiv">-->


 </div>
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">

       
       <div class="panel panel-default">
            <div class="panel-heading">
                All Users
            </div>

             <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>User</th>
                    <th> </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td clphpass="table-text"><div>{{ $user->lastname }}</div></td>
                            @if (auth()->user()->isFollowing($user->id))
                                <td>
                                    <form action="{{route('toUnfollow', ['user' => $user])}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-follow-{{ $user->id }}" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Unfollow
                                        </button>
                                    </form>
                                </td>
                            @else
                                <td>
                                    <form action="{{route('tofollow', ['user' => $user])}}" method="POST">
                                        {{ csrf_field() }}

                                        <button type="submit" id="follow-user-{{ $user->id }}" class="btn btn-success">
                                            <i class="fa fa-btn fa-user"></i>Follow
                                        </button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 {{--<!--<div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2>Users Management</h2>
    </div>
    <div class="pull-right">
    <a class="btn btn-success" href="{{route('users.create')}}"> Create New User</a>
    </div>
    </div>
    </div>
     @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($data as $key => $user)  
    <tr>
    <td>{{ ++$i}}</td>
    <td>{{ $user->firstname}}</td>
    <td>{{ $user->email }}</td>
    <td>
        @if(!empty($user->getRoleNames()))
    @foreach($user->getRoleNames() as $v) 
      
    <label class="badge badge-success">{{ $v }}</label>
    @endforeach
    @endif
    </td>
    <td>
    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
    <a class="btn btn-primary" href="{{ route('users.editer') }}">Edit Profile</a>
    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </td>
    </tr>
    @endforeach
    </table>
    {!! $data->render() !!}-->--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
  

//var notifications = [];

    const NOTIFICATION_TYPES = {
          follow: 'App\\Notifications\\UserFollowed',
          newPost: 'App\\Notifications\\NewPost'
      };
     
      $(document).ready(function(){
       
            
   
          // Fetch all records
          $('#notificationsMenu').click(function(){
            $.ajax({
                 url: "{{  route('notifications') }}",
                 type: 'get',
                 dataType: 'json',
                 success: function(response){
                    console.log(response);
                   //var obj = JSON.parse(response);
                  /* var obj =response;
                   var your_html = "";
        $.each(obj['notifs'], function (key, val) {
           your_html += "<p>My Value :" +  val + ") </p>"
        });
         $("#data").append(your_html); //// For Append
         $("#mydiv").html(your_html) */
        if (response['notifs'].length) {
        var htmlElements = response['notifs'].map(function(notification) {
            return makeNotification(notification);
        });
        $("#notificationsMenu").html(htmlElements.join(''));
        $("#notificationsMenu").addClass('has-notifications')
    } else {
        $("#notificationsMenu").html('<li class="dropdown-header">No notifications</li>');
        $("#notificationsMenu").removeClass('has-notifications');
    }
         
         
         
         /*for(var i=0; i<response['notifs'].length; i++){
                var id = response['notifs'][i].id;
                var username = response['notifs'][i].data.follower_name;
                var date = response['notifs'][i].created_at;
                //var email = response[i].email;*/

                /*var tr_str = "<tr>" +
                    "<td align='center'>" + (id) + "</td>" +
                   
                    "</tr>";*/

                    /* var tr_str= 
                "<tr>" +
                    "<td >" + (id) + "</td>" +
                    "<td>"+(username)+"</td>"+
                    "<td>"+(date)+"</td>"+

                   " <td>"+
                                        
                    + "</td>"+
                   
                "</tr>";  */

               /* var tr_str= 
                "<tr>" +
                   
                    "<td>"+(username)+"</td>"+
                    "<td>"+(date)+"</td>"+

                   " <td>"+
                                        
                         "<button class='btn btn-success btn-xs btn-block markRead' value='Mark as read'>"+"Mark as read"+" </button>"
                                       
                                       
                    + "</td>"+
                   
                "</tr>";   

                $("#notificationsMenu").append(tr_str);
            }*/

          

                 }
             });
        
          });
    

          });

          // Make a single notification string
function makeNotification(notification) {
    var to = routeNotification(notification);
    var notificationText = makeNotificationText(notification);
    return '<li><a href="' + to + '">' + notificationText + '</a></li>';
}

// get the notification route based on it's type
function routeNotification(notification) {
    notifId=notification.id
   
    var url="{{route('updateNotifs', '')}}"+"/"+notification.id;
   // var to = `?read=${notification.id}`;
   var to="";
    if (notification.type === NOTIFICATION_TYPES.follow) {
       // to = 'myusers' + to;
        to=url;
    } else if (notification.type === NOTIFICATION_TYPES.newPost) {
        const postId = notification.data.post_id;
        //to = `posts/${postId}` + to;
    }
    return  to;
}
// get the notification text based on it's type
function makeNotificationText(notification) {
    var text = '';
    if (notification.type === NOTIFICATION_TYPES.follow) {
        const name = notification.data.follower_name;
        text += `<strong>${name}</strong> followed you`;
    } else if (notification.type === NOTIFICATION_TYPES.newPost) {
        const name = notification.data.following_name;
        text += `<strong>${name}</strong> published a post`;
    }
    return text;
}
    </script>
@endsection
@extends('layouts.app')


@section('content')
<!--<script src="{{ asset('js/custom.js') }}" defer></script>-->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List of Users-DAD-DEDRAS</div>


                <div class="card-body">
                    <div class="row pl-5">
                        {{--  @include('users.userList', ['users'=>$users])--}}
                        @if($users->count())
@foreach($users as $user)
    <div class="col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">
        <img src="https://www.codechief.org/user/img/user.jpg" style="height: 50px; width: 50px; border-radius: 50%;" class="img-responsive">
        <h3 class="m-0"><a href="{{ route('utilisateurs.view', $user->id) }}"><strong>{{ $user->lastname }}</strong></a></h3>
        <h5 class="m-0"><a href="{{ route('utilisateurs.view', $user->id) }}"><strong>{{ $user->firstname }}</strong></a></h5>
        {{--<p class="mb-2">
            <small>Following: <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>
            <small>Followers: <span class="badge badge-primary tl-follower">{{ $user->followers()->get()->count() }}</span></small>
        </p>
        <button class="btn btn-info btn-sm action-follow"  data-id="{{ $user->id }}"><strong>
        @if(auth()->user()->isFollowing($user))
            UnFollow
        @else
            Follow
        @endif
        </strong></button>--}}
    </div>
@endforeach
@endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
 
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.action-follow').click(function() {
        var user_id = $(this).data('id');
        var cObj = $(this);
        var c = $(this).parent("div").find(".tl-follower").text();

        $.ajax({
            type: 'POST',
            url: "",
            data: { user_id: user_id },
            success: function(data) {
                console.log(data.success);
       if (data.success==false) {
                    cObj.find("strong").text("Follow");
                    cObj.parent("div").find(".tl-follower").text(parseInt(c) -1);
                } else {
                    cObj.find("strong").text("UnFollow");
                    cObj.parent("div").find(".tl-follower").text(parseInt(c) +1);
                }
            }
        });
    });

});
</script>
@endsection 
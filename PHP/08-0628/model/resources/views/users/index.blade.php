@foreach($users as $ user)
<div>
    {{$user->id}} | {{$user->email}} | {{$user->name}}
  <form action="{{asset('users/'.$user->id)}}" method="GET">
    <button type="submit">Xem Chi Tiet</button>
  </form>
</div>
@endforeach
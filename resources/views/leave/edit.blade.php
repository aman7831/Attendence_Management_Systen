

<form action="/leave/{{$leave->id}}" method="post">
@csrf

from
<input type="date" name="from" value="{{$leave->from}}">
to
<input type="date" name="to" value="{{$leave->to}}">
reason
<input type="text" name="reason" value="{{$leave->reason}}">

</form>





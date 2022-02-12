
<table>
    <a href="/leave/create">add</a>
    <tr>
        <td>SN</td>
        <td>From</td>
        <td>TO</td>
        <td>Reasons</td>
        <td></td>        
    </tr>
    @foreach($leaves as $key => $leave )
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$leave->from}}</td>
        <td>{{$leave->to}}</td>
        <td>{{$leave->reason}}</td>
        <td><a href="/leave/{{$leave->id}}/edit">edit</a></td>
        <td><a href="/leave/{{$leave->id}}">delete</a></td>

    </tr>
    @endforeach
    

</table>



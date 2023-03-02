@foreach($row->roles as $role)
    <span class="badge bg-light-info sub-heading">{{$role->name}}</span>
@endforeach
{{--<span class="badge bg-light-info">{{$row->roles[0]->name}}</span>--}}

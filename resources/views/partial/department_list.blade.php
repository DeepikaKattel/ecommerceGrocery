@foreach ($departments as $department)
    <li class="dropdown menu-item">
        <a href="/department/{{$department->id}}" >{{$department->department_name}}</a>
    </li><!-- /.menu-item -->
@endforeach


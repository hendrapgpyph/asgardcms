@if($group->shouldShowHeading())
    <li class="nav-small-cap">{{ $group->getName() }}</li>
@endif

@foreach($items as $item)
    {!! $item !!}
@endforeach

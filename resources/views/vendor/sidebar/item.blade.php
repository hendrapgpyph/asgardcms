<li class="@if($item->getItemClass()){{ $item->getItemClass() }}@endif @if($active)active @endif">

    @foreach($appends as $append)
        {!! $append !!}
    @endforeach
    
    <a href="{{ $item->getUrl() }}" class="@if(count($appends) > 0) hasAppend @endif  @if($item->hasItems()) has-arrow @endif waves-effect waves-dark item" @if($item->getNewTab())target="_blank"@endif>
        <i class="{{ $item->getIcon() }}"></i>
        <span class="hide-menu">{{ $item->getName() }}</span>

        @foreach($badges as $badge)
            {!! $badge !!}
        @endforeach
    </a>

    

    @if(count($items) > 0)
        <ul aria-expanded="false" class="collapse treeview-menu" style="margin-top: -6px;">
            @foreach($items as $item)
                {!! $item !!}
            @endforeach
        </ul>
    @endif
</li>


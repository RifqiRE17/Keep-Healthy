@if($paginator->lastPage() > 1)
<li><a href="{{$paginator->url(1)}}" class="w3-bar-item w3-button w3-hover-black">
        << </a>
</li>
@for($i = 1; $i <= $paginator->lastPage(); $i ++)
    @if ($paginator->currentPage() == $i)
    <li class="w3-bar-item w3-button"><a href="{{$paginator->url($i) }}">{{$i}}</a></li>
    @else
    <li><a href="{{$paginator->url($i) }}" class="w3-bar-item w3-button w3-hover-black">{{$i}}</a></li>
    @endif
    @endfor
    <li><a href="{{$paginator->url($paginator->lastPage())}}"><i class="w3-bar-item w3-button w3-hover-black">>></i></a>
    </li>
    </ul>

    @endif
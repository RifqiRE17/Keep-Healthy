 <!-- @if($paginator->lastPage() > 1)
 <div class="row">
     <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
         <div class="btn-group me-2" role="group" aria-label="First group">
             <li><a href="{{$paginator->url(1)}}" class="w3-bar-item w3-button w3-hover-black"><button type="button"
                         class="btn btn-secondary text-white">
                         << </button></a>
             </li>
         </div>
         @for($i = 1; $i <= $paginator->lastPage(); $i ++)
             @if ($paginator->currentPage() == $i)
             <div class="btn-group me-2" role="group" aria-label="Second group">
                 <li class="w3-bar-item w3-button"><a href="{{$paginator->url($i) }}">{{$i}}</a></li>

                 @else
                 <li><a href="{{$paginator->url($i) }}" class="w3-bar-item w3-button w3-hover-black">{{$i}}</a></li>
                 @endif
                 @endfor
                 <li><a href="{{$paginator->url($paginator->lastPage())}}"><i
                             class="w3-bar-item w3-button w3-hover-black">>></i></a>
                 </li>

             </div>
     </div>
     @endif -->


 @if($paginator->lastPage() > 1)
 <div class="row" >
     <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
         <div class="btn-group me-2" role="group" aria-label="First group">
             <li> <a href="{{$paginator->url(1)}}"><button type="button" style="background-color:#6266EA;"
                         class="btn btn-secondary text-white">Previous</button></a></li>
         </div>
         @for($i = 1; $i <= $paginator->lastPage(); $i ++)
             @if ($paginator->currentPage() == $i)
             <div class="btn-group me-2" role="group" aria-label="Second group">
                 <li> <a href="{{$paginator->url($i) }}"> <button type="button"
                             class="btn btn-light" style="background-color:#6266EA;">{{$i}}</button></a></li>
             </div>
             @else
             <div class="btn-group me-2" role="group" aria-label="Second group">
                 <li> <a href="{{$paginator->url($i) }}"> <button type="button" class="btn btn-secondary text-white" style="background-color:#6266EA;">
                             {{$i}}
                         </button></a></li>
             </div>
             @endif
             @endfor
             <div class="btn-group" role="group" aria-label="Third group">
                 <li> <a href="{{$paginator->url($paginator->lastPage())}}"> <button type="button"
                             class="btn btn-secondary text-white" style="background-color:#6266EA;">Next</button></a></li>
             </div>
     </div>
 </div>
 @endif
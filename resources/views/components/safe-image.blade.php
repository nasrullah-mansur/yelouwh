<img src="{{ $src }}" 
     alt="{{ $alt }}" 
     class="{{ $class }}"
     @if($fallback)
     onerror="this.onerror=null; this.src='{{ $fallback }}';"
     @endif
     @foreach($attributes as $key => $value)
     {{ $key }}="{{ $value }}"
     @endforeach
/> 
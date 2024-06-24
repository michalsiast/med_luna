<ul class="nav navbar-nav">
    @if($items->count() > 0)
        @foreach($items as $item)
            @php
                $isActive = false;
                $url = null;
                $target = '_self';
                if($item->page) {
                    $url = route($item->page->type);
                } else {
                    $url = url()->to($item->url);
                }
                if($item->target) {
                    $target = $item->target;
                }
                $isActive = request()->fullUrlIs($url);
            @endphp
            @if($item->navItems->count() > 0)
                <li class="dropdown nav-item {{ $isActive ? 'active' : '' }}">
                    <a class="nav-link" href="{{$url}}" data-bs-toggle="dropdown">{{ $item->label }}<i class="fa-solid fa-plus"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($item->navItems as $subItem)
                            @php
                                $isActive = false;
                                $url = null;
                                $target = '_self';
                                if($subItem->page) {
                                    $url = route($subItem->page->type);
                                } else {
                                    $url = url()->to($subItem->url);
                                }
                                if($subItem->target) {
                                    $target = $subItem->target;
                                }
                                $isActive = request()->fullUrlIs($url);
                            @endphp
                            <li class="{{ $isActive ? 'active' : '' }}">
                                <a class="dropdown-item" href="{{$url}}">{{ $subItem->label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="nav-item {{ $isActive ? 'active' : '' }}">
                    <a class="nav-link" href="{{$url}}">{{ $item->label }}</a>
                </li>
            @endif
        @endforeach
    @endif
</ul>

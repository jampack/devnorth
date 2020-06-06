<div class="breadcrumb--area white-bg-breadcrumb">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class="breadcrumb-content">
          <h2 class="breadcrumb-title">{{$title}}</h2>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              @foreach($breadcrumbs as $breadcrumb)
                @if(!$breadcrumb['is_active'])
                  <li class="breadcrumb-item"><a href="{{$breadcrumb['url']}}">{{$breadcrumb['title']}}</a></li>
                @else
                  <li class="breadcrumb-item active" aria-current="page"><a href="{{$breadcrumb['url']}}">{{$breadcrumb['title']}}</a></li>
                @endif
              @endforeach
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

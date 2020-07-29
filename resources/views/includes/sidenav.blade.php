<div class="col-sm-3 col-md-3">
  <ul id="accordion" class="accordion hidden-xs"  style="margin-top: 20px;">
  <div class="panel-default" style="margin-bottom: 0px;">
    <div class="panel-heading"><a href="{{ URL('/articles') }}"> Svi proizvodi</a> <i class="fa fa-chevron-down"></i></div>
  </div>
  @foreach ($categories as $category)
    <li>
        <div class="link">{{ $category->title }} <i class="fa fa-chevron-down"></i></div>
        <ul class="submenu">
{{--         @foreach ($subcat as $sub)
          @if ($category->category_id == $sub->fk_category_id)
          <li><a href="{{ URL('/articles/subcat/').'/'.$sub->sub_cat_id }}">{{ $sub->title }}</a></li>
          @endif
        @endforeach  --}}
        </ul>
    </li>
  @endforeach
  </ul>
</div>
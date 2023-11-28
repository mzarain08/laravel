<div>
    <a href="/contacts/create">Contact</a>
</div>
<div class="body">
    @if(Session::has('contactAdded'))
    {{Session::get('contactAdded')}}
    @endif
</div>

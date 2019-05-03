@if ($errors->any())
        
    <div class="alert text-right alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $item)
            <li>
                {{  $item }}
            </li>
            @endforeach
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger my-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif

@if(session()->get("sucesso"))
    <div class="row my-3">
        <div class="col-12">
            <div class="alert alert-success">
                {{session()->get("sucesso")}}
            </div>
        </div>
    </div>
@endif

@if(session()->get("erro"))
    <div class="row my-3">
        <div class="col-12">
            <div class="alert alert-danger">
                {{session()->get("erro")}}
            </div>
        </div>
    </div>
@endif
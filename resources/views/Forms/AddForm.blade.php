<div class="w3-container" id="contact">
    <h2>All TODO Lists</h2>
    <form action="{{ action('UserController@create')}}" method="post">
        {{ csrf_field() }}
        <p>
            <input class="w3-input w3-border" type="text" placeholder="Add List Title" required name="sTodoList">
        </p>
        <button type="submit" class="w3-btn w3-padding w3-green w3-third">Add</button>
    </form>
</div>

<style type="text/css">

    .isa_info, .isa_success, .isa_warning, .isa_error {
        margin: 10px 0px;
        padding: 12px;

    }

    .isa_info {
        color: #00529B;
        background-color: greenyellow;
    }

    .isa_info i, .isa_success i, .isa_warning i, .isa_error i {
        margin: 10px 22px;
        font-size: 2em;
        vertical-align: middle;
    }

    .isa_error {
        color: #D8000C;
        background-color: #FFBABA;
    }

    .no {
        text-decoration: none;
    }

    .no:hover {
        color: red;
    }

    a.log_error{
        text-decoration: none;
    }

</style>

@if(Session::has('todo_errors'))
    <div class="isa_error">
        <i class="fa fa-times-circle"></i>
        {!! session('todo_errors') !!}
    </div>
@endif

@if(Session::has('success_todo'))
    <div class="isa_info">
        <i class="fa fa-info-circle"></i>
        {!! session('success_todo') !!}
    </div>
@endif


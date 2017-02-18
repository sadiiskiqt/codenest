<div class="w3-container" id="contact">
    <h2>New TODO List</h2>
    <form action="{{ action('UserController@create')}}" method="post">
        {{ csrf_field() }}
        <p>
            <input class="w3-input w3-border" type="text" placeholder="Add List Title" required name="sTodoList">
        </p>
        <button type="submit" class="w3-btn w3-padding w3-green w3-third">Add</button>
    </form>
</div>
<div class="w3-container" id="contact">
    <h2>Add points to your list: {{$sTodoList}}</h2>
    <form action="{{ action('UserController@addToList')}}" method="post">
        {{ csrf_field() }}
        <p>
            <input class="w3-input w3-border" type="text" placeholder="Add List Title" required name="sList">
        </p>
        <input type="hidden" name="todo" value="<?php echo $iTodoId ?>">
        <button type="submit" class="w3-btn w3-padding w3-green w3-third">Add</button>
    </form>
</div>
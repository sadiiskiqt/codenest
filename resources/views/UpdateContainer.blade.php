<div id="subscribe" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom w3-padding-large">
        <div class="w3-container w3-white w3-center">
            <i onclick="document.getElementById('subscribe').style.display='none'"
               class="fa fa-remove w3-closebtn w3-xlarge w3-hover-text-grey w3-margin"></i>
            <form action="{{ action('UserController@update')}}" method="post">
                {{ csrf_field() }}

                <h2 class="w3-wide">Update</h2>
                <p>
                    <input class="w3-input w3-border" type="text" placeholder="" name="sUpdateList">
                </p>
                <input type="hidden" name="iTodoId" value="{{$iTodoId}}" >
                <input type="hidden" name="iListId" value="{{$iId}}" >
                <button type="submit" class="w3-btn w3-padding-large w3-green w3-margin-bottom">Submit</button>
            </form>
        </div>
    </div>
</div>
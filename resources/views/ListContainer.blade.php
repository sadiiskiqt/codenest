<div class="w3-main w3-white" style="margin-left:260px">
    <!-- Contact -->
    @include('Forms.AddForm')
    <hr>
    @foreach($aDataResults as $aDataResult)
        <div class="w3-container">
            <a href="{{ url('list/'.$aDataResult->iUserId.'/'.$aDataResult->id.'/'.$aDataResult->sTodoList.'/') }}">
                <h4>
                    <strong>{{$aDataResult->sTodoList}}</strong>
                </h4>
            </a>
            <p>{{$aDataResult->updated_at}}</p>
            <p>
                <a class="w3-btn w3-ripple w3-red" href="{{ url('del/'.$aDataResult->iUserId.'/'.$aDataResult->id.'/') }}">Delete </a>
                <a class="w3-btn w3-ripple w3-blue" href="{{ url('del/'.$aDataResult->iUserId.'/'.$aDataResult->id.'/') }}">Arhiv</a>
            </p>
        </div>
        <hr>
    @endforeach
</div>

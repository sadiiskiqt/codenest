@extends('layouts.app')

@section('content')
    <!-- Sidenav/menu -->
    @include('Nav')

    <div class="w3-main w3-white" style="margin-left:260px">
        <!-- Contact -->
        @include('Forms.AddToTodoList')
        <hr>
        @if(!empty($aDataList))
        </br>
        <a class="w3-btn w3-ripple w3-blue" href="{{ url('excel/'.$iTodoId.'/') }}">Download List to Excel</a>
        <hr>
            @foreach($aDataList as $aDataResult)
                <div class="w3-container">
                    <h4>
                        <strong>{{$aDataResult->sList}}</strong>
                    </h4>
                    <p>{{$aDataResult->created_at}}</p>
                    <p>
                        <a class="w3-btn w3-ripple w3-red"
                           href="{{ url('deleteList/'.$aDataResult->iTodoId.'/'.$aDataResult->id.'/') }}">Delete </a>
                        {{--<a class="w3-btn w3-ripple w3-blue"--}}
                        {{--href="{{ url('del/'.$aDataResult->iUserId.'/'.$aDataResult->id.'/') }}">Download Excel</a>--}}
                        <a class="w3-btn w3-ripple w3-green"
                           onclick="document.getElementById('subscribe').style.display='block'">Update</a>
                    </p>
                </div>
                <hr>
                <?php $iId = $aDataResult->id; ?>
            @endforeach
        @else
            <?php $iId = (!empty($iId)) ? $iId : null; ?>
            <h4>
                The <strong> {{$sTodoList}} </strong>is empty please add data.
            </h4>
        @endif
    </div>
    @include('UpdateContainer')
@endsection

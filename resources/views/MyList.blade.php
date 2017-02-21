@extends('layouts.app')

@section('content')
    <!-- Sidenav/menu -->
    @include('Nav')
    <div class="w3-main w3-white" style="margin-left:260px">
        <!-- Contact -->
        @include('Forms.AddForm')
        <hr>

        @if(!empty($aDataList))
            @foreach($aDataList as $aData)
                <div class="w3-container">
                    <a href="{{ url('list/'.$aData->iUserId.'/'.$aData->id.'/'.$aData->sTodoList.'/') }}">
                        <h4>
                            <strong>{{$aData->sTodoList}}</strong>
                        </h4>
                    </a>
                    <p>{{$aData->updated_at}}</p>
                    <p>
                        <a class="w3-btn w3-ripple w3-red" href="{{ url('del/'.$aData->iUserId.'/'.$aData->id.'/') }}">Delete </a>
                        {{--<a class="w3-btn w3-ripple w3-blue" href="{{ url('del/'.$aData->iUserId.'/'.$aData->id.'/') }}">Arhiv</a>--}}
                        <a class="w3-btn w3-ripple w3-blue" href="{{ url('list/'.$aData->iUserId.'/'.$aData->id.'/'.$aData->sTodoList.'/') }}">Add points</a>

                    </p>
                </div>
                <hr>
            @endforeach
        @else
            <h4>
                The <strong> List </strong>is empty please add data.
            </h4>
        @endif
    </div>
@endsection
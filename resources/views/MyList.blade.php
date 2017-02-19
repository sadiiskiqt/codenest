@extends('layouts.app')

@section('content')
    <!-- Sidenav/menu -->
    @include('Nav')
    <div class="w3-main w3-white" style="margin-left:260px">
        <!-- Contact -->
        @include('Forms.AddForm')
        <hr>

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
                    <a class="w3-btn w3-ripple w3-blue" href="{{ url('del/'.$aData->iUserId.'/'.$aData->id.'/') }}">Arhiv</a>
                </p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
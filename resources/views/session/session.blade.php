@extends('admin.layout.full')
@section('content')

    <div class="row">
        <div class="col 5">
            <h2 align="center">Running Session's'</h2>
            <form  align="center" action="{{ url('/active-session/'.$ses->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <select name = "session"  class="form-control">
                <option value="">--Choose Session--</option>
                    @foreach($ses as $s)
                        @if($s->Status)
                            <ul>
                                <option value="{{$s->id}}">{{$s->Session_name}}</option>
                            </ul>
                        @endif
                    @endforeach
                </select>
                <br>
                <button type="submit" name="running" class="btn btn-primary">Deactivate</button>
            </form>
        </div>
        <div class="col 5">
            <h2 align="center">Inactive Session's'</h2>
            <form  align="center" action="{{ url('/deactive-session/'.$ses->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <select name = "session"  class="form-control">
                <option value="">--Choose Session--</option>
                    @foreach($ses as $s)
                        @if($s->Status==0)
                            <ul>
                                <option value="{{$s->id}}">{{$s->Session_name}}</option>
                            </ul>
                        @endif
                    @endforeach
                </select>
                <br>
                <button type="submit" name="Inactive" class="btn btn-primary">Activated</button>
            </form>
        </div>
    </div>

@stop
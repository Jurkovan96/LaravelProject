@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form method="post" action="{{ url('store') }}" accept-charset="UTF-8">
                            <div class="form-group">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            </div>


                            <div class="form-group">

                                <label> Select how satisfied you are:</label>
                                <select name="answer">
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                    <option value="Neutral">Neutral</option>
                                    <option value="Bad">Bad</option>
                                </select>
                            </div>


                            <button class="btn btn-primary mb-2" type="submit" name="save">Save</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


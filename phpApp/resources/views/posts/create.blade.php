@extends('layouts.app')

@section('content')


    <div class="col-lg-4 col-md-4 col-sm-4 container justify-content-center">
        <div class="jumbotron my-auto">
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
            <br>
            <a href="/welcome" class="btn btn-primary mb-2">Go back</a>

        </div>

    </div>

@endsection

    @extends('layouts.app')

    @section('content')
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">

                <h2>{{$airport->name}}</h2>
            <div class="card">
                <div class="card-header">Create Airport</div>

                <div class="card-body">

                    <table class="table">
                        <tr>
                            <th>Number<th>
                            <th>Time<th>
                            <th>City</th>
                            <th>Status</th>
                        </tr>

                        @foreach($flights as $flight)
                                <tr>
                                <th>{{$flight->number}}<th>
                                <th>{{$flight->time}}<th>
                                <th>{{$flight->city}}</th>
                                <th>{{$flight->status}}</th>
                            </tr>
                        @endforeach

                    </table>


                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

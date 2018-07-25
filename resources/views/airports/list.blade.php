 @extends('layouts.app')

    @section('content')




    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Airport</div>

                <div class="card-body">
                        <table class="table" style="width:100%">"
                           <tr>
                            <th> City</th>
                            <th> Name </th>
                            <th> URL </th> 
                            <th> View</th>
                        </tr>

                        <tr  v-for="airport in airports">
                            <td> @{{airport.city}} </td>
                            <td> @{{airport.name}} </td>
                            <td>  @{{airport.url}}</td>
                            <td> <a :href="'/airports/'+airport.id">Open</a></td>
                            
                        </tr>

                       </table>      
                            


                 
                
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

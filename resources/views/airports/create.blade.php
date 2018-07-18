    @extends('layouts.app')

    @section('content')
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Airport</div>

                <div class="card-body">
                   <form>
                     <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">City</label>
                                 <div class="col-sm-10">
                                     <input v-model="city" type="text" class="form-control" id="city" placeholder="city">
                                </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                     <input v-model="name" type="text" class="form-control" id="name" placeholder="name">
                                 </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-sm-2 col-form-label">URL</label>
                                 <div class="col-sm-10">
                                     <input v-model="url" type="text" class="form-control" id="url" placeholder="url">
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="lat" class="col-sm-2 col-form-label">Lattitude</label>
                                 <div class="col-sm-10">
                                     <input v-model="lat" type="text" class="form-control" id="lat" placeholder="lattitude">
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="long" class="col-sm-2 col-form-label">Longitude</label>
                                 <div class="col-sm-10">
                                     <input v-model="long" type="text" class="form-control" id="long" placeholder="longitude">
                                </div>
                        </div>
                         <div class="form-group row">
                            <label for="element_id" class="col-sm-2 col-form-label">Element ID</label>
                                 <div class="col-sm-10">
                                     <input v-model="element_id" type="text" class="form-control" id="element_id" placeholder="elemet ID">
                                </div>
                        </div>


                 </form>
                <div class="pull-right">

                 <button  @click ="save()">Save</button>
                </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection

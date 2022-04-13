<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Basic Table</h5>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead class="bg-light">
                    <tr class="border-0">
                        <th class="border-0">Id</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Tıtle</th>
                        <th class="border-0">Keywords</th>
                        <th class="border-0">Description</th>
                        <th class="border-0">Status</th>
                        <th class="border-0" style="width: 40px">Edit</th>
                        <th class="border-0" style="width: 40px">Delete</th>
                        <th class="border-0" style="width: 40px">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->image}}</td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->status}}</td>
                            <td><a href="laravelAdmin/category/edit{{$rs->ıd}}/">Edit</a></td>
                            <td><a href="laravelAdmin/category/delete{{$rs->ıd}}/">Delete</a></td>
                            <td><a href="laravelAdmin/category/show{{$rs->ıd}}/">Show</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

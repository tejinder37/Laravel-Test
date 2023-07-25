<x-app-layout>
    <div class="content-wrapper">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center ">
                        <h4 class="card-title fw-bold fs-5">Users List</h4>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center ">
                                <th class="py-3 fw-bold fs-6"> Sr .no</th>
                                <th class="py-3 fw-bold fs-6"> Name </th>
                                <th class="py-3 fw-bold fs-6">Email </th>
                                <th class="py-3 fw-bold fs-6"> Number </th>
                                <th class="py-3 fw-bold fs-6"> Age </th>
                                <th class="py-3 fw-bold fs-6"> Created At </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr class="text-center">
                                <td> {{$loop->iteration}}</td>
                                <td> {{$user->name}} </td>
                                <td>{{$user->email}}</td>
                                <td> {{$user->number}} </td>
                                <td> {{$user->age}} </td>
                                <td> {{$user->created_at}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
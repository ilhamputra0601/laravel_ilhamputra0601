<x-app-layout>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data <b>Rumah Sakit</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Rumah Sakit</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>
                                <a href="#editEmployeeModal{{ $data->id }}" data-id="{{ $data->id }}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#" class="delete" data-toggle="modal" data-id="{{ $data->id }}"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <!-- Edit Modal HTML -->
    <div id="editEmployeeModal{{ $data->id }}" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="hospital/{{ $data->id }}">
                    @method('put')
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nama Rumah Sakit</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name',$data->name) }}">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control  @error('email')is-invalid @enderror"  id="email" name="email"  required value="{{ old('email',$data->email) }}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control @error('address')is-invalid @enderror" id="address" name="address"  required value="{{ old('address',$data->address) }}">
                            @error('address')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="text" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone"  required value="{{ old('phone',$data->phone) }}">
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
                            @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form  method="post" action="hospital" class="mb-5">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Nama Rumah Sakit</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name') }}">
                            @error('name')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control  @error('email')is-invalid @enderror"  id="email" name="email"  required value="{{ old('email') }}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control @error('address')is-invalid @enderror" id="address" name="address"  required value="{{ old('address') }}">
                            @error('address')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon</label>
                            <input type="text" class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone"  required value="{{ old('phone') }}">
                            @error('phone')<div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn bg-danger btn-danger" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn bg-success btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal HTML -->

    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="hospital/{{ $data->id }}" method="post" >
                    @method('delete')
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn bg-secondary btn-secondary" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn bg-danger btn-danger"  value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    $(document).ready(function() {

        // Delete Employee
        $('.delete').click(function(e) {
            e.preventDefault();
            var employeeId = $(this).data('id');
            $('#deleteEmployeeModal form').attr('action', 'hospital/' + employeeId);
            $('#deleteEmployeeModal').modal('show');
        });

        // Submit Delete Form via Ajax
        $('#deleteEmployeeModal form').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            var data = form.serialize();

            $.ajax({
                url: url,
                type: method,
                data: data,
                success: function(response) {
                    // Handle success response
                    $('#deleteEmployeeModal').modal('hide');
                    // Refresh the page or remove the specific row from the table
                    location.reload();
                },
                error: function(xhr) {
                    // Handle error response
                    // Display error message or perform any other action
                }
            });
        });
    });
</script>


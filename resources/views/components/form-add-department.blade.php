<div class="modal fade" id="formModalDepartment" tabindex="-1" aria-labelledby="formModalDepartmentLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="formModalDepartmentLabel">Create New Department</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <ul class="alert alert-danger list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>- {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="row row-cols-2 gb-3">
                        <x-input-field id="DepartmentID" name="DepartmentID" type="number" classnameDiv="col mb-3"
                            classnameInput="form-control" label="DepartmentID" classnameLabel="form-label"
                            readonly="true" />
                        <x-input-field id="Name" name="Name" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="Name" classnameLabel="form-label" />
                        <x-input-field id="GroupName" name="GroupName" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="GroupName" classnameLabel="form-label" />
                        <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime" classnameDiv="col mb-3"
                            classnameInput="form-control" label="ModifiedDate" classnameLabel="form-label" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

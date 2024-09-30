<div class="modal fade" id="formModalEmployee" tabindex="-1" aria-labelledby="formModalEmployeeLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="formModalEmployeeLabel">Create New Employee</h3>
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

                <form action="{{ route('admin.employee.store') }}" method="POST">
                    @csrf
                    <div class="row row-cols-3 gb-3">
                        <x-input-field id="BusinessEntityID" name="BusinessEntityID" type="number"
                            classnameDiv="col mb-3" classnameInput="form-control" label="BusinessEntityID"
                            classnameLabel="form-label" readonly="true" />
                        <x-input-field id="NationalIDNumber" name="NationalIDNumber" type="text"
                            classnameDiv="col mb-3" classnameInput="form-control" label="NationalIDNumber"
                            classnameLabel="form-label" />
                        <x-input-field id="LoginID" name="LoginID" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="LoginID" classnameLabel="form-label" />
                        <x-input-field id="OrganizationNode" name="OrganizationNode" type="text"
                            classnameDiv="col mb-3" classnameInput="form-control" label="OrganizationNode"
                            classnameLabel="form-label" />
                        <x-input-field id="OrganizationLevel" name="OrganizationLevel" type="number"
                            classnameDiv="col mb-3" classnameInput="form-control" label="OrganizationLevel"
                            classnameLabel="form-label" />
                        <x-input-field id="JobTitle" name="JobTitle" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="JobTitle" classnameLabel="form-label" />
                        <x-input-field id="BirthDate" name="BirthDate" type="date" classnameDiv="col mb-3"
                            classnameInput="form-control" label="BirthDate" classnameLabel="form-label" />
                        <x-input-field id="MaritalStatus" name="MaritalStatus" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="MaritalStatus" classnameLabel="form-label" />
                        <x-input-field id="Gender" name="Gender" type="text" classnameDiv="col mb-3"
                            classnameInput="form-control" label="Gender" classnameLabel="form-label" />
                        <x-input-field id="HireDate" name="HireDate" type="date" classnameDiv="col mb-3"
                            classnameInput="form-control" label="HireDate" classnameLabel="form-label" />
                        <x-input-field id="VacationHours" name="VacationHours" type="number" classnameDiv="col mb-3"
                            classnameInput="form-control" label="VacationHours" classnameLabel="form-label" />
                        <x-input-field id="SickLeaveHours" name="SickLeaveHours" type="number" classnameDiv="col mb-3"
                            classnameInput="form-control" label="SickLeaveHours" classnameLabel="form-label" />
                        <x-input-field id="ModifiedDate" name="ModifiedDate" type="datetime-local"
                            classnameDiv="col mb-3" classnameInput="form-control" label="ModifiedDate"
                            classnameLabel="form-label" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button"
                    class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>KEPALA SURAT</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                    class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>PENERIMA</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                    class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>PEMERIKSA</p>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1" >
        <div class="col-lg-12">
            <div class="col-md-12">
                <h3> KEPALA SURAT</h3>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" wire:model="name" class="form-control">

                </div>
                <div class="form-group">
                    <label for="registration_id">Registration ID:</label>
                    <input type="text" wire:model="registration_id" class="form-control" />

                </div>

                <div class="form-group">
                    <label for="gender">Select Gender:</label>
                    <select wire:model="gender" class="form-control">
                        <option>Choose Option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>

                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                    type="button">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
        <div class="col-lg-12">
            <div class="col-md-12">
                <h3> PENERIMA</h3>

                <div class="form-group">
                    <label for="mobile">Mobile</label><br />
                    <input type="text" wire:model="mobile" class="form-control" />

                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea wire:model="address" class="form-control"></textarea>

                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-lg-12">
            <div class="col-md-12">
                <h3> PEMERIKSA</h3>

                <table class="table">
                    <tr>
                        <td>Name:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Registration Id:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mobile:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td></td>
                    </tr>
                </table>

                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>
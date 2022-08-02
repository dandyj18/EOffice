<div>
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
                <p>STEP 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button"
                    class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>STEP 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button"
                    class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                    disabled="disabled">3</a>
                <p>STEP 3</p>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1" >
        <div class="col-lg-12">
            <div class="col-md-12">
                <h3> KEPALA SURAT</h3>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Jenis Surat</label>
                        <select wire:model="jenis" name="jenis" id="jenis" class="form-control">
                            <option>Pilih Jenis Surat</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Tanggal Surat</label>
                        <input type="date" wire:model="registration_id" name="tgl_surat" id="tgl_surat" class="form-control" />
                    </div>
                </div>
                <div class="row"> 
                    <div class="form-group col-md-6">
                        <label for="gender">Pengirim Pertama</label>
                        <select wire:model="pengirim" name="pengirim" id="pengirim" class="form-control">
                            <option>Pilih Pengirim</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gender">Pembuat surat</label>
                        <select wire:model="user" name="users_id" id="users_id" class="form-control">
                            <option>Pilih Pembuat Surat</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="perihal">Perihal</label>
                        <input type="text"class="form-control input-default" name="perihal" id="perihal" placeholder="Perihal" required="required">
                    </div>
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
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="nama_instansi">Nama Instansi/Lembaga/Perusahaan</label>
                        <input type="text"class="form-control input-default" name="nama_instansi" id="nama_instansi" placeholder="nama_instansi" required="required">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="penerima">Nama Penerima</label>
                        <input type="text" class="form-control input-default" name="penerima" id="penerima" placeholder="Penerima" required="required">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label class="kota_instanti">Kota / Kabupaten</label>
                    <input type="text" class="form-control input-default" name="kota_instanti" id="kota_instanti" placeholder="Kota / Kabupaten" required="required">
                </div>
                <div class="form-group col-md-6">
                    <label class="alamat_instansi">Alamat</label>
                    <textarea class="form-control input-default" name="alamat_instanti" id="alamat_instanti" placeholder="Alamat" required="required"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label class="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control input-default" name="kode_pos" id="kode_pos" placeholder="Kode Pos" required="required">
                </div>
                <div class="form-group col-md-6">
                    <label class="email_instansi">Email Instansi / Lembaga / Perusahaan</label>
                    <input type="text" class="form-control input-default" name="email_instansi" id="email_instansi" placeholder="Email Instansi / Lembaga / Perushaan" required="required">
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
                
                <div class="form-group col-md-6">
                    <label class="form-label">Pemeriksa (Atasan) </label>
                    <select wire:model="atasan" name="atasan" id="atasan" class="form-control">
                        <option>Pilih Atasan</option>

                        @foreach ($user as $u)
                            <option value="{{$u->id}}">{{$u->name}}</option>                            
                        @endforeach

                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label class="form-label">Pemeriksa Tingkat Dua</label>
                    <select wire:model="jenis" name="jenis" id="jenis" class="form-control">
                        <option>Pilih Tingkat Dua</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label class="penerima">File Surat</label>
                    <input type="file" class="form-control input-default" name="penerima" id="penerima"  required="required">
                </div>
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button"
                    wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>
</div>
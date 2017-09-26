			<div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Kemaskini Fail</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Utama</a></li>
                            <li class="active">Fail Kerja</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Maklumat Fail</h3>
                            <p class="text-muted m-b-30 font-13"> Sila isi dengan lengkap </p>
                            <form class="form" method="post" action="<?php echo base_url();?>FailKerja/update/<?php echo $FailData->FID;?>">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">No. Fail</label>
                                    <div class="col-10">
                                        <input name="NoFail" class="form-control" type="text" value="<?php echo $FailData->NoFail;?>" placeholder="XXXX/X/XX/000-0-0/00-0000" required="" oninvalid="this.setCustomValidity('Sila isi ruangan ini.')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nama Kerani</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="<?php echo $FailData->FullName;?>" readonly>
                                        <input name="KeraniID" type="hidden" value="<?php echo $FailData->KeraniID;?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Jenis Fail</label>
                                    <div class="col-10">
                                        <select required="" name="JenisFailID" class="custom-select col-12" oninvalid="this.setCustomValidity('Sila pilih dari senarai ini.')" oninput="setCustomValidity('')">
                                            <option value="">Sila Pilih...</option>
											<?php foreach($JenisFailList as $eachJenisFail):?>
                                            <option <?php if($FailData->JenisFailID == $eachJenisFail->ID):echo 'selected';endif;?> value="<?php echo $eachJenisFail->ID;?>"><?php echo $eachJenisFail->NamaJenisFail;?></option>
											<?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Keterangan</label>
                                    <div class="col-10">
                                        <textarea name="Keterangan" class="form-control" rows="5"><?php echo $FailData->Keterangan;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Tarikh Permohonan / Dokumen</label>
                                    <div class="col-10">
                                        <input name="TarikhPermohonan" class="form-control datepickerEdit" type="text" value="<?php echo date('d/m/Y', strtotime($FailData->TarikhPermohonan));?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Tarikh Buka Fail</label>
                                    <div class="col-10">
                                        <input name="TarikhBukaFail" class="form-control datepickerEdit" type="text" value="<?php echo date('d/m/Y', strtotime($FailData->TarikhBukaFail));?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Nama SO</label>
                                    <div class="col-10">
                                        <select required="" name="SOID" class="custom-select col-12" oninvalid="this.setCustomValidity('Sila pilih dari senarai ini.')" oninput="setCustomValidity('')">
                                            <option value="">Sila Pilih...</option>
											<?php foreach($SOList as $eachSO):?>
                                            <option <?php if($FailData->SOID == $eachSO->ID):echo 'selected';endif;?> value="<?php echo $eachSO->ID;?>"><?php echo $eachSO->FullName;?></option>
											<?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
								<?php if($this->session->userdata("LoggedUser")["Group"] == 2):?>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Tarikh Terima</label>
                                    <div class="col-10">
                                        <input name="TarikhTerima" class="form-control datepickerEdit" type="text" value="<?php echo date('d/m/Y', strtotime($FailData->TarikhBukaFail));?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Tarikh Siap</label>
                                    <div class="col-10">
                                        <input name="TarikhSiap" class="form-control datepickerEdit" type="text" value="<?php echo date('d/m/Y', strtotime($FailData->TarikhBukaFail));?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">Catatan</label>
                                    <div class="col-10">
                                        <select required="" name="Catatan" class="custom-select col-12" oninvalid="this.setCustomValidity('Sila pilih dari senarai ini.')" oninput="setCustomValidity('')">
                                            <option value="">Sila Pilih...</option>
                                            <option <?php if(isset($eachSO->Catatan)):if($eachSO->Catatan == 1):echo 'selected';endif;endif;?> value="1">Dalam Semakan</option>
                                            <option <?php if(isset($eachSO->Catatan)):if($eachSO->Catatan == 2):echo 'selected';endif;endif;?> value="2">Dalam Proses</option>
                                            <option <?php if(isset($eachSO->Catatan)):if($eachSO->Catatan == 3):echo 'selected';endif;endif;?> value="3">Maklum Balas / Kuiri</option>
                                        </select>
                                    </div>
                                </div>
								<?php endif;?>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Simpan</button>
                                <button type="submit" class="btn btn-inverse waves-effect waves-light">Batal</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                </div>
            </div>
            <!-- /.container-fluid -->
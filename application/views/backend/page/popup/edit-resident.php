<form method="post" action="<?php echo base_url('index.php/dashboard/edit-resident/'.$resident_data->resident_id); ?>">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" value="<?php echo $resident_data->first_name; ?>" id="firstname" class="form-control" required />
                    <span><?= form_error('firstname') ?></span>
                </div>
                <br>
                <div class="form-group col-md-3">
                    <label for="middlename">Middle Name:</label>
                    <input type="text" name="middlename" value="<?php echo $resident_data->middlename; ?>" id="middlename" class="form-control" required />
                    <span><?= form_error('middlename') ?></span>
                </div>
                <br>
                <div class="form-group col-md-3">
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" value="<?php echo $resident_data->last_name; ?>" id="lastname" class="form-control" required />
                    <span><?= form_error('lastname') ?></span>
                </div>
                <div class="form-group col-md-2">
               <label for="extension">Name Extension</label>
               <input type="text" name="extension" value="<?php echo $resident_data->extension; ?>" id="extension" class="form-control"  />
               <span class="text-danger"><?= form_error('extension') ?></span>
            </div>

            </div>
            <br>

            <div class="form-row">
            <div class="form-group col-md-3">
               <label for="sex">Sex</label>
               <select name="sex"  value="<?php echo $resident_data->sex; ?>" id="sex" class="form-control" required>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
               </select>
               <span class="text-danger"><?= form_error('sex') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="height">Height (cm)</label>
               <input type="text" name="height" value="<?php echo $resident_data->height; ?>" id="height"   class="form-control" required />
               <span class="text-danger"><?= form_error('height') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="weight">Weight (kg)</label>
               <input type="text" name="weight" value="<?php echo $resident_data->weight; ?>" id="weight" class="form-control" required />
               <span class="text-danger"><?= form_error('weight') ?></span>
            </div>
            <div class="form-group col-md-2">
               <label for="bloodType">Blood Type</label>
               <input type="text" name="bloodType" value="<?php echo $resident_data->bloodType; ?>" id="bloodType" class="form-control" required />
               <span class="text-danger"><?= form_error('bloodType') ?></span>
            </div>

            <div class="form-group col-md-3">
               <label for="birth_date">Birth Date</label>
               <input type="date" name="birth_date" value="<?php echo $resident_data->birth_date; ?>" id="birth_date" class="form-control" required />
               <span class="text-danger"><?= form_error('birth_date') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="birthplace">Birth Place</label>
               <input type="text" name="birthplace" value="<?php echo $resident_data->birthplace; ?>" id="birthplace" class="form-control" required />
               <span class="text-danger"><?= form_error('birthplace') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="nationality">Nationality</label>
               <input type="text" name="nationality" value="<?php echo $resident_data->nationality; ?>" id="nationality" class="form-control" required />
               <span class="text-danger"><?= form_error('nationality') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-2">
               <label for="purok">Purok</label>
               <select name="purok" value="<?php echo $resident_data->purok; ?>" id="purok" class="form-control" required>
                  <option value="Purok 1">Purok 1</option>
                  <option value="Purok 2">Purok 2</option>
                  <option value="Purok 3">Purok 3</option>
                  <option value="Purok 4">Purok 4</option>
                  <option value="Purok 5">Purok 5</option>
                  <option value="Purok 6">Purok 6</option>
                  <option value="Purok 7">Purok 7</option>
               </select>
               <span class="text-danger"><?= form_error('purok') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="barangay">Barangay</label>
               <input type="text" name="barangay" value="<?php echo $resident_data->barangay; ?>" id="barangay" class="form-control" required />
               <span class="text-danger"><?= form_error('barangay') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="municipality">Municipality</label>
               <input type="text" name="municipality" value="<?php echo $resident_data->municipality; ?>" id="municipality" class="form-control" required />
               <span class="text-danger"><?= form_error('municipality') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="province">Province</label>
               <input type="text" name="province" value="<?php echo $resident_data->province; ?>" id="province" class="form-control" required />
               <span class="text-danger"><?= form_error('province') ?></span>
            </div>     
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="contact">Contact</label>
               <input type="text" name="contact" value="<?php echo $resident_data->contact; ?>" id="contact" class="form-control" required />
               <span class="text-danger"><?= form_error('contact') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="email">Email</label>
               <input type="email" name="email" value="<?php echo $resident_data->email; ?>" id="email" class="form-control" required />
               <span class="text-danger"><?= form_error('email') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="civil">Civil Status</label>
               <select name="civil" value="<?php echo $resident_data->civil; ?>" id="civil" class="form-control" required>
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="widowed">Widowed</option>
                  <option value="separated">Separated</option>
               </select>
               <span class="text-danger"><?= form_error('civil') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="religion">Religion</label>
               <input type="text" name="religion"  value="<?php echo $resident_data->religion; ?>" id="religion" class="form-control" required />
               <span class="text-danger"><?= form_error('religion') ?></span>
            </div>
            
            <div class="form-group col-md-3">
               <label for="educational">Educational Attainment</label>
               <select name="educational" value="<?php echo $resident_data->educational; ?>" id="educational" class="form-control" required>
               
               <option value="No Schooling Completed">No schooling completed</option>
               <option value="Elementary Graduate">Elementary Graduate</option>
               <option value="Elementary Undergraduate">Elementary Undergraduate</option>
               <option value="High School Graduate">High School Graduate</option>
               <option value="HighSchool Undergraduate">HighSchool Undergraduate</option>
               <option value="College UnderGraduate">College UnderGraduate</option>
               <option value="Vocational">Vocational</option>
               <option value="Bachelor's Degree">Bachelor's Degree</option>
               <option value=">Master Degree">Master Degree</option>
               <option value="Doctorate Degree">Doctorate Degree</option>
            </select>
               <span class="text-danger"><?= form_error('educational') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="occupation">Occupation</label>
               <input type="text" name="occupation" value="<?php echo $resident_data->occupation; ?>" id="occupation" class="form-control" required />
               <span class="text-danger"><?= form_error('occupation') ?></span>
            </div>
            <div class="form-group col-md-2">
               <label for="monthlyIncome">Monthly Income</label>
               <input type="text" name="monthlyIncome"  value="<?php echo $resident_data->monthlyIncome; ?>" id="monthlyIncome" class="form-control" required />
               <span class="text-danger"><?= form_error('monthlyIncome') ?></span>
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-3">
               <label for="householdmember">Total Household Member</label>
               <input type="text" name="householdmember"  value="<?php echo $resident_data->householdmember; ?>" id="householdmember"  class="form-control" required />
               <span class="text-danger"><?= form_error('householdmember') ?></span>
            
            </div>
            <div class="form-group col-md-3">
               <label for="landown">Land Ownership Status</label>
               <select name="landown" value="<?php echo $resident_data->landown; ?>" id="landown"  class="form-control" required>
            
                  <option value="owned">Owned</option>
                  <option value="landless">Landless</option>
                  <option value="tenant">Tenant</option>
                  <option value="caretaker">Caretaker</option>
               </select>
               <span class="text-danger"><?= form_error('landown') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="houseownership">House Ownership</label>
               <select name="houseownership"  value="<?php echo $resident_data->houseownership; ?>" id="houseownership" class="form-control" required>
             
                  <option value="own house">Own House</option>
                  <option value="renting">Renting</option>
                  <option value="living with Parents">Living with Parents</option>
               </select>
               <span class="text-danger"><?= form_error('houseownership') ?></span>
            </div>

         </div>
         <div class="form-group">
            <button class="btn btn-primary">Save Changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </form>
   </div>
   </div>
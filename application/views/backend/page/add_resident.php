<!-- Main Content -->
<div id="content">
   <div class="container">
   <br>
   <br>
   <div class="card shadow">
                <div class="card-header py-3">
                    <div class="card-header">
        <center>
        <h1 class="h3 mb-2 text-gray-800">BARANGAY RESIDENT INFORMATION</h1>
         </center>
</div>
<br>
<br>


        <style>
   /* Custom CSS to make the font black */
   .black-font {
      color: black;
   }
</style>
<div class="card-body">
      <form method="POST">
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="firstname" class="black-font" >First Name</label>
               <input type="text" name="firstname" class="form-control" required />
               <span class="text-danger"><?= form_error('firstname') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="middlename"class="black-font">Middle Name</label>
               <input type="text" name="middlename" class="form-control" required />
               <span class="text-danger"><?= form_error('middlename') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="lastname"class="black-font">Last Name</label>
               <input type="text" name="lastname" class="form-control" required />
               <span class="text-danger"><?= form_error('lastname') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="extension"class="black-font">Name Extension</label>
               <input type="text" name="extension" class="form-control"  />
               <span class="text-danger"><?= form_error('extension') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="sex"class="black-font">Sex</label>
               <select name="sex" class="form-control" required>
               <option value="">--Select Gender--</option>
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>
               </select>
               <span class="text-danger"><?= form_error('sex') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="height"class="black-font">Height (cm)</label>
               <input type="text" name="height" class="form-control" required />
               <span class="text-danger"><?= form_error('height') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="weight"class="black-font">Weight (kg)</label>
               <input type="text" name="weight" class="form-control" required />
               <span class="text-danger"><?= form_error('weight') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="bloodType"class="black-font">Blood Type</label>
               <input type="text" name="bloodType" class="form-control" required />
               <span class="text-danger"><?= form_error('bloodType') ?></span>
            </div>

            <div class="form-group col-md-4">
               <label for="birth_date"class="black-font">Birth Date</label>
               <input type="date" name="birth_date" class="form-control" required />
               <span class="text-danger"><?= form_error('birth_date') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="birthplace"class="black-font">Birth Place</label>
               <input type="text" name="birthplace" class="form-control" required />
               <span class="text-danger"><?= form_error('birthplace') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="nationality"class="black-font">Nationality</label>
               <input type="text" name="nationality" class="form-control" required />
               <span class="text-danger"><?= form_error('nationality') ?></span>
            </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-3">
               <label for="purok"class="black-font">Purok</label>
               <select name="purok" class="form-control" required>
               <option value="">--Select Purok--</option>
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
               <label for="barangay"class="black-font">Barangay</label>
               <input type="text" name="barangay" class="form-control" required />
               <span class="text-danger"><?= form_error('barangay') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="municipality"class="black-font">Municipality</label>
               <input type="text" name="municipality" class="form-control" required />
               <span class="text-danger"><?= form_error('municipality') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="province"class="black-font">Province</label>
               <input type="text" name="province" class="form-control" required />
               <span class="text-danger"><?= form_error('province') ?></span>
            </div>     
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="contact"class="black-font">Contact</label>
               <input type="text" name="contact" class="form-control" required />
               <span class="text-danger"><?= form_error('contact') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="email"class="black-font">Email</label>
               <input type="email" name="email" class="form-control" required />
               <span class="text-danger"><?= form_error('email') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="civil"class="black-font">Civil Status</label>
               <select name="civil" class="form-control" required>
               <option value="">--Select Status--</option>
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
               <label for="religion"class="black-font">Religion</label>
               <input type="text" name="religion" class="form-control" required />
               <span class="text-danger"><?= form_error('religion') ?></span>
            </div>
            
            <div class="form-group col-md-3">
               <label for="educational"class="black-font">Educational Attainment</label>
               <select name="educational" id="educational" class="form-control" required>
               <option value="">--Select Attainment--</option>
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
               <label for="occupation"class="black-font">Occupation</label>
               <input type="text" name="occupation" class="form-control" required />
               <span class="text-danger"><?= form_error('occupation') ?></span>
            </div>
            <div class="form-group col-md-3">
               <label for="monthlyIncome"class="black-font">Monthly Income</label>
               <input type="text" name="monthlyIncome" class="form-control" required />
               <span class="text-danger"><?= form_error('monthlyIncome') ?></span>
            </div>
         </div>

         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="householdmember"class="black-font">Total Household Member</label>
               <input type="text" name="householdmember" class="form-control" required />
               <span class="text-danger"><?= form_error('householdmember') ?></span>
            </div>
           
            <div class="form-group col-md-4">
               <label for="landown"class="black-font">Land Ownership Status</label>
               <select name="landown" class="form-control" required>
               <option value="">--Select Ownership--</option>
                  <option value="owned">Owned</option>
                  <option value="landless">Landless</option>
                  <option value="tenant">Tenant</option>
                  <option value="caretaker">Caretaker</option>
               </select>
               <span class="text-danger"><?= form_error('landown') ?></span>
            </div>
            <div class="form-group col-md-4">
               <label for="houseownership"class="black-font">House Ownership</label>
               <select name="houseownership" class="form-control" required>
               <option value="">--Select Ownership--</option>
                  <option value="own house">Own House</option>
                  <option value="renting">Renting</option>
                  <option value="Living with Parents">Living with Parents</option>
               </select>
               <span class="text-danger"><?= form_error('houseownership') ?></span>
            </div>
         </div>
<br>
         <div class="form-group">
            <button class="btn btn-primary">Add Resident</button>
         </div>
      </form>
   </div>
</div>
</div>
<br>
<br>
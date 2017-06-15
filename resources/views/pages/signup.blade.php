<div class="container">
    <div class="heading" style="margin-top:10%">
         <center><h2>Sign Up</h2></center>
    </div>
<div style="margin-top:5%" class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="nextBtn btn btn-primary btn-circle">1</a>
        <p>Personal Info</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="nextBtn btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Education</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="nextBtn btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Attachments</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Personal Info</h3>
          <div class="form-group">
            <label class="control-label">First Name</label>
            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Username</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">E-mail</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Re-Password</label>
            <input maxlength="100" type="password" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Place of Birth</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Date of Birth</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Gender</label><br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="male"> Female
          </div>
          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
          </div>
          <div class="form-group">
            <label class="control-label">Phone 1</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Phone 2</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <div class="form-group">
            <label class="control-label">Hobby</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Education</h3>
          <div class="form-group">
            <label class="control-label">Education Level</label>
            <select class="form-control">
                <option>SMK</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>D4</option>
                <option>S1</option>
                <option>S2</option>
            </select>
          </div>
          <!-- nanti ini dikasih javascript -->
          <div class="form-group">
            <label class="control-label">School</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
          <div class="form-group">
            <label class="control-label">Major</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
          </div>
          <div class="form-group">
            <label class="control-label">Skill & Experience</label>
            <TEXTAREA required="required" class="form-control"  /></textarea>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Attachments</h3><br>
            <label class="control-label">Upload Foto</label>
            <input maxlength="200" type="file" required="required" placeholder="Enter Company Address"  /><br>

            <label class="control-label">Upload CV</label>
            <input maxlength="200" type="file" required="required" placeholder="Enter Company Address"  />
          <button class="btn btn-primary btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  
</div>

@include('partials.header')
<form>
<div class="notice-frame">

<h4>
  PERSONAL DETAILS.
</h4>



  <div class="form-group">
    <label for="Name_in_full">Name in Full *</label>
    <input type="text" class="form-control" id="Name_in_full"  placeholder="Enter your name in full">
  </div>

   <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address"  placeholder="Enter your Residence Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="telephone" class="form-control" id="mobile"  placeholder="Enter your Mobile Number">
  </div>

   <div class="form-group">
    <label for="birthday">Date of Birth</label>
       <div class="well">
  <div  class="input-append date" id="datetimepicker1">
    <input data-format="dd/MM/yyyy hh:mm:ss"  type="text" />
    <span class="add-on">
              <i data-time-icon="icon-time" data-date-icon="icon-
              calendar">
              </i>
              </span>
  </div>
</div>
  </div>

  <div class="form-group">
    <label for="nic_number">NIC Number</label>
    <input type="telephone" class="form-control" id="nic_number"  placeholder="Enter your NIC Number">
  </div>

  </div>
<div class="notice-frame">
<h4>
  PROFESIONAL DETAILS.
</h4>

<select id="position">
  <option value="volvo">Laravel Developer</option>
  <option value="saab">UI Developer</option>
  <option value="opel">Business Deveoper</option>
  <option value="audi">Wordpress Developer</option>
  <option value="audi">React Developer</option>
</select>

<div class="form-group">
    <label for="previously_worked_company">Previously worked company *</label>
    <input type="text" class="form-control" id="previously_worked_company"  placeholder="Enter the company name that you have been worked at last...">
  </div>
  

  <div class="form-group">
    <label for="job_title">Your job tittle *</label>
    <input type="text" class="form-control" id="job_title"  placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc...">
  </div>
 
 <div class="form-group">
    <label for="monthly_salory">Monthly salary was</label>
    <input type="text" class="form-control" id="monthly_salory"  placeholder="Ex: 25000 LKR">
  </div>

  <div class="form-group">
    <label for="experience">Experience in years *</label>
    <input type="text" class="form-control" id="experience"  placeholder="Ex: 2 1/2 years, etc...">
  </div>


  <div class="form-group">
    <label for="expertise">Areas you're expertise with</label>
    <input type="textarea" class="form-control" id="expertise"  placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc...">
  </div>

  </div>

  <div class="notice-frame">
    <h4>
 ACCOUNT DETAILS
</h4><p> (All payments will be deposited to this account)</p>

<div class="form-group">
    <label for="account_no">Bank Account Number *</label>
    <input type="text" class="form-control" id="account_no"  placeholder="Enter your Account Number">
  </div>

  <div class="form-group">
    <label for="account_holder">Account Holder's Name *</label>
    <input type="text" class="form-control" id="account_holder"  placeholder="Enter Account holder's Name">
  </div>
 
 <div class="form-group">
    <label for="bank_name">Bank Name *</label>
    <input type="text" class="form-control" id="bank_name"  placeholder="Enter Bank Name">
  </div>

  <div class="form-group">
    <label for="bank_branch">Branch</label>
    <input type="text" class="form-control" id="bank_branch"  placeholder="Enter your Branch">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>




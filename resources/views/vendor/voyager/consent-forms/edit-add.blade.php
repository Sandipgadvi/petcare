@extends('voyager::master') @section('content')
<style>
.censent-box{
  background: #ffff;
  margin: 15px 15px;
  padding: 20px 20px;
  color: #000000;
  box-shadow: 0px 0px 5px #000;
}
p{
  font-size: 10px;
}
.mr{
  margin-left: 15px;
}
.bati{
  border:solid 1px gray;
  color: #fff;
  background: #000;
  padding: 5px 30px;
  border-radius: 5px;
  font-weight: 600;
letter-spacing: 0.3em;
}
</style>
<div class="row">
    
    <form action="{{route('sr')}}" method="GET">
            <div class="col-md-10 mr">
 <input type="search" name="name" id="name" class="form-control" placeholder="Record Search" required>
</div>
<input type="submit" value="SEARCH" class="bati btn-blocks">
</form>

</div>
<div class="container censent-box">
   <form action="{{route('voyager.consent-forms.store')}}" method="POST">
    {{csrf_field()}}
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Owner Name" required>
        </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">

            <input type="date" class="form-control" id="c_date" name="c_date" placeholder="Date" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" name="c_address" placeholder="Address" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
    
                <input type="text" class="form-control" id="exampleFormControlInput1" name="c_phone" placeholder="Phone No" required>
              </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">

            <input type="text" class="form-control" id="exampleFormControlInput1" name="c_alt_name" placeholder="Alt Phone No" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" name="c_pet_name" placeholder="Pet Name" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <select name="c_breed" id="c_breed" class="form-control">
                  <option disabled selected >--Select Breed</option>
                  <option value="breed1">breed1</option>
                  <option value="breed1">breed2</option>
                  <option value="breed1">breed3</option>
                  <option value="breed1">breed4</option>
                  <option value="breed1">breed5</option>
                  <option value="breed1">breed6</option>
                  <option value="breed1">breed7</option>
                  <option value="breed1">breed8</option>
                  <option value="breed1">breed9</option>
                  <option value="breed1">breed10</option>
                  <option value="breed1">breed11</option>

                </select>
                {{--  <input type="text" class="form-control" id="exampleFormControlInput1" name="c_breed" placeholder="Breed" required>  --}}
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  male
                  <input type="radio" name="sex" id="sex" value="male" placeholder="sex" checked>
                  female
                  <input type="radio" name="sex" value="female">
                </div>
              </div>
      </div>

      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="consent_color" name="c_color" placeholder="Color" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
    
                <input type="text" class="form-control"  id="exampleFormControlInput1" name="c_complaints" placeholder="complaints">
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
      
                  <input type="text" class="form-control" id="exampleFormControlInput1" name="c_spl_complaints" placeholder="spl complaints">
                </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
              
                    <input type="text" name="c_condition" id="condition"  placeholder="condition" class="form-control">
                   
                  </div>
                </div>
        </div>


      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
  
              <textarea name="c_medication" id="medication" class="form-control"  placeholder="Medicaiton"></textarea>
            </div>
          </div>
        
              <div class="col-md-9">
                  <div class="form-group">
              
                  <textarea name="note" id="note" placeholder="Note"  class="form-control"></textarea>
                  </div>
                </div>
                
        </div>
        <div class="row">
          <div class="col-md-12">
              <p>
                  For anticipated services, please refer to the estimate that has been figured for you. If there are more services that need to be done, Dr. Varun
                  Dhup, will be consult and give an update of your pets’ condition and recommendations that may go beyond the initial treatment plan.
                  I am the owner or the agent of the animal described above.
              </p>
              <p>
                  I have authority to execute this consent and am over the age of 18.
              </p>
               <p>   The nature and purpose of the procedure(s) has been explained to me and I understand that no guarantee exists as to the result of diagnoses
                  and treatment of said animal.
               </p>
                  <p>I have had the fees outlined to me and agree to pay all such fees and charges at the time of discharge.
                  I have read and understand this consent.
                  </p>
                    Agree : <input type="checkbox" value="agree" name="agree" id="agree" required >
           
          </div>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg">
        <a href="{{route('voyager.consent-forms.create')}}" class="btn btn-info">show</a>
  
  </form>
  




</div>
@stop
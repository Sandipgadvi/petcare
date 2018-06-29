@extends('voyager::master') @section('content')
<style>
.euth-box{
  background: #ffff;
  margin: 15px 15px;
  padding: 20px 20px;
  color: #000000;
  box-shadow: 0px 0px 30px red;
}
p{
  font-size: 10px;
}
.abbe{
  position: absolute;
  top: 10px;
  right: 150px;
  z-index: 9999;
}
</style>
<div class="abbe">
    <h4>You are editing Consent form</h4>

</div>

<div class="container euth-box">
   <form action="{{route('voyager.consent-forms.update',['id' => $data->id])}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <input type="text" class="form-control" id="c_name" value="{{$data->consent_owner}}" name="c_name" "Owner Name" required>
        </div>
      </div>
      <div class="col-md-3">
          <div class="form-group">

            <input type="date" class="form-control" id="c_date" name="c_date" value="{{$data->consent_date}}" "Date" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->consent_address}}" name="c_address" "Address" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
    
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->consent_phone}}" name="c_phone" "Phone No" required>
              </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">

            <input type="text" class="form-control" id="exampleFormControlInput1" name="c_alt_name" value="{{$data->consent_alt_phone}}" "Alt Phone No" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" name="c_pet_name" value="{{$data->consent_pet_name}}" "Pet Name" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <select name="c_breed" id="c_breed" class="form-control">
                  <option selected value="{{$data->consent_breed}}">{{$data->consent_breed}}</option>
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
                {{--  <input type="text" class="form-control" id="exampleFormControlInput1" name="c_breed" "Breed" required>  --}}
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  male
                  <input type="radio" name="sex" id="sex" value="male" "sex" @if($data->consent_sex == "male") checked="true" @endif>
                  female
                  <input type="radio" name="sex" value="female" @if($data->consent_sex == "female") checked="true" @endif>
                </div>
              </div>
      </div>

      
      <div class="row">
            <div class="col-md-3">
              <div class="form-group">
    
                <input type="text" class="form-control" value="{{$data->consent_color}}" id="consent_color" name="c_color" "Color" required>
              </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
      
                  <input type="text" class="form-control" value="{{$data->consent_primary_complaints}}" id="exampleFormControlInput1" name="c_complaints" "complaints">
                </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
        
                    <input type="text" class="form-control" value="{{$data->consent_specify_complaints}}" id="exampleFormControlInput1" name="c_spl_complaints" "spl complaints">
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                
                      <input type="text" name="c_condition" id="condition" value="{{$data->consent_condition}}"  "condition" class="form-control">
                     
                    </div>
                  </div>
          </div>
  
  
        <div class="row">
            <div class="col-md-3">
              <div class="form-group">
    
                <textarea name="c_medication" id="medication" class="form-control"   "Medicaiton">{{$data->consent_medication}}</textarea>
              </div>
            </div>
          
                <div class="col-md-9">
                    <div class="form-group">
                
                    <textarea name="note" id="note" "Note" class="form-control">{{$data->note}}</textarea>
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
                    Agree : <input type="checkbox" value="agree" @if($data->agree == 'agree') checked @endif name="agree" id="agree" required >
           
          </div>
        </div>
        <input type="submit" value="Update" name="update" class="btn btn-success btn-lg">
        <a href="{{route('voyager.euth-forms.create')}}" class="btn btn-info">show</a>
  
  </form>
</div>
@stop
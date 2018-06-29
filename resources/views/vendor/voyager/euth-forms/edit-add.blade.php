@extends('voyager::master') @section('content')
<style>
.euth-box{
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
    
  <form action="{{route('sreuth')}}" method="GET">
          <div class="col-md-10 mr">
<input type="search" name="name" id="name" class="form-control" placeholder="Search" required>
</div>
<input type="submit" value="SEARCH" class="bati">
</form>

</div>
<div class="container euth-box">
   <form action="{{route('voyager.euth-forms.store')}}" method="POST">
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
          {{--  <div class="col-md-3">
              <div class="form-group">
    
                <textarea name="c_medication" id="medication" class="form-control"  placeholder="Medicaiton"></textarea>
              </div>
            </div>  --}}

            <div class="col-md-9">
                <div class="form-group">
            
                <textarea name="note" id="note" placeholder="Note"  class="form-control"></textarea>
                </div>
              </div>
            </div>
        <div class="row">
          <div class="col-md-12">
             <p> I, the undersigned, do hereby certify that I am the owner or duly authorized agent for the owner
              of the animal described above, that I do hereby give Dr.______Varun Dhup_____(veterinarian) and his employees or representative, full and complete authority to end the life
              and dispose of said animal in whatever manner they shall deem appropriate.</p>
             <p> I acknowledge that Dr. ______Varun Dhup_______ has met with me personally and
              discussed the euthanasia of my animal. I also certify that to the best of my knowledge, the said
              animal has not bitten any person or animal during the last fifteen (15) days, and has not been
              exposed to rabies. I further understand that I assume financial responsibility for all services
              rendered.</p>
             <p> Again, by signing this form I am giving permission to end this animal’s life and I have the
              authority to execute this consent.</p>
                    Agree : <input type="checkbox" value="agree" name="agree" id="agree" required >
           
          </div>
        </div>
        <input type="submit" value="Submit" name="submit" class="btn btn-success btn-lg">
        <a href="{{route('voyager.euth-forms.create')}}" class="btn btn-info">show</a>
  
  </form>
  




</div>
@stop
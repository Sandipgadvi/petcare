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
    <h4>You are editing Euth form</h4>

</div>

<div class="container euth-box">
   <form action="{{route('voyager.euth-forms.update',['id' => $data->id])}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <input type="text" class="form-control" id="c_name" value="{{$data->ethu_owner}}" name="c_name" placeholder="Owner Name" required>
        </div>
      </div>
      <div class="col-md-2">
          <div class="form-group">

            <input type="date" class="form-control" id="c_date" name="c_date" value="{{$data->ethu_date}}" placeholder="Date" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->ethu_address}}" name="c_address" placeholder="Address" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
    
                <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$data->ethu_phone}}" name="c_phone" placeholder="Phone No" required>
              </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="form-group">

            <input type="text" class="form-control" id="exampleFormControlInput1" name="c_alt_name" value="{{$data->ethu_alt_phone}}" placeholder="Alt Phone No" required>
          </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="exampleFormControlInput1" name="c_pet_name" value="{{$data->ethu_pet_name}}" placeholder="Pet Name" required>
            </div>
          </div>
          <div class="col-md-3">
              <div class="form-group">
                <select name="c_breed" id="c_breed" class="form-control">
                  <option selected value="{{$data->ethu_breed}}">{{$data->ethu_breed}}</option>
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
                  <input type="radio" name="sex" id="sex" value="male" placeholder="sex" @if($data->ethu_sex == "male") checked="true" @endif>
                  female
                  <input type="radio" name="sex" value="female" @if($data->ethu_sex == "female") checked="true" @endif>
                </div>
              </div>
      </div>

      <div class="row">
          <div class="col-md-3">
            <div class="form-group">
  
              <input type="text" class="form-control" id="consent_color" name="c_color" placeholder="Color" required value="{{$data->ethu_color}}">
            </div>
          </div>
          {{--  <div class="col-md-3">
              <div class="form-group">
    
                <textarea name="c_medication" id="medication" class="form-control"  placeholder="Medicaiton"></textarea>
              </div>
            </div>  --}}

            <div class="col-md-9">
                <div class="form-group">
            
                <textarea name="note" id="note" placeholder="Note" value="{{$data->note}}"  class="form-control"></textarea>
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
                    Agree : <input type="checkbox" value="agree" @if ($data->agree == 'agree') checked @endif  name="agree" id="agree" required >
           
          </div>
        </div>
        <input type="submit" value="Update" name="update" class="btn btn-success btn-lg">
        <a href="{{route('voyager.euth-forms.create')}}" class="btn btn-info">show</a>
  
  </form>
</div>
@stop
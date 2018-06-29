@extends('voyager::master') @section('content')


<style>
    .box {
        background: #fff;
        box-shadow: 0px 0px 5px #000;
        margin-top: 15px;
        margin-left: 15px;
        padding: 20px;
    }

    .box>li {

        margin: 5px;
        background: gray;
        color: #fff;
        padding: 10px 20px;
        
    }
    .row{
        margin: 0px;
        padding: 0px;
        
    }
    .row>[class*=col-]{
        margin-bottom: 15px;
    }
    .bor{
        border: solid 1px;
        overflow: hidden;
        padding: 5px;
        margin: 0px;
    }
    b{
        color: #000;

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
     <input type="search" name="name" id="name" class="form-control" placeholder="Search" required>
    </div>
    <input type="submit" value="SEARCH" class="bati">
    </form>
  
</div>
@foreach ($data->chunk(2) as $item)
<div class="row">
    @foreach ($item as $it)
    <div class="col-md-12">
        <div class="box">
            <div class="row">
                <div class="col-md-2 bor">
                   <b>Case No:</b> 
                     {{$it->consent_case_no}}

                </div>
                <div class="col-md-8 bor">
                   <b>Name :</b> 
                     {{$it->consent_owner}}

                </div>
                <div class="col-md-2 bor">
                   <b>Date :</b> 
                     {{$it->consent_date}}

                </div>
            </div>
            <div class="row">
               
                <div class="col-md-6 bor">
                   <b>Phone no:</b> 
                     {{$it->consent_phone}}

                </div>
                <div class="col-md-6 bor">
                   <b>Alt Phone no:</b> 
                     {{$it->consent_alt_phone}}

                </div>

            </div>
            <div class="row">
                    <div class="col-md-12 bor flow">
                            <b>Address:</b> 
                              {{$it->consent_address}}
         
                         </div>
            </div>
            <div class="row">
                <div class="col-md-3 bor">
                <b>Pet Name:</b> 
                     {{$it->consent_pet_name}}

                </div>
                <div class="col-md-3 bor">
                   <b>Breed:</b> 
                     {{$it->consent_breed}}

                </div>
                <div class="col-md-3 bor">
                    <b>Sex:</b> 
                     {{$it->consent_sex}}

                </div>
                <div class="col-md-3 bor">
                   <b>Color:</b> 
                     {{$it->consent_color}}

                </div>

            </div>
            <div class="row">
                <div class="col-md-12 bor">
                   <b>Complaints:</b> 
                     {{$it->consent_primary_complaints}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bor">
                 <b>Complaints Spl:</b>   
                     {{$it->consent_specify_complaints}}

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bor">
                   <b>Condition:</b> 
                     {{$it->consent_condition}}

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bor">
                   <b>
                       Medication:
                    </b>                      {{$it->consent_medication}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 bor">
                   <b>Note:</b> 
                     {{$it->note}}
                </div>
            </div>
        <a href="{{route('voyager.consent-forms.edit',['id' => $it->id])}}">Edit</a>

        </div>
    </div>
    @endforeach
</div>

@endforeach
<center>
{{$data->links()}}
</center>
@stop
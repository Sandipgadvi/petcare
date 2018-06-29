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
    .flow{
        
    }
    .bor{
        border: solid 1px;
        overflow: hidden;
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
    
        <form action="{{route('sreuth')}}" method="GET">
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
                     {{$it->ethu_case_no}}

                </div>
                <div class="col-md-8 bor">
                   <b>Name :</b> 
                     {{$it->ethu_owner}}

                </div>
                <div class="col-md-2 bor">
                   <b>Date :</b> 
                     {{$it->ethu_date}}

                </div>
            </div>
            <div class="row">
               
                <div class="col-md-6 bor">
                   <b>Phone no:</b> 
                     {{$it->ethu_phone}}

                </div>
                <div class="col-md-6 bor">
                   <b>Alt Phone no:</b> 
                     {{$it->ethu_alt_phone}}

                </div>

            </div>
            <div class="row">
                    <div class="col-md-12 bor flow">
                            <b>Address:</b> 
                              {{$it->ethu_address}}
         
                         </div>
            </div>
            <div class="row">
                <div class="col-md-3 bor">
                <b>Pet Name:</b> 
                     {{$it->ethu_pet_name}}

                </div>
                <div class="col-md-3 bor">
                   <b>Breed:</b> 
                     {{$it->ethu_breed}}

                </div>
                <div class="col-md-3 bor">
                    <b>Sex:</b> 
                     {{$it->ethu_sex}}

                </div>
                <div class="col-md-3 bor">
                   <b>Color:</b> 
                     {{$it->ethu_color}}

                </div>

            </div>
            <div class="row">
                <div class="col-md-12 bor">
                   <b>Note:</b> 
                     {{$it->note}}
                </div>
            </div>
        <a href="{{route('voyager.euth-forms.edit',['id' => $it->id])}}">Edit</a>

        </div>
    </div>
    @endforeach
</div>

@endforeach
<center>
{{$data->links()}}
</center>
@stop
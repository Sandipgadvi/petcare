@extends('voyager::master') @section('content')

<div class="row" id="appcontact">
    <div class="col-md-6">
        <div class="container">
        <form action="{{route('sendsms')}}" method="POST">
            {{csrf_field()}}
            <textarea placeholder="Bluk SMS" rows="7" name="sendsms" id="sendsms" class="form-control" required autofocus ></textarea>
            <input type="submit" value="send" class="btn btn-success btn-block">
        </form>
    </div>
    </div>
    <div class="col-md-6">
        <div class="container">
            <h3 class="text-white">Click below to donwload</h3>
        <a href="{{route('consent',['type'=>'xls'])}}" class="btn btn-info">Consent xls</a>
        <a href="{{route('consent',['type'=>'csv'])}}" class="btn btn-info">Consent csv</a>
        <a href="{{route('consent',['type'=>'xlsm'])}}" class="btn btn-info">Consent xlsm</a>
        <br>
        <a href="{{route('euth',['type'=>'xls'])}}" class="btn btn-info">Euth xls</a>
        <a href="{{route('euth',['type'=>'csv'])}}" class="btn btn-info">Euth csv</a>
        <a href="{{route('euth',['type'=>'xlsm'])}}" class="btn btn-info">Euth xlsm</a>
    </div>

    </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" id="chkall" @click="check($event)">
                </th>
                <th>Sr.No</th>
                <th>Contact Name</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <?php $count=0;?> @foreach ($data as $item)
        <?php $count++;?>
        <tbody>
            <tr>
                <td>
                    <input type="checkbox" value="">
                </td>
                <td>{{$count}}</td>
                <td>{{$item->contact_name}}</td>
                <td>{{$item->contact_number}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
{{$data->links()}}
<script>
    var vue = new Vue({
        el: '#appcontact',
        data: {

        },
        methods: {
            check: function (e) {
                if (e.target.checked) {
                    console.log(e.target.value);
                }
            }
        }

    })
</script>
@endsection
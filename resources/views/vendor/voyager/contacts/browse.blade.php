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
        <div class="upload">
          <hr>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal">upload all</button>
          <div class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Consent Form</h4>
                </div>
                <div class="modal-body">

                    <form action="{{route('import')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                  <div class="form-group">

                    <label for="">Upload File</label>
                    <input type="file" class="form-control-file" name="file" id="file" placeholder="" required aria-describedby="fileHelpId">
                    <input type="submit" value="Import" class="btn btn-success">    
                </div>
                </form>
                <hr>
                <h4>Euth form</h4>
                <form action="{{route('importeuth')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
              <div class="form-group">

                <label for="">Upload File</label>
                <input type="file" class="form-control-file" name="file" id="file" placeholder="" required aria-describedby="fileHelpId">
                <input type="submit" value="Import" class="btn btn-success">    
            </div>
            </form>
            <hr>
            <h4>Contact form</h4>
            <form action="{{route('importcontact')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
          <div class="form-group">

            <label for="">Upload File</label>
            <input type="file" class="form-control-file" name="file" id="file" placeholder="" required aria-describedby="fileHelpId">
            <input type="submit" value="Import" class="btn btn-success">    
        </div>
        </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
        </div>
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
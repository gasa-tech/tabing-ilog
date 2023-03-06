@extends('layouts.backend')

@section('content')

<div class="page-wrapper">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-title">
                    <div class="d-flex">
                        <h4>Import Items</h4>
                        <a href="{{ route('products.index') }}">
                            <button class="btn btn-primary" style="margin-left: 20px" type="button">
                                {{-- <i class="cil-backspace"></i> --}}
                                Go Back
                              </button> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="">                
            </div>
        </div>
    </div>
<section>
    <div class="container-fluid">
        </div>
            <div class="row justify-content-center">
                
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="">
                                    <div class="form-group">
                                        <label>Attach File: </label>
                                        <input type="file" name="file" class="" required id="fileUploads">
                                        <button type="button" class="btn btn-primary" id="upload" style="float:right;"><i class="c-icon cil-arrow-thick-to-bottom"></i> Attach</button>
                                    </div>
                                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/1izx30l14dzJP7nzRhWshN-T4svmE4BWcxi8Mj8TsVpk/edit?usp=sharing" class="btn btn-primary"><i class="icofont icofont-file-excel"></i> CSV  Template</a>
                                        <h5><strong>Instruction:</strong> </h5>
                                        <ul>
                                        <li>Click "Choose File" and name of the file .CSV</li>
                                        <li>Click "Attach"</li>
                                        <li>Verify Table</li>
                                        <li>Click <strong class="text-success">"Submit"</strong></li>
                                        </ul>
                                  
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form method="POST" action="{{ route('products.import_post') }}" id="submit">
                            @csrf
                            <div class="card">
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="table-import">
                                            <thead class="text-center">
                                                <tr >
                                                    @foreach($columns as $i => $col)
                                                    <th>{{ $col }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                    <div class="float-right mb-2 ml-2 mr-2 mt-2">
                                        <a href="#!" id="cancel" class="btn btn-default m-r-20">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('javascript')
<script type="text/javascript">

    var inputs = {!! json_encode($columns) !!}; 

    $(function () {
        
            $("button#upload").bind("click", function () {
                var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
                var table = $("#table-import tbody");
                table.empty();
                if (regex.test($("#fileUploads").val().toLowerCase())) {
                    if (typeof (FileReader) != "undefined") {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            console.log(e);
                            var rows = e.target.result.split("\n");
                            for (var i = 1; i < rows.length; i++) {
                                var row = $("<tr />");
                                var cells = rows[i].split(",");
                                for (var j = 0; j < cells.length; j++) {
                                    var cell_text = cells[j];
                                    var input = '<input type="text" class="border-0 text-center" name="import['+i+']['+inputs[j]+']" title="'+inputs[j]+'" value="'+cell_text+'" >';
                                    var cell = $("<td />");
                                    cell.html(input);
                                    row.append(cell);
                                }
                                table.append(row);
                            }
                            
                        }
                        reader.readAsText($("#fileUploads")[0].files[0]);
                    } else {
                        alert("This browser does not support HTML5.");
                    }
                } else {
                    alert("Please upload a valid .CSV or .txt file.");
                }
            });
        });
        $('#cancel').on('click', function(e) { 
            $('#table-import tbody').empty();
        });

</script>

@endsection

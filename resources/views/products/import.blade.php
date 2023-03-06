@extends('layouts.backend')
@section('content')


<div class="container-fluid">
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>  
    @endif
    <div class="page-header">
        <div class="row align-items-end p-3">
            <div class="col-lg-5">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Upload Existing Products with Barcode</h4>
                        <span class="text-muted">Upload CSV, preview and submit it!</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 text-right">
                <a target="_blank" href="https://docs.google.com/spreadsheets/d/1VK4ePa9Yw7NIYtfWrQxPPxYeLH72cMANPZ5tFDylvNY/edit?usp=sharing" class="btn btn-primary"><i class="icofont icofont-file-excel"></i> CSV  Template</a>
                <!-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#mims_finder"><i class="icofont icofont-search"></i> MIMS Finder</a> -->
    
    
            </div>
        </div>
    </div>
</div>
<section>
   
    <div class="container-fluid">
        </div>
            <div class="row justify-content-center">
                
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="">
                                    <div class="form-group">
                                        <label>Attach File: </label>
                                        <input type="file" name="file" class="" required id="fileUploads">
                                        <button type="button" class="btn btn-primary" id="upload" style="float:right;"><i class="c-icon cil-arrow-thick-to-bottom"></i> Attach</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form method="POST" action="{{ url('product/import-barcode-upload') }}" id="submit">
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
@section('scripts')
  
<script type="text/javascript">
    $('.download-sample').click(function(e) {
        e.preventDefault();  //stop the browser from following
        window.location.href = "{{ asset('uploads/sample items.csv') }}";
    });

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
                                    var input = '<input type="text" class="border-0" name="import['+i+']['+inputs[j]+']" title="'+inputs[j]+'" value="'+cell_text+'" >';
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
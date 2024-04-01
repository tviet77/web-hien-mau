<link rel="stylesheet" href="{{ asset('css/bootstrap4.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/importtonvimh.css') }}" >
@extends('block.index')
@section('title')
    <title>Import Tôn vinh</title>
@endsection
@section('title_page')
IMPORT CÁC ĐỀ NGHỊ TÔN VINH
@endsection
@section('content')
    {{-- import --}}
    <meta name="csrf-token"  content="{{ csrf_token() }}" />
    <form  id="formimporrtonvinhs" class="select1" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="span-select1" style="padding: 5">Địa điểm:
          </span>
          <select name="vung" class="form-control">
              @foreach ($vungs as $item)
              <option value="{{ $item->id }}">{{ $item->tenkhuvuc }}</option>
              @endforeach
          </select>
        </div>
        <input type="file" class="btn btn-secondary" id="filetonvinh" name="filetonvinh" accept=".xlsx" value="IMPORT">
        <button type="submit" class="btn btn-secondary"   >View</button>
      </div>
    </form>

    {{-- danh sách --}}
   <div id=tableexcel></div>
@endsection

<script src="{{ asset('js/jquery-3.5.1.min.js') }}" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{ asset('js/popper1.12.9.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap4.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
  // convert selects already on the page at dom load
  $('select.form-control').combobox();

  $('#it').click(function(e){
    $('ul.dropdown-menu').toggle();
  });

//  $('input').focus(function(e){
//    $('ul.dropdown-menu').toggle();
//  });

});

</script>


<script>
    function xoa()
    {
        $('#tabletonvinh').remove();
         $('#filetonvinh').val("");

    }


     //add table tôn vinh
     $(document).ready(function()
     {
         var namefiletruoc="";
        $('#formimporrtonvinhs').submit(function (e) {
           e.preventDefault();
           if ($('#tabletonvinh').length > 0) {
                alert("View Tôn vinh hiện vẫn đang còn sử dụng, xin vui lòng tắt");
            }
            if($('#filetonvinh').val()=="") alert("bạn chưa nhập file");
            else if($('#filetonvinh').val()==namefiletruoc) alert("File này bạn đã mới import");
            else
            {
                namefiletruoc=$('#filetonvinh').val();
                $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
                $.ajax({
                    type: "POST",
                    url: " {{ route('import.xuly_tonvinh') }} ",
                    data: new FormData(this),
                    contentType:false,
                    processData:false,
                    dataType: "JSON",
                    success: function (response)
                    {
                        $('#tableexcel').append(response);

                    },
                        error: function(xhr)
                            {
                                console.log(xhr.responseText);
                            },
                });
            }

       });
     });

</script>

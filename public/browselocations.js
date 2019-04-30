//$.get(URL,data,function(data,status,xhr),dataType)
$(document).ready(function(){
  $(function(){
    $('#buildingFromForm').change(function(){
      var extra = $(this).val();
      // $.get(
      //   "getrooms",
      //   {bid: extra},
      //   function(data){
      //     var len = data.length;
      //     $('#roomFromForm').empty();
      //     for(var i = 0; i < len; i++){
      //       var id = data[i]['rid'];
      //       var name = data[i]['name'];
      //       $("#roomFromForm").append("<option value='"+id+"'>" + name + "</option");
      //     }
      //   },
      //   "json"
      // );
      console.log(extra);
      $.ajax({
        type: "GET",
        url: 'getrooms',
        data: {bid: extra},
        dataType: 'json',
        error: function(data){console.log(data)},
        success: function(data){
            //console.log(data);
            var len = data.length;
            $('#roomFromForm').empty();
            for(var i = 0; i < len; i++){
              var id = data[i]['rid'];
              var name = data[i]['name'];
              $("#roomFromForm").append("<option value='"+id+"'>" + name + "</option");
            }
          }
        });
    });
  });
  $(function(){
    $('#buildingToForm').change(function(){
      var extra = $(this).val();
      console.log(extra);
      $.ajax({
        type: "GET",
        url: 'getrooms',
        data: {bid: extra},
        dataType: 'json',
        error: function(data){console.log(data)},
        success: function(data){
            //console.log(data);
            var len = data.length;
            $('#roomToForm').empty();
            for(var i = 0; i < len; i++){
              var id = data[i]['rid'];
              var name = data[i]['name'];
              $("#roomToForm").append("<option value='"+id+"'>" + name + "</option");
            }
          }
        });
    });
  });
});

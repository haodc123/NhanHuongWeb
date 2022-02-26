document.addEventListener("DOMContentLoaded", function(event) { 
    // do when start page    
});

// Some Global var
let html_list_orders = "";
$body = $("body");

function onOrdersFilter() {
  var ffname = $('input[name=ff_name]').val();
  var fftel = $('input[name=ff_tel]').val();
  var ffaddr = $('input[name=ff_addr]').val();
  var fffood = $('input[name=ff_food]').val();
  var ffstatus = $('select[name=ff_status]').find(":selected").val();
  
  $.ajax({
    url:"http://127.0.0.1:8000/control/filter_orders?name="+ffname+"&tel="+fftel+"&addr="+ffaddr+"&food="+fffood+"&status="+ffstatus,
    type: "GET",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    beforeSend: function () { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
      $body.addClass("loading"); // Load Please wait modal, BUT for sending request time
    },
    success: function (res) {
      //$body.addClass("loading");
      genOrderResultTable(res.data); // json return {'data': $list_orders, 'status': 1}
      //$body.removeClass("loading");
    },
    error: function (res) {
    
    },
    complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
      $body.removeClass("loading"); // Hide Please wait modal, BUT for sending request time
    },
  })
}

function genOrderResultTable(data) {
  var list_orders = data.data;

  list_orders.forEach(genEachOrderItem);

  $('table.list-ctrl tbody').html(html_list_orders);

  // TODO 2: Add pagination link to pagination button
  // Link page: add param from input filter,
  // like http://127.0.0.1:8000/control/filter_orders?name="+ffname+"&tel="+fftel+"&addr="+...&page=...
  // and Request by AJAX 
}

function genEachOrderItem(item) {
  // Attention: Due to lazy, I'm not implement next part, consider the step:
  // TODO 1: For each item, append html_list_orders with a row with item data

  // Demo for loading wait
  // for (i=0; i<10000; i++) {
  //   console.log(i)
  // }
  html_list_orders += JSON.stringify(item) + "<br />";
}
// $("#calform").submit(function (e) {
//
//      var allVals = [];
//
//      $('input[type="checkbox"]:checked').each(function () {
//       //     removed the space ^
//
//          allVals.push($(this).val());
//      });
//      alert(allVals);
//
//      e.preventDefault();
//  })


$(document).ready(function () {
	/* Get the checkboxes values based on the class attached to each check box */

	$("#buttonClass").on('submit',function(e) {

    e.preventDefault();
    var checkValues = $('input[name=checkboxlist]:checked').map(function()
           {
               return $(this).val();
           }).get();
    alert(checkValues)
    // var ids=[];
    // var form_data = new FormData();
    // form_data.append('ids',checkValues);
    $.ajax({
                  url: 'loadmore.php',
                  type: 'POST',
                  data: { ids: checkValues },
//                   data:form_data,
//                   processData: false,
//                   contentType: false,
                  success:function(data){
                        console.log(data);
                        alert("Hoagaya");

                  }
              });
    });
  });

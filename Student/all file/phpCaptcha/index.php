 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script>
 $(function () {
     $('.change-state').click(function () {
         var attr = this.dataset;
         $.ajax({
             method: 'POST',
             url: '@Url.Action("ChangeReportStatus", "Default")',
             data: { id: attr.id, status: attr.state },
             success: function (data) {
                 var name = '#report-number-' + attr.id;
                 $(name).html(data);
             }
         });
     });
});
	  </script>
	  
	  
	 
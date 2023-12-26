    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
      let table = new DataTable('#myTable');
    </script>

    <script>
      $(document).ready(function(){
        $('.confirm-delete').click(function(e){
          e.preventDefault();
          confirmDialog = confirm("Are you sure? you want to delete this data?");
          if(confirmDialog){
            const id = $(this).val();
            $.ajax({
              type: "DELETE",
              url: "employee/confirmdelete/"+id,
              success: function (response) {
                alert('Data deleted successfully');
                window.location.reload();
              }
            })
          }
        })
      })
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP and AJAX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-info">

  <section class="">

    <div class="py-5">
      <h1 class="text-center fst-italic">
        <u class="text-capitalize">
          List of github users, fetch using PHP and AJAX
        </u>
      </h1>
    </div>

    <div class="container-fluid">
      <div class="row" id="card_data">



      </div>  <!-- row end -->
    </div> <!-- container end -->

    <div class="bg-dark">
      <div class="text-center">
        <h5 class="py-3 text-white">
            Made with by <i class="bi bi-heart-fill text-danger"></i> Shreedhar
        </h5>
      </div>
    </div>


  </section>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $.ajax({
              url : "https://api.github.com/users",
              type : "GET",
              datatype : "JSON",
              success : function(data)
                        {
                        $(document).ready(function()
                                          {
                                            {
                                                console.log(data);
                                                data.map(function(item)
                                                          {
                                                            $("#card_data").append(
                                                                                      '<div class="col-lg-4 col-md-4 col-12">'+
                                                                                        '<div class="card mb-3" style="max-width: 540px;">'+
                                                                                          '<div class="row g-0">'+
                                                                                            '<div class="col-md-4">'+
                                                                                              '<img src='+item.avatar_url+' class="img-fluid img-thumbnail rounded" alt="">'+
                                                                                            '</div>'+
                                                                                            '<div class="col-md-8">'+
                                                                                              '<div class="card-body">'+
                                                                                                '<span class="badge rounded-pill text-bg-primary fs-6"><i class="bi bi-person-fill-check mx-1"></i>'+item.type+'</span>'+
                                                                                                '<h5 class="card-title text-capitalize mt-2">'+item.login+'</h5>'+
                                                                                                '<p><a href='+item.html_url+' target="_blank" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Bio link</a></p>'+
                                                                                              '</div>'+
                                                                                            '</div>'+
                                                                                          '</div>'+
                                                                                        '</div>'+
                                                                                      '</div>'
                                                                                  );
                                                          });
                                              }
                                          });
                        }
            });
  </script>


</body>
</html>

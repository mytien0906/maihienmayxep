<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Document</title>
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
/>
<link
  rel="preconnect"
  href="https://fonts.googleapis.com"
/>
<link
  rel="preconnect"
  href="https://fonts.gstatic.com"
  crossorigin
/>
<link
  href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
  rel="stylesheet"
/>
<link rel="stylesheet" href="./assets/css/styles.css" />
<link rel="stylesheet" href="./assets/css/gioi-thieu.css" />
<link rel="stylesheet" type="text/css" href="./assets/slick/slick.css" />
<link rel="stylesheet" href="./assets/css/cong-trinh.css">
<link rel="stylesheet" href="./assets/css/tin-tuc.css">
<link rel="stylesheet" href="./assets/css/video.css">
<link rel="stylesheet" href="./assets/css/lien-he.css">

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
  crossorigin="anonymous"
></script>
<script type="text/javascript" src="./assets/slick/slick.min.js"></script>
<script src="./assets/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./assets/slick/slick.min.js"></script>
<script src="./assets/js/script.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $(".your-class").slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      centerMode: true,
      centerPadding: 0,
      responsive: [
        {
          breakpoint: 768,
          infinite: true,
          settings: {
            slidesToScroll: 1,
            slidesToShow: 1,
            centerMode: true,
            centerPadding: 0,
          },
        },
      ],
    });
  });
</script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.your-class').slick({
                dots: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                centerMode: true,
                centerPadding: 0,
                responsive: [{
                    breakpoint: 768,
                    infinite: true,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        centerMode: true,
                        centerPadding: 0,
                    }
                }]

            });
        });
        $('.card-deck a').fancybox({
  caption : function( instance, item ) {
    return $(this).parent().find('.card-text').html();
  }
});
    </script>
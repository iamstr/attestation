<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>
<div class="main-content" id="panel">
    <!-- Page content -->
    <?php include "includes/top-nav.php"; ?>
<div class="container mt-5">
    
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">OLD  REQUESTS</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush position-relative">
                        <thead class="thead-light">
                            <tr class="table-agent ">
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT FULLNAME" data-toggle-table="CLIENT FULLNAME">CLIENT FULLNAME</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT IDNUMBER" data-toggle-table="CLIENT IDNUMBER">CLIENT IDNUMBER</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT PHONE" data-toggle-table="CLIENT PHONE">CLIENT PASSPORT</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT IDNUMBER" data-toggle-table="CLIENT IDNUMBER">AGENCY NAME</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT PHONE" data-toggle-table="CLIENT PHONE">SCHOOL NAME</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT PHONE" data-toggle-table="CLIENT PHONE">SCHOOL ADMISSION NUMBER</th>
                                <th scope="col" class="sort position-sticky " style="top: 0px;" data-sort="CLIENT PHONE" data-toggle-table="CLIENT PHONE">GOOD CONDUCT NUMBER</th>
                                <th class="position-sticky">STATUS</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <td>CHARO SANITA</td>
                                <td>31044927</td>
                                <td>12345667</td>
                                <td>EWAJIBU</td>
                                <td>TIMS</td>
                                <td>E/2022/Q2</td>
                                <td>PH-5THQ2</td>
                                <td><span class="badge badge-success">Approved</span></td>
                                                           </tr>
                        

                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4 d-none">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    </div>





    <div class="container-boxes" style="display: none;">
        <div class="boxes">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>

    </div> <!-- Argon Scripts -->
    <!-- Core -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" defer=""></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>

    <script src="assets/js/argon.min.js"></script>


    <div id="GFG"></div>


    <!-- Argon JS -->
    <script type="text/javascript">
        window.onload = () => {
            "use strict";

            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("./sw.js");
            }
        };

        function is_touch_enabled() {
            return ('ontouchstart' in window) ||
                (navigator.maxTouchPoints > 0) ||
                (navigator.msMaxTouchPoints > 0);
        }

        var src = "https://contribute.geeksforgeeks.org/wp-content/uploads/gfg-39.png";

        if (is_touch_enabled()) {
            $(".list-group-item.d-flex flex-row.justify-content-between.custom-list-group-item.tasks").bind("click touchstart")

            //  alert()
        } else {
            var img = "";
        }
    </script>


    <script>
        $(window).on("load", function() {

            $(".container-boxes").fadeOut();
        });



        $(document).ready(function() {



            function formatState(state) {
                if (!state.id) {
                    return state.text;
                }

                var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    '<span class="badge badge-pill badge-primary"></span>'
                );


                $state.parent().css({
                    background: "pink !important"
                })
                // Use .text() instead of HTML string concatenation to avoid script injection issues
                $state.text(state.text);
                console.log($state.parentElement)
                console.log($state)
                return $state;
            };




            $('.js-example-basic-multiple').select2({
                placeholder: 'Select an option',
                tags: true,
                // text: 'Select an option',
                templateSelection: formatState,
                theme: "bootstrap",


            });


            const pathname = (window.location.pathname).replace("/", "")

            $(".navbar-collapse a.nav-link ").each(function() {
                $(this).removeClass("active")
                if ($(this).attr("href") === pathname) {
                    $(this).addClass("active")

                } else {

                }
            })



            if ($(".faded.flash").length) {



                setTimeout(function(e) {


                    $(".flash").text("We are detecting slow internet connection,be patient")


                    const settings = {
                        "async": true,
                        "crossDomain": true,
                        "url": "https://type.fit/api/quotes",
                        "method": "GET"
                    }

                    $.ajax(settings).done(function(response) {
                        const data = JSON.parse(response);
                        const index = Math.floor(Math.random() * data.length)
                        console.log(data);
                        const block = `<blockquote class="blockquote">
   <p class="mb-1 font-italic ">${data[index].text}</p>
   <footer class="blockquote-footer text-muted"><cite title="Source Title"> ${data[index].author?data[index].author :"anonymous" }</cite></footer>
 </blockquote>`;

                        setTimeout(function(e) {
                            $(".flash").html(block)
                        }, 2000)
                    });

                }, 5000)

            }








            $('.modal').on('hidden.bs.modal', function(e) {

                $(".selection-modal").children().remove()
            })





        })
    </script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/617b9b3586aee40a5738ed1d/1fj5dcj9s';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->





    <script>
        $(document).ready(function(e) {




  $(document).on("click", "a.light-src", function(e) {
        e.preventDefault()
        console.log($(".light-view-display-image"))
        const src = $(this).children().attr("src")
        $(".light-view-display-image").attr("src", src)

      })


      const stepForm = $(".steps-form")



      for (step of $(".steps-form")) {

        step.style.display = "none";
      }

      $(".steps-form")[0].style.display = "flex";




      const stepNext = $(".steps-form-button-next"),
        stepBack = $(".steps-form-button-back")


      stepNext.click(function(e) {


        stepForm[1].children[1].classList.add("slideRight")
        stepForm[0].children[1].classList.remove("slideLeft")
        stepForm[0].children[1].classList.remove("slideRight")
        stepForm[1].style.display = "flex"

        stepForm[0].style.display = "none";

        let expenseTotalByGirl = $(this).parent().parent().children()[4].textContent

        console.log((expenseTotalByGirl).toLocaleString())
        $(".girl_name")[0].textContent = ($(this).parent().parent().children()[0].textContent)
        $(".girl_total")[0].textContent = expenseTotalByGirl.toLocaleString()
        $.get(`php_action/accounts/fetchGirlsExpenses?term=${$(this).attr("data-report")}`, function(data) {


          $(".expenseTable").html(data)

        })


      })
      stepBack.click(function(e) {




        stepForm[0].style.display = "flex"
        stepForm[1].style.display = "none";
        stepForm[0].children[1].classList.add("slideLeft")
        stepForm[1].children[1].classList.remove("slideLeft")
        stepForm[1].children[1].classList.remove("slideRight")




      })






        });
    </script>
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
                    <h3 class="mb-0">Add New Agency</h3>
                </div>

                <div class="card-body">
                               
<div class="row">
  <div class="col-6">
    <div class="form-group">
      <label for="">Agency Name</label>
      <input type="text" class="form-control form-control-muted" placeholder="ewajibu agency">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Date of Expiry</label>
      <input type="text" class="form-control form-control-muted" placeholder="ewajibu agency">
    </div>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <div class="form-group">
      <label for="">Status</label>
      <select name="" id="" class="form-control form-control-muted">
        <option value="">valid</option>
        <option value="">expired</option>
      </select>
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="">Company Email</label>
      <input type="text" class="form-control form-control-muted" placeholder="ewajibu@gmail.com">
    </div>
  </div>
</div>

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
            const row = $(".table-agent");

            const selectColumnActive = $(".btn.btn-outline-str-secondary.active"),
                selectColumn = $(".btn.btn-outline-str-secondary"),
                indexedArray = []

            selectColumn.each(function() {
                let th = document.createElement("th"),
                    text = $(this).text().trim();
                const INDEX = +$(this).parent().attr("data-column-count");


                if ($(this).attr("class").includes("active")) {

                    th.setAttribute("scope", "col");
                    th.setAttribute("class", "sort position-sticky ");
                    th.style.top = 0;
                    th.setAttribute("data-sort", $(this).text().trim());
                    th.setAttribute("data-toggle-table", $(this).text().trim());
                    th.innerText = text.replace(/\s\s+/g, " ");
                    indexedArray.push(+$(this).parent().attr("data-column-count"))
                    Cookies.set('cols', indexedArray);

                    //             Cookies.set('cols', indexedArray);

                    // Read the cookie


                } else {
                    th.setAttribute("scope", "col");
                    th.setAttribute("class", "sort position-sticky ");
                    th.style.top = 0;
                    th.setAttribute("data-sort", $(this).text().trim());
                    th.setAttribute("data-toggle-table", $(this).text().trim());
                    th.innerText = text.replace(/\s\s+/g, " ");
                    $(th).hide()

                }

                $(th).insertBefore("th:last-child");





            });

            $(".table-agent-row ").each(function(index) {


                $(this).children().each(function(e) {

                    if (indexedArray.indexOf(+$(this).attr("data-row-count")) > -1) {
                        $(`td[data-row-count]`).eq($(this).attr("data-row-count") - 1).show()


                    } else {

                        $(this).hide()

                    }
                    $("td:last-child").show()
                })


            });



            selectColumn.click(function(e) {




                const INDEX = $(this).parent().attr("data-column-count");
                console.log(INDEX, "...INDEX")
                const item = indexedArray.indexOf(INDEX)

                if (indexedArray.indexOf(INDEX) > -1) {

                    //                 
                    //                  Cookies.set('cols', indexedArray);
                    console.log(Cookies.get('cols'), "exists")

                } else {

                    indexedArray.push(+$(this).parent().attr("data-column-count"))
                    Cookies.set('cols', indexedArray);

                }

                console.log($(this).parent().attr("data-column-count"))


                if ($(this).hasClass("active")) {



                    $(`[data-toggle-table='${$(this).text().trim()}']`).hide();
                    $(".table-agent-row").each(function() {

                        $(this).children().eq(INDEX - 1).hide();

                    });
                } else {

                    //             indexedArray.splice(item,1)
                    $(`[data-toggle-table='${$(this).text().trim()}']`).show();
                    $(".table-agent-row").each(function() {

                        $(this).children().eq(INDEX - 1).show();
                    });
                }


            });




            $(".form-control.form-control-muted.search-input").focus();
            $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
            $(".list-group-item span").css({
                height: "100%",
                width: "100%",
                display: "block"
            });

            $(".list-group-item ").css({
                cursor: "pointer"
            });
            $(".list-group-item").removeClass("d-flex");

            //    onkeyup attach the response to span

            $(".form-control.form-control-muted.search-input").keyup(function() {
                let cols = Cookies.get('cols').replace("[", "").replace("]", "").replace("", "").split(",").join(",")

                $.get("php_action/searchGirlTable?term=" + $(this).val() + "&cols=" + cols, function(data, status) {

                    if (status) {

                        $(".list").html(data)


                        console.log(cols)





                    }

                });
            });
            $("body ").on("click", ".list-group-item span", function(e) {

                $(this).addClass("text-muted");

                //      this is the clicked item text
                const listText = $(this).text().trim();
                const ID = $(this).attr("id").trim();
                $(".selection-button.fade").addClass("show")
                //      checks if the selected text is part of the selected label 
                $(".search-input").val(ID)
                const returned = [...$(".selected  .str-toggle-button")].some(e =>

                    {
                        let buttonText = e.children[0].innerText.replace(/\s/g, "").replace(/([A-Z])/g, ' $1').trim();


                        return buttonText === listText

                    }

                );




                if (!returned) {
                    //creates a clone from the first toggle button in the selected div
                    //        const button = $(".selected  .str-toggle-button:first-child").clone()
                    //        HTMLButtonElement>HTMLLabelElement>HTMLInputElement[radio]
                    //        button.children()[0].children[0].checked
                    //        button.children()[0].children[0].value = listText
                    //        button.children()[0].innerText = listText
                    //        button.clone().appendTo(".selected ")
                    const button = document.createElement("div"),
                        radio = document.createElement("input"),
                        label = document.createElement("label")


                    $(button).addClass("btn-group-toggle m-1 str-toggle-button")
                    $(label).addClass("btn btn-outline-secondary active")
                    $(button).attr("data-toggle", "buttons")
                    $(radio).attr("checked", "buttons")
                    $(radio).attr("autocomplete", "off")
                    $(radio).attr("type", "checkbox")
                    $(radio).attr("value", ID)
                    $(radio).attr("name", "girls[]")
                    $(label).attr("data-ID", ID)
                    label.innerText = listText
                    label.appendChild(radio)
                    button.appendChild(label)


                    $(".selected ").append(button)
                }

                //disabled after onclick

                $(this).parent().css({
                    cursor: "no-drop",
                    "pointer-events": "none"
                });
                $(this).css({
                    cursor: "no-drop",
                    "pointer-events": "none"
                });
                $(".list-group.custom-list-group.rounded-3").addClass("d-none");
            });

            //    onfocus show the HTMLUListElement
            $(".form-control.form-control-muted.search-input").focus(function() {
                $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
            });










        });
    </script>
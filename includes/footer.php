 <style>
     .container-loader {

         display: none;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         height: 100vh;
         position: fixed;
         left: 0;
         top: 0;
         width: 100%;
         background-color: #f8f9fe;
         z-index: 1051;
     }

     .progress-loader {

         border-radius: .5rem;
         background-color: #d3d3d342;
         width: 25rem;
         height: .4rem;
         overflow: hidden;

     }


     .progress-loader-thumb {
         background: linear-gradient(0deg, greenyellow, limegreen);
         width: 8rem;
         height: .4rem;
         border-radius: .5rem;
         animation: progress .5s ease-in-out infinite alternate;
     }

     @keyframes progress {
         0% {

             transform: translatex(-10rem);
         }





         100% {

             transform: translatex(28rem);
             /*     background:linear-gradient(180deg, greenyellow,limegreen ); */
             width: 45rem;
         }

     }



     @keyframes pulse {
         0% {

             opacity: 1;
         }





         100% {

             opacity: 0;
         }

     }




     .flash.faded {
         /*   -webkit-animation: flash .5s ease-out infinite; */
         animation: flash 5s ease-out infinite alternate;
     }

     @-webkit-keyframes flash {

         from,
         50%,
         to {
             opacity: 1;
         }

         25%,
         75% {
             opacity: .5;
         }
     }

     @keyframes flash {

         from,
         50%,
         to {
             opacity: 1;
         }

         25%,
         75% {
             opacity: 0;
         }
     }
 </style>
 <div class="container-loader d-none">
     <h1 class="pb-3 faded flash">Submitting Request ...</h1>
     <div class="progress-loader">
         <div class="progress-loader-thumb"></div>
     </div>

 </div>

 <?php include("includes/loader.php") ?>
 <!-- Argon Scripts -->
 <!-- Core -->

 <script src="assets/js/bootstrap.bundle.min.js" ></script>

 <script src="assets/js/jquery.scrollbar.min.js" defer></script>
 <script src="assets/js/jquery-scrollLock.min.js" defer></script>
 <!-- Optional JS -->

 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" ></script>
 <!-- Argon JS -->
 <script src="assets/js/argon.min.js" ></script>

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
             //       text: 'Select an option',
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



         if (!$(".container-loader").attr("d-none")) {



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

 </body>

 </html>
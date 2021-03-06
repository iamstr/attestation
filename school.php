<?php include "includes/header.php"; ?>

     <?php include "includes/school-sidebar.php"; ?>
     <div class="main-content" id="panel">
      <!-- Page content -->
     <?php include "includes/top-nav.php"; ?>
      <div class="container-fluid">
          <button type="button" class="btn btn-block btn-transparent d-none mb-3 text-white notified" data-toggle="modal" data-target="#modal-notification">Notification</button>


          <div class="modal fade shaking-2" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                  <div class="modal-content bg-gradient-secondary">

                      <div class="modal-header bg-danger ">
                          <h6 class="modal-title text-white" id="modal-title-notification">Your attention is required</h6>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true" class="text-white">×</span>
                          </button>
                      </div>

                      <div class="modal-body">

                          <div class="py-3 text-center">
                              <i class="ni ni-bell-55 ni-3x text-danger shaking"></i>
                              <h4 class="heading mt-4">You should read this!</h4>
                              <p>The file extension you used is not supported <span class="modal-total font-weight-bolder"></span> </p>
                          </div>

                      </div>

                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger text-white retry" data-dismiss="modal">Retry Again</button>
                          <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
                      </div>

                  </div>
              </div>
          </div>
      </div>
      <div class="container mt-6">
          <div class="row">

              <form action="php_action/newUploads" method="post" enctype="multipart/form-data" class="col" id="uploadForm">

                  <div class="card steps-form" style="display: flex;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0">Upload Files </h3>
                              </div>
                              <div class="col-4 text-right d-none">
                                  <a href="uploaded.php" class="btn  btn-secondary text-primary">
                                      <span class="btn-inner--icon"><i class="ni ni-album-2"></i></span>
                                      <span class="btn-inner--text">Check Girls Uploads</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <p class="h3 my-4">Select  Whom  You wanna Upload Certificate For</p>

                          <div class="form-group position-relative">
                              <input type="search" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" id="search" name="search">
                              <img src="assets/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>

                          <ul class="list-group custom-list-group rounded-3">
                              <li class="list-group-item flex-row justify-content-between custom-list-group-item tasks" style="cursor: pointer;">
                                  <span class="maid-name text-muted" style="height: 100%; width: 100%; display: block;">Start Typing...</span>
                                  <!--<i class="fa fa-trash-alt text-danger tasks-delete pt-1"></i>-->
                              </li>

                          </ul>
                      </div>
                      <div class="card-footer">
                          <div class="">
                              <button class="btn btn-primary btn-block w-50 mx-auto btn-lg steps-form-button-next" type="button">
                                  <span class="btn-inner--text">Next</span>
                                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                              </button>
                          </div>

                      </div>
                  </div>
   <div class="card steps-form" style="display: none;">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Upload Files </h3>
              </div>
              <div class="col-4 text-right d-none">
                <a href="uploaded.php" class="btn  btn-secondary text-primary">
                  <span class="btn-inner--icon"><i class="ni ni-album-2"></i></span>
                  <span class="btn-inner--text">Check Girls Uploads</span>
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <p class="h3 my-4"></p>
            <div class="row">
              <div class="col-5">
                <div class="form-group ">
                <label for="">Name Of Persons</label>
                  <input type="text" class="form-control form-control-muted search-input" placeholder="janet moraa" id="name" name="name">

                </div>
              </div>
              <div class="col-5">
                <div class="form-group ">
                 <label for="">Passport Of Persons</label>
                  <input type="text" class="form-control form-control-muted search-input" placeholder="A1234567" id="girl" name="girl">

                </div>
              </div>
            </div>


            
          </div>
          <div class="card-footer">
            <div class="">
              <button class="btn btn-primary btn-block w-50 mx-auto btn-lg steps-form-button-next" type="button">
                <span class="btn-inner--text">Next</span>
                <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
              </button>
            </div>

          </div>
        </div>

                  <div class="card steps-form" style="display: none;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder"> UPLOAD SCHOOL CERTIFICATE</span>  </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="passport_photo">
                              <img src="assets/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image"> </div>

                      </div>
                      <div class="card-footer">
                          <div class="d-flex justify-content-end">
                              <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                                  <span class="btn-inner--text">Back</span>
                              </button>
                              <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next" type="button">
                                  <span class="btn-inner--text">Next</span>
                                  <span class="btn-inner--icon"><i class="ni ni-bold-right"></i></span>
                              </button>
                          </div>
                      </div>
                  </div>

             

              </form>



              <div class="modal fade" id="changeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">

                          <div class="modal-body">

                              <div class="modal-message"></div>
                              <div class="d-flex justify-content-center">
                                  <div class="progress-wrapper">
                                      <div class="progress-info">
                                          <div class="progress-label">
                                              <span>Upload Status</span>
                                          </div>
                                          <div class="progress-percentage">
                                              <span id="uploadStatus">60%</span>
                                          </div>
                                      </div>
                                      <div class="progress">
                                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" id="progressUploadStatus"></div>
                                      </div>
                                  </div>


                              </div>
                          </div>
                          <div class="modal-footer">

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <?php include "includes/footer.php"; ?>

  <script>
      $(document).ready(function() {


          let inputElement, notAllowed = false;

          $(".form-control.form-control-muted.search-input").focus();
          $(".list-group.custom-list-group.rounded-3").removeClass("d-none");
          $(".list-group-item span").css({
              height: "100%",
              width: "100%",
              display: "block"
          });
          $("th[scope='col']").css({
              cursor: "pointer",
              position: "sticky",
              left: 0,
              top: 0
          });
          $("th .dropdown-menu").css({
              "min-width": "20rem",
              padding: "1rem"
          });
          $(".list-group-item ").css({
              cursor: "pointer"
          });
          $(".list-group-item").removeClass("d-flex");

          //    onkeyup attach the response to span

          $(".form-control.form-control-muted.search-input").keyup(function() {




              $.get("php_action/searchGirl?term=" + $(this).val(), function(data, status) {

                  if (status) {

                      $(".custom-list-group").html(data)
                  }

              });
          });
          $("body ").on("click", ".list-group-item span", function(e) {

              $(this).addClass("text-muted");

              //      this is the clicked item text
              const listText = $(this).text().trim();
              const ID = $(this).attr("id").trim();

              //      checks if the selected text is part of the selected label 
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
                  $("#search").val(ID)

                  $(".selected ").append(button)
                  $(".girl-name ").text(listText)
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




          $("input[type=file]").change(function(e) {

              const display = $(".display-image"),
                  img = document.createElement("IMG"),
                  input = this,
                  url = $(this).val(),
                  element = e;
              ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
              img.height = "200"
              img.width = "200"
              $(img).addClass("mx-auto d-block rounded shadow-lg my-5")
              if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
                  var reader = new FileReader();
                  notAllowed = false;
                  reader.onload = function(e) {
                      $(img).attr('src', e.target.result);

                      $(element.target.parentElement.nextElementSibling).html(img)
                  }
                  reader.readAsDataURL(input.files[0]);
              } else {
                  notAllowed = true;
                  document.querySelector(".notified").click()
                  inputElement = $(element.target)[$(element.target).index($(element.target))]

                  if (notAllowed) {

                      $(".retry").click(function(e) {


                          $(inputElement).click()
                          notAllowed = false;

                      })

                  }

              }

          })






          const stepForm = $(".steps-form")





          for (step of $(".steps-form")) {

              step.style.display = "none";
          }

          $(".steps-form")[0].style.display = "flex";




          const stepNext = $(".steps-form-button-next"),
              stepBack = $(".steps-form-button-back")


          stepNext.click(function(e) {

              if (e.currentTarget.classList.contains("btn")) {



                  const buttonParent = e.currentTarget.parentNode,
                      footer = buttonParent.parentNode,
                      parent = footer.parentNode,
                      container = parent.children[1],
                      index = $(".steps-form").index(parent)

                  //   parent.toggleClass("animate");
                  console.log(stepForm.length, index, container)
                  if ((index + 1) < stepForm.length && index >= 0) {
                      stepForm[index + 1].children[1].classList.add("slideLeft")
                      parent.children[1].classList.remove("slideLeft")
                      stepForm[index + 1].style.display = "flex"

                      parent.style.display = "none";



                  } else {

                      console.log(parent, footer, buttonParent)
                  }
              }


          })
          stepBack.click(function(e) {
              if (e.currentTarget.classList.contains("btn")) {
                  const buttonParent = e.currentTarget.parentNode,
                      footer = buttonParent.parentNode,
                      container = footer.nextSibling,
                      parent = footer.parentNode,
                      //                      container=parent.children[1],      
                      index = $(".steps-form").index(parent)
                  console.log(stepForm.length, index, parent)

                  if ((index - 1) > -1) {

                      stepForm[index - 1].style.display = "flex"
                      parent.style.display = "none";
                      stepForm[index - 1].children[1].classList.add("slideRight")
                      parent.children[1].classList.remove("slideLeft")
                      //                        parent.classList.add("slideLeft")
                      //                        stepForm[index+1].classList.add("slideRight")
                      //                        parent.classList.remove("slideLeft","slideRight")

                  }

              }

          })



          //      ajax call


          const log = document.querySelector('.event-log');

          $("#uploadSubmit").unbind('click').bind('click', function(e) {
              //        e.preventDefault()
              console.log("pressed")
              //
              $("#uploadForm").unbind('submit').bind('submit', function(e) {
                  e.preventDefault();
                  var form = $(this);
                  var formData = new FormData(this);
                  console.log(formData)
                  $.ajax({

                      xhr: function() {
                          var xhr = new window.XMLHttpRequest();
                          xhr.upload.addEventListener("progress", function(evt) {
                              if (evt.lengthComputable) {
                                  var percentComplete = Math.floor((evt.loaded / evt.total) * 100);
                                  //Do something with upload progress here
                                  $("#changeModal").modal("show")
                                  $("#progressUploadStatus").css({
                                      width: `${percentComplete}%`
                                  })
                                  $("#uploadStatus").text(`${percentComplete}%`)
                              }
                          }, false);

                          function handleEvent(e) {
                              log.textContent = log.textContent + `${e.type}: ${e.loaded} bytes transferred\n`;
                          }

                          xhr.addEventListener('loadstart', handleEvent);
                          xhr.addEventListener('load', handleEvent);
                          xhr.addEventListener('loadend', handleEvent);
                          xhr.addEventListener('progress', handleEvent);



                          return xhr;
                      },
                      url: form.attr('action'),
                      type: form.attr('method'),
                      data: formData,
                      dataType: 'json',
                      //					cache: false,
                      contentType: false,
                      processData: false,
                      success: function(response) {
                          console.log(response)


                          if (response.success == true) {

                              $("#progressUploadStatus").css({
                                  width: `100%`
                              })
                              $("#uploadStatus").text(`100%`)

                              $("html, body, div.modal, .modal-content, div.modal-body").animate({
                                  scrollTop: '0'
                              }, 100);

                              // shows a successful message after operation
                              $('.modal-message').html('<div class="alert alert-success">' +
                                  '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                  '<strong><i class="ni ni-like-2"></i></strong> ' + response.messages +
                                  '</div>');

                              // remove the mesages
                              $(".alert-success").delay(1000).show(10, function() {
                                  $(this).delay(3000).hide(10, function() {
                                      $(this).remove();
                                      //                    $("#changeModal").modal("hide");

                                      //                                  $('.modal-body form').show()
                                  });
                              }); // /.alert


                          } // /if response.success
                          else {


                              $("#changeModal").modal("show")

                              $("html, body, div.modal, .modal-content, div.modal-body").animate({
                                  scrollTop: '0'
                              }, 100);

                              // shows a successful message after operation
                              $('.modal-message').append('<div class="alert alert-warning shaking-2">' +
                                  '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                                  '<strong><i class="ni ni-like-2"></i></strong> ' + response.messages +
                                  '</div>');

                              // remove the mesages
                              $(".alert-warning").delay(500).show(10, function() {
                                  $(this).delay(3000).hide(10, function() {
                                      $(this).remove();
                                      $("#changeModal").modal("hide");

                                  });
                              }); // /.alert






                          }

                      } // /success function
                  }); // /ajax function

                  return false;

              })

          })



      })
  </script>

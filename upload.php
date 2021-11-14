  <?php include "includes/header.php"; ?>
  <style>
      .table-wrapper {

          margin: 30px auto;
          background: #fff;
          padding: 20px;
          box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
      }

      /* .table-title {
          padding-bottom: 10px;
          margin: 0 0 10px;
      }

      .table-title h2 {
          margin: 6px 0 0;
          font-size: 22px;
      } */

      .table-title .add-new {
          float: right;
          height: 30px;
          font-weight: bold;
          font-size: 12px;
          text-shadow: none;
          min-width: 100px;
          border-radius: 50px;
          line-height: 13px;
      }

      .table-title .add-new i {
          margin-right: 4px;
      }

      /* table.table {
          table-layout: fixed;
      } */
      /* 
      table.table tr th,
      table.table tr td {
          border-color: #e9e9e9;
      } */

      table.table th i {
          font-size: 13px;
          margin: 0 5px;
          cursor: pointer;
      }

      table.table th:last-child {
          width: 100px;
      }

      table.table td a {
          cursor: pointer;
          display: inline-block;
          margin: 0 5px;
          min-width: 24px;
      }

      table.table td a.add {
          color: #27C46B;
      }

      table.table td a.edit {
          color: #FFC107;
      }

      table.table td a.delete {
          color: #E34724;
      }

      table.table td i {
          font-size: 19px;
      }

      table.table td a.add i {
          font-size: 24px;
          margin-right: -1px;
          position: relative;
          top: 3px;
      }

      /* table.table .form-control {
          height: 32px;
          line-height: 32px;
          box-shadow: none;
          border-radius: 2px;
      } */

      table.table .form-control.error {
          border-color: #f50000;
      }

      table.table td .add {
          display: none;
      }
  </style>

  <div class="container" id="panel">
      <!-- Page content -->
      <?php //include "includes/top-nav.php"; 
        ?>
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
      <div class="container-fluid mt-6">
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
                          <p class="h3 my-4">Select Company Whom Files You wanna Upload</p>

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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Employee</span> Details </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">





                          <div class="table-wrapper">
                              <div class="table-title">
                                  <div class="row">
                                      <div class="col-sm-8">

                                      </div>
                                      <div class="col-sm-4">
                                          <button type="button" class="btn btn-info add-new"><i class="fas fa-user-plus"></i> Add New</button>
                                      </div>
                                  </div>
                              </div>












                              <div class="table-responsive">
                                  <table class="table align-items-center table-flush position-relative">
                                      <thead class="thead-light">
                                          <tr class="table-agent ">
                                              <th>SURNAME</th>
                                              <th>OTHER NAMES</th>
                                              <th>GENDER</th>
                                              <th>ID NO</th>
                                              <th>PASSPORT NO</th>
                                              <th>OCCUPATION</th>
                                              <th>RATE OF PAY</th>
                                              <th>CONTRACT DURACTION</th>
                                              <th>COUNTRY OF DESTINATION</th>
                                              <th>LEVEL OF EDUCATION</th>
                                              <th>NEXT OF KIN CONTACTS</th>
                                              <th>VISA COPY</th>
                                              <th>CONTRACT</th>
                                              <th>SIGNATURE</th>
                                              <th>Actions</th>

                                          </tr>
                                      </thead>
                                      <tbody class="list">




                                          <tr>
                                              <td>CHARO</td>
                                              <td>PRISCILA SANITA</td>
                                              <td>F</td>
                                              <td>35195996</td>
                                              <td>AK0957636</td>
                                              <td>HOUSE MAID</td>
                                              <td>900 SR</td>
                                              <td>2 YEARS</td>
                                              <td>KSA</td>
                                              <td>O LEVEL</td>
                                              <td>07377016539</td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>CHARO</td>
                                              <td>PRISCILA SANITA</td>
                                              <td>F</td>
                                              <td>35195996</td>
                                              <td>AK0957636</td>
                                              <td>HOUSE MAID</td>
                                              <td>900 SR</td>
                                              <td>2 YEARS</td>
                                              <td>KSA</td>
                                              <td>O LEVEL</td>
                                              <td>07377016539</td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td>CHARO</td>
                                              <td>PRISCILA SANITA</td>
                                              <td>F</td>
                                              <td>35195996</td>
                                              <td>AK0957636</td>
                                              <td>HOUSE MAID</td>
                                              <td>900 SR</td>
                                              <td>2 YEARS</td>
                                              <td>KSA</td>
                                              <td>O LEVEL</td>
                                              <td>07377016539</td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td><input type="file" name="" id=""></td>
                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>


                                      </tbody>
                                  </table>
                              </div>


                          </div>


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

                  <div class="card steps-form" style="display: none;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder"> List Of Employees</span> And Terms Of Employment </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">





                          <div class="table-wrapper">
                              <div class="table-title">
                                  <div class="row">
                                      <div class="col-sm-8">

                                      </div>
                                      <div class="col-sm-4">
                                          <button type="button" class="btn btn-info add-new"><i class="fas fa-user-plus"></i> Add New</button>
                                      </div>
                                  </div>
                              </div>












                              <div class="table-responsive">
                                  <table class="table align-items-center table-flush position-relative">
                                      <thead class="thead-light">
                                          <tr class="table-agent ">
                                              <th>NO</th>
                                              <th>FULLNAMES</th>
                                              <th>ID NO</th>
                                              <th>COUNTY</th>
                                              <th>BASIC RATE OF PAY</th>
                                              <th>ADVANCED IF ANY</th>
                                              <th>WEEKLY HOURS</th>
                                              <th>RATE OF OVERTIME</th>
                                              <th>HOUSING ALLOWANCE</th>
                                              <th>AMOUNT OF LEAVE</th>
                                              <th>AMOUNT OF WAGES REMITTED LOCALLY</th>
                                              <th>ACTIONS</th>


                                          </tr>
                                      </thead>
                                      <tbody class="list">




                                          <tr>
                                              <td>1</td>
                                              <td>PRISCILA SANITA</td>

                                              <td>35195996</td>
                                              <td>KISII</td>
                                              <td>900SR</td>
                                              <td>N/A</td>
                                              <td>48 HRS</td>
                                              <td>N/A</td>
                                              <td>PROVIDED</td>
                                              <td>21 DAYS ANNUALLY </td>
                                              <td>26,500 </td>

                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>


                                          <tr>
                                              <td>2</td>
                                              <td>PRISCILA SANITA</td>

                                              <td>35195996</td>
                                              <td>KISII</td>
                                              <td>900SR</td>
                                              <td>N/A</td>
                                              <td>48 HRS</td>
                                              <td>N/A</td>
                                              <td>PROVIDED</td>
                                              <td>21 DAYS ANNUALLY </td>
                                              <td>26,500 </td>

                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>


                                          <tr>
                                              <td>3</td>
                                              <td>PRISCILA SANITA</td>

                                              <td>35195996</td>
                                              <td>KISII</td>
                                              <td>900SR</td>
                                              <td>N/A</td>
                                              <td>48 HRS</td>
                                              <td>N/A</td>
                                              <td>PROVIDED</td>
                                              <td>21 DAYS ANNUALLY </td>
                                              <td>26,500 </td>

                                              <td>
                                                  <a class="add" title="Add" data-toggle="tooltip"><i class="fas fa-user-plus"></i></a>
                                                  <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-user-edit"></i></a>
                                                  <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-user-minus"></i></a>
                                              </td>
                                          </tr>


                                      </tbody>
                                  </table>
                              </div>


                          </div>


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

                  <div class="card steps-form" style="display: none;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">FORM OF FOREIGN CONTRACT</span> OF SERVICE </h3>
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
                  <div class="card steps-form" style="display: none;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">FORM OF BOND FOR SECURITY FOR DUE PERFORMANCE OF FOREIGN CONTRACT</span> OF SERVICE </h3>
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

                  <div class="card steps-form" style="display: none;">
                      <div class="card-header">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">PAY NOW</span>  </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                      <div class="  w-50 mx-auto">
                              <p class="text-left pl-1 w-100">1.Go to M-PESA</p>
                              <p class="text-left pl-1 w-100">2.Select Buy  Goods &amp; Service</p>  
                              <p class="text-left pl-1">3.Enter 000000</p>
                              <p class="text-left pl-1">5.Enter the Amount</p>
                              <p class="text-left pl-1">4.Enter the Transaction code in the text field below and press send</p>    
                        <div class="form-group mb-3">
                            <label for=""></label>
                            <input type="text" class="form-control" placeholder="MPESA Code">
                          
                        </div>
                        <button class="btn btn-primary btn-block">PAY NOW</button>
                        </div>

                      </div>
                      <div class="card-footer">
                          <div class="d-flex justify-content-end">
                              <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                                  <span class="btn-inner--text">Back</span>
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
  <script>
      $(document).ready(function() {
          $('[data-toggle="tooltip"]').tooltip();
          var actions = $("table td:last-child").html();
          // Append table with add row form on add new button click
          $(".add-new").click(function() {
              //   $(this).attr("disabled", "disabled");
              var index = $("table tbody tr:last-child").index();
              var row = '<tr>' +
                  '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                  '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="file" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="file" class="form-control" name="phone" id="phone"></td>' +
                  '<td><input type="file" class="form-control" name="phone" id="phone"></td>' +

                  '<td>' + actions + '</td>' +
                  '</tr>';

              $("table").append(row);
              $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
              $('[data-toggle="tooltip"]').tooltip();
          });
          // Add row on add button click
          $(document).on("click", ".add", function() {
              var empty = false;
              var input = $(this).parents("tr").find('input[type="text"]');
              input.each(function() {
                  if (!$(this).val()) {
                      $(this).addClass("error");
                      empty = true;
                  } else {
                      $(this).removeClass("error");
                  }
              });
              $(this).parents("tr").find(".error").first().focus();
              if (!empty) {
                  input.each(function() {
                      $(this).parent("td").html($(this).val());
                  });
                  $(this).parents("tr").find(".add, .edit").toggle();
                  $(".add-new").removeAttr("disabled");
              }
          });
          // Edit row on edit button click
          $(document).on("click", ".edit", function() {
              $(this).parents("tr").find("td:not(:last-child)").each(function() {
                  if ($(this).index() == 13 || $(this).index() == 12 || $(this).index() == 11) {
                      $(this).html('<input type="file" class="form-control" >');
                  } else {
                      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                  }
              });
              $(this).parents("tr").find(".add, .edit").toggle();
              $(".add-new").attr("disabled", "disabled");
          });
          // Delete row on delete button click
          $(document).on("click", ".delete", function() {
              $(this).parents("tr").remove();
              $(".add-new").removeAttr("disabled");
          });
      });
  </script>
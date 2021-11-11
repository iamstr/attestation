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

      table.table tr th,
      table.table tr td {
          border-color: #e9e9e9;
      }

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

      table.table .form-control {
          height: 32px;
          line-height: 32px;
          box-shadow: none;
          border-radius: 2px;
      }

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
                              <div class="col-4 text-right">
                                  <a href="uploaded.php" class="btn  btn-secondary text-primary">
                                      <span class="btn-inner--icon"><i class="ni ni-album-2"></i></span>
                                      <span class="btn-inner--text">Check Girls Uploads</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <p class="h3 my-4">Select Girl Whom Files You wanna Upload</p>

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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Passport Photo </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">




                          <div class="table-responsive">
                              <div class="table-wrapper">
                                  <div class="table-title">
                                      <div class="row">
                                          <div class="col-sm-8">
                                              <h2>Employee <b>Details</b></h2>
                                          </div>
                                          <div class="col-sm-4">
                                              <button type="button" class="btn btn-info add-new"><i class="fas fa-user-plus"></i> Add New</button>
                                          </div>
                                      </div>
                                  </div>
                                  <table class="table table-bordered">
                                      <thead>
                                          <tr>
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
                                              <th>SIGNATURE</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Passport Photo </h3>
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
                          <div class="display-image">

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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Full Photo </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="full_photo">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Birth Certificate </h3>
                              </div>
                              <div class="col-4 text-right">

                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="birth">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> ID Copy </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="id">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Passport Copy</h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="files">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="kin1">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                                  <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin 2 </h3>
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">


                          <div class="form-group position-relative">
                              <input type="file" class="form-control form-control-muted search-input" placeholder="Search by Name or ID or Passport Number" accept="image/jpeg,image/x-png" name="kin2">
                              <img src="assets/img/icons/search.svg" alt="search icon" class="search-input position-absolute" style="width: 33px; top: 20%; right: 2%">
                          </div>
                          <div class="display-image">









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
                      <div class="card-header border-0">
                          <div class="row align-items-center">
                              <div class="col-8">
                                  <!--                 <h3 class="mb-0 font-weight-normal"><span class="girl-name font-weight-bolder">Girl's</span> Next Of Kin 2 </h3>-->
                              </div>
                              <div class="col-4 text-right">
                                  <!--                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>-->
                              </div>
                          </div>
                      </div>
                      <div class="card-body">

                          <h2 class="my-5 text-center">Great Work All Files Uploaded SuccessFully </h2>
                          <a href="https://storyset.com/work" class=" d-flex justify-content-center">

                              <svg class="animated" id="freepik_stories-completed" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1" xmlns:svgjs="http://svgjs.com/svgjs" style="width: 500px;">
                                  <style>
                                      svg#freepik_stories-completed:not(.animated) .animable {
                                          opacity: 0;
                                      }

                                      svg#freepik_stories-completed.animated #freepik--Stamp--inject-16 {
                                          animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                          animation-delay: 1.0s;
                                          opacity: 0
                                      }

                                      svg#freepik_stories-completed.animated #freepik--left-hand--inject-16 {
                                          animation: 1.5s Infinite linear floating;
                                          animation-delay: 0s;
                                      }

                                      svg#freepik_stories-completed.animated #freepik--right-hand--inject-16 {
                                          animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn, 1.5s Infinite linear wind;
                                          animation-delay: 0s, 1s;
                                      }

                                      @keyframes fadeIn {
                                          0% {
                                              opacity: 0;
                                          }

                                          100% {
                                              opacity: 1;
                                          }
                                      }

                                      @keyframes floating {
                                          0% {
                                              opacity: 1;
                                              transform: translateY(0px);
                                          }

                                          50% {
                                              transform: translateY(-10px);
                                          }

                                          100% {
                                              opacity: 1;
                                              transform: translateY(0px);
                                          }
                                      }

                                      @keyframes wind {
                                          0% {
                                              transform: rotate(0deg);
                                          }

                                          25% {
                                              transform: rotate(1deg);
                                          }

                                          75% {
                                              transform: rotate(-1deg);
                                          }
                                      }
                                  </style>
                                  <g id="freepik--background-simple--inject-16" style="transform-origin: 251.848px 250.607px 0px;" class="animable">
                                      <g id="elr06ihgo6e4">
                                          <path d="M67.93,167.09s-27.88,72,11.3,144.5S199.11,422.39,263.7,455.14s131.66,16.8,163.53-36.84-11.84-91.93-11.9-168.42,11.45-96.74-30-161.36-143.06-78.93-219.9-31S67.93,167.09,67.93,167.09Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 248.588px 250.607px 0px;" class="animable"></path>
                                      </g>
                                      <path d="M235.12,35.72c124-11,124.25,58.93,180.14,124.13S483.1,254.6,462,329.76,370,463.83,282.14,430.45s-138.14-1.33-193.53-31-76-86.91-35.42-154.41S82.18,49.34,235.12,35.72Z" style="fill: rgb(146, 227, 169); transform-origin: 251.848px 237.291px 0px;" id="el0x8tysojtl8" class="animable"></path>
                                      <g id="el4rzqd6kvkv8">
                                          <path d="M235.12,35.72c124-11,124.25,58.93,180.14,124.13S483.1,254.6,462,329.76,370,463.83,282.14,430.45s-138.14-1.33-193.53-31-76-86.91-35.42-154.41S82.18,49.34,235.12,35.72Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 251.848px 237.291px 0px;" class="animable"></path>
                                      </g>
                                  </g>
                                  <g id="freepik--Document--inject-16" style="transform-origin: 235.305px 211.98px 0px;" class="animable">
                                      <g id="elzu7o7sx8exh">
                                          <rect x="137.25" y="75.67" width="196.11" height="272.62" style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 235.305px 211.98px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <g id="el2qzvp0nyilu">
                                          <rect x="124.27" y="76.39" width="196.11" height="37.72" style="fill: rgb(191, 191, 191); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 222.325px 95.25px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <path d="M263.54,82.92,179.4,92.28A2.88,2.88,0,1,0,180,98l84.14-9.36a2.88,2.88,0,0,0-.64-5.72Z" style="fill: rgb(255, 255, 255); transform-origin: 221.627px 90.4746px 0px;" id="elgcdjt1j95rs" class="animable"></path>
                                      <path d="M243.81,97l-42.06,4.68a1.42,1.42,0,0,0-1.27,1.58,1.44,1.44,0,0,0,1.58,1.28l42.07-4.68a1.44,1.44,0,0,0-.32-2.86Z" style="fill: rgb(255, 255, 255); transform-origin: 222.912px 100.771px 0px;" id="elbjdrc1wj4ig" class="animable"></path>
                                      <g id="el6c116lwfpvm">
                                          <path d="M275.25,129.42,165,141.68a1.07,1.07,0,0,0,.24,2.13l110.22-12.26a1.07,1.07,0,0,0-.24-2.13Z" style="opacity: 0.3; transform-origin: 220.23px 136.615px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elfcsiz6ualsl">
                                          <path d="M276.1,137.07l-126.76,14.1a1.07,1.07,0,1,0,.24,2.13l126.76-14.1a1.07,1.07,0,0,0,1-1.18A1.08,1.08,0,0,0,276.1,137.07Z" style="opacity: 0.3; transform-origin: 212.867px 145.184px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elwlj7wt90dqi">
                                          <path d="M243.87,148.4l-93.68,10.42a1.07,1.07,0,1,0,.24,2.13l93.67-10.42a1.07,1.07,0,0,0,1-1.18A1.08,1.08,0,0,0,243.87,148.4Z" style="opacity: 0.3; transform-origin: 197.172px 154.672px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elqiokrf093o">
                                          <rect x="290.17" y="125.94" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 298.535px 134.305px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="294.01 133.95 297.69 137.42 302.53 130.01" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 298.27px 133.715px 0px;" id="elg5jyung54m" class="animable"></polyline>
                                      <g id="el3fw3ksi5ilg">
                                          <path d="M279.28,165.66,169.06,177.92a1.07,1.07,0,0,0,.24,2.13l110.22-12.26a1.07,1.07,0,1,0-.24-2.13Z" style="opacity: 0.3; transform-origin: 224.289px 172.855px 0px;" class="animable"></path>
                                      </g>
                                      <g id="eliozm68rri9">
                                          <path d="M280.13,173.31l-126.76,14.1a1.07,1.07,0,1,0,.24,2.13l126.76-14.1a1.07,1.07,0,1,0-.24-2.13Z" style="opacity: 0.3; transform-origin: 216.871px 181.424px 0px;" class="animable"></path>
                                      </g>
                                      <g id="eltrwtaz4v3b">
                                          <path d="M247.9,184.64l-93.68,10.42a1.07,1.07,0,0,0,.24,2.13l93.67-10.42a1.07,1.07,0,0,0,1-1.18A1.08,1.08,0,0,0,247.9,184.64Z" style="opacity: 0.3; transform-origin: 201.201px 190.914px 0px;" class="animable"></path>
                                      </g>
                                      <g id="el1hfen8ntf5z">
                                          <rect x="294.2" y="162.18" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 302.565px 170.545px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="298.05 170.19 301.72 173.66 306.56 166.25" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 302.305px 169.955px 0px;" id="elrm5iarz0ml" class="animable"></polyline>
                                      <g id="elh21uxn4gqqp">
                                          <path d="M283.31,201.9,173.09,214.16a1.07,1.07,0,0,0,.24,2.12L283.55,204a1.07,1.07,0,1,0-.24-2.13Z" style="opacity: 0.3; transform-origin: 228.363px 209.072px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elals4fybowif">
                                          <path d="M284.17,209.55,157.4,223.65a1.05,1.05,0,0,0-.94,1.18,1.07,1.07,0,0,0,1.18.95l126.76-14.1a1.08,1.08,0,0,0,1-1.19A1.07,1.07,0,0,0,284.17,209.55Z" style="opacity: 0.3; transform-origin: 220.93px 217.662px 0px;" class="animable"></path>
                                      </g>
                                      <g id="ellflgm28pxqr">
                                          <path d="M251.93,220.88,158.25,231.3a1.07,1.07,0,0,0,.24,2.13L252.16,223a1.07,1.07,0,0,0-.23-2.13Z" style="opacity: 0.3; transform-origin: 205.207px 227.15px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elgkw7bw3czpa">
                                          <rect x="298.23" y="198.41" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 306.595px 206.775px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="302.08 206.43 305.75 209.9 310.6 202.48" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 306.34px 206.19px 0px;" id="elm1mlra0dem" class="animable"></polyline>
                                      <g id="elyb9evzrbyzd">
                                          <path d="M287.34,238.14,177.12,250.4a1.07,1.07,0,0,0,.24,2.12l110.22-12.26a1.07,1.07,0,1,0-.24-2.12Z" style="opacity: 0.3; transform-origin: 232.432px 245.32px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elxbpk9ne36jp">
                                          <path d="M288.2,245.79l-126.77,14.1a1.05,1.05,0,0,0-.94,1.18,1.07,1.07,0,0,0,1.18.95l126.76-14.1a1.08,1.08,0,0,0,.95-1.19A1.07,1.07,0,0,0,288.2,245.79Z" style="opacity: 0.3; transform-origin: 224.934px 253.904px 0px;" class="animable"></path>
                                      </g>
                                      <g id="eltsu46hxhvtn">
                                          <path d="M256,257.12l-93.68,10.42a1.05,1.05,0,0,0-.94,1.18,1.07,1.07,0,0,0,1.18.95l93.67-10.42a1.07,1.07,0,0,0,.95-1.18A1.06,1.06,0,0,0,256,257.12Z" style="opacity: 0.3; transform-origin: 209.279px 263.395px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elq6tmu9m7cj">
                                          <rect x="302.26" y="234.65" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 310.625px 243.015px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="306.11 242.66 309.78 246.13 314.63 238.72" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 310.37px 242.425px 0px;" id="elyaf5earxgfh" class="animable"></polyline>
                                      <g id="elss7ydzgqvqf">
                                          <path d="M291.38,274.37,181.16,286.63a1.07,1.07,0,1,0,.23,2.13L291.61,276.5a1.07,1.07,0,0,0,.95-1.18A1.08,1.08,0,0,0,291.38,274.37Z" style="opacity: 0.3; transform-origin: 236.385px 281.568px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elmrzu30hee1">
                                          <path d="M292.23,282l-126.77,14.1a1.07,1.07,0,1,0,.24,2.12l126.76-14.1a1.07,1.07,0,1,0-.23-2.12Z" style="opacity: 0.3; transform-origin: 228.967px 290.109px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elex8p7fm3kwi">
                                          <path d="M260,293.36l-93.68,10.42a1.07,1.07,0,0,0,.24,2.13l93.68-10.42a1.08,1.08,0,0,0,.94-1.19A1.06,1.06,0,0,0,260,293.36Z" style="opacity: 0.3; transform-origin: 213.277px 299.635px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elealh2uifr9">
                                          <rect x="306.29" y="270.89" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 314.655px 279.255px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="310.14 278.9 313.81 282.37 318.66 274.96" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 314.4px 278.665px 0px;" id="elicvbhnp9ez" class="animable"></polyline>
                                      <g id="elp1a6q8pe7be">
                                          <path d="M294.45,302,184.23,314.28a1.07,1.07,0,0,0,.24,2.13l110.22-12.26a1.05,1.05,0,0,0,.94-1.18A1.07,1.07,0,0,0,294.45,302Z" style="opacity: 0.3; transform-origin: 239.457px 309.205px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elj9tztfi93fk">
                                          <path d="M295.3,309.68l-126.76,14.1a1.07,1.07,0,1,0,.23,2.12l126.77-14.1a1.07,1.07,0,0,0-.24-2.12Z" style="opacity: 0.3; transform-origin: 231.953px 317.799px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elc5y29u2wuug">
                                          <path d="M263.06,321l-93.67,10.42a1.07,1.07,0,0,0-.95,1.18,1.08,1.08,0,0,0,1.19.95l93.67-10.42a1.07,1.07,0,1,0-.24-2.13Z" style="opacity: 0.3; transform-origin: 216.344px 327.275px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elw0cdrh9ukth">
                                          <rect x="309.37" y="298.54" width="16.73" height="16.73" rx="2.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; opacity: 0.3; transform-origin: 317.735px 306.905px 0px; transform: rotate(-6.35deg);" class="animable"></rect>
                                      </g>
                                      <polyline points="313.21 306.55 316.88 310.02 321.73 302.61" style="fill: none; stroke: rgb(146, 227, 169); stroke-linecap: round; stroke-linejoin: round; stroke-width: 3px; transform-origin: 317.47px 306.315px 0px;" id="el3yck8jgj9yr" class="animable"></polyline>
                                  </g>
                                  <g id="freepik--Stamp--inject-16" style="transform-origin: 228.076px 208.076px 0px;" class="animable animator-active">
                                      <path d="M225.72,203.23c-.66-1.17-1.32-1.29-2.14-.83l-1.22.69,3.15,5.55,1.22-.69c.82-.46,1.05-1.09.39-2.26Z" style="fill: none; transform-origin: 224.932px 205.395px 0px;" id="elgg7n11yq8qq" class="animable"></path>
                                      <path d="M202.81,231.27A5.25,5.25,0,0,0,202,228l-1.23-2.18-2.44,1.38,1.33,2.34c.66,1.17.39,1.89-.43,2.35s-1.58.34-2.24-.83L194.14,226l-3.06.6,3.26,5.75c1.49,2.63,3.65,3.38,6.18,2a5.74,5.74,0,0,0,1.11-.83,1.57,1.57,0,0,1,.53-1.9A2.26,2.26,0,0,1,202.81,231.27Z" style="fill: rgb(146, 227, 169); transform-origin: 196.953px 230.426px 0px;" id="el521mjc4z6z7" class="animable"></path>
                                      <path d="M189.51,223.83l.58,1,3.37,0-1.47-2.6c-.66-1.17-.4-1.91.42-2.37s1.59-.32,2.25.86l1,1.75,2.43-1.38-.9-1.59c-1.49-2.62-3.65-3.38-6.18-1.94a5.2,5.2,0,0,0-1.52,1.24,5.27,5.27,0,0,0,1.78.25l-2.4.9A4.76,4.76,0,0,0,189.51,223.83Z" style="fill: rgb(146, 227, 169); transform-origin: 193.398px 220.834px 0px;" id="el1um6o1i82io" class="animable"></path>
                                      <path d="M208.2,213.17a5.86,5.86,0,0,1,1-.39c1.29-.58,1.58-2.44,1.47-3.75l-1.33-1.65-3.58,2,2.24,3.94A.81.81,0,0,1,208.2,213.17Z" style="fill: rgb(146, 227, 169); transform-origin: 208.227px 210.35px 0px;" id="el3vpu9l9ikd6" class="animable"></path>
                                      <path d="M223.45,221l2.43-1.38-9.29-16.38-2.31,1.3c.74.18,1.27.53,1.29,1.07-.72.1-1.6,0-2.38.14l4.68,12.13,0,0-5.92-7.38a1,1,0,0,1-.36.87c-.27.19-.66.19-.87.44s-.18.55-.36.77-.46.28-.68.44-.46.57-.71.84a1,1,0,0,1-.44.27l6.58,11.6,2.24-1.28-6.57-11.58,0,0,8.44,10.52,2.44-1.38-4.93-12.73,0,0Z" style="fill: rgb(146, 227, 169); transform-origin: 217.205px 214.484px 0px;" id="elwhdwqfzia3" class="animable"></path>
                                      <path d="M229.6,206.74a1.48,1.48,0,0,1,.75.88,4.93,4.93,0,0,0-.75-3.55l-1.21-2.14c-1.49-2.62-3.56-3.33-6.14-1.87l-3.79,2.15,9.3,16.39,2.41-1.37c-.78-.49-1.65-.91-2.39-1.44a2.44,2.44,0,0,1-.83-.89,1.06,1.06,0,0,1,.12-1.15,1.17,1.17,0,0,1,1.24-.17l-1.47-2.6,1.22-.69a5.26,5.26,0,0,0,1.71-1.48C229.26,208,228.37,206.28,229.6,206.74ZM226.73,208l-1.22.69-3.15-5.55,1.22-.69c.82-.46,1.48-.34,2.14.83l1.4,2.46C227.78,206.86,227.55,207.49,226.73,208Z" style="fill: rgb(146, 227, 169); transform-origin: 224.441px 208.957px 0px;" id="eluvoaeb75wgq" class="animable"></path>
                                      <path d="M243.39,209.73l-1.32-2.34-4.24,2.4-6.2-10.93-.28.22a1.49,1.49,0,0,1-.64.35.51.51,0,0,1-.59-.32,1.08,1.08,0,0,1,0-.47,4.39,4.39,0,0,0-.84-2.59l-2,1.16,9.29,16.38Z" style="fill: rgb(146, 227, 169); transform-origin: 235.336px 204.82px 0px;" id="el1ec9ya6r9d1" class="animable"></path>
                                      <path d="M242.23,204c.28-.73,1.15-1,1.64-1.66a2.25,2.25,0,0,0,.12-.21l-1-1.68,2.53-1.43a1.1,1.1,0,0,0-.24-.43,4,4,0,0,0-1.15-.36.87.87,0,0,1,.67-1.25c.17,0,.37,0,.5-.08a.56.56,0,0,0,.13-.39l-.23-.4-3.54,2-2.58-4.56,4.44-2.53-1.33-2.34-7,4,6.88,12.13A2.73,2.73,0,0,1,242.23,204Z" style="fill: rgb(146, 227, 169); transform-origin: 240.355px 196.744px 0px;" id="el3jskjumn9om" class="animable"></path>
                                      <path d="M251.54,205.11l-1.33-2.34-4.45,2.52L244.43,203l-1.64,1.54-.57.55,2.3,4.05Z" style="fill: rgb(146, 227, 169); transform-origin: 246.879px 205.955px 0px;" id="el5nm4vdqm08i" class="animable"></path>
                                      <path d="M248.23,186.08c0,.35-.25.74-.59.77a1.81,1.81,0,0,1-.51-.08,4,4,0,0,1-.92-.09.67.67,0,0,1-.18-.11l-2.94,1.67,1.33,2.35,2.69-1.53,8,14,2.57-1.46-8-14,2.7-1.53-1.33-2.34-2.76,1.56C248.24,185.55,248.26,185.82,248.23,186.08Z" style="fill: rgb(146, 227, 169); transform-origin: 250.385px 193.395px 0px;" id="elckt295k0wuk" class="animable"></path>
                                      <path d="M259.46,196l2,3.53,2.7-1.53a3,3,0,0,1,.24-.51,6.37,6.37,0,0,1,2.33-2.06l1.24-.77-.82-1.46-4.45,2.53-2.72-4.8,3.54-2-1.33-2.34-3.54,2L256.07,184l4.45-2.52-1.33-2.34-7,4,5.05,8.91C258.46,191.4,259.07,193.74,259.46,196Z" style="fill: rgb(146, 227, 169); transform-origin: 260.08px 189.336px 0px;" id="elf45o9zteu85" class="animable"></path>
                                      <path d="M207.67,228.36c.42.07.67.49,1,.77a1.36,1.36,0,0,0,.41.26,5.53,5.53,0,0,0,.56-.26c2.52-1.43,3.05-3.71,1.57-6.34l-.15-.26-3.46-.09,1.13,2c.66,1.17.4,1.91-.42,2.37s-1.59.31-2.25-.86l-5-8.85c-.67-1.17-.4-1.9.42-2.37s1.58-.31,2.25.86l3.39,6a13.65,13.65,0,0,1,3.18-.4l-3.91-6.89c-1.48-2.62-3.71-3.33-6.24-1.9s-3.06,3.72-1.57,6.34l4.83,8.52a4.59,4.59,0,0,0,3.28,2.57,1,1,0,0,1,0-.18C206.57,229,207.05,228.24,207.67,228.36Z" style="fill: rgb(146, 227, 169); transform-origin: 204.891px 220.75px 0px;" id="ely34qw0104rc" class="animable"></path>
                                      <path d="M242.2,181.33l7.85-4.45c-2.25.62-4.23,2.5-6.55,2.24a2.52,2.52,0,0,0-1.28,0,1.24,1.24,0,0,0-.42,1.63A2.2,2.2,0,0,0,242.2,181.33Z" style="fill: rgb(146, 227, 169); transform-origin: 245.852px 179.104px 0px;" id="elx77psi2zyds" class="animable"></path>
                                      <path d="M222.51,192.5a.87.87,0,0,1,.1-.5,1.8,1.8,0,0,0,.6.1l2.71-1.53a7.49,7.49,0,0,1,1.44-1.26,7.59,7.59,0,0,1,1.62-.64l.6-.18,5-2.82a.93.93,0,0,1,.21-.27,1,1,0,0,1,.25-.12l-5.16-1.56-1.39.78-.15,1.1-5.95,3.18a5.28,5.28,0,0,1-1.93.73,3.31,3.31,0,0,1-.77,0l-8.48,4.81a5.24,5.24,0,0,0,.34,1.17,3.69,3.69,0,0,1-1.39-.57l-1.74,1c1.24.82,2.46,1.66,3.65,2.55Z" style="fill: rgb(146, 227, 169); transform-origin: 221.73px 191.094px 0px;" id="eltmc60ogbu4" class="animable"></path>
                                      <path d="M258.81,171.92l-4.1-2.3-1.94,1.1A8,8,0,0,0,257,173Z" style="fill: rgb(146, 227, 169); transform-origin: 255.789px 171.311px 0px;" id="elgyir4kuy4yi" class="animable"></path>
                                      <path d="M280.86,196.13l-15.48-27.29a4.6,4.6,0,0,0-6.25-1.73l-1.86,1.06.71.69c.74.74,1.5,1.49,2.19,2.28l.94-.53a.57.57,0,0,1,.77.21l15.49,27.3a.57.57,0,0,1-.22.77l-21.07,12c1.82.11,3.66-.15,5.48.06a19,19,0,0,1,1.95.35l15.62-8.86A4.6,4.6,0,0,0,280.86,196.13Z" style="fill: rgb(146, 227, 169); transform-origin: 268.777px 188.91px 0px;" id="el81jj4pkpjis" class="animable"></path>
                                      <path d="M186,230.86,178.72,218a.57.57,0,0,1,.21-.78l21-11.92c-.07-.16-.16-.32-.22-.48a2.87,2.87,0,0,1,.88.1l8.49-4.81c-.28-.09-.55-.2-.82-.3l-4-1.59-3.2,1.82,3.48,2.13c-1.21-.74-3.68-.84-5.81-.81L177,213.73a4.59,4.59,0,0,0-1.73,6.25l6.32,11.14c.29-.08.59-.15.88-.2a13,13,0,0,1,2.42-.12A9.08,9.08,0,0,1,186,230.86Z" style="fill: rgb(146, 227, 169); transform-origin: 191.877px 214.67px 0px;" id="elbb17roeylt5" class="animable"></path>
                                      <path d="M211.94,235.88a4.47,4.47,0,0,0,1.2.77c.45.2,1.05.68.7,1-1.62.74-3.62.19-5.21,1-.87.42-1.71,1.25-2.64,1a12.71,12.71,0,0,1,3,2.53l39.71-22.52c0-.16.05-.32.08-.49a2.07,2.07,0,0,1,2.58-2,5.21,5.21,0,0,1,1.53.16l4.95-2.81a18.63,18.63,0,0,0-2.4-3.26Z" style="fill: rgb(146, 227, 169); transform-origin: 231.914px 226.721px 0px;" id="ellik3sec38o9" class="animable"></path>
                                      <path d="M205.51,242.49a7.22,7.22,0,0,1-2.59-1.49L195,245.5a.56.56,0,0,1-.77-.21l-7-12.27a4.85,4.85,0,0,0-2.09-.24c-.81.16-1.52,1.1-1.08,1.79a2.33,2.33,0,0,1,2,1.24,6.38,6.38,0,0,1-1.41.85l6,10.61A4.6,4.6,0,0,0,197,249l10.38-5.89-.12-.07A17,17,0,0,0,205.51,242.49Z" style="fill: rgb(146, 227, 169); transform-origin: 195.652px 241.193px 0px;" id="eld0at6dmyqz8" class="animable"></path>
                                      <g id="elsdcfkzphfmm">
                                          <g style="opacity: 0.2; transform-origin: 228.076px 208.076px 0px;" class="animable">
                                              <path d="M202.81,231.27A5.25,5.25,0,0,0,202,228l-1.23-2.18-2.44,1.38,1.33,2.34c.66,1.17.39,1.89-.43,2.35s-1.58.34-2.24-.83L194.14,226l-3.06.6,3.26,5.75c1.49,2.63,3.65,3.38,6.18,2a5.74,5.74,0,0,0,1.11-.83,1.57,1.57,0,0,1,.53-1.9A2.26,2.26,0,0,1,202.81,231.27Z" id="elnxgqkzgwlpl" style="transform-origin: 196.953px 230.426px 0px;" class="animable"></path>
                                              <path d="M189.51,223.83l.58,1,3.37,0-1.47-2.6c-.66-1.17-.4-1.91.42-2.37s1.59-.32,2.25.86l1,1.75,2.43-1.38-.9-1.59c-1.49-2.62-3.65-3.38-6.18-1.94a5.2,5.2,0,0,0-1.52,1.24,5.27,5.27,0,0,0,1.78.25l-2.4.9A4.76,4.76,0,0,0,189.51,223.83Z" id="el73pr76l4mn" style="transform-origin: 193.398px 220.834px 0px;" class="animable"></path>
                                              <path d="M208.2,213.17a5.86,5.86,0,0,1,1-.39c1.29-.58,1.58-2.44,1.47-3.75l-1.33-1.65-3.58,2,2.24,3.94A.81.81,0,0,1,208.2,213.17Z" id="elbb2veu9rrw" style="transform-origin: 208.227px 210.35px 0px;" class="animable"></path>
                                              <path d="M223.45,221l2.43-1.38-9.29-16.38-2.31,1.3c.74.18,1.27.53,1.29,1.07-.72.1-1.6,0-2.38.14l4.68,12.13,0,0-5.92-7.38a1,1,0,0,1-.36.87c-.27.19-.66.19-.87.44s-.18.55-.36.77-.46.28-.68.44-.46.57-.71.84a1,1,0,0,1-.44.27l6.58,11.6,2.24-1.28-6.57-11.58,0,0,8.44,10.52,2.44-1.38-4.93-12.73,0,0Z" id="el6biiha8ohno" style="transform-origin: 217.205px 214.484px 0px;" class="animable"></path>
                                              <path d="M229.6,206.74a1.48,1.48,0,0,1,.75.88,4.93,4.93,0,0,0-.75-3.55l-1.21-2.14c-1.49-2.62-3.56-3.33-6.14-1.87l-3.79,2.15,9.3,16.39,2.41-1.37c-.78-.49-1.65-.91-2.39-1.44a2.44,2.44,0,0,1-.83-.89,1.06,1.06,0,0,1,.12-1.15,1.17,1.17,0,0,1,1.24-.17l-1.47-2.6,1.22-.69a5.26,5.26,0,0,0,1.71-1.48C229.26,208,228.37,206.28,229.6,206.74ZM226.73,208l-1.22.69-3.15-5.55,1.22-.69c.82-.46,1.48-.34,2.14.83l1.4,2.46C227.78,206.86,227.55,207.49,226.73,208Z" id="elpmqqmer56i" style="transform-origin: 224.441px 208.957px 0px;" class="animable"></path>
                                              <path d="M243.39,209.73l-1.32-2.34-4.24,2.4-6.2-10.93-.28.22a1.49,1.49,0,0,1-.64.35.51.51,0,0,1-.59-.32,1.08,1.08,0,0,1,0-.47,4.39,4.39,0,0,0-.84-2.59l-2,1.16,9.29,16.38Z" id="elel7mku6io7" style="transform-origin: 235.336px 204.82px 0px;" class="animable"></path>
                                              <path d="M242.23,204c.28-.73,1.15-1,1.64-1.66a2.25,2.25,0,0,0,.12-.21l-1-1.68,2.53-1.43a1.1,1.1,0,0,0-.24-.43,4,4,0,0,0-1.15-.36.87.87,0,0,1,.67-1.25c.17,0,.37,0,.5-.08a.56.56,0,0,0,.13-.39l-.23-.4-3.54,2-2.58-4.56,4.44-2.53-1.33-2.34-7,4,6.88,12.13A2.73,2.73,0,0,1,242.23,204Z" id="ell4lkvbaqqof" style="transform-origin: 240.355px 196.744px 0px;" class="animable"></path>
                                              <path d="M251.54,205.11l-1.33-2.34-4.45,2.52L244.43,203l-1.64,1.54-.57.55,2.3,4.05Z" id="elhmaqcqmg3tj" style="transform-origin: 246.879px 205.955px 0px;" class="animable"></path>
                                              <path d="M248.23,186.08c0,.35-.25.74-.59.77a1.81,1.81,0,0,1-.51-.08,4,4,0,0,1-.92-.09.67.67,0,0,1-.18-.11l-2.94,1.67,1.33,2.35,2.69-1.53,8,14,2.57-1.46-8-14,2.7-1.53-1.33-2.34-2.76,1.56C248.24,185.55,248.26,185.82,248.23,186.08Z" id="elb4x5e5g2qz8" style="transform-origin: 250.385px 193.395px 0px;" class="animable"></path>
                                              <path d="M259.46,196l2,3.53,2.7-1.53a3,3,0,0,1,.24-.51,6.37,6.37,0,0,1,2.33-2.06l1.24-.77-.82-1.46-4.45,2.53-2.72-4.8,3.54-2-1.33-2.34-3.54,2L256.07,184l4.45-2.52-1.33-2.34-7,4,5.05,8.91C258.46,191.4,259.07,193.74,259.46,196Z" id="elsh6eyvrj8jk" style="transform-origin: 260.08px 189.336px 0px;" class="animable"></path>
                                              <path d="M207.67,228.36c.42.07.67.49,1,.77a1.36,1.36,0,0,0,.41.26,5.53,5.53,0,0,0,.56-.26c2.52-1.43,3.05-3.71,1.57-6.34l-.15-.26-3.46-.09,1.13,2c.66,1.17.4,1.91-.42,2.37s-1.59.31-2.25-.86l-5-8.85c-.67-1.17-.4-1.9.42-2.37s1.58-.31,2.25.86l3.39,6a13.65,13.65,0,0,1,3.18-.4l-3.91-6.89c-1.48-2.62-3.71-3.33-6.24-1.9s-3.06,3.72-1.57,6.34l4.83,8.52a4.59,4.59,0,0,0,3.28,2.57,1,1,0,0,1,0-.18C206.57,229,207.05,228.24,207.67,228.36Z" id="elqofdd0zjiae" style="transform-origin: 204.891px 220.75px 0px;" class="animable"></path>
                                              <path d="M242.2,181.33l7.85-4.45c-2.25.62-4.23,2.5-6.55,2.24a2.52,2.52,0,0,0-1.28,0,1.24,1.24,0,0,0-.42,1.63A2.2,2.2,0,0,0,242.2,181.33Z" id="elrx9bq7dn34" style="transform-origin: 245.852px 179.104px 0px;" class="animable"></path>
                                              <path d="M222.51,192.5a.87.87,0,0,1,.1-.5,1.8,1.8,0,0,0,.6.1l2.71-1.53a7.49,7.49,0,0,1,1.44-1.26,7.59,7.59,0,0,1,1.62-.64l.6-.18,5-2.82a.93.93,0,0,1,.21-.27,1,1,0,0,1,.25-.12l-5.16-1.56-1.39.78-.15,1.1-5.95,3.18a5.28,5.28,0,0,1-1.93.73,3.31,3.31,0,0,1-.77,0l-8.48,4.81a5.24,5.24,0,0,0,.34,1.17,3.69,3.69,0,0,1-1.39-.57l-1.74,1c1.24.82,2.46,1.66,3.65,2.55Z" id="el517kr176qd3" style="transform-origin: 221.73px 191.094px 0px;" class="animable"></path>
                                              <path d="M258.81,171.92l-4.1-2.3-1.94,1.1A8,8,0,0,0,257,173Z" id="elxdy1xvtsx5s" style="transform-origin: 255.789px 171.311px 0px;" class="animable"></path>
                                              <path d="M280.86,196.13l-15.48-27.29a4.6,4.6,0,0,0-6.25-1.73l-1.86,1.06.71.69c.74.74,1.5,1.49,2.19,2.28l.94-.53a.57.57,0,0,1,.77.21l15.49,27.3a.57.57,0,0,1-.22.77l-21.07,12c1.82.11,3.66-.15,5.48.06a19,19,0,0,1,1.95.35l15.62-8.86A4.6,4.6,0,0,0,280.86,196.13Z" id="elk76dgmn78kh" style="transform-origin: 268.777px 188.91px 0px;" class="animable"></path>
                                              <path d="M186,230.86,178.72,218a.57.57,0,0,1,.21-.78l21-11.92c-.07-.16-.16-.32-.22-.48a2.87,2.87,0,0,1,.88.1l8.49-4.81c-.28-.09-.55-.2-.82-.3l-4-1.59-3.2,1.82,3.48,2.13c-1.21-.74-3.68-.84-5.81-.81L177,213.73a4.59,4.59,0,0,0-1.73,6.25l6.32,11.14c.29-.08.59-.15.88-.2a13,13,0,0,1,2.42-.12A9.08,9.08,0,0,1,186,230.86Z" id="elnehs8g0uv3" style="transform-origin: 191.877px 214.67px 0px;" class="animable"></path>
                                              <path d="M211.94,235.88a4.47,4.47,0,0,0,1.2.77c.45.2,1.05.68.7,1-1.62.74-3.62.19-5.21,1-.87.42-1.71,1.25-2.64,1a12.71,12.71,0,0,1,3,2.53l39.71-22.52c0-.16.05-.32.08-.49a2.07,2.07,0,0,1,2.58-2,5.21,5.21,0,0,1,1.53.16l4.95-2.81a18.63,18.63,0,0,0-2.4-3.26Z" id="el79vod6l158l" style="transform-origin: 231.914px 226.721px 0px;" class="animable"></path>
                                              <path d="M205.51,242.49a7.22,7.22,0,0,1-2.59-1.49L195,245.5a.56.56,0,0,1-.77-.21l-7-12.27a4.85,4.85,0,0,0-2.09-.24c-.81.16-1.52,1.1-1.08,1.79a2.33,2.33,0,0,1,2,1.24,6.38,6.38,0,0,1-1.41.85l6,10.61A4.6,4.6,0,0,0,197,249l10.38-5.89-.12-.07A17,17,0,0,0,205.51,242.49Z" id="eld3lfq2hw5rc" style="transform-origin: 195.652px 241.193px 0px;" class="animable"></path>
                                          </g>
                                      </g>
                                  </g>
                                  <g id="freepik--left-hand--inject-16" style="transform-origin: 125.539px 320.936px 0px;" class="animable">
                                      <g id="elkipbrvh9ms">
                                          <path d="M160.48,206.78c6.1,4.48,11.2,26,11.66,45.73s10,53,11.14,58.45.72,13.31,7.8,2.37,27.79-29.93,36.42-23.62-5.9,27.52-13.77,38.94-8.67,31.53-18.1,44.12-17.95,31.6-27.19,31.31S98,449.19,98,449.19l1.2-62.14,55-90Z" style="fill-opacity: 0.7; opacity: 0.3; transform-origin: 164.076px 327.986px 0px;" class="animable"></path>
                                      </g>
                                      <path d="M232.52,292.76c-.31,1.95-11.08,16.22-17.41,26.9s-12.26,29.27-13.85,32-21,19.78-26.32,26.91-14.82,10.28-24.31,17c-6.1,4.32-25.11,26.61-37.92,42-7.12,8.55-12.33,15-12.33,15L18.49,431.22s6.78-5.59,15.7-13.13l.06,0,.09-.07C49,405.57,69.43,388,75.07,381.37,84.16,370.69,96.82,358,96.82,358c-.77-14.83.8-28.88-.59-34.22-.72-2.79-2-18.66-3-23.54-2.43-12.47-13-25.39-14.19-30.48S63.9,243,70.71,239a6.27,6.27,0,0,1,4.16-.91c9.2,1.27,16.78,23.49,22,29.15a67.66,67.66,0,0,1,6.06,8.52c4.12,6.53,8.16,13.87,8.16,13.87,1.58-6.33-9.89-28.88-13.06-50.24s-12.26-32.83,0-34.15a7.65,7.65,0,0,1,3,.26c8.63,2.52,12.37,20.45,17.53,37.85.48,1.6,4.41,13.09,7.47,21.95v0c2,5.8,3.6,10.47,3.6,10.47.39-10.88-3-21-3.56-30.86-.24-3.95,1-19.78-.56-35.6-1.34-13.35-.73-18.76,4.49-19.81a13,13,0,0,1,3.39-.16c9.05.57,12.26,24.62,12.26,34,0,5.45.93,16.09,1.71,24.07.57,5.77,1.06,10.15,1.06,10.15s1.58-13.25.4-41.83c-.27-6.26.14-10.74,2.6-12.55,1.35-1,3.3-1.17,6.1-.41,7.91,2.14,10.48,31.45,10.48,42.53s6.33,30.06,7.52,45,6.37,33.3,6.37,33.3,2.93,1.19,4.9.8,15.63-20.57,15.63-20.57c6.36-13.81,18.74-18,25.48-16.45C231,288.09,233,290,232.52,292.76Z" style="fill: rgb(255, 255, 255); transform-origin: 125.539px 320.932px 0px;" id="elawdgwpkkerk" class="animable"></path>
                                      <g id="elg6582pps1gl">
                                          <path d="M232.52,292.76c-.31,1.95-11.08,16.22-17.41,26.9s-12.26,29.27-13.85,32-21,19.78-26.32,26.91-14.82,10.28-24.31,17c-6.1,4.32-25.11,26.61-37.92,42,1.41-5.58,4.57-12.71,12.83-19.56,14.34-11.91,15.2-21.25,22.91-29.16s21.29-5.54,26.17-15,21.9-18.2,25.46-26.51-3.56-10.07,2.77-20.07,12.47-12.43,11.57-16.35-3.56-9.86,1.93-14.81c3.43-3.08,7.46-6.95,11.58-8.73C231,288.09,233,290,232.52,292.76Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 172.65px 362.475px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elgjna2td1p3">
                                          <path d="M129.92,339.7c-2.63-1.32-.52-3.95-2.37-6.14s-6.07,11.95-7,12-3.76-7.19-4.88-7.91-1.78,2.31-3.37,7.91S104.87,354,101.48,358,77.7,383.75,72.69,391.92,36.74,416.26,34.34,418C49,405.57,69.43,388,75.07,381.37,84.16,370.69,96.82,358,96.82,358c-.77-14.83.8-28.88-.59-34.22-.72-2.79-2-18.66-3-23.54-2.43-12.47-13-25.39-14.19-30.48S63.9,243,70.71,239a6.27,6.27,0,0,1,4.16-.91c-1.55,1.1-3.06,2.68-1.65,5,2.51,4.06,5.27,8.33,5.27,12.82s7.65,10.81,10.62,15,.2,2.71,2.18,8.45,4.35,4.54,5.53,10.34,7.78,9.5,6.73,16.73,3.16,17.29,3.16,17.29,3.43-9.75,2.18-15,.2-11.87-1-13.65c-1-1.6-3.74-12.46-5-19.21,4.12,6.53,8.16,13.87,8.16,13.87,1.58-6.33-9.89-28.88-13.06-50.24s-12.26-32.83,0-34.15a7.65,7.65,0,0,1,3,.26c5.23,9.77,1.59,17,.43,21.24-1.27,4.62,6.29,16.48,7.41,24.65,1,7.63,3.06,6.84,3.33,6.7-.23.21-2.18,2.2-1,7.86,1.23,6,10,20.25,10,24.23s-.72,10.53-.72,12.47,7,14.92,7.84,18.32-.33-6.55,1.58-10,2.92-15.49,3.17-14.84C136.32,304.59,132.56,341,129.92,339.7Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 84.3281px 311.646px 0px;" class="animable"></path>
                                      </g>
                                      <g id="el7h51clbmst2">
                                          <path d="M135.59,250.34c-2.24,3.39-2.18,29.85-6,29.94-1.85,0-2.75-6.65-3.5-15,2,5.8,3.6,10.47,3.6,10.47.39-10.88-3-21-3.56-30.86-.24-3.95,1-19.78-.56-35.6-1.34-13.35-.73-18.76,4.49-19.81,1.1,3.56,3.8,7.76,4.49,11.66.94,5.38-.9,9.83-2.48,10.5s-1.85,4.14.13,4.65,0,25.76.92,29S137.84,247,135.59,250.34Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 130.627px 234.881px 0px;" class="animable"></path>
                                      </g>
                                      <g id="els2vfj8erlb">
                                          <path d="M156.14,220.72c-4.11,1.81-4.33,5.05-5.56,9.7s1.76,11.44,0,22.11,4.66,17.55,0,29.49-2.47-10-3.25-20a123.49,123.49,0,0,1,.06-14.62c.57,5.77,1.06,10.15,1.06,10.15s1.58-13.25.4-41.83c-.27-6.26.14-10.74,2.6-12.55C155.67,207,159.64,219.18,156.14,220.72Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 152.314px 244.33px 0px;" class="animable"></path>
                                      </g>
                                      <path d="M100.38,452.58s40.75-50.24,50.25-57,19-9.89,24.31-17,24.74-24.14,26.32-26.91,7.52-21.36,13.85-32,17.1-25,17.41-26.9c1.38-8.71-20.77-9.1-30.07,11.08,0,0-13.65,20.17-15.63,20.57s-4.9-.8-4.9-.8-5.18-18.35-6.37-33.3-7.52-33.95-7.52-45-2.57-40.39-10.48-42.53-9.11,3.28-8.7,13c1.18,28.58-.4,41.83-.4,41.83s-2.77-24.83-2.77-34.22-3.21-33.44-12.26-34c-8.31-.53-9.47,4.14-7.88,20s.32,31.65.56,35.6c.59,9.89,4,20,3.56,30.86,0,0-10.29-29.79-11.08-32.44C112.85,224,108.88,204,98,205.2c-12.26,1.32-3.16,12.79,0,34.15s14.64,43.91,13.06,50.24c0,0-9.49-17.23-14.22-22.39-6-6.49-15.06-34.77-26.14-28.24-6.81,4,7.18,25.74,8.36,30.83s11.76,18,14.19,30.48c1,4.88,2.25,20.75,3,23.54,1.39,5.34-.18,19.39.59,34.22,0,0-12.66,12.66-21.75,23.34s-56.58,49.85-56.58,49.85" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 125.547px 320.969px 0px;" id="eldfq844h0z99" class="animable"></path>
                                      <path d="M181.92,323.61a18.71,18.71,0,0,1,0,14.05" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 182.605px 330.635px 0px;" id="ela47p5nppnyt" class="animable"></path>
                                      <path d="M185.25,324.45a6.65,6.65,0,0,1,2.37,7.47" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 186.607px 328.186px 0px;" id="el3u26so20jjh" class="animable"></path>
                                      <path d="M148.45,257.55s3.17,22.35,1.78,26.5" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 149.516px 270.801px 0px;" id="elp3unz5wfli8" class="animable"></path>
                                      <path d="M129.66,275.75a21,21,0,0,1,0,6.52" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 129.787px 279.01px 0px;" id="elakfj7d70fi" class="animable"></path>
                                      <path d="M111.07,289.59s.59,3.37,0,4.16" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 111.201px 291.67px 0px;" id="elklaby73tvdi" class="animable"></path>
                                      <path d="M211.35,308.58s3.58,1.94,4.75,4.75" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 213.727px 310.953px 0px;" id="elobhyrups27" class="animable"></path>
                                      <path d="M129.79,215.72a7.11,7.11,0,0,0,6.59-1.79" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 133.084px 214.922px 0px;" id="el23se8vu8of7" class="animable"></path>
                                      <path d="M131,247.86s7.12,2.37,9.7,0" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 135.85px 248.387px 0px;" id="el8l53d25vxh" class="animable"></path>
                                      <path d="M154.19,254.78s4.74-1.78,7.91-.79" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 158.146px 254.236px 0px;" id="elv9cjslcozm" class="animable"></path>
                                      <path d="M108.89,261.11s3.76-4.95,6.73-3.56" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.256px 259.207px 0px;" id="el5pzr26wcqah" class="animable"></path>
                                      <path d="M93.46,275.75s-3.36,1.58-4.35,3.26" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 91.2852px 277.381px 0px;" id="el1cqe8ywzaya" class="animable"></path>
                                      <path d="M96.82,358a18.69,18.69,0,0,0,2.18-3c.59-1.19-.2-13.85,0-22" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 98.0215px 345.5px 0px;" id="el5lkk4kdppxc" class="animable"></path>
                                      <path d="M138.32,407.84c-4.66,5.22-18.95,14.68-24.68,20.41" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 125.98px 418.045px 0px;" id="el66ms3qy5l6" class="animable"></path>
                                      <path d="M157.15,289.59c-2.37,6.73.2,15.23,0,19s-1,21-1,21" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 156.65px 309.59px 0px;" id="eldru9nm43vok" class="animable"></path>
                                      <path d="M135.59,289.59c-3.16,5.34-2.17,12.46-1.18,16s.11,18,.11,18" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 134.518px 306.59px 0px;" id="elkvpknlunbjq" class="animable"></path>
                                      <path d="M101.57,306.6a19.23,19.23,0,0,0,2,10.09" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 102.543px 311.646px 0px;" id="elkdg4yw91ft" class="animable"></path>
                                      <path d="M121.15,296.12c-1.78,6.53.6,9.49.8,10.48" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 121.221px 301.361px 0px;" id="elb6ua0b93rgj" class="animable"></path>
                                  </g>
                                  <g id="freepik--right-hand--inject-16" style="transform-origin: 377.342px 277.9px 0px;" class="animable">
                                      <g id="el5t1bw5bd0lw">
                                          <path d="M281.82,253l-3.37-19.56a6.54,6.54,0,0,1,5.61-7.59l7.55-1s-2.52-5.11,5.59-20,47.1-54.44,76.66,12,56.57,201.83,56.57,201.83S350.64,325.76,348.1,321s-26.83-1.91-32.44-14.68-17.39-49.21-17.39-49.21l-9.12,1.25A6.55,6.55,0,0,1,281.82,253Z" style="fill-opacity: 0.7; opacity: 0.3; transform-origin: 354.393px 299.111px 0px;" class="animable"></path>
                                      </g>
                                      <path d="M352.14,208.12l-15.31,2.78-21.28,3.87-27.87,5.07a4.13,4.13,0,0,1-4.81-3.33l-6.12-33.65a4.15,4.15,0,0,1,3.33-4.81l16.21-3,23.58-4.28,24.67-4.49a4.13,4.13,0,0,1,4.81,3.33l6.12,33.65A4.13,4.13,0,0,1,352.14,208.12Z" style="fill: rgb(146, 227, 169); transform-origin: 316.115px 193.059px 0px;" id="eljlbjh00khz" class="animable"></path>
                                      <g style="clip-path: url(&quot;#freepik--clip-path--inject-16&quot;); transform-origin: 308.996px 195.338px 0px;" id="elopj2qchmy1j" class="animable">
                                          <g id="elc9ulsfmpcnm">
                                              <path d="M341.31,185.78l-4.48,25.12-21.28,3.87c-6.16-2.71-16.32-7.43-18.35-10-2.42-3-2.08-20.68-.91-29.72l23.58-4.28C328.18,176.5,341.31,185.78,341.31,185.78Z" style="fill-opacity: 0.7; opacity: 0.3; transform-origin: 318.35px 192.77px 0px;" class="animable"></path>
                                          </g>
                                          <g id="elkgtkant8x2f">
                                              <path d="M291.91,219.07l-4.23.77a4.13,4.13,0,0,1-4.81-3.33l-6.12-33.65a4.15,4.15,0,0,1,3.33-4.81l4.22-.77a4.14,4.14,0,0,0-3.32,4.81l6.12,33.65A4.13,4.13,0,0,0,291.91,219.07Z" style="fill-opacity: 0.7; opacity: 0.3; transform-origin: 284.297px 198.594px 0px;" class="animable"></path>
                                          </g>
                                      </g>
                                      <path d="M352.14,208.12l-15.31,2.78-21.28,3.87-27.87,5.07a4.13,4.13,0,0,1-4.81-3.33l-6.12-33.65a4.15,4.15,0,0,1,3.33-4.81l16.21-3,23.58-4.28,24.67-4.49a4.13,4.13,0,0,1,4.81,3.33l6.12,33.65A4.13,4.13,0,0,1,352.14,208.12Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 316.115px 193.059px 0px;" id="elldo41ncse4t" class="animable"></path>
                                      <g id="elueqx2q35ca">
                                          <rect x="283.44" y="171.08" width="73.79" height="42.47" rx="4.14" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.335px 192.315px 0px; transform: rotate(-10.4077deg);" class="animable"></rect>
                                      </g>
                                      <g id="elgo5te1xh089">
                                          <rect x="286.18" y="173.72" width="65.49" height="37.7" rx="2" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 318.925px 192.57px 0px; transform: rotate(-10.3deg);" class="animable"></rect>
                                      </g>
                                      <path d="M356.37,207.35l-4.2.76a4.13,4.13,0,0,0,3.3-4.8l-6.12-33.65a4.13,4.13,0,0,0-4.81-3.33l4.23-.77a4.15,4.15,0,0,1,4.81,3.33l6.12,33.65A4.15,4.15,0,0,1,356.37,207.35Z" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 352.152px 186.801px 0px;" id="elv3kyghpil6q" class="animable"></path>
                                      <path d="M478,315.14,436.59,426.22s-17.32-33-33.32-63.54c-12.78-24.42-24.72-47.32-26.33-50.69C373.33,304.4,361,288.5,361,288.5s-12.65-7.24-18.44-19.85-12.16-57.72-12.16-57.72-16.63-6.26-20.6-9-7.59-28.06-7.59-30.95,4-8.68,4-8.68-.89-4.24,4.19-8.52a23.34,23.34,0,0,1,5.47-3.35l.1,0s-.66-9.57,4.32-12.36a5.6,5.6,0,0,1,.74-.35c4.44-1.71,19-3.92,19-3.92a20.76,20.76,0,0,1,7.05-4.07c2.58-.71,16.74,2.58,24.65,4.53,3.18.78,5.35,1.34,5.35,1.34s13.38.61,15.91,2.12a25.21,25.21,0,0,1,4.8,4.09h0l.25.29s11.93,2.48,14.46,6.85,3.61,26.05,1.81,40.14,1.43,38,1.43,38,3.73,18.47,6.62,25.48S478,315.14,478,315.14Z" style="fill: rgb(255, 255, 255); transform-origin: 390.105px 277.926px 0px;" id="el1fgjbk3d46fh" class="animable"></path>
                                      <g id="elwdbyw7wabt">
                                          <path d="M403.27,362.68c-12.78-24.42-24.72-47.32-26.33-50.69C373.33,304.4,361,288.5,361,288.5s-12.65-7.24-18.44-19.85-12.16-57.72-12.16-57.72-16.63-6.26-20.6-9-7.59-28.06-7.59-30.95,4-8.68,4-8.68-.89-4.24,4.19-8.52c0,1.14,0,3.06,0,6.08-.12,5.73,6.63,40.28,8.3,39.23s4.25-3.58,3.57-5.81c0,0-3.27-13.41-6.36-42.85l.1,0s-.66-9.57,4.32-12.36a23,23,0,0,0-1.63,6.49c-.11,4.66,5.43,44.59,7.6,45.6s7.67-4.31,7.67-4.31-1.88-11.33-1.21-16.16c0,0,16.73,10.2,17.23,21.78.05,1.27,3.26,19.42,3.26,19.42s-14.39,27.4.3,52.4c0,0-7.47-4.48-9.25-11.6,0,0-2.17,20.94,13.26,32,0,0,11.07-10.87,22-12.25,0,0,.2.72-7.12,6.49s-8.31,8.34-8.31,8.34,7.92-8,14.25-8.34c0,0-6.53,7.55-6.33,9.13s18.67,33.16,25.39,55.19C400.18,351.45,402.05,358.09,403.27,362.68Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 352.74px 250.375px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elcze5mspr9ne">
                                          <path d="M351.41,153.1s5.33,4,6.91,0a22.94,22.94,0,0,0,1.71-6.72s2.05-.94,4,4,21.5,6.2,26.08,8.73,6.4,0,6.4,0a6,6,0,0,1,1.5,7.43c-2.22,4.59,4.07,5,6.51,1.62s.55,9.67-5.48,11c0,0,.17,5.7-3.71,9.61h3.29s-8.76,6.95-11.09,7.33,8.67,4.27,6.63,5.09-7.82.75-7.82.75,3.74,2.59,3.77,4.3-1.77,3-2.58,1.57-7.27-21.91-10.49-29.48S360.52,164.77,351.41,153.1Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 378.482px 177.365px 0px;" class="animable"></path>
                                      </g>
                                      <g id="elx9l6q6bwt7j">
                                          <path d="M397.78,141.74c-11.22-3.07-26.27-7.44-26.27-7.44l.21-.11c3.18.78,5.35,1.34,5.35,1.34s13.38.61,15.91,2.12A25.21,25.21,0,0,1,397.78,141.74Z" style="fill: rgb(146, 227, 169); opacity: 0.4; transform-origin: 384.646px 137.965px 0px;" class="animable"></path>
                                      </g>
                                      <path d="M382,159.39c-9.76-2-16.73,6.34-16.73,6.34s9.7,8.78,11.85,12.55,5.72,16.48,5.72,16.48c4.09.66,11.63-3.56,13.44-14.76S391.71,161.38,382,159.39Z" style="fill: rgb(146, 227, 169); transform-origin: 380.928px 176.955px 0px;" id="elq2b3ru1xkh" class="animable"></path>
                                      <path d="M436.59,426.22s-56-106.64-59.65-114.23S361,288.5,361,288.5s-12.65-7.24-18.44-19.85-12.16-57.72-12.16-57.72-16.63-6.26-20.6-9-7.59-28.06-7.59-30.95,4-8.68,4-8.68-1.44-6.85,9.76-11.92c0,0-.72-10.49,5.06-12.71,4.44-1.71,19-3.92,19-3.92a20.76,20.76,0,0,1,7.05-4.07c3.61-1,30,5.87,30,5.87s13.38.61,15.91,2.12A25.62,25.62,0,0,1,398,142s11.93,2.48,14.46,6.85,3.61,26.05,1.81,40.14,1.43,38,1.43,38,3.73,18.47,6.62,25.48S478,315.14,478,315.14" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 390.105px 277.9px 0px;" id="elgv0fehdhdq8" class="animable"></path>
                                      <path d="M389.18,209.46s-2.53-.54-5.78-12.47-4.11-17.51-10.85-24.58c-4.78-5-15.72-13.17-21.14-19.31S340,142,335.32,145.8c-3.74,3-6.18,10.79-2.89,22.81C336.66,184.05,350,191.4,350,191.4l3.26,19.42s-14.15,28.34,1.8,55.09" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 360.033px 205.191px 0px;" id="ell06ctqlrds8" class="animable"></path>
                                      <path d="M365.22,165.73s7-8.33,16.73-6.34S398,168.79,396.23,180s-9.35,15.42-13.44,14.76" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 380.873px 176.955px 0px;" id="elo0iw0whqg69" class="animable"></path>
                                      <path d="M340,133.73a65.3,65.3,0,0,0-3.36,11.35" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 338.32px 139.404px 0px;" id="ellgcgnlpoijb" class="animable"></path>
                                      <path d="M334.08,172.89s.84,12.35,2.58,16.14,4.63,6.87,5.89,11.75,1.45,12.47,1.81,13.56,2.45,1.37,2.45,1.37c3,.07,4.21-1.49,5.94-3.87" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 343.414px 194.303px 0px;" id="el1iz0xrr3gk" class="animable"></path>
                                      <path d="M316,150.36s2.71,26.38,4.88,37.59,6,12.83,12.29,16.45,9.76,11,10.31,12.11,2.61,1.23,2.61,1.23a7.3,7.3,0,0,0,5.82-3.81" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 333.955px 184.049px 0px;" id="elws8xt925jd" class="animable"></path>
                                      <path d="M306.22,162.28c-.68,1.05,5.12,27.84,8.14,35.61s3.36,9,11.35,11.2,14.06,5.86,16.22,4.57" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 324.047px 188.105px 0px;" id="el9ubm94rnq7t" class="animable"></path>
                                      <path d="M361.71,147.46s4.15,9.94,1.41,16.48" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 362.883px 155.701px 0px;" id="elfvlrxe3un2q" class="animable"></path>
                                      <path d="M377.07,135.53A143,143,0,0,0,398,142" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 387.535px 138.766px 0px;" id="elr9vq1cc025f" class="animable"></path>
                                      <path d="M404.55,169.88s-3.18,5.81-8,7.06" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 400.551px 173.41px 0px;" id="elc3dhgdyv7xh" class="animable"></path>
                                      <path d="M396.54,163.55s-1.14,3-2.35,3.83" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 395.365px 165.465px 0px;" id="elokjhzsaxev" class="animable"></path>
                                      <path d="M400.54,187.41s-7.23,5.47-14.17,6.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 393.455px 190.855px 0px;" id="elklwxsc67bds" class="animable"></path>
                                      <path d="M383.4,197s3,3.79,10.79,4.15" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 388.795px 199.074px 0px;" id="elq95of1laru" class="animable"></path>
                                      <path d="M360,180.41s7.08-6.8,11.12-5.86" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 365.561px 177.436px 0px;" id="elo46lk5z9rtk" class="animable"></path>
                                      <path d="M373.86,181.79s-5.36,4-6.34,4" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 370.689px 183.789px 0px;" id="el7wq753a9ao" class="animable"></path>
                                      <path d="M318.67,203s1.78.33,3.17-1.82" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.256px 202.1px 0px;" id="elv3wp0px4jh" class="animable"></path>
                                      <path d="M325,193.26s4.3-2.66,7.11-3.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 328.555px 191.676px 0px;" id="elvnj0s27qy5" class="animable"></path>
                                      <path d="M362.88,283.46c.89-.79,9.2-7.51,14.34-9.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 370.049px 278.516px 0px;" id="elomnbqn7j4w" class="animable"></path>
                                      <path d="M373.66,280.28c-.59-.18-5.31,4.76-7.8,6.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 369.76px 283.648px 0px;" id="elb2ibxvfkgzt" class="animable"></path>
                                      <path d="M376,294.93s15.83,30,19.39,42" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 385.695px 315.93px 0px;" id="el36ifdk18umi" class="animable"></path>
                                      <path d="M422.36,252.51c1.34,7.37,5.69,12.8,8.07,15.74" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 426.395px 260.381px 0px;" id="elfsh3zirk9r" class="animable"></path>
                                      <g id="eli98b5e4h8om">
                                          <path d="M372.46,162.28c-2.3,1.42.12,6.06,1.4,8.43s7,6.14,8.19,9.7,8.71,3.46,11,0,2-10.37-4.24-15.63S375.73,160.28,372.46,162.28Z" style="fill: rgb(255, 255, 255); opacity: 0.4; transform-origin: 382.936px 171.906px 0px;" class="animable"></path>
                                      </g>
                                  </g>
                                  <g id="freepik--speech-bubble--inject-16" style="transform-origin: 320.869px 412.161px 0px;" class="animable">
                                      <path d="M328.55,361.57a45.7,45.7,0,0,0-34.32,82.17" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 301.869px 402.33px 0px;" id="elwrrmwngqv3q" class="animable"></path>
                                      <path d="M347.6,369.54a45.46,45.46,0,0,0-14-6.82" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 340.602px 366.129px 0px;" id="elocsryyb18b" class="animable"></path>
                                      <path d="M343,446.58a45.67,45.67,0,0,0,10.42-72" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 354.775px 410.578px 0px;" id="elqi62e79m0gs" class="animable"></path>
                                      <polyline points="345.21 461 347.93 463.4 343.69 448.87" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 345.81px 456.135px 0px;" id="ely02k5qbvea" class="animable"></polyline>
                                      <path d="M313.21,451.66a45.52,45.52,0,0,0,20.18-1.09l8.61,7.6" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 327.605px 454.371px 0px;" id="el0xtawe4gih4" class="animable"></path>
                                      <path d="M302.73,448.56a45.92,45.92,0,0,0,5.24,1.89" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.35px 449.504px 0px;" id="ell6nm3tz6kk" class="animable"></path>
                                      <path d="M324.49,384.39a23,23,0,1,1-8.14.07" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.613px 407.225px 0px;" id="el762w31s7y98" class="animable"></path>
                                      <path d="M316.35,432.18a25.48,25.48,0,0,1-20.84-29.39" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 305.75px 417.484px 0px;" id="el5ekjjxpjrvs" class="animable"></path>
                                      <path d="M344.59,415.72a25.5,25.5,0,0,1-20.29,16.56" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 334.445px 424px 0px;" id="el6kax3u27gnv" class="animable"></path>
                                      <path d="M297.47,396.43a25.48,25.48,0,0,1,48.27,14.91" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 321.785px 396.467px 0px;" id="elor8xi2rtalg" class="animable"></path>
                                      <line x1="335.92" y1="397.88" x2="336.21" y2="397.57" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 336.065px 397.725px 0px;" id="ele6wtyi46wxm" class="animable"></line>
                                      <line x1="331.84" y1="402.28" x2="333.87" y2="400.09" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 332.855px 401.185px 0px;" id="eletm27y3ergr" class="animable"></line>
                                      <polyline points="306.93 405.51 316.74 418.55 330.06 404.2" style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; stroke-width: 2px; transform-origin: 318.495px 411.375px 0px;" id="elqej4lt4dxqc" class="animable"></polyline>
                                  </g>
                                  <defs>
                                      <filter id="active" height="200%">
                                          <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                          <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                          <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                          <feMerge>
                                              <feMergeNode in="OUTLINE"></feMergeNode>
                                              <feMergeNode in="SourceGraphic"></feMergeNode>
                                          </feMerge>
                                      </filter>
                                      <filter id="hover" height="200%">
                                          <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
                                          <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                          <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
                                          <feMerge>
                                              <feMergeNode in="OUTLINE"></feMergeNode>
                                              <feMergeNode in="SourceGraphic"></feMergeNode>
                                          </feMerge>
                                          <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "></feColorMatrix>
                                      </filter>
                                  </defs>
                                  <defs>
                                      <clipPath id="freepik--clip-path--inject-16">
                                          <path d="M352.14,208.12l-15.31,2.78-21.28,3.87-27.87,5.07a4.13,4.13,0,0,1-4.81-3.33l-6.12-33.65a4.15,4.15,0,0,1,3.33-4.81l16.21-3,23.58-4.28,24.67-4.49a4.13,4.13,0,0,1,4.81,3.33l6.12,33.65A4.13,4.13,0,0,1,352.14,208.12Z" style="fill:#92E3A9;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                                      </clipPath>
                                  </defs>
                              </svg></a>


                          <button type="submit" class="btn btn-success btn-lg btn-block mx-auto w-50" id="uploadSubmit">Save Uploaded files</button>



                          <button type="button" class="btn btn-primary d-none" data-toggle="modal" data-target="#messageModal" id="modalButton">
                              Launch demo modal
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Upload Status</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="modal-message"></div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </div>
                              </div>
                          </div>




                      </div>
                      <div class="card-footer border-0">
                          <div class=" d-none">
                              <button class="btn btn-icon btn-outline-secondary w-25 btn-lg steps-form-button-back" type="button">
                                  <span class="btn-inner--icon"><i class="ni ni-bold-left"></i></span>
                                  <span class="btn-inner--text">Back</span>
                              </button>
                              <button class="btn btn-icon btn-primary w-25 btn-lg  steps-form-button-next">
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
                  $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
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
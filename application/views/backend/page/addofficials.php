<!-- Main Content -->
<div id="content">
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-header">
                        <center>
                            <h2 class="h3 mb-2 text-gray-800"> Barangay Officials</h2>
                        </center>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="input-box">
    <label class="input-label">Username</label>
    <input type="text" class="input-1" onfocus="setFocus(true)" onblur="setFocus(false)" />
  </div>
                            <div class="form-group">
                                <label for="position"><br>Position:</label>
                                <input type="text" name="position" id="position" class="form-control" required>
                                <span class="text-danger"><?= form_error('position') ?></span>
                            </div>

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Lastname, Firstname Middlename" required>
                                <span class="text-danger"><?= form_error('name') ?></span>
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact#:</label>
                                <input type="text" name="contact" id="contact" class="form-control" required>
                                <span class="text-danger"><?= form_error('contact') ?></span>
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" class="form-control" required>
                                <span class="text-danger"><?= form_error('address') ?></span>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="start_term">Start Term:</label>
                                    <input type="date" name="start_term" id="start_term" class="form-control" required>
                                    <span class="text-danger"><?= form_error('start_term') ?></span>
                                </div>
                                <div class="form-group col">
                                    <label for="end_term">End Term:</label>
                                    <input type="date" name="end_term" id="end_term" class="form-control" required>
                                    <span class="text-danger"><?= form_error('end_term') ?></span>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary">Add Officials</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br> 
<br>

<style>
    @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700");

$color: #80868b;
$active-color: #1a73e8;
$error-color: #f44336;
$input-value-color: #202124;
$border-color: 1px solid #dadce0;

$border-color-active: 2px solid $active-color;
$default-background: #fff;

/* Buttons */
$btn-default-bg-color: #fff;
$btn-default-bgh-color: #ddd;
$btn-default-text-color: #333;

$btn-primary-bg-color: #1a73e8;
$btn-primary-bgh-color: #287ae6;
$btn-primary-boxshadow-color: 0 1px 1px 0 rgba(66, 133, 244, 0.45),
  0 1px 3px 1px rgba(66, 133, 244, 0.3);
$btn-primary-text-color: #fff;

body {
  font-family: "open sans", roboto, arial, sans-seif;
  background: $default-background;
}
input {
  background: $default-background;
}
#form {
  width: 40vw;
  margin: 0 auto;
  margin-top: 50px;
}
.input-box.active-grey {
  .input-1 {
    border: $border-color;
  }
  .input-label {
    color: $color;
    top: -8px;
    background: $default-background;
    font-size: 11px;

    transition: 250ms;

    svg {
      position: relative;
      width: 11px;
      height: 11px;
      top: 2px;
      transition: 250ms;
    }
  }
}
.input-box {
  position: relative;
  margin: 10px 0;
  .input-label {
    position: absolute;
    color: $color;
    font-size: 16px;
    font-weight: 400;
    max-width: calc(100% - (2 * 8px));
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    left: 8px;
    top: 13px;
    padding: 0 8px;
    transition: 250ms;
    user-select: none;
    pointer-events: none;
    svg {
      position: relative;
      width: 15px;
      height: 15px;
      top: 2px;
      transition: 250ms;
    }
  }
  .input-1 {
    box-sizing: border-box;
    height: 50px;
    width: 100%;
    border-radius: 4px;
    color: $input-value-color;
    border: $border-color;
    padding: 13px 15px;

    transition: 250ms;
    &:focus {
      outline: none;
      border: 2px solid #1a73e8;
      transition: 250ms;
    }
  }
}
.input-box.error {
  .input-label {
    color: $error-color;
    top: -8px;
    background: $default-background;
    font-size: 11px;
    transition: 250ms;
  }
  .input-1 {
    border: 2px solid $error-color;
  }
}
.input-box.focus,
.input-box.active {
  .input-label {
    color: $active-color;
    top: -8px;
    background: $default-background;
    font-size: 11px;

    transition: 250ms;

    svg {
      position: relative;
      width: 11px;
      height: 11px;
      top: 2px;
      transition: 250ms;
    }
  }
}
.input-box.active {
  .input-1 {
    border: 2px solid #1a73e8;
  }
}
.btn {
  background: $btn-default-bg-color;
  color: $btn-default-text-color;
  cursor: pointer;
  border: none;
  white-space: normal;
  letter-spacing: 0.25px;
  font-weight: 400;
  font-size: 14px;
  padding: 8px 16px;
  border-radius: 4px;
  line-height: 20px;
  min-width: 88px;
  transition: 250ms;

  &:hover {
    background: $btn-default-bgh-color;
    transition: 250ms;
  }
  &:focus {
    outline: none;
  }
}

  &:hover {
    background: $btn-primary-bgh-color;
    box-shadow: $btn-primary-boxshadow-color;
    transition: 250ms;
  }


.pull-right {
  float: right;
}
.clear {
  clear: both;
}
</style>


<script>
   function setFocus(on) {
  var element = document.activeElement;
  if (on) {
    setTimeout(function () {
      element.parentNode.classList.add("focus");
    });
  } else {
    let box = document.querySelector(".input-box");
    box.classList.remove("focus");
    $("input").each(function () {
      var $input = $(this);
      var $parent = $input.closest(".input-box");
      if ($input.val()) $parent.addClass("focus");
      else $parent.removeClass("focus");
    });
  }
}
 


    function showPopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "block";
    }

    function closePopup() {
        var modal = document.getElementById("popupModal");
        modal.style.display = "none";
    }

    function addOfficials() {
        // Code to add officials to your system/database
        closePopup(); // Close the popup after adding officials
    }
</script>
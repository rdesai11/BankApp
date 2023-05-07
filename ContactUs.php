<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Contact Us</title>
</head>


<!-- Container for demo purpose -->
<div class="container my-5">

	<!-- Section: Design block -->
  <section class="mb-10">
    <div class="row">
      <div class="col-md-9 col-lg-7 col-xl-5 mx-auto text-center">
        <h4 class="mb-4">Contact us</h4>
        <form method="post" action="ContactUsConfirmation.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="text" id="contactBlockName1" class="form-control" />
                <label class="form-label" for="contactBlockName1">Name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-outline mb-4">
                <input type="email" id="contactBlockEmail2" class="form-control" />
                <label class="form-label" for="contactBlockEmail2">Email</label>
              </div>
            </div>
          </div>
          <div class="form-outline mb-4">
            <input type="tel" id="contactBlockPhone3" class="form-control" />
            <label class="form-label" for="contactBlockPhone3">Phone (optional)</label>
          </div>
          <div class="form-outline mb-4">
            <textarea class="form-control" id="contactBlockMessage4" rows="4"></textarea>
            <label class="form-label" for="contactBlockMessage4">Message</label>
          </div>
          <button type="submit" class="btn btn-dark btn-block">Send message</button>
        </form>
      </div>
    </div>
  </section>
  <!-- Section: Design block -->
  
</div>
<!-- Container for demo purpose -->


<style>
    body {
        background-color: #80dfff
    }
</style>
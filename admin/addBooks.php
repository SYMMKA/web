<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Add Books</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">


	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<a href="index.html" class="logo"><strong>Library Management System</strong> <span>by Neon Genesis</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.html">Home</a></li>
				<li><a href="generic.html">Add Books</a></li>
				<li><a href="issue.php">Issue Books</a></li>
				<li><a href="elements.html">Return Books</a></li>
				<li><a href="landing.html">Search Books</a></li>
			</ul>
			<ul class="actions stacked">
				<li><a href="#" class="button primary fit">Get Started</a></li>
				<li><a href="#" class="button fit">Log In</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>Add Books</h1>
					</header>


				</div>
			</section>

		</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section>
					<form method="post" action="#">
						<div class="fields">
							<div class="field">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" />
							</div>
							<div class="field half">
								<label for="author">Author</label>
								<input type="text" name="author" id="author" />
							</div>
							<div class="field half">
								<label for="category">Category</label>
								<input type="text" name="category" id="category" />
							</div>
							<div class="field half">
								<label for="isbn">ISBN</label>
								<input type="number" name="isbn" id="isbn" />
							</div>
							<div class="field half">
								<label for="publisher">Publisher</label>
								<input type="text" name="publisher" id="publisher" />
							</div>
							<div class="field half">
								<label for="pageCount">Page Count</label>
								<input type="number" name="pageCount" id="pageCount" />
							</div>
							<div class="field half">
								<label for="publishedDate">Published Date</label>
								<input type="date" name="publishedDate" id="publishedDate" />
							</div>
							<div class="field half">
								<label for="money">Price</label>
								<input type="number" name="money" id="money" />
							</div>
							<div class="field half">
								<label for="quantity">Quantity</label>
								<input type="number" name="quantity" id="quantity" />
							</div>
							<div class="field half">
								<label for="category" class="col-sm-2 col-form-label">Category</label>
								<select class="col-sm-2 col-form-label" id="category" onclick="autoBookId(this.value)">
									<option value="maths">Maths</option>
									<option value="science">Science</option>
									<option value="technology">Technology</option>
									<option value="art">Art</option>
								</select>
								<br><br>
							</div>
							<div class="field half">
								<label for="bookId">Book ID</label>
								<input type="text" name="bookId" id="bookId" />
							</div>

							<div class="field">
								<label for="description">Description</label>
								<textarea name="description" id="description" rows="6"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Add Book" class="primary"/></li>
							<li><input type="reset" value="Clear" /></li>
						</ul>
					</form>
				</section>
				<section class="split">
					<section>
						<div class="container-fluid search" style="height:auto; color:powderblue; padding-bottom: 5rem; ">
							<form id="search-form" method="post">
								<div class="form-row align-items-center justify-content-center " style="padding-top: 5rem;">
									<div class="col-md-4">
										<label class="sr-only " for="inlineFormInput">Name</label>
										<input type="text" class="form-control mb-2 form-control form-control-lg" id="search-input" placeholder="Book Name" name="voice-search" autocomplete="on" />
										<span id="voice-trigger">
											<svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="10px" y="10px" viewBox="0 0 58 58" style="enable-background:new 0 0 58 58;" xml:space="preserve">
												<g>
													<path d="M44,28c-0.552,0-1,0.447-1,1v6c0,7.72-6.28,14-14,14s-14-6.28-14-14v-6c0-0.553-0.448-1-1-1s-1,0.447-1,1v6   c0,8.485,6.644,15.429,15,15.949V56h-5c-0.552,0-1,0.447-1,1s0.448,1,1,1h12c0.552,0,1-0.447,1-1s-0.448-1-1-1h-5v-5.051   c8.356-0.52,15-7.465,15-15.949v-6C45,28.447,44.552,28,44,28z" />
													<path d="M29,46c6.065,0,11-4.935,11-11V11c0-6.065-4.935-11-11-11S18,4.935,18,11v24C18,41.065,22.935,46,29,46z M20,11   c0-4.963,4.038-9,9-9s9,4.037,9,9v24c0,4.963-4.038,9-9,9s-9-4.037-9-9V11z" />
												</g>
											</svg>
										</span>
										</fieldset>
									</div>

									<div class="col-auto">
										<button type="submit" class="btn btn-info mb-2 btn-lg" style="width: 130px;" value="submit">
											Search
										</button>
									</div>
								</div>
							</form>

							<?php
							$search = '';
							if (!empty($_POST)) {

								$search = $_POST['voice-search'];
							}
							?>
							<?php
							if ($search) {

								// API key, future ref
								$API_KEY = '';

								// donot delete
								require_once 'vendor/autoload.php';


								$client = new Google_Client();
								$client->setApplicationName("Client_Library_Examples");

								$service = new Google_Service_Books($client);
								//$optParams = array('filter' => 'free-ebooks');
								$results = $service->volumes->listVolumes($search);
							?>

								<h3>Results Of Call:</h3>
								<?php
								$i = 0;
								foreach ($results as $item) {
									$title[$i] = $item['volumeInfo']['title'];
									$author[$i] = @implode(",", $item['volumeInfo']['authors']);
									$category[$i] = @implode(",", $item['volumeInfo']['categories']);
									$publisher[$i] = $item['volumeInfo']['publisher'];
									$publishedDate[$i] = $item['volumeInfo']['publishedDate'];
									//volumeInfo.industryIdentifiers[].type
									$isbn[$i] = "";
									for ($n = 0; $n < count($item['volumeInfo']['industryIdentifiers']); $n++) {
										$isbn[$i] = $isbn[$i] . $item['volumeInfo']['industryIdentifiers'][$n]['identifier'] . " ";
									}
									$description[$i] = $item['volumeInfo']['description'];
									$pageCount[$i] = $item['volumeInfo']['pageCount'];
									$country[$i] = $item['saleInfo']['country'];
									$currencyCode[$i] = $item['saleInfo']['listPrice']['currencyCode'];
									$amount[$i] = $item['saleInfo']['listPrice']['amount'];
									if ($currencyCode[$i] || $amount[$i])
										$money[$i] = $currencyCode[$i] . " " . $amount[$i];
									else
										$money[$i] = NULL;
									$imgLink[$i] = $item['volumeInfo']['imageLinks']['thumbnail'];
								?>



									<table id="settings" class="table table-bordered table-hover">
										<thead>
											<?php if ($title[$i]) { ?>
												<tr>
													<th>Title</th>
													<td><?= $title[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($author[$i]) { ?>
												<tr>
													<th>Author</th>
													<td><?= $author[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($category[$i]) { ?>
												<tr>
													<th>Category</th>
													<td><?= $category[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($publisher[$i]) { ?>
												<tr>
													<th>Publisher</th>
													<td><?= $publisher[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($publishedDate[$i]) { ?>
												<tr>
													<th>Published Date</th>
													<td><?= $publishedDate[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($isbn[$i]) { ?>
												<tr>
													<th>ISBN</th>
													<td><?= $isbn[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($description[$i]) { ?>
												<tr>
													<th style="vertical-align: top;">Description</th>
													<td>
														<div class="style-2" style="
                                                          overflow-y: auto;
                                                          min-height:20px;
														  max-height: 200px;">
															<?= $description[$i] ?></div>
													</td>
												</tr>
											<?php } ?>
											<?php if ($pageCount[$i]) { ?>
												<tr>
													<th>Page Count</th>
													<td><?= $pageCount[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($country[$i]) { ?>
												<tr>
													<th>Country</th>
													<td><?= $country[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($money[$i]) { ?>
												<tr>
													<th>Amount</th>
													<td><?= $money[$i] ?></td>
												</tr>
											<?php } ?>
											<?php if ($imgLink[$i]) { ?>
												<tr>
													<td colspan="2"><img src="<?= $imgLink[$i] ?>"></td>
												</tr>
											<?php } ?>
											<tr>
												<td colspan="2"><button type="submit" class="btn btn-info btn-lg" id="<?= $i; ?>" onclick="autoFill(this.id)">Auto Fill</button></td>
											</tr>

										</thead>
									</table>
							<?php
									$i++;
								}
							}
							?>
						</div>
					</section>
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-phone"></span>
							<h3>Just another section</h3>
							<span>blah!</span>
						</div>
					</section>
				</section>
			</div>
		</section>
	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- variables declared without var prefix mean that they are global
          I removed var because of warnings-->
	<script>
		title = <?php echo json_encode($title); ?>
	</script>
	<script>
		author = <?php echo json_encode($author); ?>
	</script>
	<script>
		category = <?php echo json_encode($category); ?>
	</script>
	<script>
		publisher = <?php echo json_encode($publisher); ?>
	</script>
	<script>
		publishedDate = <?php echo json_encode($publishedDate); ?>
	</script>
	<script>
		isbn = <?php echo json_encode($isbn); ?>
	</script>
	<script>
		description = <?php echo json_encode($description); ?>
	</script>
	<script>
		pageCount = <?php echo json_encode($pageCount); ?>
	</script>
	<script>
		money = <?php echo json_encode($money); ?>
	</script>
	<script>
		imgLink = <?php echo json_encode($imgLink); ?>
	</script>
	<script>
		function autoFill(i) {
			// donot remove the comments in this method if the id isnt predefined in html form

			document.getElementById('title').value = title[i];
			document.getElementById('author').value = author[i];
			document.getElementById('category').value = category[i];
			document.getElementById('publisher').value = publisher[i];
			document.getElementById('publishedDate').value = publishedDate[i];
			document.getElementById('isbn').value = isbn[i];
			document.getElementById('description').value = description[i];
			document.getElementById('pageCount').value = pageCount[i];
			document.getElementById('money').value = money[i];
			if (imgLink[i]) {
				document.getElementById('imgLink').src = imgLink[i];
				document.getElementById('imgLink').hidden = false;
			}
		}
	</script>
	<script>
    function addBook() {

      var formData = new FormData();
      formData.append('title1', document.getElementById('title').value);
      formData.append('author1', document.getElementById('author').value);
      formData.append('category1', document.getElementById('category').value);
      formData.append('publisher1', document.getElementById('publisher').value);
      formData.append('publishedDate1', document.getElementById('publishedDate').value);
      formData.append('isbn1', document.getElementById('isbn').value);
      formData.append('description1', document.getElementById('description').value);
      formData.append('pageCount1', document.getElementById('pageCount').value);
      formData.append('money1', document.getElementById('money').value);
      formData.append('imgLink1', document.getElementById('imgLink').src);
      formData.append('quantity1', document.getElementById('quantity').value);

      $.ajax({
        type: "POST",
        url: "addQuery.php",
        data: formData,
    type: 'POST',
    contentType: false, // Dont delete this (jQuery 1.6+)
    processData: false, // Dont delete this
    //Other options
});
      return false;
    }
  </script>

	<script>
		function autoBookId(category) {
			switch (category) {
				case "maths":
					document.getElementById('bookId').value = "MAT";
					break;
				case "science":
					document.getElementById('bookId').value = "SCI";
					break;
				case "technology":
					document.getElementById('bookId').value = "TECH";
					break;
				case "art":
					document.getElementById('bookId').value = "ART";
					break;
			}
		}
	</script>

</body>

</html>
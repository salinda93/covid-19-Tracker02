<!DOCTYPE html>
<html>
<head>
	<title>SL DevCode - COVID-19 Live stats...</title>
	<meta charset="utf-8">
	<meta name=description content="">
	<meta name=viewport content="width=device-width , initial-scale-1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>

<br>
  <center><h3>SL DevCode - COVID-19 Live Stats</h3></center>
<br>

  <?php
      $data = file_get_contents('https://api.kawalcorona.com/');
      $country = json_decode($data , true);

  ?>

	<section>
		<div class="container">

			<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No :</th>
      <th scope="col">Country</th>
      <th scope="col">Confirmed</th>
      <th scope="col">Recovered</th>
      <th scope="col">Deaths</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>

    <?php $i = 1; ?>
    <?php foreach ( $country as $row ) : ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $row['attributes']['Country_Region']; ?></td>
      <td><?= $row['attributes']['Confirmed']; ?></td>
      <td><?= $row['attributes']['Recovered']; ?></td>
      <td><?= $row['attributes']['Deaths']; ?></td>
      <td><?= $row['attributes']['Active']; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
   
  </tbody>
</table>

			
		</div>
	</section>

</body>
</html>
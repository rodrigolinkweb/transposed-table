<?php
	$connect = mysqli_connect("xxxxx", "xxxxx", "xxxxx", "xxxxx");
	$connect -> set_charset("utf8");
	$id = $_GET['id'];
	$query = "SELECT * FROM produtos";
	$result = mysqli_query($connect, $query);
?>
<?php include_once("header.php") ?>
<header id="header" id="home">
	<?php include_once("menu.php") ?>
	<style>
		.mytable {
			margin: 0 auto;
			background-color: #999;
			color: #FFF;
			font-weight: bold;
			font-size: 10px;
		}
	</style>
</header>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="pb-10 text-white">tabelão</h1>
			</div>
		</div>
	</div>
</section>

<section class="feature-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="mytable">
				<table width="100%" class="table table-striped table-bordered table-hover" id="comparativo">
					<thead>
						<tr style="background-color: #333;">
							<th>Nome</th>
							<th>Altitude</th>
							<th>Distância</th>
							<th>Velocidade</th>
							<th>Estabilidade</th>
							<th>Bateria</th>
							<th>Transmissão</th>
							<th>Tela</th>
							<th>Resolução</th>
							<th>Memória</th>
							<th>Frequência</th>
							<th>Bitrate</th>
							<th>Câmera</th>
							<th>Sensor</th>
							<th>Cor</th>
							<th>Dimensões</th>
							<th>Peso</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row=mysqli_fetch_array($result)) { ?>
							<tr>
								<td style="background-color: #333;"><?php echo $row['nome']; ?></td>
								<td><?php echo $row['altitude']; ?></td>
								<td><?php echo $row['distancia']; ?></td>
								<td><?php echo $row['velocidade']; ?></td>
								<td><?php echo $row['estabilidade']; ?></td>
								<td><?php echo $row['bateria']; ?></td>
								<td><?php echo $row['transmissao']; ?></td>
								<td><?php echo $row['tela']; ?></td>
								<td><?php echo $row['resolucao']; ?></td>
								<td><?php echo $row['memoria']; ?></td>
								<td><?php echo $row['frequencia']; ?></td>
								<td><?php echo $row['bitrate']; ?></td>
								<td><?php echo $row['camera']; ?></td>
								<td><?php echo $row['sensor']; ?></td>
								<td><?php echo $row['cor']; ?></td>
								<td><?php echo $row['dimensoes']; ?></td>
								<td><?php echo $row['peso']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<?php include_once("footer.php") ?>

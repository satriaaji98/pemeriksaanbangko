<div class="container-fluid" id="container-wrapper">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Data Pemeriksaan</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="./">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Data Pemeriksaan</li>
		</ol>
	</div>
	<div class="card mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary">Ubah Data Pemeriksaan</h6>
		</div>
		<div class="card-body">
			<form onsubmit="submit_update(); return false;">
				<input type="hidden" id="id_datapemrikp3" value="<?= $datadatapemrikp3->id_datapemrikp3 ?>">
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-3 col-form-label" >Nama WP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Nama" style="color: #1a1a1a; background-color:#ccfff2" id="namawp"
						value="<?= $datadatapemrikp3-> t_namawp?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">NPWP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="20"  placeholder="00.000.000.0-000.000" style="color: #1a1a1a; background-color:#ccfff2" id="npwp"
						value="<?= $datadatapemrikp3-> t_npwp?>" readonly>
					</div>
				</div>
                <div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Alamat</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Alamat " style="color: #1a1a1a; background-color:#ccfff2" id="alamatsurat"
						value="<?= $datadatapemrikp3-> t_alamatsurat?>" readonly>
					</div>
				</div>
                <div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Masa & Tahun Pajak</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" maxlength="13" placeholder="012021-122021" style="color: #1a1a1a; background-color:#ccffd9" id="masa_tahun_pajak"
						value="<?= $datadatapemrikp3-> t_masa_tahun_pajak?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Pemeriksaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a ; background-color:#ccffd9" id="jenispemeriksaan"
						value="<?= $datadatapemrikp3-> t_jenispemeriksaan?>" readonly>
						</input>
					</div>
				</div>
                <div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Kode Pemeriksaan</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a; background-color:#ccffd9" id="kodepemeriksaan"
						value="<?= $datadatapemrikp3-> t_kodepemeriksaan?>" readonly>
					</div>
				</div>

				<br>

				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Nomor LHP</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="LAP-XXX" style="color: #1a1a1a; background-color:#ccd9ff"
							id="nomorlhp" value="<?= $datadatapemrikp3-> t_nomorlhp?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#e8109d" class="col-sm-3 col-form-label"><b>Tanggal LHP</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control" placeholder="1182-xxxx" style="color: #1a1a1a; background-color:#ccd9ff"
							id="tanggallhp" value="<?= $datadatapemrikp3-> t_tanggallhp?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Sampai Seksi P3</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" placeholder="1182-xxxx; background-color:#ccd9ff"
							style="color: #1a1a1a; background-color:#ccd9ff" id="tanggalsampaip3" 
							value="<?= $datadatapemrikp3-> t_tanggalsampaip3?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Kirim ke Pelayanan</label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a; background-color:#ccd9ff"
							id="tanggalndkepelayanan" value="<?= $datadatapemrikp3-> t_tanggalndkepelayanan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#e8109d" class="col-sm-3 col-form-label"><b>Jatuh Tempo Pemeriksaan</b></label>
					<div class="col-sm-9">
						<input type="date" class="form-control"  style="color: #1a1a1a; background-color:#f9e6ff" id="jatuhtempo"
						value="<?= $datadatapemrikp3-> t_jatuhtempo?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">LHP Konversi</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="pakai koma contoh 0,3" style="color: #1a1a1a; background-color:#f3ccff"
							id="lhpkonversi" value="<?= $datadatapemrikp3-> t_lhpkonversi?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Status</b></label>
					<div class="col-sm-9">
						<select type="text" class="form-control" placeholder="sdfdsf" style="color: #1a1a1a ; background-color:#ffe6cc" id="status" value="<?= $datadatapemrikp3-> t_status?>">
						<option value="Perlengkapan_Berkas_&_Generate_NP2">Proses Perlengkapan Berkas & Generate NP2</option>
							<option value="SP2_terbit">Proses Pemeriksaan (SP2 Terbit)</option>
							<option value="LHP_terbit">LHP Terbit</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" style="color:#804200" class="col-sm-3 col-form-label"><b>Keterangan</b></label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="Proses Peminjaman Berkas, dll" style="color: #1a1a1a; background-color:#ffe6cc" id="keterangan"
						value="<?= $datadatapemrikp3-> t_keterangan?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label">Tanggal Update</label>
					<div class="col-sm-9">
						<input type="date" value="<?= date("Y-m-d"); ?>" class="form-control" style="color: #1a1a1a"
							id="tanggalupdatemonitoringlhp" readonly>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span>
							Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	function submit_update() {

		var nomorlhp = $('#nomorlhp').val();
		var tanggallhp = $('#tanggallhp').val();
		var tanggalsampaip3 = $('#tanggalsampaip3').val();
		var tanggalndkepelayanan = $('#tanggalndkepelayanan').val();
		var lhpkonversi = $('#lhpkonversi').val();
		var status = $('#status').val();
		var keterangan = $('#keterangan').val();
		var tanggalupdatemonitoringlhp = $('#tanggalupdatemonitoringlhp').val();

		if (

			status.length > 0
		)

		{
			$.ajax({
				url: "<?= base_url('monitoringlhpp3/update/' . $datadatapemrikp3->id_datapemrikp3) ?>",
				type: 'post',
				data: {
				
					nomorlhp: nomorlhp,
					tanggallhp: tanggallhp,
					tanggalsampaip3: tanggalsampaip3,
					tanggalndkepelayanan: tanggalndkepelayanan,
					lhpkonversi: lhpkonversi,
					status: status,
					keterangan: keterangan,
					tanggalupdatemonitoringlhp: tanggalupdatemonitoringlhp,
				},
				success: function (result) {
					var hasil = JSON.parse(result);
					swal_show(hasil);

					if (hasil['status_code'] == 200)
						setTimeout("window.history.back()", 800);

				}
			});

		}

	}
</script>
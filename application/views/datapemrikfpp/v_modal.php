<!-- Modal Center -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div class="modal fade" id="modal-import" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Import Data Pemeriksaan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formImport" data-parsley-valiedate class="form-horizontal form-label-left">
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">File Excel</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" name="file">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn-sm">
						<span class="fa fa-check-circle"></span>Import</button>
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
						<span class="fa fa-check-circle"></span>Batal</button>

				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#formImport').submit(function(e){
			e.preventDefault();
			$.ajax({
				url: "<?= base_url('datapemrikfpp/import_datapemrikfpp')?>",
				type: "post",
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				success: function(result){
					var hasil = JSON.parse(result);
					swal_show(hasil);

					if(hasil['status_code'] == 200)
						setTimeout("window.open(self.location, '_self');", 800);

				}

			});
		});
</script>
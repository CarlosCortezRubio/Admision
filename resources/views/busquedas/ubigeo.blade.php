<div class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" id="modal-ubigeo">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<strong>Seleccione la ubigaci&oacute;n geogr&aacute;fica</strong>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<table id="tblBusqUbigeo" class="table table-sm table-bordered table-hover">
						<thead>
							<tr>
								<th>Selec.</th>
								<th>Ubigeo</th>
								<th>Departamento</th>
								<th>Provincia</th>
								<th>Distrito</th>
							</tr>
						</thead>
						<tbody>
							@if(isset($ubigeo))
							@foreach($ubigeo as $tdata)
								<tr class="bg-light" style="font-size:12px;">
									<td>
										<button type="button" class="btn btn-primary btn-sm" onClick="setUbigeo(this);"
													data-id="{{ $tdata->codi_ubic_ubg }}"
													data-dpto="{{ $tdata->nomb_depa_ubg }}"
													data-prov="{{ $tdata->nomb_prov_ubg }}"
													data-dist="{{ $tdata->nomb_dist_ubg }}">Selec.</button>
									</td>
									<td>{{ $tdata->codi_ubic_ubg }}</td>
									<td>{{ $tdata->nomb_depa_ubg }}</td>
									<td>{{ $tdata->nomb_prov_ubg }}</td>
									<td>{{ $tdata->nomb_dist_ubg }}</td>
								</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
